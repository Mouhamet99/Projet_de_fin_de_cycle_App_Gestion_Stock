<?php

namespace App\Controller;

use App\Entity\Sorties;
use App\Form\SortieItemType;
use App\Form\SortiesType;
use App\Repository\SortieItemRepository;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MouvementStockController extends AbstractController
{
    /**
     * @Route("/mouvement/stock", name="mouvement_stock")
     */
    public function index(): Response
    {
        return $this->render('mouvement_stock/index.html.twig', [
            'controller_name' => 'MouvementStockController',
        ]);
    }

    /**
     * @Route("/mouvement/removals", name="stock_removals")
     * 
     * @param  SortieItemRepository $sortieRepo [description]
     * @return Response                          [description]
     */
    public function list_sortie_item(SortieItemRepository $sortieRepo): Response
    {
    	$sorties = $sortieRepo->findAll();

        return $this->render('mouvement_stock/sorties/index.html.twig', [
            'controller_name' => 'MouvementStockController',
        	'removal_list' => $sorties,
        ]);
    }

     /**
     * Gestion de la sortie des medicaments par collection
     * @Route("/mouvement/removals/new", name="stock_removals_new")
     *
     * @param  Request $r [description]
     * @return Response     [description]
     */
    public function new_removals(Request $r) : Response 
    {
        $sorties = new Sorties();

        $form_removals = $this->createForm(SortiesType::class,$sorties);
        $form_removals->handleRequest($r);

        if($form_removals->isSubmitted() && $form_removals->isValid() ) {
            $em = $this->getDoctrine()->getManager();
          
          
            foreach ($form_removals->get('sortieItems')->getData() as $sortieItem) {
                $stock = $sortieItem->getMedicament()->getStock();
                $qtt = $sortieItem->getQuantite();
                if($stock >= $sortieItem->getQuantite()) {
                  $sortieItem->setDateSortie(new \DateTime());
                  $sortieItem->getMedicament()->setStock($stock - $qtt);
                  $em->persist($sortieItem); 

                }else {
                    $dci = $sortieItem->getMedicament()->getDci();
                    $this->addFlash('danger',"Stock insuffisant du medicament $dci");
                    return $this->render('mouvement_stock/sorties/removalForm.html.twig',[
                        'controller_name' => 'MouvementStockController',
                        'form_removals' => $form_removals->createView(),
                    ]); 
                }
                //dd($sortieItem->getMedicament()->getStock(), $sortieItem->getQuantite());
                  //$sortieItem->setSortie($sorties);
                  //$sorties->addSortieItem($sortieItem);
            }
            $em->persist($sorties);


            $em->flush();
            $this->addFlash('success','Sortie effectue avec succes');
            return  $this->redirectToRoute('stock_removals');                                                                
        }

        return $this->render('mouvement_stock/sorties/removalForm.html.twig',[
            'controller_name' => 'MouvementStockController',
            'form_removals' => $form_removals->createView(),
        ]);
    }

 	/**
     * @Route("/mouvement/entries", name="stock_entries")
     */
    public function list_entree(): Response
    {
        return $this->render('mouvement_stock/entrees/index.html.twig', [
        ]);
    }
}

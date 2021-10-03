<?php

namespace App\Controller;

use App\Form\BonType;
use App\Entity\BondeCommande;
use App\Entity\BonDeLivraison;
use App\Entity\MedicItems;
use App\Form\FactureType;
use App\Form\ItembdcFormType;
use App\Form\ItemMedicFormType;
use App\Repository\BondeCommandeRepository;
use App\Repository\BonDeLivraisonRepository;
use App\Repository\MedicItemsRepository;
use App\Repository\MedicamentRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
  * Require these two role above for *every* controller method in this class.
  *
 */
class BonController extends AbstractController
{
    /**
     * @Route("/bon", name="bon")
     * @Security("is_granted('ROLE_MANAGER')")
     */
    public function index(BondeCommandeRepository $bdcRepo ): Response
    {
        $data = $bdcRepo->findAll();
        
        return $this->render('bon/index.html.twig', [
            'controller_name' => 'BonController',
            'bdc_list' => $data,
        ]);
    }


    /**
     * Page pour ajout de facture
     * 
     * @Route("/bon/new",name="bon_add")
     * @Route("/bon/{id}/edit",name="bon_edit")
     * @Security("is_granted('ROLE_MANAGER')")
     * 
     * @return Response
     */
    public function addEdit(Request $r,?BondeCommande $bdc) : Response
    {
        if($bdc == null) {
            $bdc = new BondeCommande();
            $bdc->setCreatedAt(new \DateTime());
            $totaux = 0;
        }

        $form= $this ->createForm(BonType::class,$bdc);
        $form->handleRequest($r);

        $em= $this->getDoctrine()->getManager();

        if ($form->isSubmitted() && $form->isValid() ) {
            foreach ($form->get('medicItems')->getData() as $itemData) {
                $totalBdc = $itemData->getQuantite() * $itemData->getPrixUnitaire();
                $itemData->setTotalBdc($totalBdc);
                $bdc->addMedicItem($itemData);

                $totaux += $totalBdc;
                $em->persist($itemData);
            } 

            $bdc->setCreatedAt(new \Datetime());    
            $bdc->setTotaux($totaux);    
            $bdc->setEtat("En attente");    

            $em->persist($bdc);
            $em->flush();

            $this ->addFlash('success',"Bon ajouté avec success");

            return $this->redirectToRoute('bon');
        }

        return $this->render('bon/newBon.html.twig', [
            'controller_name' => 'BonController',
            'form_bon' => $form->createView(),
        ]);
        
    }
    
    /**
     * Permet de supprimer une bon de commande 
     *
     * @Route("/bon/{id}/remove", name = "bon_remove")
     *
     * @Security("is_granted('ROLE_MANAGER')")
     * @param integer $id
     * @param Request $r
     * @return Response
     */
    public function remove(int $id, Request $r, BondeCommande $bdc = null) :Response
    {
        $em = $this->getDoctrine()->getManager();
            
        $bdc = $em->find(BondeCommande::class,$id);

        if ($r->isXmlHttpRequest() && $bdc ) {            
            $em->remove($bdc);
            $em->flush();

            $this->addFlash('success','Suppression effectué avec succes ');

            return $this->json([
                'suppresion' => 'success',
                'response' => true,
            ],200,['Content-Type', 'application/json']);
        }else { 
           
            if($bdc){
                $em->remove($bdc);
                $em->flush();
                $this->addFlash('success','BondeCommande supprimé avec succes');

                return $this->redirectToRoute('bon');
            } else {
                $this->addFlash('danger','Oups operation echoué medicament introuvable');

                return $this->json([
                       'suppresion' => 'failed',
                       'response' => 'no ajax request',
                   ],200,['Content-Type', 'application/json']);
            }
           
        } 
    
    }

    /**
     * Affichage d'un  bon de commande dans un modal
     *
     * @Route("/bon/show/{id}", name = "bon_show",requirements = {"id" = "\d+"})
     *
     *   * @Security("is_granted('ROLE_MANAGER') or is_granted('ROLE_DG')")
     */
    public function show (bondeCommande $bdc = null, int $id = null, BondeCommandeRepository $bdcRepo, Request $r) :Response
    {   
       
        if ($r->isXmlHttpRequest() ) { 
         
            $response =new JsonResponse();

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new HttpException(400, 'Invalid json');

                $response->setContent(json_encode([
                    'reponse' => false,
                    'bon_data' => 'invalid json',
                ])); 
            }

            if (!$id) {
              $response->setContent(json_encode([
                    'reponse' => false,
                    'bon_data' => 'invalid id',
                ])); 
            }

            if ($id) {
                $bdc = $this->bdcRender($id,$bdcRepo);  
            }

            $response->setContent(json_encode([
                'reponse' => true,
                'bon_data' => $bdc,
            ])); 

            $response->headers->set('Content-Type', 'application/json');
            return $response;
        } else
        {
            return new JsonResponse(json_encode([
                    'reponse' => false,
                    'bon_data' => 'null no json request',
            ])); 
        }
    }
    
    public function bdcRender (int $id, BondeCommandeRepository $bonRepo) 
    {
        $data = $bonRepo->find($id);

        if ($id && $data) {
            $data = $this->renderview('bon/bdcRender.html.twig',[        
                'items' => $data,
            ]);
        }
        
        return $data;
    }

    /**
     * Permet d'afficher un formulaire d'item de facture
     *
     *@Route("/medicItem", name="bon_medicItem")
     *
     */
    public function medicItem(Request $r,?MedicItems $mi) : Response
    {

        //$mi= new MedicItems();

        $form = $this->createForm(ItemMedicFormType::class,$mi);
        $form->handleRequest($r);

        return $this->render('/bon/medicItems.html.twig',[
           'form' => $form->createView(),
        ]);
    }

    /**
     * Permet d'etabir une facture /bon de livraison 
     *
     * @Route("/bon/{id}/facture", name="bon_join");
     *
     * @Security("is_granted('ROLE_MANAGER')")
     */
    public function join(BondeCommande $bdc, Request $r, MedicItemsRepository $medicRepo, MedicamentRepository $mr) : Response 
    {
        $em = $this->getDoctrine()->getManager();
        //si le bdc n'est encore lié à aucune facture 
        //on cree un nouveau bdc et la relie à elle

        //les items medic du bon de commande
        $medicItems = $bdc->getMedicItems()->getValues();

        $firstMedicItem = reset($medicItems);
        if( !$firstMedicItem) {
          dd("Le bon de commande ne contient aucun item");
        }else if($firstMedicItem->getMedicItemBdl() === null ) {
        //si le bon de commande est deja traité

            $bdl = new BonDeLivraison();
            foreach($medicItems as $key => $value) {
                $bdl->addMedicItem($value);                          
            }
           
            $bdl->setCreatedAt(new \Datetime());
            $bdc->setEtat("En cours");
            $em->persist($bdl);

        } else {
            $bdl = $firstMedicItem->getMedicItemBdl(); 
        }   
        $bdlForm= $this ->createForm(FactureType::class,$bdl);
     
    
        $bdlForm->handleRequest($r);  

        //si le formulaire est soumis
        if($bdlForm->isSubmitted() /*&& $bdlForm->isValid() */) {
            $totaux = 0;
            $total = 0;
            foreach ($bdlForm->get('bdlMedicItems')->getData() as $itemData) {

                $itemMedic = $medicRepo->find($itemData->getId());
                $medic =  $itemMedic->getItemMedicament();
                $medic->setStock( $itemData->getRecu() + $medic->getStock());
                $itemMedic->setRecu($itemData->getRecu());
                $itemMedic->setPrixAchat($itemData->getPrixAchat());
                $total = $itemData->getRecu() * $itemData->getPrixAchat();
                $itemMedic->setTotal($total);  

                $totaux += $total;

                $em->persist($itemData);
            } 
            $remise = $bdlForm->get('remise')->getData() ;
            $bdl->setNetAPayer($totaux * (100 - $remise)/100);
            $bdc->setEtat("Terminée");

            $em->persist($bdc);
            $em->persist($bdl);
            $em->flush(); 
            $this->addFlash('success', "Facture générer avec success");
           

            return $this->redirectToRoute('bon',[
              'controller_name' => 'FactureController',
            ]);
        }

        return $this->render('bon/bdl.html.twig', [
            'controller_name' => 'FactureController',
            'form_facture' => $bdlForm->createView(),
            'bdc' => $bdc,
        ]);
    }

    public function autoUpdateStock(Medicament $medic,int $n)
    {
        if ($medic) {
            $medic->setStock($n + $medic->getStock());
        }
    }

   
}

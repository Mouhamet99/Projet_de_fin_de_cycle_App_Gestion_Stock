<?php

namespace App\Controller;
use App\Entity\Fournisseur;
use App\Form\ProviderFormType;
use App\Repository\FournisseurRepository;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FournisseurController extends AbstractController
{
    /**
     * @Route("/providers", name="fournisseurs")
     * @param FournissseurRepository $fourRepo
     * @return Response
     */
    public function index(FournisseurRepository $fourRepo): Response
    {
		$fournisseurs = $fourRepo->findAll();

        return $this->render('fournisseur/index.html.twig', [
            'controller_name' => 'FournisseurController',
            'provider_list' => $fournisseurs,
        ]);
    }

     /**
     * @Route("/providers/{id}/edit", name="provider_edit")
     * @Route("/provider/new", name="provider_add")
     * 
     *
     * @param Request $request
     * @param FournisseurRepository $fourRepo
     * @param int $id
     * @return Response
     */
    public function addEdit(Fournisseur $fournisseur=null,Request $request,FournisseurRepository $fourRepo): Response
    {  
    	if(!$fournisseur) {
    		$fournisseur = new Fournisseur();
    	}
    	$form = $this->createForm(ProviderFormType::class,$fournisseur);
        $form ->handleRequest($request);
          
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fournisseur);
            $em->flush();
            $this->addFlash('success', 'Fournisseur modifié avec success!');
            return  $this->redirectToRoute('fournisseurs'); 
        } 
     	
		return  $this->render('fournisseur/providerForm.html.twig',[
            'controller_name' => 'FournisseurController',
			'editMode' => $fournisseur->getId() !== null, 
			'providerForm' => $form->createView(),
		]);
   

        
    }


    /**
     * @Route("/providers/{id}/show", name="provider_show")
     * 
     *
     * @param Request $request
     * @param FournisseurRepository $fourRepo
     * @param int $id
     * @return Response
     */
    public function show(Fournisseur $fourn=null,Request $request,FournisseurRepository $fourRepo,int $id = null): Response
    {  
    	
        if ($r->isXmlHttpRequest() ) { 
         
            $response =new JsonResponse();

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new HttpException(400, 'Invalid json');

                $response->setContent(json_encode([
                    'reponse' => false,
                    'provider_data' => 'invalid json',
                ])); 
            }

            if (!$id) {
              $response->setContent(json_encode([
                    'reponse' => false,
                    'provider_data' => 'invalid id',
                ])); 
            }else {
                $fournisseur = $this->bdcRender($id,$fourRepo);  
            }

            $response->setContent(json_encode([
                'reponse' => true,
                'provider_data' => $fournisseur,
            ])); 

            $response->headers->set('Content-Type', 'application/json');
            return $response;
        } else
        {
            return new JsonResponse(json_encode([
                    'reponse' => false,
                    'provider_data' => 'null no json request',
            ])); 
        }
   

        
    }


    /**
     * @Route("/providers/{id}/remove", name="provider_remove")
     * @param Fournisseur $fournisseur
     * @return Response
     */
    public function remove(Fournisseur $fournisseur) :Response
    {
    	if($fournisseur) {
    		$manager = $this->getDoctrine()->getManager();
    		$manager->remove($fournnisseur);
    		$manager->flush();
    		$this->addFlash('danger','Fournisseur supprimé avec success');
    		return $this->redirectToRoute('fournisseurs');
    	}
    }

}

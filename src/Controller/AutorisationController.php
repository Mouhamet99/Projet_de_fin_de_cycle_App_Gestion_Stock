<?php

namespace App\Controller;
use App\Entity\BondeCommande;
use App\Repository\BondeCommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
  * Require ROLE_DG for *every* controller method in this class.
  *
  * @IsGranted("ROLE_DG")
 * 
 */
class AutorisationController extends AbstractController
{
    /**
     * @Route("/autorisation", name="autorisation")
     */
    public function index(BondeCommandeRepository $bdcRepo): Response
    {
        $data = $bdcRepo->findBy([ 
          'etat' => 'En attente'
        ]);
        return $this->render('autorisation/index.html.twig', [
            'controller_name' => 'AutorisationController',
            'bdc_list' => $data
        ]);
    }

   /**
     * @Route("/allow/{id}/Commande", name="bon_allow")
     */
    public function autoriser(Request $r, BondeCommande $bdc): Response
    {
        if($bdc && $bdc->getEtat() === 'En attente') {
          $bdc->setEtat('En cours');
          $em=$this->getDoctrine()->getManager();
          $em->persist($bdc);
          $em->flush();
          $this->addFlash('success', 'Bon de commande autoriser avec success');
        }else {
          $this->addFlash('danger', 'une erreur est survenu lors de l\'autorisation la commande');
        }

        return $this->redirectToRoute('autorisation');
    }


  /**
     * @Route("/reject/{id}/Commande", name="bon_reject")
     */
    public function rejeter(Request $r, BondeCommande $bdc): Response
    {
        if($bdc && $bdc->getEtat() === 'En attente') {
          $bdc->setEtat('Non Autorisé');
          $em=$this->getDoctrine()->getManager();
          $em->persist($bdc);
          $em->flush();
          $this->addFlash('success', 'Bon de commande rejeter avec success');
        }else {
          $this->addFlash('danger', 'une erreur est survenu lors du rejet la commande');
        }

        return $this->redirectToRoute('autorisation');
    }
}

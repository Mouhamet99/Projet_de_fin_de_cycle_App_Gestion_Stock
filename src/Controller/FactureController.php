<?php

namespace App\Controller;
use App\Entity\BonDeLivraison;
use App\MesServices\fpdf\PDF_Invoice;
use App\Repository\BonDeLivraisonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class FactureController extends AbstractController
{
    /**
    * Gestion des impression de facture
    * @Route("/facture/pdf", name="facture_print")
    */
    public function pdfPrint(Request $r) 
    {
        $pdf = new PDF_Invoice( 'P', 'mm', 'A4' );
        $pdf->AddPage();
        $pdf->addSociete( "CLINIQUE YAYE MARIE",
                          "Keur Massar Unite 15 N° 391\n" .
                          "Tel: 33 837 93 64 / 33 878 31 51\n".
                          "Email: cliniqueyayemarie@yahoo.fr"
                           );
        $pdf->fact_dev( "Facture ", "FA0004" );
        $pdf->temporaire( "Facture" );
        $pdf->addDate( "03/04/2021");
        $pdf->addClient("Bamba");
        $pdf->addPageNumber("1");
        $pdf->addClientAdresse("Keur Massar\nM. Dieye\n2eme etage\nU33, Cite Ainoumady");
        $pdf->addReglement("Comptant à reception de facture");
        $pdf->addEcheance("03/04/2021");
        $pdf->addNumBdc("BDC0002");
        $cols=array( "REFERENCE"    => 23,
                     "DESIGNATION"  => 78,
                     "QUANTITE"     => 22,
                     "P.U. HT"      => 26,
                     "MONTANT H.T." => 30,
                     "TVA"          => 11 );
        $pdf->addCols( $cols);
        $cols=array( "REFERENCE"    => "L",
                     "DESIGNATION"  => "L",
                     "QUANTITE"     => "C",
                     "P.U. HT"      => "R",
                     "MONTANT H.T." => "R",
                     "TVA"          => "C" );
        $pdf->addLineFormat( $cols);
        $pdf->addLineFormat($cols);

        $y    = 109;
        $line = array( "REFERENCE"    => "REF1",
                       "DESIGNATION"  => "Carte Mère MSI 6378\n" .
                                         "Processeur AMD 1Ghz\n" .
                                         "128Mo SDRAM, 30 Go Disque, CD-ROM, Floppy, Carte vidéo",
                       "QUANTITE"     => "1",
                       "P.U. HT"      => "600.00",
                       "MONTANT H.T." => "600.00",
                       "TVA"          => "1" );
        $size = $pdf->addLine( $y, $line );
        $y   += $size + 2;

        $line = array( "REFERENCE"    => "REF2",
                       "DESIGNATION"  => "Câble RS232",
                       "QUANTITE"     => "1",
                       "P.U. HT"      => "10.00",
                       "MONTANT H.T." => "60.00",
                       "TVA"          => "1" );
        $size = $pdf->addLine( $y, $line );
        $y   += $size + 2;

        //$pdf->addCadreTVAs();
                
        // invoice = array( "px_unit" => value,
        //                  "qte"     => qte,
        //                  "tva"     => code_tva );
        // tab_tva = array( "1"       => 19.6,
        //                  "2"       => 5.5, ... );
        // params  = array( "RemiseGlobale" => [0|1],
        //                      "remise_tva"     => [1|2...],  // {la remise s'applique sur ce code TVA}
        //                      "remise"         => value,     // {montant de la remise}
        //                      "remise_percent" => percent,   // {pourcentage de remise sur ce montant de TVA}
        //                  "FraisPort"     => [0|1],
        //                      "portTTC"        => value,     // montant des frais de ports TTC
        //                                                     // par defaut la TVA = 19.6 %
        //                      "portHT"         => value,     // montant des frais de ports HT
        //                      "portTVA"        => tva_value, // valeur de la TVA a appliquer sur le montant HT
        //                  "AccompteExige" => [0|1],
        //                      "accompte"         => value    // montant de l'acompte (TTC)
        //                      "accompte_percent" => percent  // pourcentage d'acompte (TTC)
        //                  "Remarque" => "texte"              // texte
        $tot_prods = array( array ( "px_unit" => 600, "qte" => 1, "tva" => 1 ),
                            array ( "px_unit" =>  10, "qte" => 1, "tva" => 1 ));
        $tab_tva = array( "1"       => 19.6,
                          "2"       => 5.5);
        $params  = array( "RemiseGlobale" => 1,
                              "remise_tva"     => 1,       // {la remise s'applique sur ce code TVA}
                              "remise"         => 0,       // {montant de la remise}
                              "remise_percent" => 10,      // {pourcentage de remise sur ce montant de TVA}
                          "AccompteExige" => 1,
                              "accompte"         => 0,     // montant de l'acompte (TTC)
                              "accompte_percent" => 15,    // pourcentage d'acompte (TTC)
                          "Remarque" => "Avec un acompte, svp..." );

        //$pdf->addTVAs( $params, $tab_tva, $tot_prods);
        $pdf->addCadreEurosFrancs();
    
        $data = $pdf->Output('I','facture.pdf',true);
   
        print $data;
        exit(1);


    }

    /**
    * Page dacuueil des factures
    * @Route("/facture", name="facture")
    */
    public function index(BonDeLivraisonRepository $factRepo) 
    {
        $factures = $factRepo->findAll();
        return $this->render('facture/index.html.twig',[
            'controller_name' => 'FactureController',
            'facture_list' => $factures,
        ]);

    }


    /**
     * Gestion des facture
		return $this->render('facture/index.html.twig',[
			'controller_name' => 'FactureController',
			'facture_list' => $factures,
		]);
		
    }

     /**
     * Affichage des inf liés à une facture sur un modal
     *
     * @Route("/facture/show/{id}", name = "facture_show",requirements = {"id" = "\d+"})
     * 
     * @param BonDeLivraison $bdl
     * @param integer $id
     * @param BonDeLivraisonRepository $bdlRepo
     * @param Request $r
     * @return Response
     */
    public function show (BonDeLivraison $bdl = null, int $id = null, BonDeLivraisonRepository $bdlRepo, Request $r) :JsonResponse
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
                $bdl = $this->bdlRender($id,$bdlRepo);  
            }

            $response->setContent(json_encode([
                'reponse' => true,
                'bon_data' => $bdl,
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

	public function bdlRender (int $id, BonDeLivraisonRepository $bdlRepos) 
    {
        $data = $bdlRepos->find($id);

        if ($id && $data) {
            $data = $this->renderview('facture/bdlRender.html.twig',[        
                'items' => $data,
            ]);
        }
        
        return $data;
    }

   
}

<?php

namespace App\Controller;

use App\Form\MedicType;
use App\Entity\Medicament;
use App\Entity\SortieItem;
use App\Form\SortieItemType;
use App\Form\SortiesType;
use App\Repository\MedicamentRepository;
use App\Repository\BonDeLivraisonRepository;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\Form\Test\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
/**
  * Require ROLE_MANAGER for *every* controller method in this class.
  *
  * @IsGranted("ROLE_MANAGER")
 * 
 */
class StockController extends AbstractController
{
    /**
     * @Route("/stock/home", name = "stock0",defaults = {"id": null,})
     * @Route("/stock/edit/{id}", name = "stock", requirements = {"id"="\d+"}))
     * @Route("/stock/removal/new", name = "stock_removal_on_modal")
     *
     * @param integer $id
     * @param Request $request
     * @param MedicamentRepository $mr
     * @param Medicament $medic
     * @return Response
     */
    public function index(?int $id,Request $request, MedicamentRepository $mr): Response
    {
        $htmlForEdit = null;
        $medic = new Medicament();

        $formAdd = $this ->createForm(MedicType::class,$medic);
        $htmlAdd =  $this->renderView('stock/_form.html.twig', [
                'Medicform' => $formAdd->createView(),
                'editMode' => false,
                'Removalform' =>null,
                'RemovalMode' => false,
        ]);
        
        if ($id){
            $htmlForEdit =$this->editView($id,$request);           
        }

        if(false === $htmlForEdit){
            $htmlForEdit = null;       
        }

        $med = $mr ->findBy(["etat" =>"En stock"]);
        $volume =  0;
        $valeur =  0;
        $critique = 0;
        foreach ($med as $key => $value) {
            $volume += $value->getStock();
            $valeur += $value->getPv() * $value->getStock();
            if($value->getMin() >= $value->getStock() )
                $critique++;
        }
        
        
        return $this->render('stock/index.html.twig', [
            'controller_name' => 'StockController',
            'medicaments' => $med, 
            'formAdd'=> $htmlAdd,
            'id'=> $id,
            'formedit'=> $htmlForEdit ,
            'RemovalMode' => false,
            'removal_view' => '',
            'volume' => $volume,
            'valeur' => $valeur,
            'critique' => $critique,    
            'en_commande'=>$this->encommande()
        ]);
    }

    /**
     * Undocumented function
     *@Route("/stock/export",name="stock_export")
     *   
     * @param MedicamentRepository $mr
     * @return void
     */
    public function export(MedicamentRepository $mr)
    {
        $list = [];
        $spreadsheet = new Spreadsheet();
        $med=$mr->findAll();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setTitle('Medic List');

        $sheet->getCell('A1')->setValue('DCI');
        $sheet->getCell('B1')->setValue('Prix d\'achat');
        $sheet->getCell('C1')->setValue('Dosage');

        foreach ($med as $m) {
            $list[] = [
                $m->getDci(),
                $m->getPa(),
                $m->getDosage()
            ];
        }

        // Increase row cursor after header write
        $sheet->fromArray($list,null, 'A2', true);
        

        $writer = new Xlsx($spreadsheet);

        $writer->save('helloworld.xlsx');

        dd($writer);
        
        return $this->redirectToRoute('stock0');
    }
    /**
     * Undocumented function
     * 
     *@Route("stock/csv" ,name="stock_test_csv")

     * @return void
     */
    public function testCsv()
    {
        $myVariableCSV = "Nom; Prenom; Age;\n";
        $myVariableCSV .= "John; Doe; 26;\n";
        $myVariableCSV .= " ; ; ; \n";
        $myVariableCSV .= "Chuck; Norris; 80;\n";

        return new Response(
            $myVariableCSV,
            200,
            [
                'Content-Type' => 'application/vnd.ms-excel',
                "Content-disposition" => "attachment; filename=Tutoriel.csv"
            ]
        );
    }


    public function editView(int $id,Request $request)
    {
        $htmlForEdit = null;
        $em= $this->getDoctrine()->getManager();
        $medicToEdit = $em->find(Medicament::class,$id);

        if($medicToEdit){
            $formEdit = $this ->createForm(MedicType::class,$medicToEdit);
            $formEdit->handleRequest($request);

            $htmlForEdit =  $this->renderView('stock/_form.html.twig', [
                'Medicform' => $formEdit->createView(),
                'medic' => $medicToEdit,
                'editMode' => true,     
                'Removalform' => null,
                'RemovalMode' => false,    
            ]);

            return $htmlForEdit;
        }else{
                throw $this->createNotFoundException(
                  'Pas de produit trouvé pour l\id'.$id
                 );
                 
                 return false;
        }
    }
 
    /**
     * @Route("/stock/show/{id}",name="stock_show")
     *
     * @param integer $id
     * @param Request $r
     * @param MedicamentRepository $mr
     * @return void
     */
    public function show(int $id,Request $r,MedicamentRepository $mr){
       
        $data = json_decode($r->getContent(), true);
        $data=$r->toArray() ;
        $i =0;  
        foreach($data as $value) {  
        $i=intval($value);    
        }  
        if($mr->find($i)){
            $medic = $mr->find($i);
            $form= $this ->createForm(MedicType::class,$medic);
            $html =  $this->render('stock/_form.html.twig', [
                'Medicform' => $form->createView(),
                'medic' => $medic,
                'editMode' => $medic->getId() !== null,
             ]);
            return new Response($html);
              return new JsonResponse(array(
                  'message' => 'Success!', 'medic' => $medic,
                  'response' => true, 
                ), 200);
        }
        return new JsonResponse(array(
              'message' => 'error!',
              'response'=> false
            ),
        400);


    }

 
    /**
     * @Route("/stock/{id}/remove", name="stock_remove" )
     *
     * @Method({"POST"})

     * @param Request $request
     * @param MedicamentRepository $mr
     * @param Medicament $medic
     * @param int  $id
     * @return Response
     */
    public function remove(int $id,Medicament $medic = null,Request $request) : Response
    {   
        $em = $this->getDoctrine()->getManager();
        if ($request->isXmlHttpRequest() ) {            
            $medic=$request->attributes->get('medic');
        
            $em->remove($medic);
            $em->flush();
            $flash = $this->addFlash('success','Suppresion effectuée avec succes ');
            $reponse = new JsonResponse;
            $reponse->setContent(json_encode([
                'suppresion' => 'success',
                'renduForEdit' => null,
                'flash' => $flash,
              
            ],200,['Content-Type', 'application/json']));
            return $reponse;
       // $flash = $this->addFlash('erreurArchivage','Le systeme a rencontré une erreur');
        }else {
            if($medic) {
                $em->remove($medic);
                $em->flush();
                $flash = $this->addFlash('success','Suppresion effectuée avec succes ');    
            } else {
            }    
            return $this->redirectToRoute('stock0');
        }  
    

        
    }

     /**
     * @Route("/stock/{id}/archive", name="stock_archive" )
     *
     * @Method({"POST"})

     * @param Request $request
     * @param MedicamentRepository $mr
     * @param Medicament $medic
     * @param int  $id
     * @return Response
     */
    public function archiver(int $id,Medicament $medic = null,Request $request): Response
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isXmlHttpRequest() ) {            
            $medic=$request->attributes->get('medic');
        
            $medic->setEtat('Hors Stock');
            $em->flush();
            $flash = $this->addFlash('success','Archivage effectuée avec succes ');
            $reponse = new JsonResponse;
            $reponse->setContent(json_encode([
                'suppresion' => 'success',
                'renduForEdit' => null,
                'flash' => $flash,
              
            ],200,['Content-Type', 'application/json']));
            return $reponse;
         
        }else {
            if($medic) {

            $medic->setEtat('Hors Stock');
            $em->flush();
            $flash = $this->addFlash('success','Archivage effectuée avec succes ');    
            } else {
                $flash = $this->addFlash('danger','Le systeme a rencontré une erreur');
            }    
            return $this->redirectToRoute('stock0');
        }
    }
    /**
     * @Route("/stock/{id}/edit", name="stock_edit")
     * @Route("/stock/new", name="stock_add")
     * 
     *
     * @param Request $request
     * @param MedicamentRepository $mr
     * @param int $id
     * @return Response
     */
    public function addEdit(?Medicament $medic,Request $request,MedicamentRepository $mr,?int $id): Response
    {  

        if ($request->isXmlHttpRequest() ) { 
            if($id){
                $htmlForEdit =$this->editView($id, $request);
            }

            $medic=$request->attributes->get('medic');
            $response =new JsonResponse();
            $response->setContent(json_encode([
                'response' => true,
                'form' => 'ok',
                'renduForEdit' => $htmlForEdit,
                'medic' => $medic,
            ])); 
            $response->headers->set('Content-Type', 'application/json');
            return $response;
            
        } else { 
            if(!$medic){
                $medic = new Medicament();
            }
            $form = $this ->createForm(MedicType::class, $medic);
            $form ->handleRequest($request);
        } 
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $medic->setEtat('En stock');
            $em->persist($medic);
            $em->flush();
            $this->addFlash('success', 'Changement effectué avec success!');
            
            return  $this->redirectToRoute('stock0'); 
        } 
     
         return  $this->redirectToRoute('stock',[
              'id'=> $medic->getId() ,
         ]); 
   

        
    }

    /**
     * @Route("/stock/{id}/removal", name="sr")
     *
     * @param Request $r
     * @return Response
     */
    public function removal(request $r,Medicament $medic,MedicamentRepository $mr): Response 
    {   
        
        if ($r->isXmlHttpRequest() ) { 

            $medic=$request->attributes->get('medic');
            $response =new JsonResponse();
            $response->setContent(json_encode([        
            ])); 
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
        $sortie = new SortieItem();
        $sortie->setMedicament($medic);

        $form_sortie=$this->createForm(SortieItemType::class,$sortie);
        $form_sortie->handleRequest($r);
        $removalView =  $this->renderView('stock/_form.html.twig', [
                'Removalform' => $form_sortie->createView(),
                'RemovalMode' => true, 
                'Medicform' =>null,
                'editMode' => false,        
            ]);
        
        return $this->redirectToRoute('stock_removal_on_modal');
    
    }

    /**
     * Article(s) en commande 
     */
    public function encommande()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $conn = $entityManager->getConnection();
        $sql = '
            SELECT count(id) as c FROM medic_items m
            WHERE m.prix_achat is null
            ';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return intval( $stmt->fetchAllAssociative()[0]['c'] );
    }

}

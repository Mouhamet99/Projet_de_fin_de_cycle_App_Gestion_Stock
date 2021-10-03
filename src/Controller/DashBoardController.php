<?php

namespace App\Controller;
use App\Repository\MedicamentRepository;
use App\Repository\MedicItemsRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class DashBoardController extends AbstractController
{
    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function index(ChartBuilderInterface $chartBuilder): Response
    {
    	$MediumConsumptionByDay = $chartBuilder->createChart(Chart::TYPE_BAR);
    	$EvoltionEntreeSortieChart = $chartBuilder->createChart(Chart::TYPE_LINE);
    	
    	$ActiveMedicChart = $chartBuilder->createChart(Chart::TYPE_DOUGHNUT);
    	$ActiveMedicByCatChart = $chartBuilder->createChart(Chart::TYPE_BAR);
    	$consumptionByServiceChart = $chartBuilder->createChart(Chart::TYPE_PIE);
    	$FinancialConsServChart = $chartBuilder->createChart(Chart::TYPE_PIE);
    	$ConsServChart = $chartBuilder->createChart(Chart::TYPE_PIE);
    	$consumptionByCategoryChart = $chartBuilder->createChart(Chart::TYPE_PIE);
        $MediumConsumptionByDay->setData([
			'labels' => ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'],
			'datasets' => [
				[
					'label' => 'consommation moyenne',
					'backgroundColor' => 'rgba(60,141,188,0.9)',
					'borderColor' => 'rgba(60,141,188,0.8)',
					'pointRadius' => false,
					'pointColor' => '#3b8bba',
					'pointStrokeColor' => 'rgba(60,141,188,1)',
					'pointHighlightFill' => '#fff',
					'pointHighlightStroke' => 'rgba(60,141,188,1)',
					'data' => [228, 148, 130, 175, 160, 190, 210],
					"beginAtZero" => true,
					'backgroundColor' => ['#f56954', '#00a65a','#00ffff', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
				],
			],
			'options' =>[
				'responsive'=> true,
				'maintainAspectRatio'=> false,
				'datasetFill'=> false
			],

        ]);
		$ActiveMedicByCatChart->setData([
			 	'labels' => [
			 		'Oral', 'Antiseptique', 'Vaccin/serrum', 'Injectable',
			 		 'Soluté de Perfusion','Desinfectant' ],
					'datasets' => [
						[
							
							'label' => 'A',
							'backgroundColor' => 'rgba(60,141,188,0.9)',
							'borderColor' => 'rgba(60,141,188,0.8)',
							'pointRadius' => false,
							'pointColor' => '#3b8bba',
							'pointStrokeColor' => 'rgba(60,141,188,1)',
							'pointHighlightFill' => '#fff',
							'pointHighlightStroke' => 'rgba(60,141,188,1)',
							'data' => [228, 148, 130, 175, 190, 160, 210],
							'backgroundColor' => ['#f56954', '#00a65a','#00ffff', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
						],
						[
							'label' => 'B',
							'backgroundColor' => 'rgba(210, 214, 222, 1)',
							'borderColor' => 'rgba(210, 214, 222, 1)',
							'pointRadius' => false,
							'pointColor' => 'rgba(210, 214, 222, 1)',
							'pointStrokeColor' => '#c1c7d1',
							'pointHighlightFill' => '#fff',
							'pointHighlightStroke' => 'rgba(220,220,220,1)',
							'data' => [65, 59, 80, 81, 56, 55, 40],
						],
					],
				
					'options' => [
						'responsive'=> true,
						'maintainAspectRatio'=> false,
						'scales' => [
							'xAxes' => [
								'stacked' => true,
							],
							'yAxes' => [
								'stacked' => true,
								'ticks' => [
									"beginAtZero" => true,
									'min' => 0
								]
							],
						]
					],

		        ]);

        $EvoltionEntreeSortieChart->setData([
			'labels' => ['1er', '2', '3', '4', '4', '6', '7','8','9','10',
							'11','12','13','14','15','16','17','19','20',
							'21','22','23','24','25','26','27','29','30'
						],
			'datasets' => [
				[
					'label' => 'Sortie',
					'backgroundColor' => 'rgba(60,141,188,0.9)',
					'borderColor' => 'rgba(60,141,188,0.8)',
					'pointRadius' => false,
					'pointColor' => '#3b8bba',
					'pointStrokeColor' => 'rgba(60,141,188,1)',
					'pointHighlightFill' => '#fff',
					'pointHighlightStroke' => 'rgba(60,141,188,1)',
					'data' => [190, 148, 120, 105, 170, 140, 125, 150, 30, 60,
							   160, 125, 300, 120, 174, 98, 154, 67, 140,165,
							   167, 142, 156, 166, 180, 148, 158, 30, 250, 260],
					 
				],
				[
					'label' => 'Entree',
					'backgroundColor' => 'rgba(210, 214, 222, 1)',
					'borderColor' => 'rgba(210, 214, 222, 1)',
					'pointRadius' => false,
					'pointColor' => 'rgba(210, 214, 222, 1)',
					'pointStrokeColor' => '#c1c7d1',
					'pointHighlightFill' => '#fff',
					'pointHighlightStroke' => 'rgba(220,220,220,1)',
			     	'data' => [  0, 0, 156, 0, 0, 0, 0, 0, 400, 0,
				   				0, 0, 0, 0, 0, 140, 0, 300, 0, 0,
							   0, 0, 0, 0, 0, 0, 0, 0, 0, 340],
				],
			],
        ]);

        $ActiveMedicChart->setData([
        	'labels' => [
        		'Betadine jaune', 'Adrenaline', 'Becosyne', 'Fleming', 'ACILOC', 'Abaisse langue adulte', 
        		'Betamed', 'CLAMYDIA', 'Dislep','FLAGYL','Autres'],
			'datasets' => [
				[
					'data' => [700, 650, 600, 500, 400, 300, 200, 150, 100, 50, 25],
					'backgroundColor' => [
						'#6610f2', '#17a2b8',' #ffc107', '#6f42c1', '#20c997',
						'#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
				],
			],
        ]);
        $ConsServChart->setData([
        	'labels' => ['GYNECO', 'ODONTO', 'CARDIO', 'DERMATO', 'LABO', 
        				'URL', 'UROLOGIE', 'DENTISTE'],
			'datasets' => [
				[
					'data' => [320, 200, 520, 700, 450, 300, 110, 150],
					'backgroundColor' => [
						'#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de',
						 '#ffc107', '#6f42c1', '#20c997'],
				],
			],
        ]);

        $FinancialConsServChart->setData([
        	'labels' => ['GYNECO', 'ODONTO', 'CARDIO', 'DERMATO', 'LABO', 
        				'URL', 'UROLOGIE', 'DENTISTE'],
			'datasets' => [
				[
					'data' => [700.000,400.000, 500.000, 200.000, 450.000, 300.000, 210.000, 900.00],
					'backgroundColor' => [
						'#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de',
						' #ffc107', '#6f42c1', '#20c997'],
				],
			],
        ]);

        $consumptionByCategoryChart->setData([
        	'labels' => ['Oral', 'Antiseptique', 'Vaccin/serrum', 'Injectable', 'Soluté de Perfusion','Desinfectant' ],
			'datasets' => [
				[
					'data' => [700, 500, 400, 600, 300, 100],
					'backgroundColor' => ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
				],
			],
        ]);
        return $this->render('dash_board/index.html.twig', [
            'controller_name' => 'DashBoardController',
            'ConsMoyParJour' => $MediumConsumptionByDay,
            'EntreeSortie' => $EvoltionEntreeSortieChart,
            'PlusActif' => $ActiveMedicChart,
            'PlusActifParCat' => $ActiveMedicByCatChart,
            'ParCategorie' => $consumptionByCategoryChart,
            'ParService' => $ConsServChart,
            'DepenseParService' => $FinancialConsServChart,
        ]);
      
    }

    /**
     * [bestActive description]
     * @Route("/bestActive")
     * @return [type] [description]
     */
    public function bestActive(){
		$entityManager = $this->getDoctrine()->getManager();
        $conn = $entityManager->getConnection();

        $sql =' 
			SELECT DISTINCT m.dci,s.medicament_id,sum(s.quantite),count(s.quantite) q
			FROM medicament m , sortie_item s
			WHERE s.medicament_id = m.id and m.etat = "En Stock"
			Group by m.dci
			ORDER BY q
			LIMIT 10
		';

		
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        dd($stmt->fetchAllAssociative());
        return intval($stmt->fetchAllAssociative()[0]['n'] );
    }

    public function lastTenRemoval() {

    }
    public function consumption() {

    }
    public function consumptionRepartatition() {
    	
    }
	public function bestMedicByService() {

    }
    public function finalMediumConsumption() {

    }
    public function removalEvelution() {
		$entityManager = $this->getDoctrine()->getManager();
        $conn = $entityManager->getConnection();
    	$sql ='
    	SELECT DATE(date_sortie), DAYNAME(date_sortie) day, SUM(quantite) FROM  sortie_item GROUP BY day
    	';
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        dd($stmt->fetchAllAssociative());
        //return intval( $stmt->fetchAllAssociative()[0]['c'] );
    }
    /**
     * [usageByCategory description]
     * @Route("/bycategory")
     * @return [type] [description]
     */
    public function usageByCategory() {
     	$entityManager = $this->getDoctrine()->getManager();
        $conn = $entityManager->getConnection();
        $sql = '
            SELECT count(si.id) as n, med.categorie as c FROM sortie_item si,medicament med
			GROUP BY c';

        $stmt = $conn->prepare($sql);
        $stmt->execute();
        dd($stmt->fetchAllAssociative());
        //return intval( $stmt->fetchAllAssociative()[0]['c'] );
    }

  
	public function usageByService(MedicamentRepository $medRepo, MedicItemsRepository $mediItem) {
		$entityManager = $this->getDoctrine()->getManager();
        $conn = $entityManager->getConnection();

        $sql = '
            SELECT service s, count(id)  n FROM sortie_item m
			GROUP BY service';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        dd($stmt->fetchAllAssociative());
        return intval($stmt->fetchAllAssociative()[0]['n'] );
    }

    public function test(MedicamentRepository $medRepo) {
    	$labels = [];
        $datasets = [];
        $repo = $medRepo->findAll();
        foreach($repo as $data){
            $labels[] = $data->getDate()->format('d-m-Y');
            $datasets[] = $data->getNumber();
        }
        $chart = $chartBuilder->createChart(Chart::TYPE_LINE);
        $chart->setData([
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'My First dataset',
                    'backgroundColor' => 'rgb(255, 99, 132)',
                    'borderColor' => 'rgb(255, 99, 132)',
                    'data' => $datasets,

                ]
            ],
        ]);
     	dd($chart);
    }

}


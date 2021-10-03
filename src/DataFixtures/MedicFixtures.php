<?php

namespace App\DataFixtures;

use App\Entity\Medicament;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
class MedicFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        $dci = [
                    'ABAISSE LANGUE ADULTE',
                    'ABAISSE LANGUE ENFANT',
                    'ACCU-CHEK',
                    'ACCUPAN',
                    'ACILOC',
                    'ADRENALINE',
                    'AGHBS',
                    'AIGUILLE VACULTANIER',
                    'ALBUTIX',
                    'ARTEGEN',
                    'ASTYMIN-SN',
                    'AZANTAC',
                    'BANDE',
                    'BECOZYNE' ,
                    'BETADINE JAUNE gm',
                    'BETADINE ROUGE pm',
                    'BETADINE VERT gm',
                    'BETAMED',
                    'BOITE PETRI 120',
                    'BOITE PETRI 55',
                    'BOITE PETRI 90',
                    'BONCIPRO',
                    'BONNET',
                    'BRACELET  BB BLEU',
                    'CASAQUE',
                    'CATHETER BLEU',
                    'CATHETER JAUNE',
                    'CATHETER ROSE',
                    'CATHETER VERT',
                    'CEFTRIAZONE',
                    'CELESTENE' ,
                    'CETAFOR',
                    'CHLORURE DE CALCIUM',
                    'CHLORURE DE POTASSIUM',
                    'CHLORURE DE SODIUM',
                    'CLAMP',
                    'CLAMYDIA',
                    'COMBIMAL',
                    'CONE BLEU',
                    'CONE JAUNE',
                    'CONTENER',
                    'COTON GM',
                    'COTON PM',
                    'CTRI' ,
                    'DAKIN',
                    'DISLEP',
                    'DIU',
                    'DOIGTIER',
                    "DRAP D'EXAMEN",
                    'DYCINONE',
                    'DYNAPAR',
                    'ECOUVILLON',
                    'ELECTRODE',
                    'FENTANYL',
                    'FEVASTIN',
                    'FFP2',
                    'FILM ECHO',
                    'FLAGYL',
                    'FLEMING',
                    'VERZOL'
        ];
        $categorie = [
                       'Antiseptique',
                       'Oral',
                       'Solutés de perfusion',
                       'Injectable',
                       'Desinfectant',
                       'Vaccin/Serum'
        ];
        $formes = [
                    'Comprimés',
                    'gélules',
                    'patchs',
                    'sirops',
                    'pommades',
                    'suppositoires', 
        ];
        //instatanciation d'un nouveau medicament
        //instanciation d'un objet faker_genarator
        $faker = \Faker\Factory::create('fr_FR');
        for ($i=0; $i <59 ; $i++){ 
            $medic = new Medicament();
            $prix=$faker->numberBetween(250,500)*$i+1000;
            $cat=$categorie[$faker->numberBetween(0,5)];
            $forme=$formes[$faker->numberBetween(0,5)];
            if($forme == 'sirop') {
                $dos= $faker->numberBetween(2,50)." ml";

            }else {
                $dos= $faker->numberBetween(5,35)." mg";
            }
            $jr=$faker->numberBetween(0,1);
           // dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null) // DateTime('2003-03-15 02:00:49', 'Africa/Lagos')

            $date=$faker->dateTimeBetween('+ 20 days','+ 5 months');
            $min=$faker->numberBetween(20,30);
            $stock=$faker->numberBetween(30,50);
            $max=$faker->numberBetween(50,100);
            $medic->setDci($dci[$i])
                    ->setCode($faker->swiftBicNumber)
                    ->setPa($prix)
                    ->setPv($prix+500)
                    ->setDosage($dos)
                    ->setForme($forme)
                    ->setCategorie($cat)
                    ->setstock($stock)
                    ->setavoir($faker->numberBetween(0,5))
                    ->setJouRupture($jr)
              //      ->setSeuil(mt_rand(10,30))
                    ->setMin($min)
                    ->setMax($faker->numberBetween($min,$max))
                    ->setPeremption($date)
                    ->setEtat("En stock");
                //    ->setEpuisementstock($faker->dateTimeInInterval($startDate = '-30 days', $interval = '+ 30 days'));          
             $manager->persist($medic);
             $manager->flush();
            }
        // $manager->persist($product);
        /*
        $faker = new Faker\Generator();
        $faker->addProvider(new Faker\Provider\en_US\Person($faker));
        $faker->addProvider(new Faker\Provider\en_US\Address($faker));
        $faker->addProvider(new Faker\Provider\en_US\PhoneNumber($faker));
        $faker->addProvider(new Faker\Provider\en_US\Company($faker));
        $faker->addProvider(new Faker\Provider\Lorem($faker));
        $faker->addProvider(new Faker\Provider\Internet($faker));
        $faker->addProvider(new Faker\Provider\email($faker));
         */
    }
}

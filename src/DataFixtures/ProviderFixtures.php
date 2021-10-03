<?php

namespace App\DataFixtures;

use App\Entity\Fournisseur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProviderFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = \Faker\Factory::create('fr_FR');
        for ($i=0; $i <5 ; $i++){ 
            $gender=($i%2==0)?'male' : 'female';
            $f = new Fournisseur();
            $f->setCodeFourn($faker->unique()->ean8 )
                ->setNomFourn($faker->name($gender) )
                ->setTelFourn($faker->e164PhoneNumber)
                ->setCompany($faker->company)
                ->setMailFourn($faker->freeEmail)
                ->setAdresseFourn($faker->address);
            $manager->persist($f);
        }



        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}

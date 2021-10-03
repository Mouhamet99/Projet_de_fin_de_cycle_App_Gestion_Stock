<?php

namespace App\Form;

use App\Entity\BondeCommande;
use App\Entity\BonDeLivraison;
use App\Entity\Medicament;
use App\Entity\MedicItems;
use Doctrine\DBAL\Types\FloatType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ItemMedicFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ItemMedicament',EntityType::class,[
                'class' => Medicament::class,
                'choice_label' => 'dci',
            ]) 
            ->add('medicItemBdc',EntityType::class,[
                'class' => BondeCommande::class,
                'choice_label' => 'numero',
            ]) 
            ->add('medicItemBdl',EntityType::class,[
                'class' => BonDeLivraison::class,
                'choice_label' => 'facture',
            ]) 
            ->add('quantite',IntegerType::class)
            ->add('recu',IntegerType::class)
            ->add('prixAchat')
            ->add('prixUnitaire',IntegerType::class)
            ->add('total',IntegerType::class)
            ->add('totalBdc',IntegerType::class)
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => MedicItems::class,
        ]);
    }
}

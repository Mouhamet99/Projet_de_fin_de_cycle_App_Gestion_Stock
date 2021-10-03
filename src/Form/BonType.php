<?php

namespace App\Form;

use App\Entity\BondeCommande;
use App\Entity\Fournisseur;
use App\Entity\Medicament;
use App\Entity\MedicItems;
use App\Repository\MedicamentRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('fournisseurBdc',EntityType::class,[
            'class' => Fournisseur::class,
            'choice_label' => 'company',
            'attr' => ['class' => 'col-sm-4 col-form-label'],
        ])
        ->add('etat',ChoiceType::class,[
             'choices' => [
                        'Terminée' => 'Terminée',
                        'Annulée' => 'Annulée',
                        'En cours' => 'En cours',
                    ]
        ])
       /* ->add('conditions',ChoiceType::class,[
                'choices' => [
                'Comptant' => 'Comptant',
                'Amoxiline' => 'Pret',
            ],
        ])*/
        ->add('createdAt',DateType::class)
        ->add('numero',TextType::class)
        ->add('medicItems',CollectionType::class,[
            'entry_type'   => ItemMedicFormType::class,
            'entry_options' => ['label' => false],
            'allow_add' => true,
            'allow_delete' => true,
           /*  'delete_empty' => function (MedicItems $med=null) {
                return null === $med || empty($med->getId());
            }, */
            'prototype' => true,
            'by_reference' => false,
            
        ])
        ->add('note',TextareaType::class,[
            'required' => false,
        ])                  
          
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BondeCommande::class,
        ]);
    }
}

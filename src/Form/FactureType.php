<?php

namespace App\Form;

use App\Entity\BondeCommande;
use App\Entity\BonDeLivraison;
use App\Entity\Medicament;
use App\Entity\MedicItems;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FactureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('createdAt',DateType::class,[
               'widget' => 'single_text',
            ])
            ->add('netAPayer')
            ->add('facture')
            ->add('remise')
            ->add('modeDePayement',ChoiceType::class,[
                'choices' => [
                    'Espece' => 'Espece',
                    'Cheque' => 'Cheque',
                ]
            ])
            ->add('bdlMedicItems',CollectionType::class,[
                'entry_type'   => ItemMedicFormType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true,
                'allow_delete' => false,
               /*  'delete_empty' => function (MedicItems $med=null) {
                    return null === $med || empty($med->getId());
                }, 
                 */    
                'prototype' => true,
                'by_reference' => true,       
          ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BonDeLivraison::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Sorties;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SortiesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reference',DateType::class,[
               'widget' => 'single_text',
            ])
            ->add('sortieItems',CollectionType::class,[
            'entry_type'   => SortieItemType::class,
            'entry_options' => ['label' => false],
            'allow_add' => true,
            'allow_delete' => true,
           /*  'delete_empty' => function (MedicItems $med=null) {
                return null === $med || empty($med->getId());
            }, */
            'prototype' => true,
            'by_reference' => false,            
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Sorties::class,
        ]);
    }
}

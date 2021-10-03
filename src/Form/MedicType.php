<?php

namespace App\Form;

use App\Entity\Medicament;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MedicType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dci')
            ->add('code')
            ->add('pa')
            ->add('pv')
            ->add('dosage')
            ->add('forme', ChoiceType::class, [
                'choices' => [
                   'Comprimés' => 'Comprimés',                                
                   'gélules' => 'gélules',                                
                   'patchs' => 'patchs',                                
                   'sirops' => 'sirops',                                
                   'suppositoires' => 'suppositoires',                                
                   'pommades' => 'pommades',                                
                ]
            ])
            ->add('etat', ChoiceType::class, [
                        'choices' => [
                           'En stock' => 'En stock',                                
                           'Hors stock' => 'Hors stock',                                
                        ]
                    ])

            ->add('categorie', ChoiceType::class, [
                'choices' => [
                    'Antiseptique' => 'Antiseptique',
                    'Oral' => 'Oral',
                    'Solutés de perfusion' => 'Solutés de perfusion',
                    'Injectable' => 'Injectable',
                    'Desinfectant' => 'Desinfectant',
                    'Vaccin/Serum' => 'Vaccin/Serum',
                ],
                'choice_attr' => [
                    'Apple' => ['data-color' => 'Red'],
                    'Banana' => ['data-color' => 'Yellow'],
                    'Durian' => ['data-color' => 'Green'],
                ],
            ])
            ->add('stock')
            ->add('avoir')
          /*   ->add('jouRupture') */
            //->add('jourRuptureTotal')
            ->add('max')
            ->add('min')
            ->add('peremption',DateType::class,[
                 'widget' => 'single_text',
             ])
            // ->add('epuisementstock')
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Medicament::class,
        ]);
    }
}

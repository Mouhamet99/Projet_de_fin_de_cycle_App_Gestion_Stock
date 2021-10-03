<?php

namespace App\Form;
use App\Entity\Employe;
use App\Entity\Medicament;
use App\Entity\SortieItem;
use App\Entity\Sorties;
use App\Entity\service;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SortieItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateSortie',dateTimeType::class)
           /* ->add('service',EntityType::class,[
                'class' => Service::class,                                     
                'choice_label' => 'nom',                                        
            ])
            ->add('demandeur',[
               'class' => Employe::class,                                     
                'choice_label' => function ($employe) {
                    return $employe->getNom()+" "+$employe->getPrenom();
                },                                        
            ])*/
            ->add('service',ChoiceType::class,[
               'choices' => [
                   'CARDIO' => 'CARDIO',
                   'CHIRUR' => 'CHIRUR',
                   'COLPO' => 'COLPO',
                   'DENTISTE' => 'DENTISTE',
                   'DERMATO' => 'DERMATO',
                   'DIABETO' => 'DIABETO',
                   'KINESI' => 'KINESI',
                   'NEUROCHURIR' => 'NEUROCHURIR',
                   'ORL' => 'ORL',
                   'PEDIATRE' => 'PEDIATRE',
                   'RADIO' => 'RADIO',
                   'URO' => 'URO',
                   'MAPA' => 'MAPA',
                   'HISTERO' => 'HISTERO',
                ]                                    
            ])
            ->add('demandeur',TextType::class)
            ->add('quantite',IntegerType::class)
            ->add('medicament',EntityType::class,[
                'class' => Medicament::class,                                     
                'choice_label' => 'dci',                                        
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SortieItem::class,
        ]);
    }
}


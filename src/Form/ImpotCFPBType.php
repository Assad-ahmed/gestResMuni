<?php

namespace App\Form;

use App\Entity\ImpotCFPB;
use App\Entity\Propriete;
use App\Entity\SiteCollecte;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImpotCFPBType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('typeBatiment', ChoiceType::class, [
                'choices' => [
                    'Usine' => 'usine',
                    'Autre' => 'autre',
                ],
                'label' => 'Type de bâtiment',
                'placeholder' => 'Choisir un type de bâtiment',
                'required' => false,


            ])
            ->add('valeurLocative', NumberType::class, [
                'label' => 'Valeur locative',
                'required' => false,
            ])
            ->add('date', DateType::class, [
                'label' => 'Date de paiement',
                'widget' => 'single_text',
                'required' => true,
            ])
            ->add('montant', NumberType::class, [
                'label' => 'Montant',
                'required' => false,

            ])
            ->add('propriete', EntityType::class,[
                'expanded'=>false,

                'class'=>Propriete::class,
                'multiple'=>false,
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('e')
                        ->orderBy('e.nom', 'ASC');
                },
                'choice_label' => 'nom',

                'attr' => [
                    'class'=> 'select2'
                ]
                ])

            ->add('Enregistre', SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ImpotCFPB::class,
        ]);
    }
}

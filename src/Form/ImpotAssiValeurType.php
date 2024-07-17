<?php

namespace App\Form;

use App\Entity\ImpotAssiValeur;
use App\Entity\SiteCollecte;
use App\Entity\TypeImpots;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImpotAssiValeurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('typeImpotAssi', ChoiceType::class, [
                'label' => 'Type d\'impôt',
                'choices' => [
                    'CFPB' => 'CFPB',
                    'CFPNB' => 'CFPNB',
                    "TOM" => 'TOM',
                ],
            ])
            ->add('MontantCumule', MoneyType::class, [
                'label' => 'Montant',
                'currency' => 'EUR',
            ])
            ->add('date', DateTimeType::class, [
                'label' => 'Date',
                'widget' => 'single_text',
            ])
            ->add('typeImpots', EntityType::class,[
                'expanded'=>true,
                'class'=>TypeImpots::class,
                'multiple'=>false,
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('i')
                        ->orderBy('i.nom', 'ASC');
                },
                'choice_label' => 'nom',

                'attr' => [
                    'class'=> 'select2'
                ]

            ])
            ->add('Enrgistre',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ImpotAssiValeur::class,
        ]);
    }
}

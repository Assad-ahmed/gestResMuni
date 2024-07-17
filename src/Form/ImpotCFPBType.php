<?php

namespace App\Form;

use App\Entity\ImpotCFPB;
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

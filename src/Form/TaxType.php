<?php

namespace App\Form;

use App\Entity\Tax;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaxType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('category', ChoiceType::class, [
                'choices' => [
                    'TOM' => 'TOM',
                    'CFPB' => 'CFPB',
                    'CFPNB' => 'CFPNB',
                ],
                'label' => 'Type de taxe',
                'required' => true,
                'placeholder' => 'Choisir un type de taxe',
            ])
            ->add('valeurLocative', NumberType::class, [
                'label' => 'Valeur locative',
                'required' => false,
                'attr' => ['id' => 'valeurLocative'],
            ])
            ->add('region', ChoiceType::class, [
                'choices' => [
                    'Dakar' => 'Dakar',
                    'Autre' => 'Autre',
                ],
                'label' => 'Région',
                'placeholder' => 'Choisir une region',
                'required' => false,
                'attr' => ['id' => 'region'],
            ])
            ->add('revenuNet', NumberType::class, [
                'label' => 'Revenu net',
                'required' => false,
                'attr' => ['id' => 'revenuNet'],
            ])
            ->add('typeBatiment', ChoiceType::class, [
                'choices' => [
                    'Usine' => 'usine',
                    'Autre' => 'autre',
                ],
                'label' => 'Type de bâtiment',
                'placeholder' => 'Choisir un type de bâtiment',
                'required' => false,
                'attr' => ['id' => 'typeBatiment'],
            ])
            ->add('valeurVenale', NumberType::class, [
                'label' => 'Valeur vénale',
                'required' => false,
                'attr' => ['id' => 'valeurVenale'],

            ])
            ->add('montant', NumberType::class, [
                'label' => 'Montant',
                'required' => false,
                'attr' => ['id' => 'Montant'],

            ])
            ->add('date', DateType::class, [
                'label' => 'Date de paiement',
                'widget' => 'single_text',
                'required' => true,
            ])
            ->add('Enregistre', SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tax::class,
        ]);
    }
}

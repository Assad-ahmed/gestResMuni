<?php

namespace App\Form;

use App\Entity\CFPB;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CFPBType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomP',TextType::class, [
                'label' => 'Nom propriétaire',
            ])
            ->add('adresse', TextType::class, [
                'label' => 'Adresse',
            ])
            ->add('surface', NumberType::class, [
                'label' => 'Surface (m²)',
            ])
            ->add('valeurLocative',NumberType::class, [
                'label' => 'Valeur Locative',
            ])
            ->add('typeBatiment',ChoiceType::class, [
                'choices' => [
                    'Usine' => 'usine',
                    'Autre' => 'autre',
                ]])
            ->add('dateImposition', DateType::class, [
                'label' => 'Date d\'Imposition',
                'widget' => 'single_text',
            ])
           ->add('Enregistre', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CFPB::class,
        ]);
    }
}

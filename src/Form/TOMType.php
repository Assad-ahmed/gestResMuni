<?php

namespace App\Form;

use App\Entity\TOM;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TOMType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('NomP', TextType::class, [
                'label' => 'Nom propriétaire',
            ])
            ->add('region',ChoiceType::class, [
        'choices' => [
            'Dakar' => 'Dakar',
            'Thies' => 'Thies',
        ]])
            ->add('valeurLocative', NumberType::class, [
                'label' => 'Valeur Locative',
            ])
            ->add('taux',ChoiceType::class, [
                'choices' => [
                    '0.06' => '0.06',
                    '0.05' => '0.05',


                ],
                'label' => 'Taux (%)'
            ])
            ->add('Enregistre',SubmitType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TOM::class,
        ]);
    }
}

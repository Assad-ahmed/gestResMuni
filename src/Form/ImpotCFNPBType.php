<?php

namespace App\Form;

use App\Entity\ImpotCFNPB;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImpotCFNPBType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('valeurVenale',MoneyType::class, [
                'label' => 'Valeur Venale',
                'currency' => 'EUR',
            ])
            ->add('montant',MoneyType::class, [
              'label' => 'Montant',
              'currency' => 'EUR',
    ])
            ->add('date', DateTimeType::class, [
                'label' => 'Date',
                'widget' => 'single_text',
            ])
            ->add('Enregistre', SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ImpotCFNPB::class,
        ]);
    }
}

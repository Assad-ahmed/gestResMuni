<?php

namespace App\Form;

use App\Entity\Contributeurs;
use App\Entity\Paiement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaiementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date du Paiement'
            ])
            ->add('montant', IntegerType::class, [
                'label' => 'Montant (en F CFA)'
            ])
            ->add('contributeur', EntityType::class, [
                'class' => Contributeurs::class,
                'choice_label' => function (Contributeurs $contributeur) {
                    return $contributeur->getNom() . ' ' . $contributeur->getPrenom() . ' (' . $contributeur->getNumeroEtablissement() . ')';
                },
                'label' => 'Contributeur',
                'placeholder'=> 'Choisir un contribiteur'
            ])
            ->add('Valider', SubmitType::class);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Paiement::class,
        ]);
    }
}

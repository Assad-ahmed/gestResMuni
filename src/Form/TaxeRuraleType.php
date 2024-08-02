<?php

namespace App\Form;

use App\Entity\TaxeRurale;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Propriete;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaxeRuraleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('montant',MoneyType::class, [
            'label' => 'Montant',
            'currency' => 'Fcfa',
        ])
        ->add('date', DateType::class, [
            'label' => 'Date de paiement',
            'widget' => 'single_text',
            'required' => true,
        ])
        ->add('nom')
        ->add('propriete', EntityType::class,[
            'expanded'=>false,

            'class'=>Propriete::class,
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
        ->add('Valider', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TaxeRurale::class,
        ]);
    }
}

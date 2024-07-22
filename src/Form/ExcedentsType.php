<?php

namespace App\Form;

use App\Entity\Excedents;
use App\Entity\Propriete;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExcedentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('typeRecette', ChoiceType::class, [
                'choices' => [
                    'Excédent de la fiscalité directe' => 'Excédent de la fiscalité directe',
                    'Excédent des redevances et droits d\'usage' => 'Excédent des redevances et droits d\'usage',
                    'Excédent des ventes de biens et services' => 'Excédent des ventes de biens et services',
                    'Excédent des revenus de placements' => 'Excédent des revenus de placements',
                    'Excédent des subventions non utilisées' => 'Excédent des subventions non utilisées',
                    'Excédent des contributions volontaires' => 'Excédent des contributions volontaires',
                    'Excédent des amendes et pénalités' => 'Excédent des amendes et pénalités',
                    'Excédent des remboursements de prêts' => 'Excédent des remboursements de prêts',
                    'Excédent des ristournes et répartitions de l\'État' => 'Excédent des ristournes et répartitions de l\'État',
                ],
                'placeholder' => 'Choisir un type d\'excédent',
                'label' => 'Type d\'Excédent',
            ])
            ->add('montant', MoneyType::class, [
                'currency' => 'cf',
            ])
            ->add('date', DateType::class, [
                'label' => 'Date de paiement',
                'widget' => 'single_text',
                'required' => true,
            ])
            ->add('propriete', EntityType::class,[
                'expanded'=>false,

                'class'=>Propriete::class,
                'multiple'=>false,
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('p')
                        ->orderBy('p.nom', 'ASC');
                },
                'choice_label' => 'nom',

                'attr' => [
                    'class'=> 'select2'
                ]
            ])

            ->add('Enregistre', SubmitType::class);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Excedents::class,
        ]);
    }
}

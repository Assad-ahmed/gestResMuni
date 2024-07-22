<?php

namespace App\Form;

use App\Entity\Propriete;
use App\Entity\Ristournes;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RistournesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('typeRecette', ChoiceType::class, [
                'choices' => [
                    'Ristourne sur la TVA' => 'Ristourne sur la TVA',
                    'Ristourne sur les impôts locaux' => 'Ristourne sur les impôts locaux',
                    'Fonds de péréquation' => 'Fonds de péréquation',
                    'Dotations générales de fonctionnement (DGF)' => 'Dotations générales de fonctionnement (DGF)',
                    'Dotations spécifiques' => 'Dotations spécifiques',
                    'Ristournes sur les excédents budgétaires' => 'Ristournes sur les excédents budgétaires',
                    'Crédits exceptionnels' => 'Crédits exceptionnels',
                ],
                'placeholder' => 'Choisir un type de ristourne ou répartition',
                'label' => 'Type de Ristourne ou Répartition',
            ])
            ->add('montant', MoneyType::class, [
                'currency' => 'Fcfa',
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
            'data_class' => Ristournes::class,
        ]);
    }
}

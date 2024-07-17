<?php

namespace App\Form;

use App\Entity\ImpotTOM;
use App\Entity\Propriete;
use App\Entity\SiteCollecte;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImpotTOMType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('valeurLocative')
            ->add('region' ,ChoiceType::class, [
                'label' => 'Region',
                'choices' => [
                    'Dakar' => 'Dakar',
                    'Thies' => 'Thies'
                ]
            ])
            ->add('montant',MoneyType::class, [
                'label' => 'Montant',
                'currency' => 'EUR',
            ])
            ->add('taux', ChoiceType::class, [
                'label' => 'Taux',
                'choices' => [
                    '6%' => '6%',
                    '5%' => '5%'
                ]
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


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ImpotTOM::class,
        ]);
    }
}

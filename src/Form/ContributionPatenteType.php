<?php

namespace App\Form;

use App\Entity\ContributionPatente;
use App\Entity\SiteCollecte;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContributionPatenteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('date',DateType::class, [
                'label' => 'Date de paiement',
                'widget' => 'single_text',
                'required' => true,
            ])
            ->add('montantCumuleJournalier')
            ->add('site',EntityType::class,[
                'expanded'=>false,

                'class'=>SiteCollecte::class,
                'multiple'=>true,
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('c')
                        ->orderBy('c.nom', 'ASC');
                },
                'choice_label' => 'nom',

                'attr' => [
                    'class'=> 'select2'
                ]

            ])
            ->add('Enrgistre', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ContributionPatente::class,
        ]);
    }
}

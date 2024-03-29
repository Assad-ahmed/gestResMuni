<?php

namespace App\Form;

use App\Entity\Recettefiscale;
use App\Entity\SiteCollecte;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecettefiscaleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date')
            ->add('montantCumuleJour')
            ->add('montantCumuleMoi')
            ->add('montantCumuleAnnee')
            ->add('nom')
            ->add('sites', EntityType::class,[
                'expanded'=>false,

                'class'=>SiteCollecte::class,
                'multiple'=>true,
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('r')
                        ->orderBy('r.nom', 'ASC');
                },
                'choice_label' => 'nom',

                'attr' => [
                    'class'=> 'select2'
                ]


            ])

            ->add('Enregistre', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Recettefiscale::class,
        ]);
    }
}

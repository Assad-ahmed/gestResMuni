<?php

namespace App\Form;

use App\Entity\Contributeurs;
use App\Entity\SiteCollecte;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContributeursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('date_paye')
            ->add('numeroEtablissement')
            ->add('montantJour')
            ->add('montantMois')
            ->add('siteCollecte')
            ->add('siteCollecte', EntityType::class,[
                'expanded'=>false,
    
                'class'=>SiteCollecte::class,
                'multiple'=>false,
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('s')
                        ->orderBy('s.nom', 'ASC');
                },
                'choice_label' => 'nom',
    
                'attr' => [
                    'class'=> 'select2'
                ]
            ])
            ->add('Valider', SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contributeurs::class,
        ]);
    }
}

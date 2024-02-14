<?php

namespace App\Form;

use App\Entity\Agent;
use App\Entity\Contributeur;
use App\Entity\Ressourcepropre;
use App\Entity\Site;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('adresse')
            ->add('montantJournalier')
            ->add('montantMensuel')
            ->add('montantAnnuel')
            ->add('ressource_propre', EntityType::class, [
                'expanded'=>false,
                'multiple'=>true,
                'class' => Ressourcepropre::class,
                'attr'=>[
                    'classe' => 'select2'
                ]
            ])
            ->add('contributeur', EntityType::class, [
                'expanded'=>false,
                'multiple'=>true,
                'class' => Contributeur::class,
                'attr'=>[
                    'classe' => 'select2'
                ]
            ])
            ->add('agent_collecte', EntityType::class, [
                'expanded'=>false,
                'multiple'=>true,
                'class' => Agent::class,
                'attr'=>[
                    'classe' => 'select2'
                ]
            ])
            ->add('Ajouter', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Site::class,
        ]);
    }
}

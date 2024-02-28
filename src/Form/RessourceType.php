<?php

namespace App\Form;

use App\Entity\Ressource;
use App\Entity\SiteCollecte;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RessourceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('nomRessource')
            ->add('type', ChoiceType::class,[
                'choices'=> [
                    'Recette fiscal'=>'Recette fiscal',
                    'non Recette fiscal'=> 'non Recette fiscal',
                    'Ristournes'=> ' Ristournes',
                    'Excédents de clôture'=>'Excédents de clôture'
                ]
            ])
            ->add('sites',EntityType::class, [
                'expanded'=>false,
                'class'=>SiteCollecte::class,
                'multiple'=>true,
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
            'data_class' => Ressource::class,
        ]);
    }
}

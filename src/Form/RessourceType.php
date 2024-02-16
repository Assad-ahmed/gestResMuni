<?php

namespace App\Form;

use App\Entity\Ressourcepropre;
use PHPUnit\Util\Type;
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
                'choices'=>[
                    new Type('Ressecette Fiscal'),
                    new Type('Ressecette non Fiscal'),
                    new Type('Restourne'),
                    new Type('Excédents de clôture')
                ],
            ])
            ->add('sites')
            ->add('Ajouter', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ressourcepropre::class,
        ]);
    }
}

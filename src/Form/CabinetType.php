<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CabinetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            ->add('roles', ChoiceType::class,[
                'choices'=>[
                    'Agent'=> 'ROLE_USER',
                    'Cabinet'=>'ROLE_SUPER_ADMIN',
                    'Controleur centrale'=>'ROLE_ADMIN'
                ],
                'expanded'=>true,
                'multiple'=>true,
                'label'=>'Roles'
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

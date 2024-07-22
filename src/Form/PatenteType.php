<?php

namespace App\Form;

use App\Entity\Patente;
use App\Entity\Propriete;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PercentType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PatenteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('droitFixe',MoneyType::class, [
               'label' => 'Droit Fixe',
                 'currency' => 'Fcfa',
    ])
            ->add('droitProportionnel', PercentType::class)
            ->add('tauValeurLocative',PercentType::class)
            ->add('date', DateType::class, [
                'label' => 'Date de paiement',
                'widget' => 'single_text',
                'required' => true,
            ])
            ->add('valeurLocative',MoneyType::class, [
                'label' => 'Valeur Locative',
                'currency' => 'Fcfa',
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
            'data_class' => Patente::class,
        ]);
    }
}

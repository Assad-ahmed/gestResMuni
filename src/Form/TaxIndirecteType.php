<?php

namespace App\Form;

use App\Entity\Propriete;
use App\Entity\TaxIndirecte;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaxIndirecteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('typeTaxe',ChoiceType::class,[
                'choices' => [
                    "L'eau" =>"L'eau" ,
                    "L'électricité" => "l'électricité",
                    " La publicité" => " La publicité",
                ],
            ])
            ->add('codeArticle',TextType::class, [
                'label' => 'Code de l\'article'
            ])
            ->add('description',TextareaType::class, [
                'label' => 'Description'
            ])
            ->add('montant',NumberType::class, [
                'label' => 'Montant '
            ])
            ->add('date',DateType::class, [
                'label' => 'Date de paiement',
                'widget' => 'single_text',
                'required' => true,
            ])

            ->add('propriete', EntityType::class,[
                'expanded'=>false,

                'class'=>Propriete::class,
                'multiple'=>false,
                'query_builder' => function (EntityRepository $er){
                    return $er->createQueryBuilder('t')
                        ->orderBy('t.nom', 'ASC');
                },
                'choice_label' => 'nom',

                'attr' => [
                    'class'=> 'select2'
                ]
            ])

            ->add('Enregistrer',SubmitType::class)

        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TaxIndirecte::class,
        ]);
    }
}

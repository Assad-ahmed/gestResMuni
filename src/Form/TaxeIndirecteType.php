<?php

namespace App\Form;

use App\Entity\TaxeIndirecte;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TaxeIndirecteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('typeTaxe',ChoiceType::class,[
                'choices' => [
                    "L'eau" =>"L'eau" ,
                    "l'électricité" => "l'électricité",
                ],
            ])
            ->add('codeArticle',TextType::class, [
                'label' => 'Code de l\'article'
            ])
            ->add('description',TextareaType::class, [
                'label' => 'Description'
            ])
            ->add('montantJournalier',NumberType::class, [
                'label' => 'Montant journalier'
            ])
            ->add('date',DateType::class, [
                'label' => 'Date de paiement',
                'widget' => 'single_text',
                'required' => true,
            ])
            ->add('Enregistrer',SubmitType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => TaxeIndirecte::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\CFPNB;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CFPNBType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomP',TextType::class, [
                'label' => 'Nom propriétaire',
            ])
            ->add('adresse',TextType::class, [
                'label' => 'Adresse',
            ])
            ->add('surface',NumberType::class, [
                'label' => 'Surface (m²)',
            ])
            ->add('valeurVenale', NumberType::class, [
                'label' => 'Valeur Venale',
            ])
            ->add('date',DateType::class, [
                'label' => 'Date d\'Imposition',
                'widget' => 'single_text',
            ])
            ->add('typeTerrain', ChoiceType::class,[
                'choices' => [
                    'Terrains Agricoles' => 'Terrains Agricoles',
                    'Terrains à Usage Industriel ou Commercial' => 'Terrains à Usage Industriel ou Commercial',
                    'Terrains de Loisirs'=>'Terrains de Loisirs',
                    'Terrains à Bâtir'=>' Terrains à Bâtir',
                    'Terrains Non Bâtis Divers'=>'Terrains Non Bâtis Divers'

                ],
            ])
            ->add('save',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CFPNB::class,
        ]);
    }
}

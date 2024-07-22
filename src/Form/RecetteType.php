<?php

namespace App\Form;

use App\Entity\Propriete;
use App\Entity\Recette;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecetteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('typeRecette', ChoiceType::class, [
                'choices' => [
                    'Utilisation du domaine public à titre privé' => 'Utilisation du domaine public à titre privé',
                    'Exploitation du domaine privé' => 'Exploitation du domaine privé',
                    'Revenus divers' => 'Revenus divers',
                    'Participations' => 'Participations',
                    'Remboursements de frais d’hospitalisation' => 'Remboursements de frais d’hospitalisation',
                    'Prêts consentis' => 'Prêts consentis',
                    'Ristournes et répartitions provenant de l\'Etat' => 'Ristournes et répartitions provenant de l\'Etat',
                ],
                'placeholder' => 'Choisir un type de recette',
            ])
            ->add('montant', MoneyType::class, [
                'currency' => 'Fcfa',
            ])
            ->add('date', DateType::class, [
                'label' => 'Date de paiement',
                'widget' => 'single_text',
                'required' => true,
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
            'data_class' => Recette::class,
        ]);
    }
}

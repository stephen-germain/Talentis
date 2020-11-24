<?php

namespace App\Form;

use App\Entity\Profil;
use App\Entity\HardSkills;
use App\Entity\SoftSkills;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ProfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    'Choisir un titre'=> NULL,
                    'Chef de projet' => 'Chef de projet',
                    'Chef de projet AMOA' => 'Chef de projet AMOA',
                    'Chef de projet Marketing' => 'Chef de projet Marketing',
                ],
            ])
            ->add('metier', ChoiceType::class, [
                'required' => false,
                'choices' => [
                    'Choisir un titre'=> NULL,
                    'Banque' => 'Banque',
                    'Informatique' => 'Informatique',
                    'Aéronautique' => 'Aéronautique',
                    'Finances' => 'Finances',
                ], 
            ])
            ->add('competences', EntityType::class, array(
                'required' => false,
                'class' => HardSkills::class, 
                'choice_label' => 'competences',
                'multiple'     => true,
            ))
            ->add('capacites', EntityType::class, array(
                'required' => false,
                'class'=> SoftSkills::class,
                 'choice_label' => 'capacite',
                 'multiple'     => true,
            ))
            // ->add('rechercher', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Profil::class,
        ]);
    }
}

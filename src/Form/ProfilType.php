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
            // ->add('titre', EntityType::class, array(
            //     'class'=>Profil::class,
            //     'choice_label' => 'titre'
            // ))

            ->add('titre', ChoiceType::class, [
                'required' => false,
                'placeholder' => 'Choose an option',
                'choices' => [
                    'Chef de projet' => 'Chef de projet',
                    'Chef de projet AMOA' => 'Chef de projet AMOA',
                    'Chef de projet Marketing' => 'Chef de projet Marketing',
                    'titre' => 'Chef de projet',
                ],
                
            ])
            // ->add('metier', EntityType::class, array(
            //     'class' => Profil::class,
            //     'choice_label' => 'metier'
            // ))

            ->add('metier', ChoiceType::class, [
                'required' => false,
                'placeholder' => 'Choose an option',
                'choices' => [
                    'Banque' => 'Banque',
                    'Informatique' => 'Informatique',
                    'Aéronautique' => 'Aéronautique',
                    'Finances' => 'Finances',
                ],
                
            ])

            // ->add('experience', EntityType::class, array(
            //     'class' => Profil::class,
            //     'choice_label' => 'experience'
            // ))
            ->add('competences', EntityType::class, array(
                'class' => HardSkills::class, 
                'choice_label' => 'competences',
                'expanded'     => true,
                'multiple'     => true,
             
            ))
            ->add('capacites', EntityType::class, array(
                'class'=> SoftSkills::class,
                 'choice_label' => 'capacite',
                 'expanded'     => true,
                 'multiple'     => true,
            ))

            ->add('rechercher', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Profil::class,
        ]);
    }
}

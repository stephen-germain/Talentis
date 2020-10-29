<?php

namespace App\Form;

use App\Entity\Profil;
use App\Entity\HardSkills;
use App\Entity\SoftSkills;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titres', EntityType::class, array(
                'class'=>Profil::class,
                'choice_label' => 'titre'
            ))
            ->add('metiers', EntityType::class, array(
                'class' => Profil::class,
                'choice_label' => 'metier'
            ))

            ->add('experience', EntityType::class, array(
                'class' => Profil::class,
                'choice_label' => 'experience'
            ))
            ->add('softSkills', EntityType::class, array(
                'class' => HardSkills::class, 
                'choice_label' => 'competences'
             
            ))
            ->add('hardSkills', EntityType::class, array(
                'class'=> SoftSkills::class,
                 'choice_label' => 'capacite'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Profil::class,
        ]);
    }
}

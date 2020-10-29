<?php

namespace App\Form;

use App\Entity\Profil;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', ChoiceType::class, [
                'choices' => [
                    'Chef de projet' => 1,
                    'Développeur Web' => 2
                ]
            ])
            ->add('metier', ChoiceType::class, [
                'choices' => [
                    'Secteur Bancaire' => 1,
                    'Commerce' => 2
                ]
            ])
            ->add('experience')
            // ->add('softSkills', EntityType::class, [
            //     'class' => Profil::class, 
            //     'choices'
                
            //     ]
            // ])
            ->add('hardSkills', EntityType::class, [
                'choices' => [
                    ''
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Profil::class,
        ]);
    }
}

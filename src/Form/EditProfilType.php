<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EditProfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'required' => false,
            ])

            ->add('prenom', TextType::class, [
                'required' => false,
            ])
            ->add('societe', TextType::class, [
                'required' => false,
            ])
            ->add('fonction', TextType::class, [
                'required' => false,
            ])
            ->add('adresseSociete', TextType::class, [
                'required' => false,
            ])
            ->add('img', FileType::class, array(
                'data_class' => null,'required' => false))
                
            ->add('email', EmailType::class,[
                'required' => false,
            ])
            ->add('save', SubmitType::class,[
                'label'=>'Envoyer'
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

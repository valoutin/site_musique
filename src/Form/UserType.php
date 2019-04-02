<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('email', EmailType::class)
            ->add('roles', ChoiceType::class, array(
              'choices'  => [
                      'SuperAdmin' => 'ROLE_SUPER_ADMIN',
                      'Admin'      => 'ROLE_ADMIN',
                      'user'       => 'ROLE_USER',
                ],
                'expanded' => true,
                'multiple' => true
            ))
            ->add('password', PasswordType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }

    // public function buildForm(FormBuilderInterface $builder, array $options)
    // {
    //     $builder
    //         ->add('nom', TextType::class)
    //         ->add('prenom', TextType::class)
    //         ->add('email', RepeatedType::class, [
    //               'type' => EmailType::class,
    //               'invalid_message' => 'Les deux e-mails doivent t\'être identique.',
    //               'options' => ['attr' => ['class' => 'password-field']],
    //               'required' => true,
    //               'first_options'  => ['label' => 'E-mail:'],
    //               'second_options' => ['label' => 'Répété votre e-mail:'],
    //           ])
    //         ->add('password', RepeatedType::class, [
    //               'type' => PasswordType::class,
    //               'invalid_message' => 'Les deux mots de passe doivent t\'être identique.',
    //               'options' => ['attr' => ['class' => 'password-field']],
    //               'required' => true,
    //               'first_options'  => ['label' => 'Mot de passe:'],
    //               'second_options' => ['label' => 'Répété votre mot de passe:'],
    //           ]);
    // }
    //
    // public function configureOptions(OptionsResolver $resolver)
    // {
    //     $resolver->setDefaults([
    //         'data_class' => User::class,
    //     ]);
    // }
}

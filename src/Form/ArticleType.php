<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', TextType::class)
            ->add('texte', TextareaType::class)
            ->add('url_video', UrlType::class)
            ->add('url_video2', UrlType::class)
            ->add('url_video3', UrlType::class)
            ->add('url_video4', UrlType::class)
            ->add('url_img', UrlType::class)
            ->add('url_img2', UrlType::class)
            ->add('url_img3', UrlType::class)
            ->add('url_img4', UrlType::class)
            ->add('url_sound', UrlType::class)
            ->add('url_sound2', UrlType::class)
            ->add('url_sound3', UrlType::class)
            ->add('url_sound4', UrlType::class)
            ->add('status', ChoiceType::class, array(
              'choices'  => [
                      'publié'    => 'publié',
                      'brouillon' => 'brouillon',
                      'poubelle'  => 'poubelle'
                ],
                'expanded' => true,
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('texte')
            ->add('url_video')
            ->add('url_video2')
            ->add('url_video3')
            ->add('url_video4')
            ->add('url_img')
            ->add('url_img2')
            ->add('url_img3')
            ->add('url_img4')
            ->add('url_sound')
            ->add('url_sound2')
            ->add('url_sound3')
            ->add('url_sound4')
            ->add('created_at')
            ->add('updated_at')
            ->add('status')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}

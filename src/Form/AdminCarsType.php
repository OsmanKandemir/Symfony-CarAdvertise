<?php

namespace App\Form;

use App\Entity\AdminCars;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminCarsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('keywords')
            ->add('description')
            ->add('type')
            ->add('publisher_id')
            ->add('year')
            ->add('amount')
            ->add('price')
            ->add('saleprice')
            ->add('detail')
            ->add('image')
            ->add('writer_id')
            ->add('category_id')
            ->add('user_id')
            ->add('status')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AdminCars::class,
            'csrf_protection'=>false,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\AdminSettings;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminSettingsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('title')
            ->add('description')
            ->add('keywords')
            ->add('address')
            ->add('fax')
            ->add('tel')
            ->add('email')
            ->add('smtpserver')
            ->add('smtpmail')
            ->add('smtppasw')
            ->add('smtpport')
            ->add('aboutus')
            ->add('contract')
            ->add('referans')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AdminSettings::class,
            'csrf_protection'=>false,
        ]);
    }
}

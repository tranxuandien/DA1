<?php
namespace FosBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('city');
        $builder->add('phone');
        $builder->add('address');
        $builder->add('name', null, array('label' => 'form.name', 'translation_domain' => 'FOSUserBundle'));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType'; // Or for Symfony < 2.8 // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    } // For Symfony 2.x

    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
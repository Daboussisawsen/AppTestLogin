<?php

namespace ConnectBundle\Form;
   
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class ProfileFormType extends AbstractType
{
  

    
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
         $builder
            ->remove('current_password')
            ->add('username',null, array(
                            'label' => 'Login : ',
                            'label_attr' => array('class' => 'text-primary'),
                ))
           
            ->add('email', EmailType::class, array(
                            'label' => 'Email: ',
                            'label_attr' => array('class' => 'text-primary'),
                ))
            ->add('adresse', null, array(
                            'label' => 'Adresse : ',
                            'label_attr' => array('class' => 'text-primary'),
                ))
            ->add('birthday', BirthdayType::class, array(
                            'placeholder' => array('year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                            'label' => 'Date de naissance:', 
                            'label_attr' => array('class' => 'text-primary'),
                ))
            ->add('dateentree', DateType::class, array(
                                'placeholder' => array('year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',),
                                'label' => 'Date d’entree dans l’entreprise:',
                                'label_attr' => array('class' => 'text-primary'),
                ))
        ;
    }

    public function getParent() 
    {
        return 'FOS\UserBundle\Form\Type\ProfileFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_profile';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }

}

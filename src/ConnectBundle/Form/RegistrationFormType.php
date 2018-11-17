<?php

    namespace ConnectBundle\Form;
   
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    
    use Symfony\Component\Form\Extension\Core\Type\EmailType;
    use Symfony\Component\Form\Extension\Core\Type\PasswordType;
    use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
    
    class RegistrationFormType extends AbstractType
    {
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder
            ->add('email', EmailType::class, array(
                'label' => 'Email: ',
                'label_attr' => array('class' => 'text-primary'),
                ))
            ->add('username', null, array(
                'label' => 'Login', 
                'label_attr' => array('class' => 'text-primary')))
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'options' => array(
                    'attr' => array(
                        'autocomplete' => 'new-password',
                    ),
                ),
                'first_options' => array('label' => 'Mot de passe :','label_attr' => array('class' => 'text-primary')),
                'second_options' => array('label' => 'Confirmer votre mot de passe :','label_attr' => array('class' => 'text-primary')),
                'invalid_message' => 'fos_user.password.mismatch',
            ));
           
        }

        public function getParent()
        {
            return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        }

        public function getBlockPrefix()
        {
            return 'app_user_registration';
        }

        // For Symfony 2.x
        public function getName()
        {
            return $this->getBlockPrefix();
        }
    }
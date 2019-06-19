<?php

namespace AppBundle\Form;


use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;




class UserType  extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $requiredPassword = $options['requiredPassword'];

        $roles = array();
        $roles['Admin'] = 'ROLE_ADMIN';
        $roles['User'] = 'ROLE_USER';

        $builder
            ->add('username', TextType::class , array(
                'required' => true,
                'trim' => true,
                'label' => 'Username'))
            ->add('email', EmailType::class, array(
                'required' => true,
                'label' => 'Email'))
            ->add('password', RepeatedType::class, array(
                'required' => $requiredPassword,
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password')
            ))
            ->add('roles', ChoiceType::class, array(
                'choices'  => $roles,
                'label' => 'Role',
                'multiple' => true
            ))
            ->add('save', SubmitType::class, array(
                'attr' => array('class' => 'save'),
                'label' => 'Submit'))

        ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setRequired('user');
        $resolver->setAllowedTypes('user', array(User::class, 'int'));
        $resolver->setRequired('requiredPassword');

    }
}
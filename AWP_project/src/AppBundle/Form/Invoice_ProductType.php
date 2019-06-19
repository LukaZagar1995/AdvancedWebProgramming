<?php

namespace AppBundle\Form;


use AppBundle\Entity\Invoice;
use AppBundle\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Invoice_ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('product_id', EntityType::class, [
                'required' => true,
                'label' => 'Product',
                'class' => 'AppBundle\Entity\Product',
                'choice_value' => 'id'

            ])
            ->add('product_id', EntityType::class, [
                'required' => true,
                'label' => 'Product',
                'class' => 'AppBundle\Entity\Product',
                'choice_value' => 'id'

            ])
            ->add('type', ChoiceType::class, array(
                'choices'  => ['Getting' => true, 'Missing' => false],
                'label' => 'Type',
                'multiple' => true
            ))

            ->add('quantity', IntegerType::class, [
                'label' => 'Quantity'

            ])
            ->add('submit', SubmitType::class, array(
                'label' => 'Submit',
                'attr' => array('class' => 'btn btn-default')
            ));

    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setRequired('user');
        $resolver->setAllowedTypes('user', array(User::class, 'int'));
    }
}
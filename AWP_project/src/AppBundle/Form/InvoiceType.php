<?php

namespace AppBundle\Form;


use AppBundle\Entity\Invoice;
use AppBundle\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvoiceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('invoiceNumber', TextType::class, [
                'attr' => ['autofocus' => true],
                'label' => 'Invoice number',
            ])
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',
                'attr' => ['class' => 'date'],
                'html5' => true
            ])
            ->add('submit', SubmitType::class, array(
                'label' => 'Submit',
                'attr' => array('class' => 'btn btn-default')
            ));

    }


    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Invoice::class,

        ));
        $resolver->setRequired('user');
        $resolver->setAllowedTypes('user', array(User::class, 'int'));
    }
}
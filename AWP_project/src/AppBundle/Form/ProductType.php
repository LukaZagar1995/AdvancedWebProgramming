<?php


namespace AppBundle\Form;



use AppBundle\Entity\Product;
use AppBundle\Entity\User;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ProductType extends AbstractType
{
    /**
     * @var EntityManager
     */
    private $entityManager;



    public function buildForm(FormBuilderInterface $builder, array $options)
    {


        $this->entityManager = $options['entityManager'];


        $builder
            ->add('name', TextType::class, [
                'attr' => ['autofocus' => true],
                'label' => 'Name'
            ])
            ->add('serialNumber', TextType::class, [
                'label' => 'Serial Number'
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description'
            ])
            ->add('stock', IntegerType::class, [
                'label' => 'Stock'
            ])

            ->add('price', NumberType::class, [
                'scale' => 2
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Submit',
                'attr' => array('class' => 'btn btn-default')
            ])
            ;


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(array(
            'data_class' => Product::class,
        ));


        $resolver->setRequired('user');
        $resolver->setAllowedTypes('user', array(User::class, 'int'));
        $resolver->setRequired('entityManager');
        $resolver->setRequired('product');

    }
}


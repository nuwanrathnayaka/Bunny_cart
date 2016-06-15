<?php

namespace AppBundle\Form;

//use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class AccountType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('businessName' ,TextType::class, array('label'=>'Business Name:' , 'attr'=>array('class'=>"form-control",'placeholder'=>'Enter Business Name' )))
            ->add('category',TextType::class, array('label'=>'Category:' , 'attr'=>array('class'=>"form-control",'placeholder'=>'Enter Category' )))
            ->add('description', TextareaType::class,array('label'=>'Description:' , 'attr'=>array('class'=>"form-control",'rows'=>5,'placeholder'=>'Enter Brief Description' )))
            ->add('profilePic', FileType::class,array('label'=>'Profile Picture:' , 'attr'=>array('class'=>"form-control",'placeholder'=>'Profile Picture' )))
            ->add('coverPic',FileType::class,array('label'=>'Cover Picture' , 'attr'=>array('class'=>"form-control" ,'placeholder'=>'Cover Picture')))
            ->add('businessVision', TextareaType::class,array('label'=>'Vision:' , 'attr'=>array('class'=>"form-control",'rows'=>5,'placeholder'=>'Enter Business vision' )))
            ->add('address', TextareaType::class,array('label'=>'Address:' , 'attr'=>array('class'=>"form-control",'rows'=>5,'placeholder'=>'Enter Address' )))
            ->add('telephoneNumber',TextType::class, array('label'=>'Contact Number:' , 'attr'=>array('class'=>"form-control",'placeholder'=>'Enter contact Number' )))

        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Account'
        ));
    }
}

<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ForgotPasswordType extends AbstractType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email', 'email');
    }

//    public function configureOptions(OptionsResolver $resolver)
//    {
//        $resolver->setRequired(array('email'));
//    }
    
    
    public function getName()
    {
        return 'forgot_password';
    }
}

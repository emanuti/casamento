<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeletePerfilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) 
    {
        $builder->add('perfis', 'entity', array(
            'class' => 'AppBundle:Perfil',
            'choice_label' => 'nome',
            'expanded' => true,
            'multiple' => true
        ))->add('Deletar', 'submit')
        ;
    }

    public function getName() 
    {
        return 'delete_perfil';
    }
}
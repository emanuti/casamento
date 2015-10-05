<?php

namespace AppBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\Perfil;

class PerfilModel 
{
    
    /**
     * @Assert\Type(type="AppBundle\Entity\Perfil")
     * @Assert\Valid()
     */
    protected $perfil;
    
    public function setPerfil(Perfil $perfil)
    {
        $this->perfil = $perfil;
    }
    
    public function getPerfil()
    {
        return $this->perfil;
    }
}
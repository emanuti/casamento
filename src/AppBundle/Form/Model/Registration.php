<?php
namespace AppBundle\Form\Model;

use Symfony\Component\Validator\Constraints as Assert;
use AppBundle\Entity\Usuario;

class Registration
{
    /**
     * @Assert\Type(type="AppBundle\Entity\Usuario")
     * @Assert\Valid()
     */
    protected $usuario;

    /**
     * @Assert\NotBlank()
     * @Assert\True()
     */
    protected $termsAccepted;

    public function setUser(Usuario $user)
    {
        $this->usuario = $user;
    }

    public function getUser()
    {
        return $this->usuario;
    }

    public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }

    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = (bool) $termsAccepted;
    }
}
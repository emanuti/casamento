<?php
namespace AppBundle\Service;

use AppBundle\Entity\Usuario;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;

class AccountService extends AbstractService
{
    protected $encoder;
    
    public function setEncoder(UserPasswordEncoder $encoder)
    {
        $this->encoder = $encoder;
    }
    
    public function create(Usuario $usuario)
    {
        $usuario->setPassword($this->getEncodedPassword($usuario->getPassword()));
        $this->em->persist($usuario);
        $this->em->flush();
    }
    
    public function getEncodedPassword($password)
    {
        return $this->encoder->encodePassword(new Usuario(), $password);
    }
    
}

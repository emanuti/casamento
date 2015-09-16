<?php
namespace AppBundle\Service;

use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;

class AccountService extends AbstractService
{
    protected $encoder;
    
    public function setEncoder(UserPasswordEncoder $encoder)
    {
        $this->encoder = $encoder;
    }
    
    public function create(User $user)
    {
        $user->setPassword($this->getEncodedPassword($user->getPassword()));
        $this->em->persist($user);
        $this->em->flush();
    }
    
    public function getEncodedPassword($password)
    {
        return $this->encoder->encodePassword(new User(), $password);
    }
    
}

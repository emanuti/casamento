<?php
namespace AppBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class AbstractEntity  implements UserInterface, \Serializable
{
    public function serialize() {
        
    }

    public function unserialize($serialized) {
        
    }

    public function eraseCredentials() {
        
    }

    public function getPassword() {
        
    }

    public function getRoles() {
        
    }

    public function getSalt() {
        
    }

    public function getUsername() {
        
    }

}
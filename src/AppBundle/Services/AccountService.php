<?php
namespace AppBundle\Services;

use Symfony\Component\HttpFoundation\ParameterBag;

class AccountService extends AbstractService
{
    
    protected $encoder;
    
    public function setEncoder($encoder) 
    {
        $this->encoder = $encoder;
    }
    
    public function create(ParameterBag $pb)
    {
        print_r($pb);
    }
}
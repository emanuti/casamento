<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
//use AppBundle\Form\Model\PerfilModel;
use AppBundle\Entity\Perfil;
use AppBundle\Form\Type\CreatePerfilType;
use AppBundle\Form\Type\DeletePerfilType;

class PerfilController extends AbstractController
{
    /**
     * @Route("/perfil/create", name="perfil_create")
     * @param \Symfony\Component\HttpFoundation\Request $request
     */
    public function createAction(Request $request)
    {
        $form = $this->createForm(new CreatePerfilType(), new Perfil());
        
        $form->handleRequest($request);
        
        if($form->isValid()) {
            $srv = $this->get('form');
            $srv->save($form->getData());
        }
        
        return $this->render(
            'AppBundle:Perfil:create.html.twig',
            array('form' => $form->createView())
        );
    }
    
    /**
     * @Route("/perfil/delete", name="perfil_delete")
     * @param \Symfony\Component\HttpFoundation\Request $request
     */
    public function deleteAction(Request $request)
    {
        $form = $this->createForm(new DeletePerfilType(), new Perfil());
        
        $form->handleRequest($request);
        
        if($form->isValid()) {
            $srv = $this->get('form');
            $srv->delete($form->getData());
        }
        
        return $this->render(
            'AppBundle:Perfil:delete.html.twig',
            array('form' => $form->createView())
        );
    }
    
}

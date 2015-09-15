<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\Type\RegistrationType;
use AppBundle\Form\Model\Registration;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AccountController extends Controller
{
    /**
     * @Route("/register", name="account_register")
     */
    public function registerAction()
    {
        $registration = new Registration();
        $form = $this->createForm(new RegistrationType(), $registration, array(
            'action' => $this->generateUrl('account_create'),
        ));

        return $this->render(
            'AppBundle:Account:register.html.twig',
            array('form' => $form->createView())
        );
    }
    
    /**
     * @Route("/register/create", name="account_create")
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new RegistrationType(), new Registration());
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $registration = $form->getData();
            $registration->getUser()
                ->setEncodedPassword($this->container->get('security.password_encoder'), $registration->getUser()->getPassword());

            $em->persist($registration->getUser());
            $em->flush();

            return $this->redirectToRoute('login_route');
        }

        return $this->render(
            'AppBundle:Account:register.html.twig',
            array('form' => $form->createView())
        );
    }
}
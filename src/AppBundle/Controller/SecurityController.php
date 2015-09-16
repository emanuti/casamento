<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\ForgotPasswordType;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login_route")
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'security/login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction(){}
    
    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(){}
    
    /**
     * @Route("/forgot_password", name="forgot_password")
     */
    public function forgotPasswordAction(Request $request) 
    {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new ForgotPasswordType());
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $registration = $form->getData();
            \Doctrine\Common\Util\Debug::dump($registration);
            die;
//            $em->persist($registration->getUser());
//            $em->flush();
//            $user = $em->getRepository('AppBundle:User')->findBy(array('email' => $registration));

            return $this->redirectToRoute('security/forgot_password.html.twig');
        }

        return $this->render(
            'security/forgot_password.html.twig',
            array('form' => $form->createView())
        );
    }
}
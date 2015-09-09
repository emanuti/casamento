<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login_route")
     */
    public function loginAction(Request $request)
<<<<<<< HEAD
    {
//        $user = new \AppBundle\Entity\User();
//        $plainPassword = '123456';
//        $encoder = $this->container->get('security.password_encoder');
//        $encoded = $encoder->encodePassword($user, $plainPassword);
//print_r($encoded);
//\Doctrine\Common\Util\Debug::dump($this->getDoctrine()->getEntityManager()->find('AppBundle:User', 1));
//                
=======
    {                
>>>>>>> c4183ffbae5f1ea0886333ed54781b59719f299d
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
<<<<<<< HEAD
    public function loginCheckAction()
    {
        // this controller will not be executed,
        // as the route is handled by the Security system
    }
=======
    public function loginCheckAction(){}
>>>>>>> c4183ffbae5f1ea0886333ed54781b59719f299d
    
    /**
     * @Route("/logout", name="logout")
     */
<<<<<<< HEAD
    public function logoutAction() 
    {
        
    }
=======
    public function logoutAction(){}
>>>>>>> c4183ffbae5f1ea0886333ed54781b59719f299d
}
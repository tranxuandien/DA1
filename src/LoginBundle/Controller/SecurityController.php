<?php
/**
 * Created by PhpStorm.
 * User: GOLDENLOTUS
 * Date: 5/4/2016
 * Time: 12:16 AM
 */

namespace LoginBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller
{
    public function loginAction(Request $request){
        $session = $request->getSession();
        // get the login error if there is one
        if ($request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                Security::AUTHENTICATION_ERROR
            );
        } elseif(null !== $session && $session->has(Security::AUTHENTICATION_ERROR))
        {
            $error = $session->get(Security::AUTHENTICATION_ERROR);
            $session->remove(Security::AUTHENTICATION_ERROR);
        }
        else{
            $error='';
        }

        return $this->render(
            'LoginBundle:Security:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(Security::LAST_USERNAME),
                'error'         => $error,
            )
        );
    }
}
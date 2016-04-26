<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class UserController extends Controller
{


    public function loginAction(Request $request)
    {

        $userName = $request->get('username');
        $password = $request->get('password');

        var_dump($userName);
        var_dump($password);

        die(__FILE__ . ':' . __LINE__);

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    public function fetchAction(Request $request, $userId)
    {

        /** @var User $user */
        $user = $this->getUser();
        var_dump($user->getRoles());
        die();

        if (empty($userId)) {
            return $this->renderLogin();
        }

        var_dump($userId);

        die(__FILE__ . ':' . __LINE__);

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    private function renderLogin()
    {

        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'user/login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
            )
        );
    }
}

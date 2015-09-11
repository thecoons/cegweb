<?php

namespace CEG\ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function getUserAction()
    {
        return $this->render('CEGApplicationBundle:User:getUser.html.twig', array(
                // ...
            ));    }

}

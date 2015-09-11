<?php

namespace CEG\ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CEGApplicationBundle:Default:index.html.twig');
    }
}

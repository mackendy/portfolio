<?php

namespace Mac\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MacAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}

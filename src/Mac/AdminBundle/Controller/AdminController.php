<?php

namespace Mac\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('MacAdminBundle:Admin:index.html.twig');
    }
}

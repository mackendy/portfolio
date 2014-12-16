<?php

namespace Mac\PortfolioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('MacPortfolioBundle:Page:index.html.twig');
    }
}

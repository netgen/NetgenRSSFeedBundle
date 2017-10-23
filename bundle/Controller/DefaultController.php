<?php

namespace Netgen\RssFeedBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NetgenRssFeedBundle:Default:index.html.twig');
    }
}

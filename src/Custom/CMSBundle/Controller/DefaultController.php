<?php

namespace Custom\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        //rendering our frontend template
        return $this->render('CustomCMSBundle:Default:index.html.twig');
    }


}

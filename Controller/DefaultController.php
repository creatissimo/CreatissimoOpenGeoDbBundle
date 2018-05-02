<?php

namespace Creatissimo\OpenGeoDbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OpenGeoDbBundle:Default:index.html.twig');
    }
}

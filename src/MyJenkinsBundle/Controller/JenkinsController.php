<?php

namespace MyJenkinsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class JenkinsController extends Controller
{
    /**
     * @Route("/new")
     */
    public function indexAction()
    {
        return $this->render('MyJenkinsBundle:Default:index.html.twig');
    }
}

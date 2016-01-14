<?php

namespace Geosignal\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use \Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template("GeosignalWebBundle::index.html.twig")
     */
    public function indexAction()
    {
        return array();
    }
    /**
     * @Route("/output-success", name="result")
     * @Template("GeosignalWebBundle::result.html.twig")
     */
    public function resultAction()
    {
        return array();
    }
}

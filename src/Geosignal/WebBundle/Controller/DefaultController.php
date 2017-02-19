<?php

namespace Geosignal\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use \Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     * @Template("GeosignalWebBundle::index.html.twig")
     */
    public function indexAction(Request $request) {
        
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('GeosignalWebBundle:Product')->findOneBy(array('locale' => $request->getLocale()));
        
        return array('product' => $producto);
    }

    /**
     * @Route("/output-success", name="result")
     * @Template("GeosignalWebBundle::result.html.twig")
     */
    public function resultAction(Request $request) {
        $cookies = $request->cookies;
        $location = array($cookies->get('cookie_user_result_latitude'), $cookies->get('cookie_user_result_longitude'));
        return array('resultado' => $location);
    }

}

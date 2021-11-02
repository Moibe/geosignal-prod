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

        
        $referer = $request->headers->get('referer');
        
        $valid_referals = $this->container->getParameter('referals');
        
        $response = $request->get('test') ? true:$this->strpos_array($referer, $valid_referals);
        
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('GeosignalWebBundle:Product')->findOneBy(array('locale' => $request->getLocale()));
        if ($this->container->getParameter('payment_type') == "regular" || !$response) {
            return $this->render("GeosignalWebBundle:Alt:index.html.twig", array('product' => $producto));
        }

        return array('product' => $producto); 
    }

    /**
     * @Route("/output-success", name="result")
     * @Template("GeosignalWebBundle::result.html.twig")
     */
    public function resultAction(Request $request) {
        $cookies = $request->cookies;

        if ($this->container->getParameter('payment_type') == "regular" && !$cookies->get('cookie_user_result_latitude') && !$cookies->get('cookie_user_result_longitude')) {
            $filename = "codigomapas.zip";

            /**
             * $basePath can be either exposed (typically inside web/)
             * or "internal"
             */
            $basePath = $this->container->getParameter('kernel.root_dir') . '/Resources/downloables';

            $filePath = $basePath . '/' . $filename;

            header('Content-Description: File Transfer');
            header('Content-Type: application/vnd.android.package-archive');
            header('Content-Disposition: inline; filename=' . basename($filename));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filePath));
            @ob_clean();
            flush();
            readfile($filePath);
        }


        $location = array($cookies->get('cookie_user_result_latitude'), $cookies->get('cookie_user_result_longitude'));
        return array('resultado' => $location);
    }
    
    protected function strpos_array($haystack, $needles) {
    if ( is_array($needles) ) {
        foreach ($needles as $str) {
            if ( is_array($str) ) {
                $pos = strpos_array($haystack, $str);
            } else {
                $pos = strpos($haystack, $str);
            }
            if ($pos !== FALSE) {
                return $pos;
            }
        }
    } else {
        return strpos($haystack, $needles);
    }
}

}

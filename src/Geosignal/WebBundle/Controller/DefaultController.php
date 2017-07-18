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

        if ($this->container->getParameter('payment_type') == "regular") {
            return $this->render("GeosignalWebBundle:Alt:index.html.twig", array('product' => $producto));
        }

        return array('product' => $producto);
    }

    /**
     * @Route("/output-success", name="result")
     * @Template("GeosignalWebBundle::result.html.twig")
     */
    public function resultAction(Request $request) {

        if ($this->container->getParameter('payment_type') == "regular") {
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


        $cookies = $request->cookies;
        $location = array($cookies->get('cookie_user_result_latitude'), $cookies->get('cookie_user_result_longitude'));
        return array('resultado' => $location);
    }

}

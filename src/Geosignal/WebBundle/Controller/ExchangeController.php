<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Geosignal\WebBundle\Controller;

/**
 * Description of newPHPClass
 *
 * @author dioner911
 */
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ExchangeController extends \Symfony\Bundle\FrameworkBundle\Controller\Controller {

    /**
     *
     * @Route("/pay/product/{id}", name="do_payment")
     * * @Template()
     */
    public function doPayment(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('GeosignalWebBundle:Product')->find($id);

        $errores = null;
        if ($request->getMethod() == 'POST') {

            $conekta = $this->get('conekta');

            try {
                $charge = $conekta->charge(array(
                    'description' => $producto->getName(),
                    'reference_id' => $producto->getName() . ' ' . $producto->getId(),
                    'amount' => $producto->getPrice() * 100,
                    'currency' => $producto->getLocale() != "es_MX" ? 'USD' : 'MXN',
                    'card' => $request->get('conektaTokenId'),
                    'details' => array(
                        'name' => $request->get('card-name'),
                        'phone' => $request->get('phone'),
                        'email' => $request->get('email'),
                        'line_items' => array(
                            array(
                                'name' => $producto->getName(),
                                'description' => $producto->getName(),
                                'unit_price' => $producto->getPrice() * 100,
                                'quantity' => 1,
                                'sku' => $producto->getId(),
                                'type' => 'service'
                            )
                        ),
                        'billing_address' => array(
                            'street1' => $request->get('address'),
                            'street2' => null,
                            'street3' => null,
                            'city' => $request->get('city'),
                            'state' => $request->get('city'),
                            'zip' => $request->get('zipCode'),
                            'country' => $request->get('country'),
                            'phone' => $request->get('phone'),
                            'email' => $request->get('email')
                        ),
                        'shipment' =>
                        array(
                            "carrier" => "geosignal",
                            "service" => "tracking",
                            "price" => $producto->getPrice() * 100,
                            'address' => array(
                                'street1' => $request->get('address'),
                                'street2' => null,
                                'street3' => null,
                                'city' => $request->get('city'),
                                'state' => $request->get('city'),
                                'zip' => $request->get('zipCode'),
                                'country' => $request->get('country'),
                                'phone' => $request->get('phone'),
                                'email' => $request->get('email')
                            )
                        )
                    )
                ));


                return $this->redirect($this->generateUrl('result'));
            } catch (\Conekta_Error $e) {
                $errores = array(
                    'error' => $e->message_to_purchaser
                );
            }
        }




        return $this->render('GeosignalWebBundle:Exchange:payment.html.twig', array('producto' => $producto, 'errores' => $errores));
    }

    /**
     *
     * @Route("/payment/success/{id}", name="payment_success")
     * @Template()
     */
    public function successPayment(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $producto = $em->getRepository('SSAdminBundle:Product')->find($id);

        return array('producto' => $producto);
    }

}

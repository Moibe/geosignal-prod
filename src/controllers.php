<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));




$app->get('/', function () use ($app) {
            $lang = $app['session']->get('current_language') ? $app['session']->get('current_language') : 'es';

            $dolar = 19;
            $euro = 21;
            $libra = 27;

            switch ($lang) {
                case "es":
                    $payment = (object) array('number' => 12 * $dolar, 'string' => '$12.00 USD');
                    break;
                case "asia":
                    $payment = (object) array('number' => 10 * $dolar, 'string' => '$10.00 USD');
                    break;
                case "de":
                    $payment = (object) array('number' => 14 * $euro, 'string' => '€14.00 EUR');
                    break;
                case "en":
                    $payment = (object) array('number' => 14 * $dolar, 'string' => '$10.00 USD');
                    break;
                case "eu":
                    $payment = (object) array('number' => 10 * $euro, 'string' => '€10.00 EUR');
                    break;
                case "fr":
                    $payment = (object) array('number' => 9 * $euro, 'string' => '€9.00 EUR');
                    break;
                case "in":
                    $payment = (object) array('number' => 7 * $euro, 'string' => '$7.00 USD');
                    break;
                case "it":
                    $payment = (object) array('number' => 11 * $euro, 'string' => '€11.00 EUR');
                    break;
                case "nl":
                    $payment = (object) array('number' => 14 * $euro, 'string' => '€14.00 EUR');
                    break;
                case "pt":
                    $payment = (object) array('number' => 11 * $euro, 'string' => '€11.00 EUR');
                    break;
                case "uk":
                    $payment = (object) array('number' => 14 * $libra, 'string' => '£14.00 GBP');
                    break;
            }


            return $app['twig']->render('index.html.twig', array('language' => $lang, 'payment' => $payment));
        })
        ->bind('homepage')
;

$app->get('/output-success', function () use ($app) {
            $lang = $app['session']->get('current_language') ? $app['session']->get('current_language') : 'es';
            return $app['twig']->render('result.html.twig', array('language' => $lang));
        })
        ->bind('result')
;

$app->match('/payment', 'Controller\ExchangeController::indexAction')->bind('payment');

$app->get('/{lang}', function($lang) use($app) {
    /*
     * check if language exists
     */
    $app['session']->set('current_language', $lang);
    return $app->redirect($app['url_generator']->generate('homepage'));
});



$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/' . $code . '.html.twig',
        'errors/' . substr($code, 0, 2) . 'x.html.twig',
        'errors/' . substr($code, 0, 1) . 'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});



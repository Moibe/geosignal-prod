<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));




$app->get('/', function () use ($app) {
            $lang = $app['session']->get('current_language') ? $app['session']->get('current_language') : 'es';
            return $app['twig']->render('index.html.twig', array('language' => $lang));
        })
        ->bind('homepage')
;

$app->get('/output-success', function () use ($app) {
            $lang = $app['session']->get('current_language') ? $app['session']->get('current_language') : 'es';
            return $app['twig']->render('result.html.twig', array('language' => $lang));
        })
        ->bind('result')
;

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

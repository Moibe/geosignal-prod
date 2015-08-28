<?php

use Silex\Application;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\RoutingServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;
use Silex\Provider\TranslationServiceProvider;
use Symfony\Component\Translation\Loader\YamlFileLoader;
use Silex\Provider\SessionServiceProvider;

define('API_PAGO_SUCURSAL', '4e076438fafdade3ebb2e55ffa95fe696192c005');
define('API_PAGO_USUARIO', '3582f00572adc32f2d225793fdcd9a47d1f572cb');


$app = new Application();
$app->register(new RoutingServiceProvider());
$app->register(new ValidatorServiceProvider());
$app->register(new ServiceControllerServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());

$app->register(new SessionServiceProvider, array(
    'session.storage.save_path' => dirname(__DIR__) . '/tmp/sessions'
));

$app->register(new TranslationServiceProvider(), array(
    'locale' => "es",
    'locale_fallbacks' => array('en', 'it', 'de', 'fr', 'nl', 'pt', 'uk', 'eu', 'in', 'asia'),
));

$app['twig'] = $app->extend('twig', function ($twig, $app) {
    // add custom globals, filters, tags, ...

    $twig->addFunction(new \Twig_SimpleFunction('asset', function ($asset) use ($app) {
        return $app['request_stack']->getMasterRequest()->getBasepath() . '/' . ltrim($asset, '/');
    }));

    return $twig;
});

if ($app['session']->get('current_language')) {
    $app['translator'] = $app->extend('translator', function($translator, $app) {

        $code = $app['session']->get('current_language');

        $translator->addLoader('yaml', new YamlFileLoader());
        $translator->addResource('yaml', __DIR__ . '/../resources/locales/' . $code . '.yml', $code);

        return $translator;
    });
}

$lang = "es";
if ($app['session']->get('current_language')) {
    $lang = $app['session']->get('current_language');
}
$app['translator']->setLocale($lang);

return $app;

<?php

namespace Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ExchangeController {

    public function indexAction(Request $request, Application $app) {

        foreach ($request->request->all() as $key => $val) {
            $params[$key] = urlencode($val);
        }

        $data = $data = array(
            'idServicio' => urlencode("3"),
            'idSucursal' => urlencode(API_PAGO_SUCURSAL),
            'idUsuario' => urlencode(API_PAGO_USUARIO),
            'nombre' => $params['nombre'],
            'apellidos' => $params['apellidos'],
            'numeroTarjeta' => $params['numeroTarjeta'],
            'cvt' => $params['cvt'],
            'cp' => $params['cp'],
            'mesExpiracion' => $params['mesExpiracion'],
            'anyoExpiracion' => $params['anyoExpiracion'],
            'monto' => $params['monto'],
            'email' => $params['email'],
            'telefono' => $params['telefono'],
            'celular' => $params['celular'],
            'calleyNumero' => $params['calleyNumero'],
            'colonia' => $params['colonia'],
            'municipio' => $params['municipio'],
            'estado' => $params['estado'],
            'pais' => $params['pais'],
            'param1' => $params['param1'],
            'ip' => urlencode($_SERVER['REMOTE_ADDR']),
            'httpUserAgent' => urlencode($_SERVER['HTTP_USER_AGENT']));

        $cadena = '';
        foreach ($data as $key => $valor) {
            $cadena.="&data[$key]=$valor";
        }
        $url = 'https://www.pagofacil.net/ws/public/Wsrtransaccion/index/format/json/?method=transaccion' . $cadena;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($response, true);
        $response = $response['WebServices_Transacciones']['transaccion'];
        $valido = $response['autorizado'];


        if ($valido) {
            $json_response = array('status' => 'ok', 'response' => $response);
            $params = $response['data'];
            unset($params['numeroTarjeta'], $params['transFechaHora'], $params['bin'], $params['idSucursal'], $params['idServicio'], $params['idUsuario'], $params['cvt'], $params['cp'], $params['mesExpiracion'], $params['anyoExpiracion'], $params['mesExpiracion'], $params['calleyNumero'], $params['colonia'], $params['municipio'], $params['estado'], $params['pais'], $params['ip'], $params['httpUserAgent']);
        } else {
            $json_response = array('status' => 'error', 'response' => $response);
        }




        return new JsonResponse($json_response);
    }

}

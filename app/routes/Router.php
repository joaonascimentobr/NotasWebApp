<?php

namespace app\routes;

use app\helpers\Request;
use app\helpers\Uri;
use Exception;

class Router
{
    public const CONTROLLER_NAMESPACE = 'app\\controllers';

    public static function load(string $controller, string $method)
    {
        try {
            // verificar se o controller existe
            $controllerNamespace = self::CONTROLLER_NAMESPACE . '\\' . $controller;
            if (!class_exists($controllerNamespace)) {
                throw new Exception("O Controller {$controller} não existe");
            }

            $controllerInstance = new $controllerNamespace;

            if (!method_exists($controllerInstance, $method)) {
                throw new Exception("O método {$method} não existe no Controller {$controller}");
            }

            $controllerInstance->$method((object)$_REQUEST);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }

    public static function routes(): array
    {
        return [
            'get' => [
                '/' => fn () => self::load('HomeController', 'index'),
                '/login' => fn () => self::load('HomeController', 'index'),
                '/cadastro' => fn () => self::load('CadastroController', 'index'),
                '/registro' => fn () => self::load('CadastroController', 'index'),
                '/notas' => fn () => self::load('NotasController', 'index'),
            ],

            'post' => [
            ],

            'put' => [
            ],

            'delete' => [

            ],
        ] ;
    }


    public static function execute()
    {
        try {
            $routes = self::routes();
            $request = Request::get();
            $uri = Uri::get('path');
    
            // Verifica se a URL é um arquivo estático (como .css, .js)
            $staticExtensions = ['css', 'js', 'jpg', 'jpeg', 'png', 'gif', 'svg', 'ico'];
            $uriParts = explode('.', $uri);
            $extension = end($uriParts);
    
            if (in_array($extension, $staticExtensions)) {
                // Serve o arquivo estático
                self::serveStaticFile($uri);
                return;
            }
    
            if (!isset($routes[$request])) {
                throw new Exception('A rota não existe');
            }
    
            if (!array_key_exists($uri, $routes[$request])) {
                throw new Exception('A rota não existe');
            }
    
            $router = $routes[$request][$uri];
    
            if (!is_callable($router)) {
                throw new Exception("Route {$uri} is not callable");
            }
    
            $router();
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    
    private static function serveStaticFile($uri)
    {
        $filePath = $_SERVER['DOCUMENT_ROOT'] . $uri;
        if (file_exists($filePath)) {
            // Definir o tipo MIME apropriado
            $mimeTypes = [
                'css' => 'text/css',
                'js' => 'application/javascript',
                'jpg' => 'image/jpeg',
                'jpeg' => 'image/jpeg',
                'png' => 'image/png',
                'gif' => 'image/gif',
                'svg' => 'image/svg+xml',
                'ico' => 'image/x-icon',
            ];
    
            $extension = pathinfo($filePath, PATHINFO_EXTENSION);
            header('Content-Type: ' . $mimeTypes[$extension] ?? 'application/octet-stream');
            readfile($filePath);
            exit;
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "Arquivo não encontrado: {$uri}";
        }
    }
    

    

}
<?php
namespace Targobank\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

class TargobankRouteServiceProvider extends RouteServiceProvider
{
    public function map(Router $router)
    {
        $router->get('targobank', 'Targobank\Controllers\ContentController@show');
    }
}

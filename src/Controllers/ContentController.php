<?php
namespace Targobank\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Templates\Twig;

class ContentController extends Controller
{
    public function show(Twig $twig): string
    {
        return $twig->render('Targobank::content');
    }
}

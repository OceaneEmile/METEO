<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use WeatherModel;

class MainController extends AbstractController
{
    
    #[Route('/', name: 'main_home')]
    public function index(): Response
    {
// Pour dynamiser, je vais instancier WeatherData pour avoir accès au données du tableau
    $weatherData = WeatherModel::getWeatherData();
    //dump($weatherData); 
    //=> OK j'ai bien mon tableau
        return $this->render('main/home.html.twig', [
            'controller_name' => 'MainController',

            'weatherData' => $weatherData,
            
        ]);
    }
     
}

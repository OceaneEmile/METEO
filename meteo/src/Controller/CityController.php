<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use WeatherModel;

class CityController extends AbstractController
{
    #[Route('/city', name: 'app_city')]
    public function index(): Response
    {
        $defaultWeatherData = [];
    return $this->render('city/city.html.twig', [
           'controller_name' => 'CityController',
           'weatherData' => $defaultWeatherData,
       ]);
    }

    /**
     * Page de détail d'une ville
     * @param int $id L'id du film
     * @return Response
     */
// Les données pour une ville => j'utilise la méthode GET et id
// Ds le WeatherModel, j'utilise la méthode getWeatherBycityIndex
    #[Route('/city/{id}', name: 'app_city_id',methods:['GET'])]
    public function show(int $id)
    {
    $weatherData= WeatherModel::getWeatherByCityIndex($id);
    //dump($weatherData);
    return $this->render('city/city.html.twig', [
        'controller_name' => 'CityController',

        'weatherData' => $weatherData,
// Je veux afficher les villes de mon tableau dans le WeatherModel $WeatherData
        'city' => $weatherData['city']

    ]);
   
}


}

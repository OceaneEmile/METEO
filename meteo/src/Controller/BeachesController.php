<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BeachesController extends AbstractController
{
    #[Route('/beaches', name: 'app_beaches')]
    public function index(): Response
    {
        return $this->render('beaches/beaches.html.twig', [
            'controller_name' => 'BeachesController',
        ]);
    }
}

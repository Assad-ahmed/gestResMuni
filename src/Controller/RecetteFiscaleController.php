<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecetteFiscaleController extends AbstractController
{
    #[Route('/recette/fiscale', name: 'app_recette_fiscale')]
    public function index(): Response
    {
        return $this->render('recette_fiscale/index.html.twig', [
            'controller_name' => 'RecetteFiscaleController',
        ]);
    }
}

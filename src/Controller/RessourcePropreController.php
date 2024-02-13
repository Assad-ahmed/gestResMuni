<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RessourcePropreController extends AbstractController
{
    #[Route('/ressource_propre', name: 'app_ressource_propre')]
    public function index(): Response
    {
        return $this->render('ressource_propre/index.html.twig', [
            'controller_name' => 'RessourcePropreController',
        ]);
    }
}

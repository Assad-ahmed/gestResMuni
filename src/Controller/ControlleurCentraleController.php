<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ControlleurCentraleController extends AbstractController
{
    #[Route('/controlleur/centrale', name: 'app_controlleur_centrale')]
    public function index(): Response
    {
        return $this->render('controlleur_centrale/index.html.twig', [
            'controller_name' => 'ControlleurCentraleController',
        ]);
    }
}

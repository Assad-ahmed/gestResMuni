<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContributeurController extends AbstractController
{
    #[Route('/contributeur', name: 'app_contributeur')]
    public function index(): Response
    {
        return $this->render('contributeur/index.html.twig', [
            'controller_name' => 'ContributeurController',
        ]);
    }
}

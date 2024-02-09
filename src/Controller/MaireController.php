<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaireController extends AbstractController
{
    #[Route('/maire', name: 'app_maire')]
    public function index(): Response
    {
        return $this->render('maire/index.html.twig', [
            'controller_name' => 'MaireController',
        ]);
    }
}

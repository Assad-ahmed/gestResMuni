<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/controleur/centrale')]
class ControleurCentraleController extends AbstractController
{
    #[Route('/', name: 'app_controleur_centrale')]
    public function index(UserRepository $user): Response
    {
        return $this->render('controleur_centrale/userContrleur.html.twig', [
            'users' => $user->findAll(),
        ]);
    }
    
}

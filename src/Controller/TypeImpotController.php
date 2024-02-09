<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypeImpotController extends AbstractController
{
    #[Route('/type/impot', name: 'app_type_impot')]
    public function index(): Response
    {
        return $this->render('type_impot/index.html.twig', [
            'controller_name' => 'TypeImpotController',
        ]);
    }
}

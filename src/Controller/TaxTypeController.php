<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaxTypeController extends AbstractController
{
    #[Route('/tax/type', name: 'app_tax_type')]
    public function index(): Response
    {
        return $this->render('tax_type/index.html.twig', [
            'controller_name' => 'TaxTypeController',
        ]);
    }
}

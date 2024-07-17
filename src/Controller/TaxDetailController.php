<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaxDetailController extends AbstractController
{
    #[Route('/tax/detail', name: 'app_tax_detail')]
    public function index(): Response
    {
        return $this->render('tax_detail/index.html.twig', [
            'controller_name' => 'TaxDetailController',
        ]);
    }
}

<?php

namespace App\Controller;

use App\Entity\Ressource;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResourceController extends AbstractController
{
    /**
     * @Route("/ressources", name="ressource_index")
     */
    public function index(ManagerRegistry $registry): Response
    {
        $ressources = $registry->getRepository(Ressource::class)->findAll();

        return $this->render('ressource/index.html.twig', [
            'ressources' => $ressources,
        ]);
    }

    /**
     * @Route("/ressource/{id}", name="ressource_show")
     */
    public function show(Ressource $ressource): Response
    {
        // Récupérer les types d'impôts associés à cette ressource
        $taxTypes = $ressource->getTaxTypes(); // Supposons que vous avez une relation dans l'entité Resource

        return $this->render('ressource/show.html.twig', [
            'ressource' => $ressource,
            'taxTypes' => $taxTypes,
        ]);
    }
}

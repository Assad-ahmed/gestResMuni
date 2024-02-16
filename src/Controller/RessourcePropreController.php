<?php

namespace App\Controller;

use App\Entity\Ressourcepropre;
use App\Form\RessourceType;
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

    #[Route('/addRessource', name: 'add_ressource')]
    public function addRessource(): Response
    {
        $ressource = new Ressourcepropre();
        $form = $this->createForm(RessourceType::class,$ressource);
        return $this->render('ressource_propre/add.html.twig', [
            'form' =>$form->createView(),
        ]);
    }
}

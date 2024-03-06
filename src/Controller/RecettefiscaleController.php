<?php

namespace App\Controller;

use App\Entity\Recettefiscale;
use App\Form\RecettefiscaleType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/recettefiscale',)]
class RecettefiscaleController extends AbstractController
{
    #[Route('/', name: 'list_recettefiscale')]
    public function index(ManagerRegistry $registry, Request $request): Response
    {
        $manager=$registry->getRepository(Recettefiscale::class);
        $recettefascales=$manager->findAll();
        return $this->render('recettefiscale/index.html.twig', [
            'recettefascales' => $recettefascales,
        ]);
    }

    #[Route('/add', name: 'add_recettefiscale')]
    public function addListe(ManagerRegistry $registry, Request $request): Response
    {
        $recettefascale = new Recettefiscale();
        $form=$this->createForm(RecettefiscaleType::class,$recettefascale);
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {
            $manager=$registry->getManager();
            $manager->persist($recettefascale);
            $manager->flush();
            $this->addFlash('success',"la recette a ete ajouter avec success");
            $this->redirectToRoute('list_recettefiscale');
        }

        return $this->render('recettefiscale/add.html.twig', [
            'form'=>$form->createView()
        ]);
    }
}

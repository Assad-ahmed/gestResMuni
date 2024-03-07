<?php

namespace App\Controller;

use App\Entity\RecetteNonFiscale;
use App\Form\RecetteNonFiscaleType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/recette/non')]
class RecetteNonFiscaleController extends AbstractController
{
    #[Route('/', name: 'liste_recette_non_fiscale')]
    public function index(ManagerRegistry $registry, Request $request): Response
    {
        $manager=$registry->getRepository(RecetteNonFiscale::class);
        $recettenonfiscales=$manager->findAll();
        return $this->render('ressources/recette_non_fiscale/index.html.twig', [
            'recettenonfiscales' => $recettenonfiscales,
        ]);
    }
    #[Route('/add', name: 'add_recette_non_fiscale')]
    public function addRecetteNonFiscale(ManagerRegistry $registry, Request $request): Response
    {
        $recettenonfiscale = new RecetteNonFiscale();
        $form=$this->createForm(RecetteNonFiscaleType::class,$recettenonfiscale);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $manager=$registry->getManager();
            $manager->persist($recettenonfiscale);
            $manager->flush();
            $this->addFlash('success',"le nom de recette non fiscale a été ajouté avec success");
            return $this->redirectToRoute('liste_recette_non_fiscale');
        }else
        {

            return $this->render('ressources/recette_non_fiscale/add.html.twig', [
                'form' => $form->createView(),
            ]);
        }



    }
}

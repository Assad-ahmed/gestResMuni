<?php

namespace App\Controller;

use App\Entity\Contributeurs;
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
        return $this->render('ressources/recettefiscale/index.html.twig', [
            'recettefascales' => $recettefascales,
        ]);
    }

    #[Route('/edit{id?0)', name: 'edit_recettefiscale')]
    public function addListe(Recettefiscale $recettefiscale=null,ManagerRegistry $registry, Request $request): Response
    {
        $new=false;
        if (!$recettefiscale)
        {
            $new=true;
            $recettefascale = new Recettefiscale();
        }

        $form=$this->createForm(RecettefiscaleType::class,$recettefascale);
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {
            $manager=$registry->getManager();
            $manager->persist($recettefascale);
            $manager->flush();
            if ($new=true)
            {
                $message = " le nom de recette a été ajoute avec success" ;
            }
            else
            {
                $message= " le nom de recette n'existe pas";
            }

            $this->addFlash('success', $recettefiscale->getNom().$message);
            return  $this->redirectToRoute('list_recettefiscale');
        }else
        {
            return $this->render('ressources/recettefiscale/add.html.twig', [
                'form'=>$form->createView()
            ]);
        }

    }

    #[Route('/delete/{id}', name: 'delete_recettefiscale')]
    public function deleteRecette(Recettefiscale $recettefiscale= null, ManagerRegistry $registry):Response
    {
        if($recettefiscale)
        {
            $manager=$registry->getManager();
            $manager->remove($recettefiscale);
            $manager->flush();
            $this->addFlash('success', "le nom de recette a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "le nom de recette est innexistante ");
        }
        return $this->redirectToRoute('list_recettefiscale');
    }
}

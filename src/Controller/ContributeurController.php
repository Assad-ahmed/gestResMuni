<?php

namespace App\Controller;

use App\Entity\Contributeur;
use App\Form\ContributeurType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContributeurController extends AbstractController
{
    #[Route('/listeContributeur', name: 'liste_contributeur')]
    public function listeContributeur(ManagerRegistry $registry, Request $request): Response
    {
        $manager= $registry->getRepository(Contributeur::class);
        $contributeurs=$manager->findAll();
        return $this->render('contributeur/liste.html.twig', [
            'contributeurs'=>$contributeurs,
        ]);
    }
    #[Route('/addContributeur', name: 'add_contributeur')]
    public function addContributeur( ManagerRegistry $registry, Request $request): Response
    {
        $contributeur = new Contributeur();
        $form = $this->createForm(ContributeurType::class, $contributeur);

        $form->handleRequest($request);
        if ($form->isSubmitted())
        {
            $manager= $registry->getManager();
            $manager->persist($contributeur);
            $manager->flush();
            $this->addFlash('success', $contributeur->getNomContributeur(). " a ete ajoute avec success");

            return $this->redirectToRoute('liste_contributeur');
        }else{

            return $this->render('contributeur/add_contributeur.html.twig', [
                'form'=>$form->createView()
            ]);
        }

    }
}

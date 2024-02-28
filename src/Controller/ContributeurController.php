<?php

namespace App\Controller;

use App\Entity\Contributeurs;
use App\Entity\SiteCollecte;
use App\Form\ContributeurType;
use App\Form\SiteCollecteType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/contributeur')]
class ContributeurController extends AbstractController
{
    #[Route('/', name: 'liste_contributeur')]
    public function index(ManagerRegistry $registry, Request $request): Response
    {
        $manager = $registry->getRepository(Contributeurs::class);
        $contributeurs=$manager->findAll();
        return $this->render('contributeur/index.html.twig', [
            'contributeurs' => $contributeurs,
        ]);
    }

    #[Route('/add', name: 'add_contributeur')]
    public function addContributeur(ManagerRegistry $registry, Request $request): Response
    {

            $contributeurs = new Contributeurs();

        $form=$this->createForm(ContributeurType::class,$contributeurs);
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {
            $manager=$registry->getManager();
            $manager->persist($contributeurs);
            $manager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message=" a été ajouté avec success";
            }
            $this->addFlash('success', $contributeurs->getNom().$message);
            return $this->redirectToRoute('liste_site_collecte');
        }
        return $this->render('contributeur/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

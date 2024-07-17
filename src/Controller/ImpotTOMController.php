<?php

namespace App\Controller;

use App\Entity\ImpotCFPB;
use App\Entity\ImpotTOM;
use App\Form\ImpotTOMType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/impotTOM')]
class ImpotTOMController extends AbstractController
{
    #[Route('/', name: 'liste_impot_tom')]
    public function index(ManagerRegistry $registry, Request $request): Response
    {$manager=$registry->getRepository(ImpotTOM::class);
        $impotTOMs=$manager->findAll();
        return $this->render('impot_tom/index.html.twig', [
            'impotTOMs' => $impotTOMs,
        ]);
    }
    #[Route('/impot/tom/calculer', name: 'impot_tom_calculer')]

    public function new(Request $request,EntityManagerInterface $entityManager): Response
    {
        $impotTOM = new ImpotTOM();
        $form = $this->createForm(ImpotTOMType::class, $impotTOM);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $impotTOM->calculerImpotTOM();

            $entityManager->persist($impotTOM);
            $entityManager->flush();

            return $this->redirectToRoute('liste_impot_tom');
        }

        return $this->render('impot_tom/formulaire.html.twig', [

            'form' => $form->createView(),
        ]);
    }
}

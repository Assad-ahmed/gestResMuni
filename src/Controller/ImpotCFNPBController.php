<?php

namespace App\Controller;

use App\Entity\ImpotCFNPB;
use App\Entity\ImpotCFPB;
use App\Form\ImpotCFNPBType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/impotCFNPB')]
class ImpotCFNPBController extends AbstractController
{
    #[Route('/', name: 'liste_impot_cfnpb')]
    public function index( ManagerRegistry $registry, Request $request): Response
    {
        $manager=$registry->getRepository(ImpotCFNPB::class);
        $impotCFNPBs=$manager->findAll();
        return $this->render('impot_cfnpb/index.html.twig', [
            'impotCFNPBs' => $impotCFNPBs,
        ]);
    }

    #[Route('/impot/cfnpb/calculer', name: 'impot_cfnpb_calculer')]
    public function new(Request $request,EntityManagerInterface $entityManager): Response
    {
        $impotCFNPB= new ImpotCFNPB();
        $form = $this->createForm(ImpotCFNPBType::class, $impotCFNPB);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $impotCFNPB->calculerRevenuNet();
            $impotCFNPB->calculerImpotCFPNB();
            $entityManager->persist($impotCFNPB);
            $entityManager->flush();

            return $this->redirectToRoute('liste_impot_cfnpb');
        }

        return $this->render('impot_cfnpb/formulaire.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

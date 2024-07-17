<?php

namespace App\Controller;

use App\Entity\ImpotAssiValeur;
use App\Entity\ImpotCFPB;
use App\Entity\Ressource;
use App\Entity\TypeImpots;
use App\Form\ImpotAssiValeurType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImpotAssiValeurController extends AbstractController
{
    /**
     * @Route("/impotAssiValeur", name="impotAssiValeur_index")
     */
    public function index(ManagerRegistry $registry): Response
    {
        $impotCFPBs = $registry->getRepository(ImpotCFPB::class)->findAll();

        return $this->render('impot_assi_valeur/index.html.twig', [
            'impotCFPBs ' => $impotCFPBs ,
        ]);
    }

    /**
     * @Route("/impotAssiValeur/{id}", name="impotAssiValeur_show")
     */
    public function show(TypeImpots $typeImpots): Response
    {
        // Récupérer les types d'impôts associés à cette ressource
        $typeimpots = $typeImpots->getImpotAssiValeurs(); // Supposons que vous avez une relation dans l'entité Resource

        return $this->render('impot_assi_valeur/show.html.twig', [
            'typeImpots' => $typeImpots,
            'typeimpots' => $typeimpots,
        ]);
    }

    #[Route('/add-impotAssiValeur', name: 'add_impotAssiValeur')]
    public function addImpotAssiValeur(Request $request, EntityManagerInterface $em): Response
    {
        $impotassivaleur = new ImpotAssiValeur();
        $form = $this->createForm(ImpotAssiValeurType::class, $impotassivaleur);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($impotassivaleur);
            $em->flush();

            return $this->redirectToRoute('ImpotAssiValeur_index');
        }

        return $this->render('impot_assi_valeur/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

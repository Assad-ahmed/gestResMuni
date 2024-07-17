<?php

namespace App\Controller;

use App\Entity\ImpotCFPB;
use App\Form\ImpotCFPBType;
use App\service\CalculService;
use App\service\ImpotCFPBService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/impotCFPB')]
class ImpotCFPBController extends AbstractController
{
    #[Route('/', name: 'liste_impot_cfpb')]
    public function index(ManagerRegistry $registry, Request $request): Response
    {
        $manager=$registry->getRepository(ImpotCFPB::class);
        $impotCFPBs=$manager->findAll();
        return $this->render('impot_cfpb/index.html.twig', [
            'impotCFPBs' => $impotCFPBs,
        ]);
    }
    #[Route('/impot/cfpb/calculer', name: 'impot_cfpb_calculer')]

    public function calculerImpot(Request $request,EntityManagerInterface $entityManager): Response
    {
        $impotCFPB = new ImpotCFPB();
        $form = $this->createForm(ImpotCFPBType::class, $impotCFPB);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Calculer le revenu net en fonction de la valeur locative et du type de bâtiment
            $valeurLocative = $impotCFPB->getValeurLocative();
            $typeBatiment = $impotCFPB->getTypeBatiment();

            // Appliquer les déductions selon le type de bâtiment
            if ($typeBatiment === 'usine') {
                $deduction = 0.5;
            } else {
                $deduction = 0.4;
            }

            $revenuNet = $valeurLocative * (1 - $deduction);

            // Calculer l'impôt CFPB basé sur le revenu net
            $taux = 0.15;
            $montant = $revenuNet * $taux;

            $impotCFPB->setRevenuNet($revenuNet);
            $impotCFPB->setMontant($montant);

            // Enregistrer l'objet en base de données ou effectuer d'autres traitements nécessaires
            $entityManager->persist($impotCFPB);
            $entityManager->flush();
            return $this->redirectToRoute('liste_impot_cfpb', [
                'id' => $impotCFPB->getId(),
            ]);
        }

        return $this->render('impot_cfpb/formulaire.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    private $calculService;

    public function __construct(CalculService $calculService)
    {
        $this->calculService = $calculService;
    }

    #[Route('/impots', name: 'liste_impotcfpb')]

    public function listeImpots(): Response
    {
        $impotCFPBs = $this->calculService->obtenirListeImpots();

        return $this->render('impot_cfpb/liste.html.twig', [
            'impotCFPBs' => $impotCFPBs,
        ]);
    }
    #[Route('/calculer-somme-impots-cfpb', name: 'calculer_somme_impots_cfpb')]
    /**
     * @Route("/calculer-somme-impots-cfpb", name="calculer_somme_impots_cfpb")
     */
    public function calculerSommeImpotsCFPB(): Response
    {
        $sommeImpots = $this->calculService->obtenirSommeImpots();

        // Redirige ou affiche le résultat selon vos besoins
        return $this->render('impot_cfpb/resultat.html.twig', [
            'sommeImpots' => $sommeImpots,
        ]);
    }
}

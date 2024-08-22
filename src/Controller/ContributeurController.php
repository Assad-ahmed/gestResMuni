<?php

namespace App\Controller;

use App\Entity\Contributeurs;
use App\Entity\Paiement;
use App\Form\ContributeursType;
use App\Repository\ContributeursRepository;
use App\Repository\PaiementRepository;
use Doctrine\Persistence\ManagerRegistry;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/contributeur')]
class ContributeurController extends AbstractController

{


    public function __construct(private LoggerInterface $logger)
    {}
    #[Route('/', name: 'liste_contributeur')]
    public function index(ContributeursRepository $contributeurRepo, PaiementRepository $paiementRepo): Response
    {
        $dateToday = new \DateTime('today');

        $this->logger->info('Date du jour', ['date' => $dateToday->format('d-m-Y')]);

        $contributeurs = $contributeurRepo->findAll();

        $data = [];
        foreach ($contributeurs as $contributeur) {
            $paiementsDuJour = $paiementRepo->findByContributeurAndDay($contributeur, $dateToday);

            // Calcul du montant du jour
            $montantDuJour = array_reduce($paiementsDuJour, fn($sum, $paiement) => $sum + $paiement->getMontant(), 0);
            $this->logger->info('Montant du jour pour contributeur', [
                'contributeur' => $contributeur->getNumeroEtablissement(),
                'montantDuJour' => $montantDuJour
            ]);

            // Calcul du montant du mois
            $paiementsDuMois = $paiementRepo->findByContributeurAndMonth($contributeur, $dateToday);
            $montantDuMois = array_reduce($paiementsDuMois, fn($sum, $paiement) => $sum + $paiement->getMontant(), 0);

            // Montant attendu
            $montantAttenduDuJour = 1000; // Exemple
            $montantAttenduDuMois = 3000; // Exemple

            $manqueAGagnerDuJour = $montantAttenduDuJour - $montantDuJour;
            $manqueAGagnerDuMois = $montantAttenduDuMois - $montantDuMois;

            $data[] = [
                'id' => $contributeur->getId(),
                'numeroEtablissement' => $contributeur->getNumeroEtablissement(),
                'nomProprietaire' => $contributeur->getNom(),
                'prenomProprietaire' => $contributeur->getPrenom(),
                'montantDuJour' => $montantDuJour,
                'montantDuMois' => $montantDuMois,
                'manqueAGagnerDuJour' => $manqueAGagnerDuJour,
                'manqueAGagnerDuMois' => $manqueAGagnerDuMois,
            ];
        }

        return $this->render('contributeur/index.html.twig', [
            'contributeurs' => $data,
        ]);
    }

   #[Route('/edit{id?0}', name: 'edit_contributeur')]
    public function addContributeur(Contributeurs $contributeurs=null,ManagerRegistry $registry, Request $request): Response
    {
        $new=false;
        if (!$contributeurs)
        {
            $new=true;
            $contributeurs = new Contributeurs();
        }


        $form=$this->createForm(ContributeursType::class,$contributeurs);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
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
            return $this->redirectToRoute('liste_contributeur');
        }else{
            return $this->render('contributeur/add.html.twig', [
                'form' => $form->createView(),
            ]);
        }

    }

    #[Route('/{id}', name: 'contributeur_show', methods: ['GET'])]
    public function show(Contributeurs $contributeur, PaiementRepository $paiementRepo): Response
    {
        $dateToday = new \DateTime('today');

        // Calcul des paiements mensuels et annuels
        $paiementsDuMois = $paiementRepo->findByContributeurAndMonth($contributeur, $dateToday);

        $montantCumuleMensuel = array_reduce($paiementsDuMois, fn($sum, $paiement) => $sum + $paiement->getMontant(), 0);

        return $this->render('contributeur/show.html.twig', [
            'contributeur' => $contributeur,
            'paiements' => $paiementRepo->findBy(['contributeur' => $contributeur]), // Tous les paiements du contributeur
            'montantCumuleMensuel' => $montantCumuleMensuel,

        ]);
    }

    #[Route('/delete/{id}', name: 'delete_contributeur')]
    public function deleteContributeur(Contributeurs $contributeur = null, ManagerRegistry $registry): Response
    {
        if ($contributeur) {
            $entityManager = $registry->getManager();

            // Supprimer les paiements associés (si pas en cascade)
            $paiementRepo = $entityManager->getRepository(Paiement::class);
            $paiements = $paiementRepo->findBy(['contributeur' => $contributeur]);
            foreach ($paiements as $paiement) {
                $entityManager->remove($paiement);
            }

            // Supprimer le contributeur
            $entityManager->remove($contributeur);

            try {
                $entityManager->flush();
                $this->addFlash('success', 'Le contributeur a été supprimé avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la suppression.');
                // Optionnel: logger l'erreur
                $this->logger->error('Erreur lors de la suppression du contributeur', ['exception' => $e]);
            }
        } else {
            $this->addFlash('error', 'Le contributeur est inexistant.');
        }

        return $this->redirectToRoute('liste_contributeur');
    }



}

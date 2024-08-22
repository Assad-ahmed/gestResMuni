<?php

namespace App\Controller;


use App\Entity\SiteCollecte;
use App\Form\SiteCollecteType;
use App\Repository\ContributeursRepository;
use App\Repository\PaiementRepository;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/site')]
class SiteCollecteController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'liste_site_collecte')]
    public function index(ManagerRegistry $registry, Request $request, $page, $nbre): Response
    {
        $manager=$registry->getRepository(SiteCollecte::class);
        $nbresite = $manager->count([]);
        $nbrePage = ceil($nbresite / $nbre);
        $siteCollectes=$manager->findBy([],['nom'=>'ASC']);
        return $this->render('site_collecte/index.html.twig', [
            'siteCollectes' =>$siteCollectes,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage
        ]);
    }

    #[Route('/edit{id?0}', name: 'edit_site_collecte')]
    public function addSite(SiteCollecte $siteCollecte=null,ManagerRegistry $registry, Request $request): Response
    {
        $new=false;
        if (!$siteCollecte)
        {
            $new=true;
            $siteCollecte = new SiteCollecte();
        }
        $form=$this->createForm(SiteCollecteType::class,$siteCollecte);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $manager=$registry->getManager();
            $manager->persist($siteCollecte);
            $manager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
              $message=" a été ajouté avec success";
            }
            $this->addFlash('success', $siteCollecte->getNom().$message);
            return $this->redirectToRoute('liste_site_collecte');
        }
        return $this->render('site_collecte/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[
        Route('/delete/{id}', name: 'delete_site'),
        IsGranted('ROLE_CONTROLEUR_CENTRALE')
        ]
    public function deleteSite(SiteCollecte $siteCollecte=null, ManagerRegistry $registry):Response
    {
        if($siteCollecte)
        {
            $manager=$registry->getManager();
            $manager->remove($siteCollecte);
            $manager->flush();
            $this->addFlash('success', "le site a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "le site innexistante ");
        }
        return $this->redirectToRoute('liste_site_collecte');
    }

    #[Route('/site-collecte/{id}', name: 'site_collecte_contributeurs')]
    public function siteCollecteContributeurs(SiteCollecte $siteCollecte=null, ContributeursRepository $contributeurRepo, PaiementRepository $paiementRepo): Response
    {
        $dateToday = new \DateTime('today');
        $contributeurs = $contributeurRepo->findContributeursBySite($siteCollecte, $dateToday);

        $data = [];
        foreach ($contributeurs as $contributeur) {
            $paiementsDuJour = $paiementRepo->findPaiementsByContributeurAndDate($contributeur, $dateToday);
            $paiementsDuMois = $paiementRepo->findPaiementsByContributeurAndMonth($contributeur, $dateToday);

            // Calculs des montants
            $montantDuJour = array_reduce($paiementsDuJour, fn($sum, $paiement) => $sum + $paiement->getMontant(), 0);
            $montantDuMois = array_reduce($paiementsDuMois, fn($sum, $paiement) => $sum + $paiement->getMontant(), 0);
            $totalCollecte = array_reduce($paiementsDuMois, fn($sum, $paiement) => $sum + $paiement->getMontant(), 0); // Total collecté

            // Montants attendus
            $montantAttenduDuJour = 1000; // Remplacez par vos valeurs réelles
            $montantAttenduDuMois = 3000; // Remplacez par vos valeurs réelles

            $manqueAGagnerDuJour = $montantAttenduDuJour - $montantDuJour;
            $manqueAGagnerDuMois = $montantAttenduDuMois - $montantDuMois;

            $data[] = [
                'numeroEtablissement' => $contributeur->getNumeroEtablissement(),
                'nomProprietaire' => $contributeur->getNom(),
                'prenomProprietaire' => $contributeur->getPrenom(),
                'montantDuJour' => $montantDuJour ?: '0 F CFA',
                'montantDuMois' => $montantDuMois,
                'manqueAGagnerDuJour' => $manqueAGagnerDuJour,
                'manqueAGagnerDuMois' => $manqueAGagnerDuMois,
                'totalCollecte' => $totalCollecte,
            ];
        }

        return $this->render('site_collecte/show.html.twig', [
            'siteCollecte' => $siteCollecte,
            'contributeurs' => $data,
        ]);
    }

}

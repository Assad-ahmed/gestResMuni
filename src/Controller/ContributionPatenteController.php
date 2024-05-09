<?php

namespace App\Controller;

use App\Entity\ContributionPatente;
use App\Entity\Impot;
use App\Entity\ImpotCapitation;
use App\Form\ContributionPatenteType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/contribution/patente')]
class ContributionPatenteController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'liste_contribution_patente')]
    public function index(ManagerRegistry $registry,$page,$nbre, Request $request ): Response
    {
        $manager=$registry->getRepository(ContributionPatente::class);
        $nbreContribution = $manager->count([]);
        $nbrePage = ceil($nbreContribution / $nbre);
        $contributionPatentes=$manager->findBy([],['nom'=>'ASC']);
        return $this->render('contribution_patente/index.html.twig', [
            'contributionPatentes' => $contributionPatentes,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage
        ]);
    }

    #[Route('/edit/{id?0}', name: 'edit_contribution_patente')]
    public function addContributionPatente(ContributionPatente $contributionPatente=null,ManagerRegistry $registry, Request $request ): Response
    {
        $new=false;
        if (!$contributionPatente)
        {
            $new=true;
            $contributionPatente = new ContributionPatente();
        }

        $manager=$registry->getManager();
        $form=$this->createForm(ContributionPatenteType::class,$contributionPatente);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $manager=$registry->getManager();
            $manager->persist($contributionPatente);
            $manager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message=" a été ajouté avec success";
            }
            $this->addFlash('success', $contributionPatente->getNom().$message);
            return $this->redirectToRoute('liste_contribution_patente');
        }
        return $this->render('contribution_patente/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/detail', name: 'detail_contribution_patente')]
    public function detailContribution_patente(ManagerRegistry  $registry, Request $request): Response
    {
        $manager=$registry->getRepository(ContributionPatente::class);
        $contribution_patentes=$manager->findAll();
        return $this->render('contribution_patente/serve.html.twig', [
            'contribution_patentes'=>$contribution_patentes

        ]);
    }
    #[Route('/delete/{id}', name: 'delete_contribution_patente')]
    public function deleteImpot(ContributionPatente $contributionPatente=null, ManagerRegistry $registry):Response
    {
        if($contributionPatente)
        {
            $manager=$registry->getManager();
            $manager->remove($contributionPatente);
            $manager->flush();
            $this->addFlash('success', "le nom de contribution patente a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "le nom de contribution patente est innexistante ");
        }
        return $this->redirectToRoute('liste_contribution_patente');
    }
}

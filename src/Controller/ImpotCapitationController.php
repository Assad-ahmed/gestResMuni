<?php

namespace App\Controller;

use App\Entity\ContributionPatente;
use App\Entity\Impot;
use App\Entity\ImpotCapitation;
use App\Form\ContributionPatenteType;
use App\Form\ImpotCapitationType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/impot/capitation')]
class ImpotCapitationController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'liste_impot_capitation')]
    public function index(ManagerRegistry $registry,$page,$nbre, Request $request): Response
    {
        $manager=$registry->getRepository(ImpotCapitation::class);
        $nbreImpotCap= $manager->count([]);
        $nbrePage = ceil($nbreImpotCap/ $nbre);
        $impotCapitations=$manager->findBy([],['nom'=>'ASC']);
        return $this->render('impot_capitation/index.html.twig', [
            'impotCapitations' => $impotCapitations,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage
        ]);
    }

    #[Route('/edit/{id?0}', name: 'edit_impot_capitation')]
    public function addImpotCapitation(ImpotCapitation $impotCapitation=null,ManagerRegistry $registry, Request $request ): Response
    {
        $new=false;
        if (!$impotCapitation)
        {
            $new=true;
            $impotCapitation= new ImpotCapitation();
        }

        $manager=$registry->getManager();
        $form=$this->createForm(ImpotCapitationType::class,$impotCapitation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $manager=$registry->getManager();
            $manager->persist($impotCapitation);
            $manager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message=" a été ajouté avec success";
            }
            $this->addFlash('success', $impotCapitation->getNom().$message);
            return $this->redirectToRoute('liste_impot_capitation');
        }
        return $this->render('impot_capitation/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/detail', name: 'detail_impot_capitation')]
    public function detailImpotCapitation(ManagerRegistry  $registry, Request $request): Response
    {
        $manager=$registry->getRepository(ImpotCapitation::class);
        $impotCapitations=$manager->findAll();
        return $this->render('impot_capitation/serve.html.twig', [
            'impotCapitations'=>$impotCapitations

        ]);
    }
    #[Route('/delete/{id}', name: 'delete_impot_capitation')]
    public function deleteImpot(ImpotCapitation $impotCapitation=null, ManagerRegistry $registry):Response
    {
        if($impotCapitation)
        {
            $manager=$registry->getManager();
            $manager->remove($impotCapitation);
            $manager->flush();
            $this->addFlash('success', "le nom d'impot capitation a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "le nom d'impot capitation est innexistante ");
        }
        return $this->redirectToRoute('liste_impot_capitation');
    }
}

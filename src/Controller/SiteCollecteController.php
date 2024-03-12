<?php

namespace App\Controller;

use App\Entity\Ressource;
use App\Entity\SiteCollecte;
use App\Form\SiteCollecteType;
use Doctrine\Persistence\ManagerRegistry;
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
        if ($form->isSubmitted())
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

    #[Route('/delete/{id}', name: 'delete_site')]
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
}

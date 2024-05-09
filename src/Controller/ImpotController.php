<?php

namespace App\Controller;

use App\Entity\Impot;
use App\Entity\Ristourne;
use App\Form\ImpotType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/impot')]
class ImpotController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'liste_impot')]
    public function index(ManagerRegistry $registry,Request $request,$page,$nbre): Response
    {
        $manager=$registry->getRepository(Impot::class);
        $nbreimpot = $manager->count([]);
        $nbrePage = ceil($nbreimpot / $nbre);
        $impots=$manager->findBy([],['nom'=>'ASC']);
        return $this->render('impot/index.html.twig', [
            'impots' => $impots,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage
        ]);
    }

    #[Route('/edit/{id?0}', name: 'edit_impot')]
    public function addImpot(Impot $impot=null,ManagerRegistry $registry, Request $request): Response
    {
        $manager=$registry->getManager();
        $form=$this->createForm(ImpotType::class, $impot);
        $form->handleRequest($request);
        if ($form->isSubmitted()  && $form->isValid())
        {
            $manager=$registry->getManager();
            $manager->persist($impot);
            $manager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message=" a été ajouté avec success";
            }
            $this->addFlash('success', $impot->getNom().$message);
            return $this->redirectToRoute('liste_impot');
        }
        return $this->render('impot/add.html.twig', [
            'form'=>$form->createView()
        ]);
    }

    #[Route('/detail', name: 'detail_impot')]
    public function detailImpot(ManagerRegistry  $registry, Request $request): Response
    {
       $manager=$registry->getRepository(Impot::class);
       $impot=$manager->findAll();
        return $this->render('impot/serve.html.twig', [
            'impot'=>$impot

        ]);
    }

    #[Route('/delete/{id}', name: 'delete_impot')]
    public function deleteImpot(Impot $impot=null, ManagerRegistry $registry):Response
    {
        if($impot)
        {
            $manager=$registry->getManager();
            $manager->remove($impot);
            $manager->flush();
            $this->addFlash('success', "le nom d'impot a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "le nom d'impot est innexistante ");
        }
        return $this->redirectToRoute('liste_impot');
    }
}

<?php

namespace App\Controller;

use App\Entity\Ristournes;
use App\Form\RistournesType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RistournesController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'list_ristournes')]
    public function index(ManagerRegistry $registry, Request $request, $page, $nbre): Response
    {
        $manager = $registry->getRepository(Ristournes::class);
        $nbreRistourne = $manager->count([]);
        $nbrePage = ceil($nbreRistourne / $nbre);
        $ristournes=$manager->findBy([],['typeRecette'=>'ASC']);
        return $this->render('ristournes/index.html.twig', [
            'ristournes' => $ristournes,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage
        ]);
    }

    #[Route('/edit{id?0}', name: 'edit_ristournes')]
    public function addRistournes(Ristournes $ristournes=null,ManagerRegistry $registry, Request $request): Response
    {
        $new = false;
        if (!$ristournes)
        {
            $new = true;
            $ristournes = new Ristournes();
        }

        $form = $this->createForm(RistournesType::class,$ristournes);
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {
            $manager = $registry->getManager();
            $manager->persist($ristournes);
            $manager->flush();
            if ($new = true)
            {
                $massage = " a été mis à jour avec success";
            }else
            {
                $massage = " a été ajouté avec success";
            }

            $this->addFlash('success', $ristournes->getTypeRecette().$massage);
            return  $this->redirectToRoute('list_ristournes');
        }else{

            return $this->render('ristournes/formulaire.html.twig', [
                'form' => $form->createView()
            ]);
        }

    }

    #[Route('/delete/{id}', name: 'delete_ristournes')]
    public function deleteRistournes(Ristournes $ristournes=null, ManagerRegistry $registry):Response
    {
        if($ristournes)
        {
            $manager=$registry->getManager();
            $manager->remove($ristournes);
            $manager->flush();
            $this->addFlash('success', "le ristoune a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "le ristourne est innexistante ");
        }
        return $this->redirectToRoute('liste_ristournes');
    }
}

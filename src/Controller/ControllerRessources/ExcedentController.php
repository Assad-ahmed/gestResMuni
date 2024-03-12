<?php

namespace App\Controller\ControllerRessources;

use App\Entity\Excedent;
use App\Entity\Ristourne;
use App\Form\ExcedentType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/excedent')]
class ExcedentController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'liste_excedent')]
    public function index(ManagerRegistry $registry, Request $request, $page, $nbre): Response
    {
        $manager = $registry->getRepository(Excedent::class);
        $nbreExcedent = $manager->count([]);
        $nbrePage = ceil($nbreExcedent / $nbre);
        $excedents=$manager->findBy([],['nom'=>'ASC']);
        return $this->render('ressources/excedent/index.html.twig', [
            'excedents' => $excedents,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage
        ]);
    }

    #[Route('/edit{id?0}', name: 'edit_excedent')]
    public function addExcedent(Excedent $excedent=null,ManagerRegistry $registry, Request $request): Response
    {
        $new = false;
        if (!$excedent)
        {
            $new = true;
            $excedent = new Excedent();
        }

        $form = $this->createForm(ExcedentType::class,$excedent);
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {
            $manager = $registry->getManager();
            $manager->persist($excedent);
            $manager->flush();
            if ($new = true)
            {
                $massage = " a été mis à jour avec success";
            }else
            {
                $massage = " a été ajouté avec success";
            }

            $this->addFlash('success', $excedent->getNom().$massage);
            return  $this->redirectToRoute('liste_excedent');
        }else{

            return $this->render('ressources/excedent/add.html.twig', [
                'form' => $form->createView()
            ]);
        }

    }

    #[Route('/delete/{id}', name: 'delete_excedent')]
    public function deleteRistourne(Excedent $excedent=null, ManagerRegistry $registry):Response
    {
        if($excedent)
        {
            $manager=$registry->getManager();
            $manager->remove($excedent);
            $manager->flush();
            $this->addFlash('success', "le nom de excedent a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "le nom de excedent est innexistante ");
        }
        return $this->redirectToRoute('liste_excedent');
    }
}

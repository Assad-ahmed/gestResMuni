<?php

namespace App\Controller;

use App\Entity\Contributeurs;
use App\Form\ContributeurType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/contributeur')]
class ContributeurController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'liste_contributeur')]
    public function index(ManagerRegistry $registry, Request $request,$page,$nbre): Response
    {
        $manager = $registry->getRepository(Contributeurs::class);
        $nbreContributeur = $manager->count([]);
        $nbrePage = ceil($nbreContributeur / $nbre);
        $contributeurs=$manager->findBy([],['nom'=>'ASC']);
        return $this->render('contributeur/index.html.twig', [
            'contributeurs' => $contributeurs,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage

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


        $form=$this->createForm(ContributeurType::class,$contributeurs);
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

    #[Route('/delete/{id}', name: 'delete_contributeur')]
    public function deleteAgent(Contributeurs $contributeurs= null, ManagerRegistry $registry):Response
    {
        if($contributeurs)
        {
            $manager=$registry->getManager();
            $manager->remove($contributeurs);
            $manager->flush();
            $this->addFlash('success', "le contributeur a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "le contributeur est innexistante ");
        }
        return $this->redirectToRoute('liste_contributeur');
    }
}

<?php

namespace App\Controller;

use App\Entity\Ressource;
use App\Form\RessourceType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/ressource')]
class RessourceController extends AbstractController
{
    #[Route('/', name: 'liste_ressource')]
    public function index(ManagerRegistry $registry, Request $request): Response
    {
        $manager=$registry->getRepository(Ressource::class);
        $ressources = $manager->findAll();
        return $this->render('ressource/index.html.twig', [
            'ressources' => $ressources,
        ]);
    }
    #[Route('/id<\id+\>', name: 'datails_ressource')]
    public function detailRessource(Ressource $ressource=null,ManagerRegistry $registry, Request $request): Response
    {
        $manager=$registry->getRepository(Ressource::class);
        $ressource = $manager->find($ressource);
        if (!$ressource)
        {
            $this->addFlash('error', " La ressource n'existe pas");
        }

        return $this->render('ressource/detail.html.twig', [
            'ressource' => $ressource,
        ]);
    }

    #[Route('/edit{id?0}', name: 'edit_ressource')]
    public function editRessource(Ressource $ressource=null,ManagerRegistry $registry, Request $request): Response
    {
        $new = false;
        if (!$ressource)
        {
            $new=true;
            $ressource = new Ressource();
        }
        $form = $this->createForm(RessourceType::class,$ressource);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $manager=$registry->getManager();
            $manager->persist($ressource);
            $manager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message=" a été ajouté avec success";
            }
            $this->addFlash('success',$ressource->getType().$message);
            return $this->redirectToRoute('liste_ressource');
        }else
        {
           return $this->render('ressource/add.html.twig',[
               'form'=>$form->createView()
           ]) ;
        }

    }
    #[Route('/delete/{id}', name: 'delete_ressource')]
    public function deleteRessource(Ressource $ressource= null, ManagerRegistry $registry):Response
    {
        if($ressource)
        {
          $manager=$registry->getManager();
          $manager->remove($ressource);
          $manager->flush();
          $this->addFlash('success', "le ressource a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "le ressourne innexistante ");
        }
        return $this->redirectToRoute('liste_ressource');
    }
}

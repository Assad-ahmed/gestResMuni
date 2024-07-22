<?php

namespace App\Controller;

use App\Entity\Recette;
use App\Form\RecetteType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/recette')]
class RecetteController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'liste_recette')]
    public function index(ManagerRegistry $registry, Request $request, $page, $nbre): Response
    {
        $manager=$registry->getRepository(Recette::class);
        $nbrerecette = $manager->count([]);
        $nbrePage = ceil($nbrerecette / $nbre);
        $recettes=$manager->findBy([],['typeRecette'=>'ASC']);
        return $this->render('recette/index.html.twig', [
            'recettes' => $recettes,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage
        ]);
    }
    #[Route('/edit{id?0}', name: 'edit_recette')]
    public function addRecette(Recette $recette=null,ManagerRegistry $registry, Request $request): Response
    {
        $new=false;
        if (!$recette)
        {
            $new=true;
            $recette = new Recette();
        }
        $form=$this->createForm(RecetteType::class,$recette);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $manager=$registry->getManager();
            $manager->persist($recette);
            $manager->flush();
            if ($new=true)
            {
                $message= " la recette non fiscale a été ajouté avec succes";
            }
            else{
                $message= " la recette non fiscale est inexisantante";
            }
            $this->addFlash('success',$recette->getTypeRecette(),$message);
            return $this->redirectToRoute('liste_recette');
        }else
        {

            return $this->render('/recette/formulaire.html.twig', [
                'form' => $form->createView(),
            ]);
        }
    }

    #[Route('/delete/{id}', name: 'delete_recette')]
    public function deleteRecetteNon(Recette $recette=null, ManagerRegistry $registry):Response
    {
        if($recette)
        {
            $manager=$registry->getManager();
            $manager->remove($recette);
            $manager->flush();
            $this->addFlash('success', "la recette non fiscale a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "la recette non fiscale est innexistante ");
        }
        return $this->redirectToRoute('liste_recette');
    }
}

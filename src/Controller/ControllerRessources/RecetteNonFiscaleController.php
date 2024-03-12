<?php

namespace App\Controller\ControllerRessources;

use App\Entity\RecetteNonFiscale;
use App\Form\RecetteNonFiscaleType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/recette/non')]
class RecetteNonFiscaleController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'liste_recette_non_fiscale')]
    public function index(ManagerRegistry $registry, Request $request, $page, $nbre): Response
    {
        $manager=$registry->getRepository(RecetteNonFiscale::class);
        $nbrerecettenonFiscale = $manager->count([]);
        $nbrePage = ceil($nbrerecettenonFiscale / $nbre);
        $recettenonfiscales=$manager->findBy([],['nom'=>'ASC']);
        return $this->render('ressources/recette_non_fiscale/index.html.twig', [
            'recettenonfiscales' => $recettenonfiscales,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage
        ]);
    }
    #[Route('/edit{id?0}', name: 'edit_recette_non_fiscale')]
    public function addRecetteNonFiscale(RecetteNonFiscale $recetteNonFiscale=null,ManagerRegistry $registry, Request $request): Response
    {
        $new=false;
        if (!$recetteNonFiscale)
        {
            $new=true;
            $recetteNonFiscale = new RecetteNonFiscale();
        }
        $recettenonfiscale = new RecetteNonFiscale();
        $form=$this->createForm(RecetteNonFiscaleType::class,$recetteNonFiscale);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $manager=$registry->getManager();
            $manager->persist($recetteNonFiscale);
            $manager->flush();
            if ($new=true)
            {
                $message= " la recette non fiscale a été ajouté avec succes";
            }
            else{
                $message= " la recette non fiscale est inexisantante";
            }
            $this->addFlash('success',$recetteNonFiscale->getNom(),$message);
            return $this->redirectToRoute('liste_recette_non_fiscale');
        }else
        {

            return $this->render('ressources/recette_non_fiscale/add.html.twig', [
                'form' => $form->createView(),
            ]);
        }
    }

    #[Route('/delete/{id}', name: 'delete_recettenonfiscale')]
    public function deleteRecetteNon(RecetteNonFiscale $recetteNonFiscale=null, ManagerRegistry $registry):Response
    {
        if($recetteNonFiscale)
        {
            $manager=$registry->getManager();
            $manager->remove($recetteNonFiscale);
            $manager->flush();
            $this->addFlash('success', "le nom de recette non fiscale a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "le nom de recette non fiscale est innexistante ");
        }
        return $this->redirectToRoute('liste_recette_non_fiscale');
    }
}

<?php

namespace App\Controller\ControllerRessources;


use App\Entity\RecetteNonFiscale;
use App\Entity\Ristourne;
use App\Form\RistourneType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/ristourne')]
class RistourneController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'liste_ristourne')]
    public function index(ManagerRegistry $registry, Request $request,$page, $nbre): Response
    {
        $manager = $registry->getRepository(Ristourne::class);
        $nbreristourne = $manager->count([]);
        $nbrePage = ceil($nbreristourne / $nbre);
        $ristournes=$manager->findBy([],['nom'=>'ASC']);
        return $this->render('ressources/ristourne/index.html.twig', [
            'ristournes' =>$ristournes,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage
        ]);
    }
    #[Route('/edit{id?0}', name: 'edit_ristourne')]
    public function editRistourne(Ristourne $ristourne=null,ManagerRegistry $registry, Request $request): Response
    {
        $new=false;
        if (!$ristourne)
        {
            $new=true;
            $ristourne = new Ristourne();
       }

        $form=$this->createForm(RistourneType::class,$ristourne);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $manager=$registry->getManager();
            $manager->persist($ristourne);
            $manager->flush();
            if ($new=true)
            {
                $message= " le ristourne a été ajouté avec succes";
            }
            else{
               $message= " le ristourne est inexisantante";
             }
            $this->addFlash('success',$ristourne->getNom(),$message);

            return $this->redirectToRoute('liste_ristourne');
        }else
        {

            return $this->render('ressources/ristourne/add.html.twig', [
                'form' => $form->createView(),
            ]);
        }
    }

    #[Route('/delete/{id}', name: 'delete_ristourne')]
    public function deleteRistourne(Ristourne $ristourne=null, ManagerRegistry $registry):Response
    {
        if($ristourne)
        {
            $manager=$registry->getManager();
            $manager->remove($ristourne);
            $manager->flush();
            $this->addFlash('success', "le nom de ristourne a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "le nom de ristourne est innexistante ");
        }
        return $this->redirectToRoute('liste_ristourne');
    }
}

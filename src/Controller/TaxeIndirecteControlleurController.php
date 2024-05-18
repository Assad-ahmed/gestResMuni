<?php

namespace App\Controller;

use App\Entity\TaxeIndirecte;
use App\Form\TaxeIndirecteType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TaxeIndirecteControlleurController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'taxeindirecte_list')]
    public function list(ManagerRegistry $registry, Request $request, $page,$nbre): Response
    {
        $manager = $registry->getRepository(TaxeIndirecte::class);
        $nbreTaxeIndirecte = $manager->count([]);
        $nbrePage = ceil($nbreTaxeIndirecte  / $nbre);
        $taxeIndirectes=$manager->findBy([],['typeTaxe'=>'ASC']);
        return $this->render('ressources/recettefiscale/taxe_indirecte_controlleur/list.html.twig', [
            'taxeIndirectes' =>$taxeIndirectes,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage
        ]);
    }
    #[Route('/taxeIndirecte{id?0})', name: 'taxeIndirecte_new')]
    public function new(TaxeIndirecte $taxeIndirecte=null,Request $request, ManagerRegistry $registry): Response
    {
        $new=false;
        if (!$taxeIndirecte){
            $new=true;
            $taxeIndirecte =new TaxeIndirecte();
        }

        $form = $this->createForm(TaxeIndirecteType::class,$taxeIndirecte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager=$registry->getManager();
            $manager->persist($taxeIndirecte);
            $manager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message=" a été ajouté avec success";
            }
            $this->addFlash('success', $taxeIndirecte->getTypeTaxe().$message);
            return $this->redirectToRoute('taxeindirecte_list');

        }else{
            return $this->render('ressources/recettefiscale/taxe_indirecte_controlleur/new.html.twig', [
                'form' => $form->createView(),
            ]);
        }


    }


    #[Route('/serve', name: 'taxeIndirecte_serve')]
    public function serve(ManagerRegistry $registry,Request $request): Response
    {
        $manager=$registry->getRepository(TaxeIndirecte::class);
        $taxeIndirectes = $manager->findAll();

        return $this->render('ressources/recettefiscale/taxe_indirecte_controlleur/serve.html.twig', [
            ' taxeIndirectes ' =>  $taxeIndirectes ,
        ]);
    }

    #[Route('/delete/{id}', name: 'delete_indirecte')]
    public function deleteAgent(TaxeIndirecte $taxeIndirecte= null, ManagerRegistry $registry):Response
    {
        if($taxeIndirecte)
        {
            $manager=$registry->getManager();
            $manager->remove($taxeIndirecte);
            $manager->flush();
            $this->addFlash('success', " le type de taxe a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "le type de taxe est innexistante ");
        }
        return $this->redirectToRoute('taxeindirecte_list');
    }
}

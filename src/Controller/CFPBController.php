<?php

namespace App\Controller;

use App\Entity\CFPB;
use App\Entity\CFPNB;
use App\Form\CFPBType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cfpnb')]
class CFPBController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'cfpb_list')]
    public function list(ManagerRegistry $registry, Request $request, $page,$nbre): Response
    {
        $manager = $registry->getRepository(CFPB::class);
        $nbreCfpb = $manager->count([]);
        $nbrePage = ceil($nbreCfpb / $nbre);
        $cfpbs=$manager->findBy([],['nomP'=>'ASC']);
        return $this->render('ressources/recettefiscale/cfpb/list.html.twig', [
            'cfpbs' => $cfpbs,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage
        ]);
    }
    #[Route('/cfpb{id?0})', name: 'cfpb_new')]
    public function new(CFPB $cfpb=null,Request $request, ManagerRegistry $registry): Response
    {
        $new=false;
        if (!$cfpb){
            $new=true;
            $cfpb =new CFPB();
        }

        $form = $this->createForm(CFPBType::class, $cfpb);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager=$registry->getManager();
            $manager->persist($cfpb);
            $manager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message=" a été ajouté avec success";
            }
            $this->addFlash('success', $cfpb->getNomP().$message);
            return $this->redirectToRoute('cfpb_list');

        }else{
            return $this->render('ressources/recettefiscale/cfpb/new.html.twig', [
                'form' => $form->createView(),
            ]);
        }


    }


    #[Route('/serve', name: 'cfpb_serve')]
    public function serve(ManagerRegistry $registry,Request $request): Response
    {
        $manager=$registry->getRepository(CFPB::class);
        $cfpbs = $manager->findAll();

        return $this->render('ressources/recettefiscale/cfpb/serve.html.twig', [
            'cfpbs' => $cfpbs,
        ]);
    }

    #[Route('/delete/{id}', name: 'delete_cfpb')]
    public function deleteAgent(CFPNB $cfpb= null, ManagerRegistry $registry):Response
    {
        if($cfpb)
        {
            $manager=$registry->getManager();
            $manager->remove($cfpb);
            $manager->flush();
            $this->addFlash('success', " le nom de proprietaire a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "le nom de proprietaire est innexistante ");
        }
        return $this->redirectToRoute('cfpb_list');
    }
}

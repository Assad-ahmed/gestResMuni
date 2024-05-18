<?php

namespace App\Controller;

use App\Entity\CFPNB;
use App\Form\CFPNBType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/cfpnb')]
class CFPNBController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'cfpnb_list')]
    public function list(ManagerRegistry $registry, Request $request, $page,$nbre): Response
    {
        $manager = $registry->getRepository(CFPNB::class);
        $nbreCfpnb = $manager->count([]);
        $nbrePage = ceil($nbreCfpnb / $nbre);
        $cfpnbs=$manager->findBy([],['nomP'=>'ASC']);
        return $this->render('ressources/recettefiscale/cfpnb/list.html.twig', [
            'cfpnbs' => $cfpnbs,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage
        ]);
    }
    #[Route('/cfpnb{id?0})', name: 'cfpnb_new')]
    public function new(CFPNB $cfpnb=null,Request $request, ManagerRegistry $registry): Response
    {
        $new=false;
        if (!$cfpnb){
            $new=true;
            $cfpnb =new CFPNB();
        }

        $form = $this->createForm(CFPNBType::class, $cfpnb);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager=$registry->getManager();
            $manager->persist($cfpnb);
            $manager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message=" a été ajouté avec success";
            }
            $this->addFlash('success', $cfpnb->getNomP().$message);
            return $this->redirectToRoute('cfpnb_list');

        }else{
            return $this->render('ressources/recettefiscale/cfpnb/new.html.twig', [
                'form' => $form->createView(),
            ]);
        }


    }


    #[Route('/serve', name: 'cfpnb_serve')]
    public function serve(ManagerRegistry $registry,Request $request): Response
    {
        $manager=$registry->getRepository(CFPNB::class);
        $cfpnbs = $manager->findAll();

        return $this->render('ressources/recettefiscale/cfpnb/serve.html.twig', [
            'cfpnbs' => $cfpnbs,
        ]);
    }

    #[Route('/delete/{id}', name: 'delete_cfpnb')]
    public function deleteAgent(CFPNB $cfpnb= null, ManagerRegistry $registry):Response
    {
        if($cfpnb)
        {
            $manager=$registry->getManager();
            $manager->remove($cfpnb);
            $manager->flush();
            $this->addFlash('success', " le nom de proprietaire a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "le nom de proprietaire est innexistante ");
        }
        return $this->redirectToRoute('cfpnb_list');
    }
}

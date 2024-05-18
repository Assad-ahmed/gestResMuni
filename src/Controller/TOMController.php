<?php

namespace App\Controller;
use App\Entity\TOM;
use App\Form\TOMType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/tom')]
class TOMController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'tom_list')]
    public function list(ManagerRegistry $registry, Request $request, $page,$nbre): Response
    {
        $manager = $registry->getRepository(TOM::class);
        $nbreTom = $manager->count([]);
        $nbrePage = ceil($nbreTom / $nbre);
        $toms=$manager->findBy([],['nomP'=>'ASC']);
        return $this->render('ressources/recettefiscale/tom/list.html.twig', [
            'toms' => $toms,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage
        ]);
    }
    #[Route('/tom{id?0})', name: 'tom_new')]
    public function new(TOM $tom=null,Request $request, ManagerRegistry $registry): Response
    {
        $new=false;
        if (!$tom){
            $new=true;
            $tom =new TOM();
        }

        $form = $this->createForm(TOMType::class, $tom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager=$registry->getManager();
            $manager->persist($tom);
            $manager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message=" a été ajouté avec success";
            }
            $this->addFlash('success', $tom->getNomP().$message);
            return $this->redirectToRoute('tom_list');

        }else{
            return $this->render('ressources/recettefiscale/tom/new.html.twig', [
                'form' => $form->createView(),
            ]);
        }


    }


    #[Route('/serve', name: 'tom_serve')]
    public function serve(ManagerRegistry $registry,Request $request): Response
    {
        $manager=$registry->getRepository(TOM::class);
        $toms = $manager->findAll();

        return $this->render('ressources/recettefiscale/tom/serve.html.twig', [
            'toms' => $toms,
        ]);
    }

    #[Route('/delete/{id}', name: 'delete_tom')]
    public function deleteAgent(TOM $tom= null, ManagerRegistry $registry):Response
    {
        if($tom)
        {
            $manager=$registry->getManager();
            $manager->remove($tom);
            $manager->flush();
            $this->addFlash('success', " le nom de proprietaire a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "le nom de proprietaire est innexistante ");
        }
        return $this->redirectToRoute('tom_list');
    }
}

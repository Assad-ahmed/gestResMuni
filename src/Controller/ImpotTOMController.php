<?php

namespace App\Controller;

use App\Entity\ImpotCFNPB;
use App\Entity\ImpotCFPB;
use App\Entity\ImpotTOM;
use App\Form\ImpotTOMType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/impotTOM')]
class ImpotTOMController extends AbstractController
{
    #[Route('/', name: 'liste_impot_tom')]
    public function index(ManagerRegistry $registry, Request $request): Response
    {$manager=$registry->getRepository(ImpotTOM::class);
        $impotTOMs=$manager->findAll();
        return $this->render('impot_tom/index.html.twig', [
            'impotTOMs' => $impotTOMs,
        ]);
    }
    #[Route('/impot/tom/edit{id?0}', name: 'edit_impot_tom')]

    public function new(ImpotTOM $impotTOM=null,Request $request,EntityManagerInterface $entityManager): Response
    {
        $new = false;
        if (!$impotTOM) {
            $new = true;
            $impotTOM = new ImpotTOM();
        }
        $form = $this->createForm(ImpotTOMType::class, $impotTOM);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $impotTOM->calculerImpotTOM();

            $entityManager->persist($impotTOM);
            $entityManager->flush();
            if ($new = true) {
                $message = " a été mis à jour avec success";
            } else {
                $message = " a été ajouté avec succes";
            }
            $this->addFlash('success', $impotTOM->getRegion() . $message);

            return $this->redirectToRoute('liste_impot_tom');
        } else
        {
            return $this->render('impot_tom/formulaire.html.twig', [

                'form' => $form->createView(),
            ]);
        }


    }

    #[Route('/delete/{id}', name: 'delete_impot_tom')]
    public function deleteImpotTOM(ImpotTOM $impotTOM= null, ManagerRegistry $registry):Response
    {
        if($impotTOM)
        {
            $manager=$registry->getManager();
            $manager->remove($impotTOM);
            $manager->flush();
            $this->addFlash('success', "l'impot tom a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "l'impot tom  est innexistante ");
        }
        return $this->redirectToRoute('liste_impot_tom');
    }
}

<?php

namespace App\Controller;

use App\Entity\ImpotCFNPB;
use App\Entity\TaxIndirecte;
use App\Form\ImpotCFNPBType;
use App\Form\TaxeIndirecteType;
use App\Form\TaxIndirecteType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/taxIndirecte')]
class TaxIndirecteController extends AbstractController
{
    #[Route('/', name: 'liste_impot_indirecte')]
    public function index( ManagerRegistry $registry, Request $request): Response
    {
        $manager=$registry->getRepository(TaxIndirecte::class);
        $taxindirectes=$manager->findAll();
        return $this->render('tax_indirecte/index.html.twig', [
            'taxindirectes' => $taxindirectes,
        ]);
    }

    #[Route('/taxIndirecte/edit{id?0}', name: 'edit_impot_indirecte')]
    public function editImpotIndirecte(TaxIndirecte $taxIndirecte=null,Request $request,EntityManagerInterface $entityManager): Response
    {
        $new = false;
        if (!$taxIndirecte)
        {
            $new = true;
            $taxIndirecte= new TaxIndirecte();
        }

        $form = $this->createForm(TaxIndirecteType::class, $taxIndirecte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($taxIndirecte);
            $entityManager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message= " a été ajouté avec succes";
            }
            $this->addFlash('success',$taxIndirecte->getTypeTaxe().$message);

            return $this->redirectToRoute('liste_impot_indirecte');
        }else
        {

            return $this->render('tax_indirecte/formulaire.html.twig', [
                'form' => $form->createView(),
            ]);
        }
    }

    #[Route('/delete/{id}', name: 'delete_impot_indirecte')]
    public function deleteImpotIndirecte(TaxIndirecte $taxIndirecte= null, ManagerRegistry $registry):Response
    {
        if($taxIndirecte)
        {
            $manager=$registry->getManager();
            $manager->remove($taxIndirecte);
            $manager->flush();
            $this->addFlash('success', "l'impot indirecte a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "l'impot indirecte  est innexistante ");
        }
        return $this->redirectToRoute('liste_impot_indirecte');
    }
}

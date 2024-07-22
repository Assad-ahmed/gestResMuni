<?php

namespace App\Controller;

use App\Entity\ImpotCFNPB;
use App\Entity\ImpotCFPB;
use App\Form\ImpotCFPBType;
use App\Repository\ImpotCFPBRepository;
use App\Service\CalculService;
use App\Service\ImpotCFPBService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/impotCFPB')]
class ImpotCFPBController extends AbstractController
{
    #[Route('/', name: 'liste_impot_cfpb')]
    public function index(ManagerRegistry $registry, Request $request): Response
    {
        $manager=$registry->getRepository(ImpotCFPB::class);
        $impotCFPBs=$manager->findAll();
        return $this->render('impot_cfpb/index.html.twig', [
            'impotCFPBs' => $impotCFPBs,
        ]);
    }
    #[Route('/impot/cfpb/edit{id?0}', name: 'edit_impot_cfpb')]

    public function editImpotCFPB(ImpotCFPB $impotCFPB=null,Request $request,EntityManagerInterface $entityManager): Response
    {
        $new = false;
        if (!$impotCFPB)
        {
            $new = true;
            $impotCFPB= new ImpotCFPB();
        }
        $form = $this->createForm(ImpotCFPBType::class, $impotCFPB);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Calculer le revenu net en fonction de la valeur locative et du type de bâtiment
            $valeurLocative = $impotCFPB->getValeurLocative();
            $typeBatiment = $impotCFPB->getTypeBatiment();

            // Appliquer les déductions selon le type de bâtiment
            if ($typeBatiment === 'usine') {
                $deduction = 0.5;
            } else {
                $deduction = 0.4;
            }

            $revenuNet = $valeurLocative * (1 - $deduction);

            // Calculer l'impôt CFPB basé sur le revenu net
            $taux = 0.15;
            $montant = $revenuNet * $taux;

            $impotCFPB->setRevenuNet($revenuNet);
            $impotCFPB->setMontant($montant);

            // Enregistrer l'objet en base de données ou effectuer d'autres traitements nécessaires
            $entityManager->persist($impotCFPB);
            $entityManager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message= " a été ajouté avec succes";
            }
            $this->addFlash('success',$impotCFPB->getTypeBatiment().$message);

            return $this->redirectToRoute('liste_impot_cfpb', [
                'id' => $impotCFPB->getId(),
            ]);
        }else
        {
            return $this->render('impot_cfpb/formulaire.html.twig', [
                'form' => $form->createView(),
            ]);
        }


    }

    #[Route('/delete/{id}', name: 'delete_impot_cfpb')]
    public function deleteImpotCFPB(ImpotCFPB $impotCFPB= null, ManagerRegistry $registry):Response
    {
        if($impotCFPB)
        {
            $manager=$registry->getManager();
            $manager->remove($impotCFPB);
            $manager->flush();
            $this->addFlash('success', "l'impot CFPB a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "l'impot CFPB  est innexistante ");
        }
        return $this->redirectToRoute('liste_impot_cfpb');
    }


}

<?php

namespace App\Controller;

use App\Entity\ImpotCFNPB;
use App\Entity\ImpotCFPB;
use App\Form\ImpotCFPBType;
use App\Repository\ImpotCFPBRepository;
use App\Service\CalculService;
use App\Service\Ressources\CfpbService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
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
           
            $entityManager->persist($impotCFPB);
            $entityManager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message= " a été ajouté avec succes";
            }
            $this->addFlash('success',$impotCFPB->getNom().$message);

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

    #[
        Route('/delete/{id}', name: 'delete_impot_cfpb'),
        IsGranted('ROLE_SUPER_ADMIN')
        ]
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


    public function __construct(private CfpbService $cfpbService)
    {
        $this->cfpbService = $cfpbService;
    }
  

    #[Route('/detaitCfpb/{propriete_id}', name: 'detail_impot_cfpb')]
    public function detailImpotCFPB(int $propriete_id): Response
    {
        $data = $this->cfpbService->calculateMonthlyCfpb($propriete_id);
        return $this->render('impot_cfpb/detail.html.twig', [
            'monthlyAmounts' => $data['monthlyAmounts'],
            'yearlyAmounts' => $data['yearlyAmounts'],
            'dates' => $data['dates'],
            'totalMensuelGlobal' => $data['totalMensuelGlobal'],
            'totalAnnuelGlobal' => $data['totalAnnuelGlobal'],
            'propertyName' => $data['propertyName'],
        ]);
    }

}

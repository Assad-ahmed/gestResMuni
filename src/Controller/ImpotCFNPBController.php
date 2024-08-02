<?php

namespace App\Controller;

use App\Entity\AgentCollecte;
use App\Entity\ImpotCFNPB;
use App\Form\ImpotCFNPBType;
use App\Service\Ressources\CfnpbService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/impotCFNPB')]
class ImpotCFNPBController extends AbstractController
{
    
  

  
    #[Route('/', name: 'liste_impot_cfnpb')]
    public function index( ManagerRegistry $registry, Request $request): Response
    {
        $manager=$registry->getRepository(ImpotCFNPB::class);
        $impotCFNPBs=$manager->findAll();
        return $this->render('impot_cfnpb/index.html.twig', [
            'impotCFNPBs' => $impotCFNPBs,
        ]);
    }



    #[Route('/impot/cfnpb/edit{id?0}', name: 'edit_impot_cfnpb')]
    public function editImpotCFNPB(ImpotCFNPB $impotCFNPB=null,Request $request,EntityManagerInterface $entityManager): Response
    {
        $new = false;
        if (!$impotCFNPB)
        {
            $new = true;
            $impotCFNPB= new ImpotCFNPB();
        }

        $form = $this->createForm(ImpotCFNPBType::class, $impotCFNPB);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           
            $entityManager->persist($impotCFNPB);
            $entityManager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message= " a été ajouté avec succes";
            }
            $this->addFlash('success',$impotCFNPB->getNom().$message);

            return $this->redirectToRoute('liste_impot_cfnpb');
        }else
        {

                return $this->render('impot_cfnpb/formulaire.html.twig', [
                    'form' => $form->createView(),
                ]);
            }
    }
   
    #[
        Route('/delete/{id}', name: 'delete_impot_cfnpb'),
        IsGranted('ROLE_SUPER_ADMIN')
        ]
    public function deleteImpotCFNPB(ImpotCFNPB $impotCFNPB= null, ManagerRegistry $registry):Response
    {
        if($impotCFNPB)
        {
            $manager=$registry->getManager();
            $manager->remove($impotCFNPB);
            $manager->flush();
            $this->addFlash('success', "l'impot CFNPB a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "l'impot CFNPB  est innexistante ");
        }
        return $this->redirectToRoute('liste_impot_cfnpb');
    }
   
    public function __construct(private CfnpbService $cfnpbService)
    {
        $this->cfnpbService = $cfnpbService;
    }
  

    #[Route('/detait/{propriete_id}', name: 'detail_impot_cfnpb')]
    public function detailImpotCFNPB(int $propriete_id): Response
    {
        $data = $this->cfnpbService->calculateMonthlyCfnpb($propriete_id);
        return $this->render('impot_cfnpb/detail.html.twig', [
            'monthlyAmounts' => $data['monthlyAmounts'],
            'yearlyAmounts' => $data['yearlyAmounts'],
            'dates' => $data['dates'],
            'totalMensuelGlobal' => $data['totalMensuelGlobal'],
            'totalAnnuelGlobal' => $data['totalAnnuelGlobal'],
            'propertyName' => $data['propertyName'],
        ]);
    }

}

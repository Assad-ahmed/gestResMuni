<?php

namespace App\Controller;

use App\Entity\ImpotCFPB;
use App\Entity\ImpotMiniFiscal;
use App\Form\ImpotCFPBType;
use App\Form\ImpotMiniFiscalType;
use App\Repository\ImpotMiniFiscalRepository;
use App\Service\ImpotCapitation\ImpotMiniFiscalService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/impot/mini/fiscal')]
class ImpotMiniFiscalController extends AbstractController
{
    #[Route('/', name: 'liste_impot_mini_fiscal')]
    public function index(ManagerRegistry $registry, Request $request): Response
    {
        $manager=$registry->getRepository(ImpotMiniFiscal::class);
        $impotMiniFiscals=$manager->findAll();
        return $this->render('impot_mini_fiscal/index.html.twig', [
            'impotMiniFiscals' => $impotMiniFiscals,
        ]);
    }
    #[Route('/edit{id?0}', name: 'edit_impot_mini_fiscal')]

    public function editImpotMiniFiscale(ImpotMiniFiscal $impotMiniFiscal=null,Request $request,EntityManagerInterface $entityManager): Response
    {
        $new = false;
        if (!$impotMiniFiscal)
        {
            $new = true;
            $impotMiniFiscal= new ImpotMiniFiscal();
        }
        $form = $this->createForm(ImpotMiniFiscalType::class, $impotMiniFiscal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
        
            $entityManager->persist($impotMiniFiscal);
            $entityManager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message= " a été ajouté avec succes";
            }
            $this->addFlash('success',$impotMiniFiscal->getNom().$message);

            return $this->redirectToRoute('liste_impot_mini_fiscal', [
                'id' => $impotMiniFiscal->getId(),
            ]);
        }else
        {
            return $this->render('impot_mini_fiscal/formulaire.html.twig', [
                'impotMiniFiscal' => $impotMiniFiscal,
                'form' => $form->createView(),
            ]);
        }


    }

    #[
        Route('/delete/{id}', name: 'delete_impot_mini_fiscale'),
        
        IsGranted('ROLE_SUPER_ADMIN')
        ]
    public function deleteImpotMiniFiscale(ImpotMiniFiscal $impotMiniFiscal= null, ManagerRegistry $registry):Response
    {
        if($impotMiniFiscal)
        {
            $manager=$registry->getManager();
            $manager->remove($impotMiniFiscal);
            $manager->flush();
            $this->addFlash('success', "l'impot min fiscale a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "l'impot min fiscale  est innexistante ");
        }
        return $this->redirectToRoute('liste_impot_mini_fiscal');
    }

    
    public function __construct(private ImpotMiniFiscalService $impotMiniFiscalService)
    {
        
    }
  

    #[Route('/detait/{propriete_id}', name: 'detail_impot_mini_fiscal')]
    public function detailImpotMiniFiscal(int $propriete_id): Response
    {
        $data = $this->impotMiniFiscalService->calculateMonthlyImpotMini($propriete_id);
        return $this->render('impot_mini_fiscal/detail.html.twig', 
        [
            'monthlyAmounts' => $data['monthlyAmounts'],
            'yearlyAmounts' => $data['yearlyAmounts'],
            'dates' => $data['dates'],
            'totalMensuelGlobal' => $data['totalMensuelGlobal'],
            'totalAnnuelGlobal' => $data['totalAnnuelGlobal'],
            'propertyName' => $data['propertyName'],
        ]);
    }
}

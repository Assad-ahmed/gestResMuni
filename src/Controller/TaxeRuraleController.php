<?php

namespace App\Controller;

use App\Entity\ImpotMiniFiscal;
use App\Entity\TaxeRurale;
use App\Form\ImpotMiniFiscalType;
use App\Form\TaxeRuraleType;
use App\Service\ImpotCapitation\TaxeRuraleService;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/taxe/rurale')]
class TaxeRuraleController extends AbstractController
{
    #[Route('/', name: 'liste_taxe_rurale')]
    public function index(ManagerRegistry $registry, Request $request): Response
    {
        $manager=$registry->getRepository(TaxeRurale::class);
        $taxeRurales=$manager->findAll();
        return $this->render('taxe_rurale/index.html.twig', [
            'taxeRurales' => $taxeRurales,
        ]);
    }
    #[Route('/edit{id?0}', name: 'edit_taxe_rurale')]

    public function editTaxeRurale(TaxeRurale $taxeRurale=null,Request $request,EntityManagerInterface $entityManager): Response
    {
        $new = false;
        if (!$taxeRurale)
        {
            $new = true;
            $taxeRurale= new TaxeRurale();
        }
        $form = $this->createForm(TaxeRuraleType::class, $taxeRurale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($taxeRurale);
            $entityManager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message= " a été ajouté avec succes";
            }
            $this->addFlash('success',$taxeRurale->getNom().$message);

            return $this->redirectToRoute('liste_taxe_rurale', [
                'id' => $taxeRurale->getId(),
            ]);
        }else
        {
            return $this->render('taxe_rurale/formulaire.html.twig', [
                'taxeRurale' => $taxeRurale,
                'form' => $form->createView(),
            ]);
        }


    }

    #[
        Route('/delete/{id}', name: 'delete_taxe_rurale'),
        IsGranted('ROLE_SUPER_ADMIN')
        ]
    public function deleteTaxeRurale(TaxeRurale $taxeRurale= null, ManagerRegistry $registry):Response
    {
        if($taxeRurale)
        {
            $manager=$registry->getManager();
            $manager->remove($taxeRurale);
            $manager->flush();
            $this->addFlash('success', "la taxe rurale a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "la taxe rurale min fiscale  est innexistante ");
        }
        return $this->redirectToRoute('liste_taxe_rurale');
    }


    public function __construct(private TaxeRuraleService $taxeRuraleService)
    {
        
    }
  

    #[Route('/detait/{propriete_id}', name: 'detail_taxe_rurale')]
    public function detailTaxeRurale(int $propriete_id): Response
    {
        $data = $this->taxeRuraleService->calculateMonthlyTaxe($propriete_id);
        return $this->render('taxe_rurale/detail.html.twig', 
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

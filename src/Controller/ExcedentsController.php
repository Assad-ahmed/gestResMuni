<?php

namespace App\Controller;

use App\Entity\Excedents;
use App\Entity\Propriete;
use App\Form\ExcedentsType;
use App\Service\ExcedentsService;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/excedents')]
class ExcedentsController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'list_excedents')]
    public function index(ManagerRegistry $registry, Request $request, $page, $nbre): Response
    {
        $manager = $registry->getRepository(Excedents::class);
        $nbreExcedent = $manager->count([]);
        $nbrePage = ceil($nbreExcedent / $nbre);
        $excedents=$manager->findBy([],['nom'=>'ASC']);
        return $this->render('excedents/index.html.twig', [
            'excedents' => $excedents,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage
        ]);
    }

    #[Route('/edit{id?0}', name: 'edit_excedents')]
    public function addExcedents(Excedents $excedents=null,ManagerRegistry $registry, Request $request): Response
    {
        $new = false;
        if (!$excedents)
        {
            $new = true;
            $excedents = new Excedents();
        }

        $form = $this->createForm(ExcedentsType::class,$excedents);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $manager = $registry->getManager();
            $manager->persist($excedents);
            $manager->flush();
            if ($new = true)
            {
                $massage = " a été mis à jour avec success";
            }else
            {
                $massage = " a été ajouté avec success";
            }

            $this->addFlash('success', $excedents->getNom().$massage);
            return  $this->redirectToRoute('list_excedents');
        }else{

            return $this->render('excedents/formulaire.html.twig', [
                'form' => $form->createView()
            ]);
        }

    }

    #[
        Route('/delete/{id}', name: 'delete_excedents'),
        IsGranted('ROLE_SUPER_ADMIN')
        ]
    public function deleteExecedent(Excedents $excedents=null, ManagerRegistry $registry):Response
    {
        if($excedents)
        {
            $manager=$registry->getManager();
            $manager->remove($excedents);
            $manager->flush();
            $this->addFlash('success', "l' excedent a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "l'excedent est innexistante ");
        }
        return $this->redirectToRoute('list_excedents');
    }

    private $excedentsService;

    public function __construct(ExcedentsService $excedentsService)
    {
        $this->excedentsService = $excedentsService;
    }

    #[Route('/{propriete_id}', name: 'detail_excedents')]
    public function detailExcedent(int $propriete_id): Response
    {
        $data = $this->excedentsService->calculateMonthlyAndYearlyAmounts($propriete_id);
        return $this->render('impot_mini_fiscale/detail.html.twig', [
            'monthlyAmounts' => $data['monthlyAmounts'],
            'yearlyAmounts' => $data['yearlyAmounts'],
            'dates' => $data['dates'],
            'totalMensuelGlobal' => $data['totalMensuelGlobal'],
            'totalAnnuelGlobal' => $data['totalAnnuelGlobal'],
            'propertyName' => $data['propertyName'],
        ]);
    }
}

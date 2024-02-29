<?php

namespace App\Controller;

use App\Entity\TypeImp;
use App\Form\TypeImpotType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/type')]
class TypeImpotController extends AbstractController
{
    #[Route('/', name: 'liste_type_impot')]
    public function index(ManagerRegistry $registry, Request $request): Response
    {
        $manager=$registry->getRepository(TypeImp::class);
        $types=$manager->findAll();
        return $this->render('type_impot/index.html.twig', [
            'types' => $types,
        ]);
    }

    #[Route('/add', name: 'add_type_impot')]
    public function addType(ManagerRegistry $registry, Request $request): Response
    {
        $type= new TypeImp();
        $form=$this->createForm(TypeImpotType::class,$type);
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {
            $manager=$registry->getManager();
            $manager->persist($type);
            $manager->flush();
        }
        return $this->render('type_impot/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

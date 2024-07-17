<?php

namespace App\Controller;
use App\Entity\Propriete;
use App\Form\ProprieteType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/propriete')]
class ProprieteController extends AbstractController
{
    #[Route('/', name: 'liste_propriete')]
    public function index(ManagerRegistry $managerRegistry, Request $request): Response
    {
        $manager=$managerRegistry->getRepository(Propriete::class);
        $proprietes=$manager->findAll();
        return $this->render('propriete/index.html.twig', [
            'proprietes' => $proprietes,
        ]);
    }

    #[Route('/add', name: 'add_propriete')]
    public function addType(ManagerRegistry $registry, Request $request): Response
    {
        $propriete= new Propriete();
        $form=$this->createForm(ProprieteType::class,$propriete);
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {
            $manager=$registry->getManager();
            $manager->persist($propriete);
            $manager->flush();
        }
        return $this->render('propriete/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

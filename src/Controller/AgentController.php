<?php

namespace App\Controller;

use App\Entity\Agent;
use App\Form\AgentType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgentController extends AbstractController
{
    #[Route('/listeAgent', name: 'liste_agent')]
    public function listeAgent(ManagerRegistry $registry, Request $request): Response
    {
         $manager = $registry->getRepository(Agent::class);
        $agents= $manager->findAll();
        return $this->render('agent/liste.html.twig', [
            'agents' => $agents,
        ]);
    }
    #[Route('/addAgent', name: 'add_agent')]
    public function addAgent(ManagerRegistry $registry, Request $request): Response
    {
        $agent = new Agent();
        $form = $this->createForm(AgentType::class, $agent);
        $form->handleRequest($request);
        if ($form->isSubmitted()  && $form->isValid())
        {
            $manager = $registry->getManager();
            $manager->persist($agent);
            $manager->flush();
            $this->addFlash('succes', $agent->getNomAgent(). " a ete ajoute avec succes");
            return $this->redirectToRoute('liste_agent');


        }else
        {
            return $this->render('agent/addAgent.html.twig', [
                'form' => $form->createView(),
            ]);

        }


    }
}

<?php

namespace App\Controller;

use App\Entity\AgentCollecte;

use App\Entity\Contributeurs;
use App\Entity\SiteCollecte;
use App\Form\AgentCollecteType;
use App\Repository\ContributeursRepository;
use App\Service\CalculateurAgentContribuableSiteService;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/agent')]
class AgentCollecteController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'list_agent')]
    public function index(ManagerRegistry $registry, Request $request,$page,$nbre): Response
    {
        $manager=$registry->getRepository(AgentCollecte::class);
        $nbreAgent = $manager->count([]);
        $nbrePage = ceil($nbreAgent / $nbre);
        $agentCollectes=$manager->findBy([],['nom'=>'ASC']);

        return $this->render('agent_collecte/index.html.twig', [
            'agentCollectes' => $agentCollectes,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage

        ]);
    }


    #[Route('/edit{id?0}', name: 'edit_agent')]
    public function addAgent(AgentCollecte $agentCollecte=null,ManagerRegistry $registry, Request $request): Response
    {
        $new = false;
        if (!$agentCollecte)
        {
            $new = true;
            $agentCollecte= new  AgentCollecte();
        }

        $form=$this->createForm(AgentCollecteType::class,$agentCollecte);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $manager=$registry->getManager();
            $manager->persist($agentCollecte);
            $manager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message= " a été ajouté avec succes";
            }
            $this->addFlash('success',$agentCollecte->getNom().$message);
            return $this->redirectToRoute('list_agent');
        }else
        {
            return $this->render('agent_collecte/add.html.twig',[
                'form'=>$form->createView()
            ]);
        }


    }

    #[Route('/delete/{id}', name: 'delete_agent')]
    public function deleteAgent(AgentCollecte $agentCollecte= null, ManagerRegistry $registry):Response
    {
        if($agentCollecte)
        {
            $manager=$registry->getManager();
            $manager->remove($agentCollecte);
            $manager->flush();
            $this->addFlash('success', "l'agent a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "l'agent est innexistante ");
        }
        return $this->redirectToRoute('list_agent');
    }



    public function __construct( private CalculateurAgentContribuableSiteService $calculateurAgentContribuableSiteService)
    {
    }

    #[Route('/{id}/collecte', name: 'app_agent_contributeurs')]
    public function listContributeurs(AgentCollecte $agentCollecte=null): Response
    {
        $resultats = $this->calculateurAgentContribuableSiteService->obtenirDonneesParSitePourAgent($agentCollecte);

        return $this->render('agent_collecte/show.html.twig', [
            'agentCollecte' => $agentCollecte,
            'resultats' => $resultats,
        ]);
    }
}

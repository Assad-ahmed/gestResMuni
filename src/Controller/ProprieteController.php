<?php

namespace App\Controller;
use App\Entity\Propriete;
use App\Entity\Recette;
use App\Entity\Ristournes;
use App\Form\ProprieteType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/propriete')]
class ProprieteController extends AbstractController
{
    #[Route('/alls/{page?1}/{nbre?5}', name: 'list_propriete')]
    public function index(ManagerRegistry $registry, Request $request, $page, $nbre): Response
    {
        $manager = $registry->getRepository(Propriete::class);
        $nbrePropriete = $manager->count([]);
        $nbrePage = ceil($nbrePropriete / $nbre);
        $prorietes=$manager->findBy([],['nom'=>'ASC']);
        return $this->render('propriete/index.html.twig', [
            'prorietes' => $prorietes,
            'isPaginated'=>true,
            'page'=>$page,
            'nbre'=>$nbre,
            'nbrePage'=>$nbrePage
        ]);
    }

    #[Route('/edit{id?}', name: 'edit_propriete')]
    public function addPropriete(Propriete $propriete=null,ManagerRegistry $registry, Request $request): Response
    {
        $new=false;
        if (!$propriete)
        {
            $new=true;
            $propriete= new Propriete();
        }

        $form=$this->createForm(ProprieteType::class,$propriete);
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {
            $manager=$registry->getManager();
            $manager->persist($propriete);
            $manager->flush();
            if ($new=true)
            {
                $message= " le propriete a été ajouté avec succes";
            }
            else{
                $message= " le propriete  est inexisantante";
            }
            $this->addFlash('success',$propriete->getNom(),$message);
            return $this->redirectToRoute('list_propriete');
        }
        return $this->render('propriete/formulaire.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/delete/{id}', name: 'delete_propriete')]
    public function deletePropriete(Propriete $propriete=null, ManagerRegistry $registry):Response
    {
        if($propriete)
        {
            $manager=$registry->getManager();
            $manager->remove($propriete);
            $manager->flush();
            $this->addFlash('success', "le propriete a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "le propriete  est innexistante ");
        }
        return $this->redirectToRoute('list_propriete');
    }
}

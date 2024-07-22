<?php

namespace App\Controller;

use App\Entity\ImpotCFNPB;
use App\Entity\Patente;
use App\Form\ImpotCFNPBType;
use App\Form\PatenteType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/patente')]
class PatenteController extends AbstractController
{
    #[Route('/', name: 'liste_patente')]
    public function index( ManagerRegistry $registry, Request $request): Response
    {
        $manager=$registry->getRepository(Patente::class);
        $patentes=$manager->findAll();
        return $this->render('patente/index.html.twig', [
            'patentes' => $patentes,
        ]);
    }

    #[Route('/patente/edit{id?0}', name: 'edit_patente')]
    public function editPatente(Patente $patente=null,Request $request,EntityManagerInterface $entityManager): Response
    {
        $new = false;
        if (!$patente)
        {
            $new = true;
            $patente= new Patente();
        }

        $form = $this->createForm(PatenteType::class, $patente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $patente->updateMontant();
            $entityManager->persist($patente);
            $entityManager->flush();
            if ($new=true)
            {
                $message=" a été mis à jour avec success";
            }else
            {
                $message= " a été ajouté avec succes";
            }
            //$this->addFlash('success',$patente->get.$message);

            return $this->redirectToRoute('liste_patente');
        }else
        {

            return $this->render('patente/formulaire.html.twig', [
                'patente'=>$patente,
                'form' => $form->createView(),
            ]);
        }
    }

    #[Route('/delete/{id}', name: 'delete_patente')]
    public function deletePatente(Patente $patente= null, ManagerRegistry $registry):Response
    {
        if($patente)
        {
            $manager=$registry->getManager();
            $manager->remove($patente);
            $manager->flush();
            $this->addFlash('success', "la contribution de patente a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "la contribution de patente  est innexistante ");
        }
        return $this->redirectToRoute('liste_patente');
    }
}

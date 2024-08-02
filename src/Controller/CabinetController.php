<?php

namespace App\Controller;

use App\Entity\ImpotTOM;
use App\Entity\User;
use App\Form\CabinetType;
use App\Form\ImpotTOMType;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Cassandra\Type\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cabinet')]
class CabinetController extends AbstractController
{
    #[Route('/', name: 'app_cabinet')]
    public function index(UserRepository $user): Response
    {
        return $this->render('cabinet/userCabinet.html.twig', [
            'users' => $user->findAll(),
        ]);
    }
     #[IsGranted("ROLE_SUPER_ADMIN")]
    #[Route('/cabinet/edit{id?0}', name: 'edit_cabinet')]

    public function editCabinet(User $user=null,Request $request,EntityManagerInterface $entityManager): Response
    {

        $form = $this->createForm(CabinetType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('app_cabinet');
        } else
        {
            return $this->render('cabinet/editCabinet.html.twig', [

                'formUser' => $form->createView(),
            ]);
        }


    }

    #[Route('/delete/{id}', name: 'delete_user')]
    public function deleteImpotTOM(User $user= null, ManagerRegistry $registry):Response
    {
        if($user)
        {
            $manager=$registry->getManager();
            $manager->remove($user);
            $manager->flush();
            $this->addFlash('success', "l'user a été supprimé avec success ");
        }else
        {
            $this->addFlash('errer', "l'user  est innexistante ");
        }
        return $this->redirectToRoute('app_cabinet');
    }
}

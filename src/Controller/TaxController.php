<?php

namespace App\Controller;

use App\Entity\Tax;
use App\Entity\TypeImp;
use App\Form\TaxType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/tax')]
class TaxController extends AbstractController
{
    #[Route('/', name: 'liste_tax')]
    public function index(ManagerRegistry $registry, Request $request): Response
    {
        $manager=$registry->getRepository(Tax::class);
        $taxes=$manager->findAll();
        return $this->render('tax/index.html.twig', [
            'taxes' => $taxes,
        ]);
    }
    #[Route('/calculer_taxes', name: 'calculer_taxes')]

        public
        function calculerTaxes(Request $request, EntityManagerInterface $entityManager): Response
        {
            // Créer une nouvelle instance de l'entité Tax
            $tax = new Tax();
            // Calculer les taxes
            $tax->calculerCFPB();
            $tax->calculerCFPNB();
            $tax->calculerTOM();
            // Créer le formulaire et lier les données de la tax
            $form = $this->createForm(TaxType::class, $tax);

            // Gérer la soumission du formulaire
            $form->handleRequest($request);

            // Vérifier si le formulaire est soumis et valide
            if ($form->isSubmitted() && $form->isValid()) {

                // Persister l'entité Propriete dans la base de données
                $entityManager->persist($tax);
                $entityManager->flush();
                return $this->render('tax/result.html.twig', [
                    'tax' => $tax,
                ]);
            }

            // Afficher le formulaire de saisie des données
            return $this->render('tax/form.html.twig', [
                'form' => $form->createView(),
            ]);

        }

}

<?php

namespace App\Controller;

use App\Entity\ImpotAssiValeur;
use App\Entity\Ressource;
use App\Entity\TypeImpots;
use App\Form\ImpotAssiValeurType;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypeImpotsController extends AbstractController
{
    /**
     * @Route("/typeImpots", name="typeImpots_index")
     */
    public function index(ManagerRegistry $registry): Response
    {
        $typeImpots = $registry->getRepository(TypeImpots::class)->findAll();

        return $this->render('type_impots/index.html.twig', [
            'typeImpots' => $typeImpots,
        ]);
    }




















}

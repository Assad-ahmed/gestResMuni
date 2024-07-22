<?php

namespace App\Controller;

use App\Entity\ImpotAssiValeur;
use App\Entity\ImpotCFPB;
use App\Entity\Ressource;
use App\Entity\TypeImpots;
use App\Form\ImpotAssiValeurType;
use App\Service\TaxCalculator;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ImpotAssiValeurController extends AbstractController
{
    private $taxCalculator;

    public function __construct(TaxCalculator $taxCalculator)
    {
        $this->taxCalculator = $taxCalculator;
    }

    #[Route('/liste-impots', name: 'liste_impots')]
    public function listTaxes(): Response
    {
        $totalCFPB = $this->taxCalculator->calculateTotalCFPB();
        $totalCFPNB = $this->taxCalculator->calculateTotalCFPNB();
        $totalTOM = $this->taxCalculator->calculateTotalTOM();

        return $this->render('impot_assi_valeur/list.html.twig', [
            'totalCFPB' => $totalCFPB,
            'totalCFPNB' => $totalCFPNB,
            'totalTOM' => $totalTOM,
        ]);
    }

    #[Route('/liste-taxindirecte', name: 'liste_taxindirecte')]
    public function listTaxIndirect(): Response
    {
        $totalTaxIndirecte = $this->taxCalculator->calculateTotalTaxIndirecte();
        return $this->render('impot_assi_valeur/listTaxIndirecte.html.twig', [
            'totalTaxIndirecte' => $totalTaxIndirecte,

        ]);
    }

    #[Route('/liste-recettenonfiscale', name: 'liste_recettenonfiscale')]
    public function listRecettenonfiscalet(): Response
    {
        $totalRecettenonfiscale = $this->taxCalculator->calculateTotalRecettenonFiscale();
        return $this->render('impot_assi_valeur/listRecettenonFiscale.html.twig', [
            'totalRecettenonfiscale' => $totalRecettenonfiscale,

        ]);
    }

    #[Route('/liste-ristourne', name: 'liste_ristournes')]
    public function listRistourne(): Response
    {
        $totalRistourne = $this->taxCalculator->calculateTotalRistourne();
        return $this->render('impot_assi_valeur/listRistourne.html.twig', [
            'totalRistourne' => $totalRistourne,

        ]);
    }


    #[Route('/liste-excedent', name: 'liste_excedents')]
    public function listExcedent(): Response
    {
        $totalExcedent = $this->taxCalculator->calculateTotalExcedents();
        return $this->render('impot_assi_valeur/listExcedent.html.twig', [
            'totalExcedent' => $totalExcedent,

        ]);
    }

    #[Route('/list-patente', name: 'liste_patentes')]
    public function listPatente(): Response
    {
        $totalPatente = $this->taxCalculator->calculatePatente();
        return $this->render('impot_assi_valeur/listPatente.html.twig', [
            'totalPatente' => $totalPatente,

        ]);
    }


}

<?php

namespace App\Controller;

use App\Entity\ImpotAssiValeur;
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

class TypeImpotsController extends AbstractController
{

    private $taxCalculator;

    public function __construct(TaxCalculator $taxCalculator)
    {
        $this->taxCalculator = $taxCalculator;
    }

    #[Route('/total-impots', name: 'total_impots')]
    public function totalTaxes(): Response
    {
        //impot assi sur valeur fonciere
        $totalCFPB = $this->taxCalculator->calculateTotalCFPB();
        $totalCFPNB = $this->taxCalculator->calculateTotalCFPNB();
        $totalTOM = $this->taxCalculator->calculateTotalTOM();
        $totalAllTaxes = $totalCFPB + $totalCFPNB + $totalTOM;
        //taxe indirecte
        $totalTaxIndirecte= $this->taxCalculator->calculateTotalTaxIndirecte();
        // impot de contribution
        $totalPatentes= $this->taxCalculator->calculatePatente();
        //impot de capitation
        $totalImpotMiniFiscal= $this->taxCalculator->calculateImpotMiniFiscal();
        $totalTaxeRurale= $this->taxCalculator->calculateTaxeRurale();
        $totalAllImpotCapitation= $totalTaxeRurale+$totalImpotMiniFiscal;


        return $this->render('type_impots/total.html.twig', [
            'totalCFPB' => $totalCFPB,
            'totalCFPNB' => $totalCFPNB,
             'totalTaxIndirecte'=>$totalTaxIndirecte,
            'totalTOM' => $totalTOM,
            'totalPatentes'=>$totalPatentes,
            'totalAllTaxes' => $totalAllTaxes,
            'totalImpotMiniFiscal' => $totalImpotMiniFiscal,
            'totalTaxeRurale' => $totalTaxeRurale,
            'totalAllImpotCapitation' => $totalAllImpotCapitation,
        ]);
    }

    #[Route('/total-recettenonFiscale', name: 'total_recettenonFiscale')]
    public function totalRecettenonFiscale(): Response
    {

        $totalRecettenonFiscale= $this->taxCalculator->calculateTotalRecettenonFiscale();


        return $this->render('type_impots/totalRecettenonFiscale.html.twig', [
            'totalRecettenonFiscale' => $totalRecettenonFiscale,

        ]);
    }

    #[Route('/total-ristournes', name: 'total_ristournes')]
    public function totalRistournes(): Response
    {

        $totalRistournes= $this->taxCalculator->calculateTotalRistourne();


        return $this->render('type_impots/totalRistournes.html.twig', [
            'totalRistournes' => $totalRistournes,

        ]);
    }

    #[Route('/total-excedents', name: 'total_excedents')]
    public function totalExcedents(): Response
    {

        $totalexcedents= $this->taxCalculator->calculateTotalExcedents();


        return $this->render('type_impots/totalexcedent.html.twig', [
            'totalexcedents' => $totalexcedents,

        ]);
    }


























}

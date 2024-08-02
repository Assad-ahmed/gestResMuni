<?php

namespace App\Controller;

use App\Service\CalculTaxeMunicipal;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private $calculTaxeMunicipal;

    public function __construct(CalculTaxeMunicipal $calculTaxeMunicipal)
    {
        $this->calculTaxeMunicipal = $calculTaxeMunicipal;
    }
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        $date = new \DateTime();
        $totalMontantJournalier = $this->calculTaxeMunicipal->getJournalierTotalMontant($date);
        $totalMontantMensuel = $this->calculTaxeMunicipal->getMensuelTotalMontant($date);
        $totalAnnualMontant = $this->calculTaxeMunicipal->getAnnualTotalMontant($date);
        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
            'totalMontantJournalier' => $totalMontantJournalier ,
            'totalMontantMensuel'=> $totalMontantMensuel,
            'totalAnnualMontant'=>$totalAnnualMontant,
        ]);
    }


}

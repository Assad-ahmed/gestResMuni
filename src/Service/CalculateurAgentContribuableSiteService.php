<?php

namespace App\Service;

use App\Entity\AgentCollecte;
use App\Entity\Contributeurs;
use App\Repository\PaiementRepository;

class CalculateurAgentContribuableSiteService
{
    private $paiementRepository;

    public function __construct(PaiementRepository $paiementRepository)
    {
        $this->paiementRepository = $paiementRepository;
    }

    public function obtenirDonneesParSitePourAgent(AgentCollecte $agentCollecte): array
    {
        $resultats = [];

        foreach ($agentCollecte->getSites() as $site) {
            $contributeurs = $site->getContributeurs();

            foreach ($contributeurs as $contributeur) {
                $resultats[$site->getId()]['contributeurs'][] = [
                    'id' => $contributeur->getId(),
                    'nom' => $contributeur->getNom(),
                    'prenom' => $contributeur->getPrenom(),
                    'montant_journalier' => $this->calculerMontantJournalier($contributeur),
                    'total_journalier' => $this->calculerTotalJournalier($contributeur),
                    'total_mensuel' => $this->calculerTotalMensuel($contributeur),
                    'total_annuel' => $this->calculerTotalAnnuel($contributeur),
                    'manque_a_gagner_journalier' => $this->calculerManqueAGagnerJournalier($contributeur),
                    'manque_a_gagner_mensuel' => $this->calculerManqueAGagnerMensuel($contributeur),
                    'manque_a_gagner_annuel' => $this->calculerManqueAGagnerAnnuel($contributeur),
                ];
            }
        }

        return $resultats;
    }

    public function calculerMontantJournalier(Contributeurs $contributeur): float
    {
        $dateDuJour = new \DateTime();
        $paiements = $this->paiementRepository->findByContributeurAndDate($contributeur, $dateDuJour);

        return !empty($paiements) ? $paiements[0]->getMontant() : 0;
    }

    public function calculerTotalJournalier(Contributeurs $contributeur): float
    {
        return $this->calculerMontantJournalier($contributeur);
    }

    public function calculerTotalMensuel(Contributeurs $contributeur): float
    {
        $total = 0;
        $debutDuMois = (new \DateTime())->modify('first day of this month');
        $paiements = $this->paiementRepository->findByContributeurAndPeriod($contributeur, $debutDuMois, new \DateTime());

        foreach ($paiements as $paiement) {
            $total += $paiement->getMontant();
        }

        return $total;
    }

    public function calculerTotalAnnuel(Contributeurs $contributeur): float
    {
        $total = 0;
        $debutDeLAnnee = (new \DateTime())->modify('first day of January this year');
        $paiements = $this->paiementRepository->findByContributeurAndPeriod($contributeur, $debutDeLAnnee, new \DateTime());

        foreach ($paiements as $paiement) {
            $total += $paiement->getMontant();
        }

        return $total;
    }

    public function calculerManqueAGagnerJournalier(Contributeurs $contributeur): float
    {
        $totalJournalierAttendu = $this->obtenirTotalJournalierAttendu($contributeur); // Remplacez cette fonction par la logique appropriée
        return $totalJournalierAttendu - $this->calculerMontantJournalier($contributeur);
    }

    public function calculerManqueAGagnerMensuel(Contributeurs $contributeur): float
    {
        $totalMensuelAttendu = $this->obtenirTotalMensuelAttendu($contributeur); // Remplacez cette fonction par la logique appropriée
        return $totalMensuelAttendu - $this->calculerTotalMensuel($contributeur);
    }

    public function calculerManqueAGagnerAnnuel(Contributeurs $contributeur): float
    {
        $totalAnnuelAttendu = $this->obtenirTotalAnnuelAttendu($contributeur); // Remplacez cette fonction par la logique appropriée
        return $totalAnnuelAttendu - $this->calculerTotalAnnuel($contributeur);
    }

    private function obtenirTotalJournalierAttendu(Contributeurs $contributeur): float
    {
        // Implémentez la logique pour obtenir le montant journalier attendu
        return 0; // Exemple de valeur, à adapter
    }

    private function obtenirTotalMensuelAttendu(Contributeurs $contributeur): float
    {
        // Implémentez la logique pour obtenir le montant mensuel attendu
        return 0; // Exemple de valeur, à adapter
    }

    private function obtenirTotalAnnuelAttendu(Contributeurs $contributeur): float
    {
        // Implémentez la logique pour obtenir le montant annuel attendu
        return 0; // Exemple de valeur, à adapter
    }

}
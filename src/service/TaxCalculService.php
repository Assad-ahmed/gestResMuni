<?php

namespace App\service;

use App\Entity\Propriete;

class TaxCalculService
{
    public function calculateCFPB(Propriete $propriete)
    {
        // Calcul du revenu net
        $revenuNet = $propriete->getRevenuNet();

        // Application de la déduction en fonction du type de bâtiment
        if ($propriete->getType() === 'usine') {
            $deduction = $revenuNet * 0.5;
        } else {
            $deduction = $revenuNet * 0.4;
        }

        // Calcul de la CFPB en appliquant le taux
        $cfpb = ($revenuNet - $deduction) * 0.15;

        return $cfpb;
    }

    public function calculateCFPNB(Propriete $propriete)
    {
        // Récupération de la valeur vénale
        $valeurVénale = $propriete->getValeurVénale();

        // Calcul du revenu net
        $revenuNet = $valeurVénale;

        // Calcul de la CFPNB en appliquant le taux
        $cfpnb = $revenuNet * 0.05;

        return $cfpnb;
    }

    public function calculateTOM(Propriete $propriete)
    {
        // Récupération de la valeur locative de la propriété
        $valeurLocative = $propriete->getValeurLocative();

        // Déterminer le taux en fonction de la région
        $region = $propriete->getRegion();
        $taux = ($region === 'Dakar') ? 0.06 : 0.05;

        // Calcul de la TOM
        $tom = $valeurLocative * $taux;

        return $tom;
    }
}
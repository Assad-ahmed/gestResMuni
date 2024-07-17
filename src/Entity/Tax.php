<?php

namespace App\Entity;

use App\Repository\TaxRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaxRepository::class)]
class Tax
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;



    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montant = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $category = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $valeurVenale = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $valeurLocative = null;

    #[ORM\Column(length: 255)]
    private ?string $typeBatiment = null;

    #[ORM\Column(length: 255)]
    private ?string $region = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $revenuNet = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getValeurVenale(): ?string
    {
        return $this->valeurVenale;
    }

    public function setValeurVenale(string $valeurVenale): static
    {
        $this->valeurVenale = $valeurVenale;

        return $this;
    }

    public function getValeurLocative(): ?string
    {
        return $this->valeurLocative;
    }

    public function setValeurLocative(string $valeurLocative): static
    {
        $this->valeurLocative = $valeurLocative;

        return $this;
    }

    public function getTypeBatiment(): ?string
    {
        return $this->typeBatiment;
    }

    public function setTypeBatiment(string $typeBatiment): static
    {
        $this->typeBatiment = $typeBatiment;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getRevenuNet(): ?string
    {
        return $this->revenuNet;
    }

    public function setRevenuNet(string $revenuNet): static
    {
        $this->revenuNet = $revenuNet;

        return $this;
    }

    // Method to calculate CFPB
    public function calculerCFPB()
    {
        $this->revenuNet = ($this->typeBatiment === 'usine') ? $this->valeurLocative * 0.50 : $this->valeurLocative * 0.60;
        $this->montant = $this->revenuNet * 0.15;
    }
    // Method to calculate CFPNB
    public function calculerCFPNB()
    {
        if ($this->valeurVenale !== null) {
            $this->montant = $this->valeurVenale * 0.05;
        } else {
            $this->montant = 0;
        }
    }

    // Method to calculate TOM
    public function calculerTOM()
    {
        if ($this->typeBatiment !== 'usine') {
            $tauxTom = ($this->region === 'Dakar') ? 0.06 : 0.05;
            $this->montant = $this->valeurLocative * $tauxTom;
        } else {
            $this->montant = 0;
        }
    }
}


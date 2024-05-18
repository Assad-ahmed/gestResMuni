<?php

namespace App\Entity;

use App\Repository\CFPBRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CFPBRepository::class)]
class CFPB
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomP = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
    private ?string $surface = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 3)]
    private ?string $deduction = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 3)]
    private ?string $revenuNet = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 3)]
    private ?string $taux = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 3)]
    private ?string $montantTaxe = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 3)]
    private ?string $valeurLocative = null;

    #[ORM\Column(length: 255)]
    private ?string $typeBatiment = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateImposition = null;
    public function __construct()
    {
        $this->taux = 0.15; // 15% par défaut
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomP(): ?string
    {
        return $this->nomP;
    }

    public function setNomP(string $nomP): static
    {
        $this->nomP = $nomP;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getSurface(): ?string
    {
        return $this->surface;
    }

    public function setSurface(string $surface): static
    {
        $this->surface = $surface;

        return $this;
    }

    public function getValeurLocative(): ?string
    {
        return $this->valeurLocative;
    }

    public function setValeurLocative(string $valeurLocative): static
    {
        $this->valeurLocative = $valeurLocative;
        $this->calculerDeduction();
        $this->calculerRevenuNet();
        $this->calculerMontantTaxe();

        return $this;
    }
    public function getDeduction(): ?float
    {
        return $this->deduction;
    }

    private function calculerDeduction(): void
    {
        if ($this->typeBatiment === 'usine') {
            $this->deduction = 0.50;
        } else {
            $this->deduction = 0.40;
        }
    }

    public function getRevenuNet(): ?float
    {
        return $this->revenuNet;
    }
    private function calculerRevenuNet(): void
    {
        $this->revenuNet = $this->valeurLocative * (1 - $this->deduction);
    }

    public function getTaux(): ?float
    {
        return $this->taux;
    }

    public function setTaux(float $taux): self
    {
        $this->taux = $taux;
        $this->calculerMontantTaxe();

        return $this;
    }

    public function getMontantTaxe(): ?float
    {
        return $this->montantTaxe;
    }

    private function calculerMontantTaxe(): void
    {
        $this->montantTaxe = $this->revenuNet * $this->taux;
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

    public function getDateImposition(): ?\DateTimeInterface
    {
        return $this->dateImposition;
    }

    public function setDateImposition(\DateTimeInterface $dateImposition): static
    {
        $this->dateImposition = $dateImposition;

        return $this;
    }
}

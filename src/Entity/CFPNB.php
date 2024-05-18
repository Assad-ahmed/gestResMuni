<?php

namespace App\Entity;

use App\Repository\CFPNBRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CFPNBRepository::class)]
class CFPNB
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomP = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: '2')]
    private ?string $surface = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 3)]
    private ?string $valeurVenale= null;
    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 3)]
    private ?string $revenuNet= null;
    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: '2')]
    private ?string $taux = null;
    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: '3')]
    private ?string $montantTaxe= null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $typeTerrain = null;
    public function __construct()
    {
        $this->taux = 0.05; // 5% par défaut
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

    public function getValeurVenale(): ?string
    {
        return $this->valeurVenale;
    }

    public function setValeurVenale(string $valeurVenale): static
    {
        $this->valeurVenale = $valeurVenale;
        $this->calculerRevenuNet();
        $this->calculerMontantTaxe();

        return $this;
    }
    public function getRevenuNet(): ?float
    {
        return $this->revenuNet;
    }

    private function calculerRevenuNet(): void
    {
        $this->revenuNet = $this->valeurVenale; // Simplification pour cet exemple
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


    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getTypeTerrain(): ?string
    {
        return $this->typeTerrain;
    }

    public function setTypeTerrain(string $typeTerrain): static
    {
        $this->typeTerrain = $typeTerrain;

        return $this;
    }
}

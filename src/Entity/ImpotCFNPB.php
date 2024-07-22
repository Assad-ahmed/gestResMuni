<?php

namespace App\Entity;

use App\Repository\ImpotCFNPBRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImpotCFNPBRepository::class)]
class ImpotCFNPB
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $valeurVenale = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $revenuNet = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montant = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne(inversedBy: 'impotCFNPBs')]
    private ?Propriete $propriete = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getRevenuNet(): ?string
    {
        return $this->revenuNet;
    }

    public function setRevenuNet(string $revenuNet): static
    {
        $this->revenuNet = $revenuNet;

        return $this;
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
    public function calculerRevenuNet(): self
    {
        // Pour cet exemple, supposons que le revenu net est 10% de la valeur vénale
        $this->revenuNet = $this->valeurVenale * 0.1;

        return $this;
    }

    public function calculerImpotCFPNB(): self
    {
        if ($this->revenuNet === null) {
            $this->calculerRevenuNet();
        }
        $this->montant = $this->revenuNet * 0.05;

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

    public function getPropriete(): ?Propriete
    {
        return $this->propriete;
    }

    public function setPropriete(?Propriete $propriete): static
    {
        $this->propriete = $propriete;

        return $this;
    }
}

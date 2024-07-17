<?php

namespace App\Entity;

use App\Repository\ImpotCFPBRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImpotCFPBRepository::class)]
class ImpotCFPB
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $typeBatiment = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $valeurLocative = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $revenuNet = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $montant = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getValeurLocative(): ?string
    {
        return $this->valeurLocative;
    }

    public function setValeurLocative(string $valeurLocative): static
    {
        $this->valeurLocative = $valeurLocative;

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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

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
}

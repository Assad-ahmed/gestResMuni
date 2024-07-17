<?php

namespace App\Entity;

use App\Repository\ImpotAssiValeurRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImpotAssiValeurRepository::class)]
class ImpotAssiValeur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $typeImpotAssi = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $MontantCumule = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne(inversedBy: 'impotAssiValeurs')]
    private ?TypeImpots $typeImpots = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeImpotAssi(): ?string
    {
        return $this->typeImpotAssi;
    }

    public function setTypeImpotAssi(string $typeImpotAssi): static
    {
        $this->typeImpotAssi = $typeImpotAssi;

        return $this;
    }

    public function getMontantCumule(): ?string
    {
        return $this->MontantCumule;
    }

    public function setMontantCumule(string $MontantCumule): static
    {
        $this->MontantCumule = $MontantCumule;

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

    public function getTypeImpots(): ?TypeImpots
    {
        return $this->typeImpots;
    }

    public function setTypeImpots(?TypeImpots $typeImpots): static
    {
        $this->typeImpots = $typeImpots;

        return $this;
    }
}

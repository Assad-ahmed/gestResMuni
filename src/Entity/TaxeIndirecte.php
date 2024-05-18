<?php

namespace App\Entity;

use App\Repository\TaxeIndirecteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaxeIndirecteRepository::class)]
class TaxeIndirecte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $typeTaxe = null;

    #[ORM\Column(length: 255)]
    private ?string $codeArticle = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 3)]
    private ?string $montantJournalier = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeTaxe(): ?string
    {
        return $this->typeTaxe;
    }

    public function setTypeTaxe(string $typeTaxe): static
    {
        $this->typeTaxe = $typeTaxe;

        return $this;
    }

    public function getCodeArticle(): ?string
    {
        return $this->codeArticle;
    }

    public function setCodeArticle(string $codeArticle): static
    {
        $this->codeArticle = $codeArticle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getMontantJournalier(): ?string
    {
        return $this->montantJournalier;
    }

    public function setMontantJournalier(string $montantJournalier): static
    {
        $this->montantJournalier = $montantJournalier;

        return $this;
    }

    public function getMontantMensuel(): float
    {
        return $this->montantJournalier *  30.44;
    }

    public function getMontantAnnuel(): float
    {
        return $this->montantJournalier * 365;
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
}

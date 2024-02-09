<?php

namespace App\Entity;

use App\Repository\SiteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SiteRepository::class)]
class Site
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 50, scale: 3)]
    private ?string $montantJournalier = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 30, scale: 3)]
    private ?string $montantMensuel = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 30, scale: 3)]
    private ?string $montantAnnuel = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMontantJournalier(): ?string
    {
        return $this->montantJournalier;
    }

    public function setMontantJournalier(string $montantJournalier): static
    {
        $this->montantJournalier = $montantJournalier;

        return $this;
    }

    public function getMontantMensuel(): ?string
    {
        return $this->montantMensuel;
    }

    public function setMontantMensuel(string $montantMensuel): static
    {
        $this->montantMensuel = $montantMensuel;

        return $this;
    }

    public function getMontantAnnuel(): ?string
    {
        return $this->montantAnnuel;
    }

    public function setMontantAnnuel(string $montantAnnuel): static
    {
        $this->montantAnnuel = $montantAnnuel;

        return $this;
    }
}

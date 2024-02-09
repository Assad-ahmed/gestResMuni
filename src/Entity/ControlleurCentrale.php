<?php

namespace App\Entity;

use App\Repository\ControlleurCentraleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ControlleurCentraleRepository::class)]
class ControlleurCentrale
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomControlleur = null;

    #[ORM\Column(length: 255)]
    private ?string $prenomControlleur = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(length: 255)]
    private ?string $Telephone = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomControlleur(): ?string
    {
        return $this->nomControlleur;
    }

    public function setNomControlleur(string $nomControlleur): static
    {
        $this->nomControlleur = $nomControlleur;

        return $this;
    }

    public function getPrenomControlleur(): ?string
    {
        return $this->prenomControlleur;
    }

    public function setPrenomControlleur(string $prenomControlleur): static
    {
        $this->prenomControlleur = $prenomControlleur;

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

    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    public function setTelephone(string $Telephone): static
    {
        $this->Telephone = $Telephone;

        return $this;
    }
}

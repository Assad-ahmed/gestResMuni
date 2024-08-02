<?php

namespace App\Entity;

use App\Repository\PersonneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PersonneRepository::class)]
class Personne
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Veuillez renseigner un nom")]
    #[Assert\Length(min:2, max:255,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères")]
    #[Assert\Regex(pattern:"/^[a-zA-ZÀ-ÿ\s'-]+$/",
        message:"Le nom ne peut contenir que des lettres et des espaces")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Veuillez renseigner un prenom")]
    #[Assert\Length(min:2, max:35,
        minMessage: "Le prenom doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le prenom ne peut pas dépasser {{ limit }} caractères")]
    #[Assert\Regex(pattern:"/^[a-zA-ZÀ-ÿ\s'-]+$/",
        message:"Le prenom ne peut contenir que des lettres et des espaces")]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Veuillez renseigner un age")]
    #[Assert\GreaterThanOrEqual(value: 9, message: "L'âge doit être au moins de 9 ans")]
    private ?string $age = null;

    #[ORM\Column]
    private ?bool $estEleve = null;

    public function __construct()
    {
        $this->impotMiniFiscals = new ArrayCollection();
        $this->taxeRurales = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->age;
    }

    public function setAge(string $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function isEstEleve(): ?bool
    {
        return $this->estEleve;
    }

    public function setEstEleve(bool $estEleve): static
    {
        $this->estEleve = $estEleve;

        return $this;
    }

}

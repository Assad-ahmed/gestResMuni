<?php

namespace App\Entity;

use App\Repository\ContributeursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContributeursRepository::class)]
class Contributeurs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date_paye = null;

    #[ORM\ManyToOne(inversedBy: 'contributeurs')]
    private ?SiteCollecte $siteCollecte = null;

    #[ORM\Column(length: 255)]
    private ?string $numeroEtablissement = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montantJour = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montantMois = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $manqueAGagnerJour = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $manqueAGagnerMois = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $totalCollecte = null;

   


  
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

   
    public function getDatePaye(): ?\DateTimeInterface
    {
        return $this->date_paye;
    }

    public function setDatePaye(\DateTimeInterface $date_paye): static
    {
        $this->date_paye = $date_paye;

        return $this;
    }

    public function getSiteCollecte(): ?SiteCollecte
    {
        return $this->siteCollecte;
    }

    public function setSiteCollecte(?SiteCollecte $siteCollecte): static
    {
        $this->siteCollecte = $siteCollecte;

        return $this;
    }

    public function getNumeroEtablissement(): ?string
    {
        return $this->numeroEtablissement;
    }

    public function setNumeroEtablissement(string $numeroEtablissement): static
    {
        $this->numeroEtablissement = $numeroEtablissement;

        return $this;
    }

    public function getMontantJour(): ?string
    {
        return $this->montantJour;
    }

    public function setMontantJour(string $montantJour): static
    {
        $this->montantJour = $montantJour;

        return $this;
    }

    public function getMontantMois(): ?string
    {
        return $this->montantMois;
    }

    public function setMontantMois(string $montantMois): static
    {
        $this->montantMois = $montantMois;

        return $this;
    }

    public function getManqueAGagnerJour(): ?string
    {
        return $this->manqueAGagnerJour;
    }

    public function setManqueAGagnerJour(string $manqueAGagnerJour): static
    {
        $this->manqueAGagnerJour = $manqueAGagnerJour;

        return $this;
    }

    public function getManqueAGagnerMois(): ?string
    {
        return $this->manqueAGagnerMois;
    }

    public function setManqueAGagnerMois(string $manqueAGagnerMois): static
    {
        $this->manqueAGagnerMois = $manqueAGagnerMois;

        return $this;
    }

    public function getTotalCollecte(): ?string
    {
        return $this->totalCollecte;
    }

    public function setTotalCollecte(string $totalCollecte): static
    {
        $this->totalCollecte = $totalCollecte;

        return $this;
    }



}

<?php

namespace App\Entity;

use App\Repository\RecettefiscaleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecettefiscaleRepository::class)]
class Recettefiscale
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montantCumuleJour = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montantCumuleMoi = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montantCumuleAnnee = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\ManyToMany(targetEntity: SiteCollecte::class, inversedBy: 'recettefiscales')]
    private Collection $sites;

    public function __construct()
    {
        $this->sites = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
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

    public function getMontantCumuleJour(): ?string
    {
        return $this->montantCumuleJour;
    }

    public function setMontantCumuleJour(string $montantCumuleJour): static
    {
        $this->montantCumuleJour = $montantCumuleJour;

        return $this;
    }

    public function getMontantCumuleMoi(): ?string
    {
        return $this->montantCumuleMoi;
    }

    public function setMontantCumuleMoi(string $montantCumuleMoi): static
    {
        $this->montantCumuleMoi = $montantCumuleMoi;

        return $this;
    }

    public function getMontantCumuleAnnee(): ?string
    {
        return $this->montantCumuleAnnee;
    }

    public function setMontantCumuleAnnee(string $montantCumuleAnnee): static
    {
        $this->montantCumuleAnnee = $montantCumuleAnnee;

        return $this;
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

    /**
     * @return Collection<int, SiteCollecte>
     */
    public function getSites(): Collection
    {
        return $this->sites;
    }

    public function addSite(SiteCollecte $site): static
    {
        if (!$this->sites->contains($site)) {
            $this->sites->add($site);
        }

        return $this;
    }

    public function removeSite(SiteCollecte $site): static
    {
        $this->sites->removeElement($site);

        return $this;
    }

}

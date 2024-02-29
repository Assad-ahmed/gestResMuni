<?php

namespace App\Entity;

use App\Repository\SiteCollecteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SiteCollecteRepository::class)]
class SiteCollecte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montantJournalier = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montantMensuel = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montantAnnuel = null;

    #[ORM\ManyToMany(targetEntity: Contributeurs::class, mappedBy: 'sites')]
    private Collection $contributeurs;

    #[ORM\ManyToMany(targetEntity: Ressource::class, mappedBy: 'sites')]
    private Collection $yes;

    public function __construct()
    {
        $this->contributeurs = new ArrayCollection();
        $this->yes = new ArrayCollection();
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
    public function __toString(): string
    {
        return $this->nom;
    }

    /**
     * @return Collection<int, Contributeurs>
     */
    public function getContributeurs(): Collection
    {
        return $this->contributeurs;
    }

    public function addContributeur(Contributeurs $contributeur): static
    {
        if (!$this->contributeurs->contains($contributeur)) {
            $this->contributeurs->add($contributeur);
            $contributeur->addSite($this);
        }

        return $this;
    }

    public function removeContributeur(Contributeurs $contributeur): static
    {
        if ($this->contributeurs->removeElement($contributeur)) {
            $contributeur->removeSite($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Ressource>
     */
    public function getYes(): Collection
    {
        return $this->yes;
    }

    public function addYe(Ressource $ye): static
    {
        if (!$this->yes->contains($ye)) {
            $this->yes->add($ye);
            $ye->addSite($this);
        }

        return $this;
    }

    public function removeYe(Ressource $ye): static
    {
        if ($this->yes->removeElement($ye)) {
            $ye->removeSite($this);
        }

        return $this;
    }

}


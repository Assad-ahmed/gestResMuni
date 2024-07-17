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

    #[ORM\ManyToMany(targetEntity: RecetteNonFiscale::class, mappedBy: 'sites')]
    private Collection $recetteNonFiscales;

    #[ORM\ManyToMany(targetEntity: Ristourne::class, mappedBy: 'sites')]
    private Collection $ristournes;

    #[ORM\ManyToMany(targetEntity: Excedent::class, mappedBy: 'sites')]
    private Collection $excedents;

    #[ORM\ManyToMany(targetEntity: Impot::class, mappedBy: 'site')]
    private Collection $impots;



    public function __construct()
    {
        $this->contributeurs = new ArrayCollection();
        $this->yes = new ArrayCollection();

        $this->recetteNonFiscales = new ArrayCollection();
        $this->ristournes = new ArrayCollection();
        $this->excedents = new ArrayCollection();
        $this->impots = new ArrayCollection();


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
        $this->calculateMontantMensuelAnnuel();
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
     * @return Collection<int, RecetteNonFiscale>
     */
    public function getRecetteNonFiscales(): Collection
    {
        return $this->recetteNonFiscales;
    }

    public function addRecetteNonFiscale(RecetteNonFiscale $recetteNonFiscale): static
    {
        if (!$this->recetteNonFiscales->contains($recetteNonFiscale)) {
            $this->recetteNonFiscales->add($recetteNonFiscale);
            $recetteNonFiscale->addSite($this);
        }

        return $this;
    }

    public function removeRecetteNonFiscale(RecetteNonFiscale $recetteNonFiscale): static
    {
        if ($this->recetteNonFiscales->removeElement($recetteNonFiscale)) {
            $recetteNonFiscale->removeSite($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Ristourne>
     */
    public function getRistournes(): Collection
    {
        return $this->ristournes;
    }

    public function addRistourne(Ristourne $ristourne): static
    {
        if (!$this->ristournes->contains($ristourne)) {
            $this->ristournes->add($ristourne);
            $ristourne->addSite($this);
        }

        return $this;
    }

    public function removeRistourne(Ristourne $ristourne): static
    {
        if ($this->ristournes->removeElement($ristourne)) {
            $ristourne->removeSite($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Excedent>
     */
    public function getExcedents(): Collection
    {
        return $this->excedents;
    }

    public function addExcedent(Excedent $excedent): static
    {
        if (!$this->excedents->contains($excedent)) {
            $this->excedents->add($excedent);
            $excedent->addSite($this);
        }

        return $this;
    }

    public function removeExcedent(Excedent $excedent): static
    {
        if ($this->excedents->removeElement($excedent)) {
            $excedent->removeSite($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Impot>
     */
    public function getImpots(): Collection
    {
        return $this->impots;
    }

    public function addImpot(Impot $impot): static
    {
        if (!$this->impots->contains($impot)) {
            $this->impots->add($impot);
            $impot->addSite($this);
        }

        return $this;
    }

    public function removeImpot(Impot $impot): static
    {
        if ($this->impots->removeElement($impot)) {
            $impot->removeSite($this);
        }

        return $this;
    }









    private function calculateMontantMensuelAnnuel(): void
    {
        if ($this->montantJournalier !== null) {
            $montantJournalier = floatval($this->montantJournalier);
            $this->montantMensuel = number_format($montantJournalier * 30, 3, '.', '');
            $this->montantAnnuel = number_format($montantJournalier * 365, 3, '.', '');
        }
    }

}




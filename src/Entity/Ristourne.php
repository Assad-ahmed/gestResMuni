<?php

namespace App\Entity;

use App\Repository\RistourneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RistourneRepository::class)]
class Ristourne
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montantJournalier = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montantMensuel = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montantAnnuel = null;

    #[ORM\ManyToMany(targetEntity: SiteCollecte::class, inversedBy: 'ristournes')]
    private Collection $sites;

    public function __construct()
    {
        $this->sites = new ArrayCollection();
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

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

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
    private function calculateMontantMensuelAnnuel(): void
    {
        if ($this->montantJournalier !== null) {
            $montantJournalier = floatval($this->montantJournalier);
            $this->montantMensuel = number_format($montantJournalier * 30, 3, '.', '');
            $this->montantAnnuel = number_format($montantJournalier * 365, 3, '.', '');
        }
    }
}

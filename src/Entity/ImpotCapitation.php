<?php

namespace App\Entity;

use App\Repository\ImpotCapitationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImpotCapitationRepository::class)]
class ImpotCapitation
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
    private ?string $montantCumuleJournalier = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montantCumuleMensuel = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montantCumuleAnnuel = null;

    #[ORM\ManyToMany(targetEntity: SiteCollecte::class, inversedBy: 'impotCapitations')]
    private Collection $site;

    public function __construct()
    {
        $this->site = new ArrayCollection();
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

    public function getMontantCumuleJournalier(): ?string
    {
        return $this->montantCumuleJournalier;
    }

    public function setMontantCumuleJournalier(string $montantCumuleJournalier): static
    {
        $this->montantCumuleJournalier = $montantCumuleJournalier;

        return $this;
    }

    public function getMontantCumuleMensuel(): ?string
    {
        return $this->montantCumuleMensuel;
    }

    public function setMontantCumuleMensuel(string $montantCumuleMensuel): static
    {
        $this->montantCumuleMensuel = $montantCumuleMensuel;

        return $this;
    }

    public function getMontantCumuleAnnuel(): ?string
    {
        return $this->montantCumuleAnnuel;
    }

    public function setMontantCumuleAnnuel(string $montantCumuleAnnuel): static
    {
        $this->montantCumuleAnnuel = $montantCumuleAnnuel;

        return $this;
    }

    /**
     * @return Collection<int, SiteCollecte>
     */
    public function getSite(): Collection
    {
        return $this->site;
    }

    public function addSite(SiteCollecte $site): static
    {
        if (!$this->site->contains($site)) {
            $this->site->add($site);
        }

        return $this;
    }

    public function removeSite(SiteCollecte $site): static
    {
        $this->site->removeElement($site);

        return $this;
    }
}

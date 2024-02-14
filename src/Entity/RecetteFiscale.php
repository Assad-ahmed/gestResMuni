<?php

namespace App\Entity;

use App\Repository\RecetteFiscaleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RecetteFiscaleRepository::class)]
class RecetteFiscale
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 30, scale: 3)]
    private ?string $montantCumuleJournalier = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 30, scale: 3)]
    private ?string $montantCumuleMensuel = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 30, scale: 3)]
    private ?string $montantCumuleAnnuel = null;

    #[ORM\ManyToMany(targetEntity: TypeImpot::class, inversedBy: 'recetteFiscales')]
    private Collection $type_impots;

    public function __construct()
    {
        $this->type_impots = new ArrayCollection();
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
     * @return Collection<int, TypeImpot>
     */
    public function getTypeImpots(): Collection
    {
        return $this->type_impots;
    }

    public function addTypeImpot(TypeImpot $typeImpot): static
    {
        if (!$this->type_impots->contains($typeImpot)) {
            $this->type_impots->add($typeImpot);
        }

        return $this;
    }

    public function removeTypeImpot(TypeImpot $typeImpot): static
    {
        $this->type_impots->removeElement($typeImpot);

        return $this;
    }
}

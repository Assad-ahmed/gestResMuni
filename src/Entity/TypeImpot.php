<?php

namespace App\Entity;

use App\Repository\TypeImpotRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeImpotRepository::class)]
class TypeImpot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomtype = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 30, scale: 3)]
    private ?string $montantCumuleJour = null;

    #[ORM\ManyToMany(targetEntity: RecetteFiscale::class, mappedBy: 'type_impots')]
    private Collection $recetteFiscales;

    public function __construct()
    {
        $this->recetteFiscales = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomtype(): ?string
    {
        return $this->nomtype;
    }

    public function setNomtype(string $nomtype): static
    {
        $this->nomtype = $nomtype;

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

    /**
     * @return Collection<int, RecetteFiscale>
     */
    public function getRecetteFiscales(): Collection
    {
        return $this->recetteFiscales;
    }

    public function addRecetteFiscale(RecetteFiscale $recetteFiscale): static
    {
        if (!$this->recetteFiscales->contains($recetteFiscale)) {
            $this->recetteFiscales->add($recetteFiscale);
            $recetteFiscale->addTypeImpot($this);
        }

        return $this;
    }

    public function removeRecetteFiscale(RecetteFiscale $recetteFiscale): static
    {
        if ($this->recetteFiscales->removeElement($recetteFiscale)) {
            $recetteFiscale->removeTypeImpot($this);
        }

        return $this;
    }
}

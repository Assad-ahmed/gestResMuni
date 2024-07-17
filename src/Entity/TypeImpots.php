<?php

namespace App\Entity;

use App\Repository\TypeImpotsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeImpotsRepository::class)]
class TypeImpots
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\OneToMany(mappedBy: 'typeImpots', targetEntity: ImpotAssiValeur::class)]
    private Collection $impotAssiValeurs;

    public function __construct()
    {
        $this->impotAssiValeurs = new ArrayCollection();
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

    /**
     * @return Collection<int, ImpotAssiValeur>
     */
    public function getImpotAssiValeurs(): Collection
    {
        return $this->impotAssiValeurs;
    }

    public function addImpotAssiValeur(ImpotAssiValeur $impotAssiValeur): static
    {
        if (!$this->impotAssiValeurs->contains($impotAssiValeur)) {
            $this->impotAssiValeurs->add($impotAssiValeur);
            $impotAssiValeur->setTypeImpots($this);
        }

        return $this;
    }

    public function removeImpotAssiValeur(ImpotAssiValeur $impotAssiValeur): static
    {
        if ($this->impotAssiValeurs->removeElement($impotAssiValeur)) {
            // set the owning side to null (unless already changed)
            if ($impotAssiValeur->getTypeImpots() === $this) {
                $impotAssiValeur->setTypeImpots(null);
            }
        }

        return $this;
    }
}

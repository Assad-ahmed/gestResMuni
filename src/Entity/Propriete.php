<?php

namespace App\Entity;

use App\Repository\ProprieteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProprieteRepository::class)]
class Propriete
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    private ?string $telephone = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\OneToMany(mappedBy: 'propriete', targetEntity: ImpotTOM::class)]
    private Collection $impotTOMs;

    public function __construct()
    {
        $this->impotTOMs = new ArrayCollection();
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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;

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

    /**
     * @return Collection<int, ImpotTOM>
     */
    public function getImpotTOMs(): Collection
    {
        return $this->impotTOMs;
    }

    public function addImpotTOM(ImpotTOM $impotTOM): static
    {
        if (!$this->impotTOMs->contains($impotTOM)) {
            $this->impotTOMs->add($impotTOM);
            $impotTOM->setPropriete($this);
        }

        return $this;
    }

    public function removeImpotTOM(ImpotTOM $impotTOM): static
    {
        if ($this->impotTOMs->removeElement($impotTOM)) {
            // set the owning side to null (unless already changed)
            if ($impotTOM->getPropriete() === $this) {
                $impotTOM->setPropriete(null);
            }
        }

        return $this;
    }




}

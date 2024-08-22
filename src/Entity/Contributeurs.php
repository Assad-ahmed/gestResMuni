<?php

namespace App\Entity;

use App\Repository\ContributeursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
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

    #[ORM\ManyToOne(inversedBy: 'contributeurs')]
    private ?SiteCollecte $siteCollecte = null;

    #[ORM\Column(length: 255)]
    private ?string $numeroEtablissement = null;

    #[ORM\OneToMany(mappedBy: 'contributeur', targetEntity: Paiement::class)]
    private Collection $paiements;

    #[ORM\ManyToOne(inversedBy: 'contributeurs')]
    private ?AgentCollecte $agentCollecte = null;

    public function __construct()
    {
        $this->paiements = new ArrayCollection();
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

    /**
     * @return Collection<int, Paiement>
     */
    public function getPaiements(): Collection
    {
        return $this->paiements;
    }

    public function addPaiement(Paiement $paiement): static
    {
        if (!$this->paiements->contains($paiement)) {
            $this->paiements->add($paiement);
            $paiement->setContributeur($this);
        }

        return $this;
    }

    public function removePaiement(Paiement $paiement): static
    {
        if ($this->paiements->removeElement($paiement)) {
            // set the owning side to null (unless already changed)
            if ($paiement->getContributeur() === $this) {
                $paiement->setContributeur(null);
            }
        }

        return $this;
    }

    public function getAgentCollecte(): ?AgentCollecte
    {
        return $this->agentCollecte;
    }

    public function setAgentCollecte(?AgentCollecte $agentCollecte): static
    {
        $this->agentCollecte = $agentCollecte;

        return $this;
    }


}

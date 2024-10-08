<?php

namespace App\Entity;

use App\Repository\SiteCollecteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
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
    private ?string $localisation = null;


    #[ORM\OneToMany(mappedBy: 'siteCollecte', targetEntity: Contributeurs::class)]
    private Collection $contributeurs;

    #[ORM\ManyToMany(targetEntity: AgentCollecte::class, inversedBy: 'siteCollectes')]
    private Collection $agentCollecte;

    public function __construct()
    {
        $this->contributeurs = new ArrayCollection();
        $this->agentCollecte = new ArrayCollection();
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

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
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
            $contributeur->setSiteCollecte($this);
        }

        return $this;
    }

    public function removeContributeur(Contributeurs $contributeur): static
    {
        if ($this->contributeurs->removeElement($contributeur)) {
            if ($contributeur->getSiteCollecte() === $this) {
                $contributeur->setSiteCollecte(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AgentCollecte>
     */
    public function getAgentCollecte(): Collection
    {
        return $this->agentCollecte;
    }

    public function addAgentCollecte(AgentCollecte $agentCollecte): static
    {
        if (!$this->agentCollecte->contains($agentCollecte)) {
            $this->agentCollecte->add($agentCollecte);
        }

        return $this;
    }

    public function removeAgentCollecte(AgentCollecte $agentCollecte): static
    {
        $this->agentCollecte->removeElement($agentCollecte);

        return $this;
    }
   
}




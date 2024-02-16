<?php

namespace App\Entity;

use App\Repository\SiteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SiteRepository::class)]
class Site
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 50, scale: 3)]
    private ?string $montantJournalier = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 30, scale: 3)]
    private ?string $montantMensuel = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 30, scale: 3)]
    private ?string $montantAnnuel = null;

    #[ORM\ManyToMany(targetEntity: Ressourcepropre::class, inversedBy: 'sites')]
    private Collection $ressource_propre;

    #[ORM\ManyToMany(targetEntity: Contributeur::class)]
    private Collection $contributeur;

    #[ORM\ManyToMany(targetEntity: Agent::class)]
    private Collection $agent_collecte;

    public function __construct()
    {
        $this->ressource_propre = new ArrayCollection();
        $this->contributeur = new ArrayCollection();
        $this->agent_collecte = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection<int, Ressourcepropre>
     */
    public function getRessourcePropre(): Collection
    {
        return $this->ressource_propre;
    }

    public function addRessourcePropre(Ressourcepropre $ressourcePropre): static
    {
        if (!$this->ressource_propre->contains($ressourcePropre)) {
            $this->ressource_propre->add($ressourcePropre);
        }

        return $this;
    }

    public function removeRessourcePropre(Ressourcepropre $ressourcePropre): static
    {
        $this->ressource_propre->removeElement($ressourcePropre);

        return $this;
    }

    /**
     * @return Collection<int, Contributeur>
     */
    public function getContributeur(): Collection
    {
        return $this->contributeur;
    }

    public function addContributeur(Contributeur $contributeur): static
    {
        if (!$this->contributeur->contains($contributeur)) {
            $this->contributeur->add($contributeur);
        }

        return $this;
    }

    public function removeContributeur(Contributeur $contributeur): static
    {
        $this->contributeur->removeElement($contributeur);

        return $this;
    }

    /**
     * @return Collection<int, Agent>
     */
    public function getAgentCollecte(): Collection
    {
        return $this->agent_collecte;
    }

    public function addAgentCollecte(Agent $agentCollecte): static
    {
        if (!$this->agent_collecte->contains($agentCollecte)) {
            $this->agent_collecte->add($agentCollecte);
        }

        return $this;
    }

    public function removeAgentCollecte(Agent $agentCollecte): static
    {
        $this->agent_collecte->removeElement($agentCollecte);

        return $this;
    }

    public function __toString(): string
    {
        return $this->adresse. " ". $this->montantJournalier. " " .$this->montantMensuel. " " .$this->montantAnnuel;
    }
}

<?php

namespace App\Entity;

use App\Repository\AgentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AgentRepository::class)]
class Agent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomAgent = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $siteVisite = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 30, scale: 3, nullable: true)]
    private ?string $montantCollecteJournalier = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 30, scale: 3, nullable: true)]
    private ?string $montantCollecteMensuel = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 30, scale: 3, nullable: true)]
    private ?string $montantCollecteAnnuel = null;

    #[ORM\ManyToOne(inversedBy: 'agents')]
    private ?ControlleurCentrale $controlleur_centrale = null;

    #[ORM\ManyToOne(inversedBy: 'agents')]
    private ?Maire $maire = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAgent(): ?string
    {
        return $this->nomAgent;
    }

    public function setNomAgent(string $nomAgent): static
    {
        $this->nomAgent = $nomAgent;

        return $this;
    }

    public function getSiteVisite(): ?string
    {
        return $this->siteVisite;
    }

    public function setSiteVisite(?string $siteVisite): static
    {
        $this->siteVisite = $siteVisite;

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

    public function getMontantCollecteJournalier(): ?string
    {
        return $this->montantCollecteJournalier;
    }

    public function setMontantCollecteJournalier(?string $montantCollecteJournalier): static
    {
        $this->montantCollecteJournalier = $montantCollecteJournalier;

        return $this;
    }

    public function getMontantCollecteMensuel(): ?string
    {
        return $this->montantCollecteMensuel;
    }

    public function setMontantCollecteMensuel(?string $montantCollecteMensuel): static
    {
        $this->montantCollecteMensuel = $montantCollecteMensuel;

        return $this;
    }

    public function getMontantCollecteAnnuel(): ?string
    {
        return $this->montantCollecteAnnuel;
    }

    public function setMontantCollecteAnnuel(?string $montantCollecteAnnuel): static
    {
        $this->montantCollecteAnnuel = $montantCollecteAnnuel;

        return $this;
    }

    public function getControlleurCentrale(): ?ControlleurCentrale
    {
        return $this->controlleur_centrale;
    }

    public function setControlleurCentrale(?ControlleurCentrale $controlleur_centrale): static
    {
        $this->controlleur_centrale = $controlleur_centrale;

        return $this;
    }

    public function getMaire(): ?Maire
    {
        return $this->maire;
    }

    public function setMaire(?Maire $maire): static
    {
        $this->maire = $maire;

        return $this;
    }

    public function __toString(): string
    {
        return $this->nomAgent. " ". $this->date. " ".
            $this->montantCollecteJournalier. " ".
            $this->montantCollecteMensuel. " ".
            $this->montantCollecteAnnuel;
    }
}

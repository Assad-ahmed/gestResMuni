<?php

namespace App\Entity;

use App\Repository\AgentCollecteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: AgentCollecteRepository::class)]
class AgentCollecte
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: " Veuillez renseigner ce champ")]
    #[Assert\Length(min: 2, minMessage: " Veuillez avoir au moins 4 caracteres")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: " Veuillez renseigner ce champ")]
    #[Assert\Length(min: 2, minMessage: " Veuillez avoir au moins 4 caracteres")]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(min: 8,minMessage: " 8 min_longueur", max: 12, maxMessage: "12 max_longueur")]
    #[Assert\Regex(pattern: " /^[0-9]*$/", message: " chiffre_seulement")]
    private ?string $telephone = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montantJournalier = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montantMensuel = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $montantAnnuel = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToMany(targetEntity: SiteCollecte::class)]
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
        $this->montantAnnuele = $montantAnnuel;

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

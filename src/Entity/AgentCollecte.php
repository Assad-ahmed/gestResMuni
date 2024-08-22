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

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotNull(message: "Veuillez renseigner une date.")]
    #[Assert\DateTime(message: "Veuillez entrer une date et heure valide.")]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToMany(targetEntity: SiteCollecte::class)]
    private Collection $sites;

    #[ORM\OneToMany(mappedBy: 'agentCollecte', targetEntity: Contributeurs::class)]
    private Collection $contributeurs;

    #[ORM\ManyToMany(targetEntity: SiteCollecte::class, mappedBy: 'agentCollecte')]
    private Collection $siteCollectes;

    public function __construct()
    {
        $this->sites = new ArrayCollection();
        $this->contributeurs = new ArrayCollection();
        $this->siteCollectes = new ArrayCollection();
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
            $contributeur->setAgentCollecte($this);
        }

        return $this;
    }

    public function removeContributeur(Contributeurs $contributeur): static
    {
        if ($this->contributeurs->removeElement($contributeur)) {
            // set the owning side to null (unless already changed)
            if ($contributeur->getAgentCollecte() === $this) {
                $contributeur->setAgentCollecte(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, SiteCollecte>
     */
    public function getSiteCollectes(): Collection
    {
        return $this->siteCollectes;
    }

    public function addSiteCollecte(SiteCollecte $siteCollecte): static
    {
        if (!$this->siteCollectes->contains($siteCollecte)) {
            $this->siteCollectes->add($siteCollecte);
            $siteCollecte->addAgentCollecte($this);
        }

        return $this;
    }

    public function removeSiteCollecte(SiteCollecte $siteCollecte): static
    {
        if ($this->siteCollectes->removeElement($siteCollecte)) {
            $siteCollecte->removeAgentCollecte($this);
        }

        return $this;
    }

}

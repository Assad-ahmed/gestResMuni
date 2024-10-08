<?php

namespace App\Entity;

use App\Repository\ProprieteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProprieteRepository::class)]
class Propriete
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Veuillez renseigner un nom")]
    #[Assert\Length(min:2, max:35, minMessage: "Le nom doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères")]
    #[Assert\Regex(pattern:"/^[a-zA-ZÀ-ÿ\s'-]+$/", message:"Le nom ne peut contenir que des lettres et des espaces")]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Veuillez renseigner un prenom")]
    #[Assert\Length(min:2, max:35, minMessage: "Le prenom doit contenir au moins {{ limit }} caractères", maxMessage: "Le prenom ne peut pas dépasser {{ limit }} caractères")]
    #[Assert\Regex(pattern:"/^[a-zA-ZÀ-ÿ\s'-]+$/", message:"Le prenom ne peut contenir que des lettres et des espaces")]
    private ?string $prenom = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Veuillez renseigner un numero de telephone")]
    #[Assert\Length(min:9,max: 12,
        minMessage: "Le numéro de téléphone doit contenir au moins {{ limit }} caractères",
        maxMessage: "Le numéro de téléphone ne peut pas dépasser {{ limit }} caractères"
    )]
    #[Assert\Regex(pattern: "/^\d+$/", message: "Le numéro de téléphone ne peut contenir que des chiffres")]
    private ?string $telephone = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Veuillez renseigner un adresse")]
    #[Assert\Length(min:2, max:35, minMessage: "L'adresse doit contenir au moins {{ limit }} caractères", maxMessage: "L'adresse ne peut pas dépasser {{ limit }} caractères")]
    #[Assert\Regex(pattern:"/^[a-zA-ZÀ-ÿ\s'-]+$/", message:"L'adresse ne peut contenir que des lettres et des espaces")]
    private ?string $adresse = null;

    #[ORM\OneToMany(mappedBy: 'propriete', targetEntity: ImpotTOM::class)]
    private Collection $impotTOMs;

    #[ORM\OneToMany(mappedBy: 'propriete', targetEntity: ImpotCFPB::class)]
    private Collection $impotCFPBs;

    #[ORM\OneToMany(mappedBy: 'propriete', targetEntity: ImpotCFNPB::class)]
    private Collection $impotCFNPBs;

    #[ORM\OneToMany(mappedBy: 'propriete', targetEntity: TaxIndirecte::class)]
    private Collection $taxIndirectes;

    #[ORM\OneToMany(mappedBy: 'propriete', targetEntity: Recette::class)]
    private Collection $recettes;

    #[ORM\OneToMany(mappedBy: 'propriete', targetEntity: Ristournes::class)]
    private Collection $ristournes;

    #[ORM\OneToMany(mappedBy: 'propriete', targetEntity: Excedents::class)]
    private Collection $excedents;

    #[ORM\OneToMany(mappedBy: 'propriete', targetEntity: Patente::class)]
    private Collection $patentes;

    #[ORM\OneToMany(mappedBy: 'propriete', targetEntity: TaxeRurale::class)]
    private Collection $taxeRurales;

    #[ORM\OneToMany(mappedBy: 'propriete', targetEntity: ImpotMiniFiscal::class)]
    private Collection $impotMiniFiscals;



    public function __construct()
    {
        $this->impotTOMs = new ArrayCollection();
        $this->impotCFPBs = new ArrayCollection();
        $this->impotCFNPBs = new ArrayCollection();
        $this->taxIndirectes = new ArrayCollection();
        $this->recettes = new ArrayCollection();
        $this->ristournes = new ArrayCollection();
        $this->excedents = new ArrayCollection();
        $this->patentes = new ArrayCollection();
        $this->taxeRurales = new ArrayCollection();
        $this->impotMiniFiscals = new ArrayCollection();



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

    /**
     * @return Collection<int, ImpotCFPB>
     */
    public function getImpotCFPBs(): Collection
    {
        return $this->impotCFPBs;
    }

    public function addImpotCFPB(ImpotCFPB $impotCFPB): static
    {
        if (!$this->impotCFPBs->contains($impotCFPB)) {
            $this->impotCFPBs->add($impotCFPB);
            $impotCFPB->setPropriete($this);
        }

        return $this;
    }

    public function removeImpotCFPB(ImpotCFPB $impotCFPB): static
    {
        if ($this->impotCFPBs->removeElement($impotCFPB)) {
            // set the owning side to null (unless already changed)
            if ($impotCFPB->getPropriete() === $this) {
                $impotCFPB->setPropriete(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ImpotCFNPB>
     */
    public function getImpotCFNPBs(): Collection
    {
        return $this->impotCFNPBs;
    }

    public function addImpotCFNPB(ImpotCFNPB $impotCFNPB): static
    {
        if (!$this->impotCFNPBs->contains($impotCFNPB)) {
            $this->impotCFNPBs->add($impotCFNPB);
            $impotCFNPB->setPropriete($this);
        }

        return $this;
    }

    public function removeImpotCFNPB(ImpotCFNPB $impotCFNPB): static
    {
        if ($this->impotCFNPBs->removeElement($impotCFNPB)) {
            // set the owning side to null (unless already changed)
            if ($impotCFNPB->getPropriete() === $this) {
                $impotCFNPB->setPropriete(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TaxIndirecte>
     */
    public function getTaxIndirectes(): Collection
    {
        return $this->taxIndirectes;
    }

    public function addTaxIndirecte(TaxIndirecte $taxIndirecte): static
    {
        if (!$this->taxIndirectes->contains($taxIndirecte)) {
            $this->taxIndirectes->add($taxIndirecte);
            $taxIndirecte->setPropriete($this);
        }

        return $this;
    }

    public function removeTaxIndirecte(TaxIndirecte $taxIndirecte): static
    {
        if ($this->taxIndirectes->removeElement($taxIndirecte)) {
            // set the owning side to null (unless already changed)
            if ($taxIndirecte->getPropriete() === $this) {
                $taxIndirecte->setPropriete(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Recette>
     */
    public function getRecettes(): Collection
    {
        return $this->recettes;
    }

    public function addRecette(Recette $recette): static
    {
        if (!$this->recettes->contains($recette)) {
            $this->recettes->add($recette);
            $recette->setPropriete($this);
        }

        return $this;
    }

    public function removeRecette(Recette $recette): static
    {
        if ($this->recettes->removeElement($recette)) {
            // set the owning side to null (unless already changed)
            if ($recette->getPropriete() === $this) {
                $recette->setPropriete(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Ristournes>
     */
    public function getRistournes(): Collection
    {
        return $this->ristournes;
    }

    public function addRistourne(Ristournes $ristourne): static
    {
        if (!$this->ristournes->contains($ristourne)) {
            $this->ristournes->add($ristourne);
            $ristourne->setPropriete($this);
        }

        return $this;
    }

    public function removeRistourne(Ristournes $ristourne): static
    {
        if ($this->ristournes->removeElement($ristourne)) {
            // set the owning side to null (unless already changed)
            if ($ristourne->getPropriete() === $this) {
                $ristourne->setPropriete(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Excedents>
     */
    public function getExcedents(): Collection
    {
        return $this->excedents;
    }

    public function addExcedent(Excedents $excedent): static
    {
        if (!$this->excedents->contains($excedent)) {
            $this->excedents->add($excedent);
            $excedent->setPropriete($this);
        }

        return $this;
    }

    public function removeExcedent(Excedents $excedent): static
    {
        if ($this->excedents->removeElement($excedent)) {
            // set the owning side to null (unless already changed)
            if ($excedent->getPropriete() === $this) {
                $excedent->setPropriete(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Patente>
     */
    public function getPatentes(): Collection
    {
        return $this->patentes;
    }

    public function addPatente(Patente $patente): static
    {
        if (!$this->patentes->contains($patente)) {
            $this->patentes->add($patente);
            $patente->setPropriete($this);
        }

        return $this;
    }

    public function removePatente(Patente $patente): static
    {
        if ($this->patentes->removeElement($patente)) {
            // set the owning side to null (unless already changed)
            if ($patente->getPropriete() === $this) {
                $patente->setPropriete(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, TaxeRurale>
     */
    public function getTaxeRurales(): Collection
    {
        return $this->taxeRurales;
    }

    public function addTaxeRurale(TaxeRurale $taxeRurale): static
    {
        if (!$this->taxeRurales->contains($taxeRurale)) {
            $this->taxeRurales->add($taxeRurale);
            $taxeRurale->setPropriete($this);
        }

        return $this;
    }

    public function removeTaxeRurale(TaxeRurale $taxeRurale): static
    {
        if ($this->taxeRurales->removeElement($taxeRurale)) {
            // set the owning side to null (unless already changed)
            if ($taxeRurale->getPropriete() === $this) {
                $taxeRurale->setPropriete(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ImpotMiniFiscal>
     */
    public function getImpotMiniFiscals(): Collection
    {
        return $this->impotMiniFiscals;
    }

    public function addImpotMiniFiscal(ImpotMiniFiscal $impotMiniFiscal): static
    {
        if (!$this->impotMiniFiscals->contains($impotMiniFiscal)) {
            $this->impotMiniFiscals->add($impotMiniFiscal);
            $impotMiniFiscal->setPropriete($this);
        }

        return $this;
    }

    public function removeImpotMiniFiscal(ImpotMiniFiscal $impotMiniFiscal): static
    {
        if ($this->impotMiniFiscals->removeElement($impotMiniFiscal)) {
            // set the owning side to null (unless already changed)
            if ($impotMiniFiscal->getPropriete() === $this) {
                $impotMiniFiscal->setPropriete(null);
            }
        }

        return $this;
    }














}

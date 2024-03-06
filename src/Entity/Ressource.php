<?php

namespace App\Entity;

use App\Repository\RessourceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;




#[ORM\Entity]
#[UniqueEntity('type')]
class Ressource
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\ManyToMany(targetEntity: SiteCollecte::class, inversedBy: 'yes')]
    private Collection $sites;

    #[ORM\ManyToMany(targetEntity: TypeImp::class, mappedBy: 'ressources')]
    private Collection $typeImps;

    public function __construct()
    {
        $this->sites = new ArrayCollection();
        $this->typeImps = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

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
     * @return Collection<int, TypeImp>
     */
    public function getTypeImps(): Collection
    {
        return $this->typeImps;
    }

    public function addTypeImp(TypeImp $typeImp): static
    {
        if (!$this->typeImps->contains($typeImp)) {
            $this->typeImps->add($typeImp);
            $typeImp->addRessource($this);
        }

        return $this;
    }

    public function removeTypeImp(TypeImp $typeImp): static
    {
        if ($this->typeImps->removeElement($typeImp)) {
            $typeImp->removeRessource($this);
        }

        return $this;
    }

}

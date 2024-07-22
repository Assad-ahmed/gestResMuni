<?php

namespace App\Entity;

use App\Repository\PatenteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: PatenteRepository::class)]
#[ORM\HasLifecycleCallbacks()]
class Patente
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $droitFixe = null;

    #[ORM\Column]
    private ?float $droitProportionnel = null;

    #[ORM\Column]
    private ?float $tauValeurLocative = null;



    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne(inversedBy: 'patentes')]
    private ?Propriete $propriete = null;

    #[ORM\Column]
    private ?float $valeurLocative = null;

    #[ORM\Column]
    private ?float $montant = 0.0;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDroitFixe(): ?float
    {
        return $this->droitFixe;
    }

    public function setDroitFixe(float $droitFixe): static
    {
        $this->droitFixe = $droitFixe;

        return $this;
    }

    public function getDroitProportionnel(): ?float
    {
        return $this->droitProportionnel;
    }

    public function setDroitProportionnel(float $droitProportionnel): static
    {
        $this->droitProportionnel = $droitProportionnel;

        return $this;
    }

    public function getTauValeurLocative(): ?float
    {
        return $this->tauValeurLocative;
    }

    public function setTauValeurLocative(float $tauValeurLocative): static
    {
        $this->tauValeurLocative = $tauValeurLocative;

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

    public function getPropriete(): ?Propriete
    {
        return $this->propriete;
    }

    public function setPropriete(?Propriete $propriete): static
    {
        $this->propriete = $propriete;

        return $this;
    }


    public function getValeurLocative(): ?float
    {
        return $this->valeurLocative;
    }

    public function setValeurLocative(float $valeurLocative): static
    {
        $this->valeurLocative = $valeurLocative;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): static
    {
        $this->montant = $montant;

        return $this;
    }

    public  function getTotalDroitProportionnel(): float
    {
        return $this->valeurLocative* ($this->droitProportionnel/100);
    }

    public  function getTaxeValeurLocative(): float
    {
        return $this->valeurLocative* ($this->tauValeurLocative/100);
    }

    public  function calculMontant(): float
    {
        return $this->droitFixe+ $this->getTotalDroitProportionnel() +$this->getTaxeValeurLocative();
    }

/**
 * @ORM\PrePersit
 * @ORM\PreUpdate
 */

public function updateMontant(): void
{
    $this->montant = $this->calculMontant();

}

}

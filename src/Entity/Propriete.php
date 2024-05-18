<?php

namespace App\Entity;

use App\Repository\ProprieteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProprieteRepository::class)]
class Propriete
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 3)]
    private ?string $valeurVenale = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 3)]
    private ?string $valeurLocative = null;

    #[ORM\Column(length: 255)]
    private ?string $region = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 3)]
    private ?string $revenuNet = null;

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

    public function getValeurVenale(): ?string
    {
        return $this->valeurVenale;
    }

    public function setValeurVenale(string $valeurVenale): static
    {
        $this->valeurVenale = $valeurVenale;

        return $this;
    }

    public function getValeurLocative(): ?string
    {
        return $this->valeurLocative;
    }

    public function setValeurLocative(string $valeurLocative): static
    {
        $this->valeurLocative = $valeurLocative;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getRevenuNet(): ?string
    {
        return $this->revenuNet;
    }

    public function setRevenuNet(string $revenuNet): static
    {
        $this->revenuNet = $revenuNet;

        return $this;
    }
}

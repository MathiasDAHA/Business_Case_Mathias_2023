<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\AdresseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AdresseRepository::class)]
#[ApiResource]
class Adresse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $ligne_1 = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $ligne_2 = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $ligne_3 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLigne1(): ?string
    {
        return $this->ligne_1;
    }

    public function setLigne1(string $ligne_1): static
    {
        $this->ligne_1 = $ligne_1;

        return $this;
    }

    public function getLigne2(): ?string
    {
        return $this->ligne_2;
    }

    public function setLigne2(?string $ligne_2): static
    {
        $this->ligne_2 = $ligne_2;

        return $this;
    }

    public function getLigne3(): ?string
    {
        return $this->ligne_3;
    }

    public function setLigne3(?string $ligne_3): static
    {
        $this->ligne_3 = $ligne_3;

        return $this;
    }
}
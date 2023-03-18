<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\DashboardRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DashboardRepository::class)]
#[ApiResource]
class Dashboard
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $product = null;

    #[ORM\Column]
    private ?int $price = null;


    public function getId(): ?int
    {        
        return $this->id;

    }

    public function getProduct(): ?string
    {
        return $this->product;
    }

    public function setProduct(string $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }
}

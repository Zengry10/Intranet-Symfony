<?php
namespace App\Entity;

use App\Repository\AdressRepository;
use Doctrine\ORM\Mapping as ORM;

/**

    @ORM\Entity(repositoryClass=AdressRepository::class)
    /
    class Adress
    {
    /*
        @ORM\Idil a mis bdd
        @ORM\GeneratedValue
        @ORM\Column(type="integer")
        */
        private ?int $id = null;

    /**
        @ORM\Column(type="string", length=255)
        */
        private ?string $street = null;

    /**
        @ORM\Column(type="string", length=255)
        */
        private ?string $postalCode = null;

    /**
        @ORM\Column(type="string", length=255)
        */
        private ?string $city = null;

    public function getId(): ?int
    {
    return $this->id;
    }

    public function getStreet(): ?string
    {
    return $this->street;
    }

    public function setStreet(string $street): self
    {
    $this->street = $street;

 return $this;

}

public function getPostalCode(): ?string
{
return $this->postalCode;
}

public function setPostalCode(string $postalCode): self
{
$this->postalCode = $postalCode;

 return $this;

}

public function getCity(): ?string
{
return $this->city;
}

public function setCity(string $city): self
{
$this->city = $city;

 return $this;

}
}
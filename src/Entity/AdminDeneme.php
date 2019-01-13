<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminDenemeRepository")
 */
class AdminDeneme
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=230, nullable=true)
     */
    private $deneme;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $id_x;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeneme(): ?string
    {
        return $this->deneme;
    }

    public function setDeneme(?string $deneme): self
    {
        $this->deneme = $deneme;

        return $this;
    }

    public function getIdX(): ?int
    {
        return $this->id_x;
    }

    public function setIdX(?int $id_x): self
    {
        $this->id_x = $id_x;

        return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminImageRepository")
 */
class AdminImage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    public $car_id;

    /**
     * @ORM\Column(length=150,nullable=true)
     */

    public $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCarId(): ?int
    {
        return $this->car_id;
    }

    public function setCarId(?int $car_id): self

    {
    $this->car_id = $car_id;

    return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
     $this->image = $image;

    return $this;
    }
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminCarsRepository")
 */
class AdminCars
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    public $title;

    /**
     * @ORM\Column(type="string", length=150)
     */
    public $keywords;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    public $description;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    public $type;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    public $publisher_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    public $year;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    public $amount;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    public $price;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    public $saleprice;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    public $detail;

    /**
     * @ORM\Column(length=150,nullable=true)
     */
    public $image;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    public $writer_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    public $category_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    public $user_id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    public $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    #public function setTitle(?string $title): self
    #{
    #$this->title = $title;

    #return $this;
    #}

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    #public function setKeywords(string $keywords): self
    # {
    # $this->keywords = $keywords;

    #return $this;
    # }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    # public function setDescription(?string $description): self
    #{
    #  $this->description = $description;

    #   return $this;
    # }

    public function getType(): ?string
    {
        return $this->type;
    }

    # public function setType(?string $type): self
    # {
    # $this->type = $type;

    #    return $this;
    #}

    public function getPublisherId(): ?int
    {
        return $this->publisher_id;
    }

    # public function setPublisherId(?int $publisher_id): self
    #{
    #   $this->publisher_id = $publisher_id;

    #  return $this;
    #}

    public function getYear(): ?int
    {
        return $this->year;
    }

    # public function setYear(?int $year): self
    # {
    #  $this->year = $year;

    #  return $this;
    #}

    public function getAmount(): ?int
    {
        return $this->amount;
    }

    #public function setAmount(?int $amount): self
    # {
    # $this->amount = $amount;

    # return $this;
    #}

    public function getPrice(): ?float
    {
        return $this->price;
    }

    #public function setPrice(?float $price): self
    #{
    # $this->price = $price;

    #return $this;
    #}

    public function getSaleprice(): ?float
    {
        return $this->saleprice;
    }

    #public function setSaleprice(?float $saleprice): self
    #{
    #$this->saleprice = $saleprice;

    #return $this;
    #}

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    #public function setDetail(?string $detail): self
    # {
    # $this->detail = $detail;

    #return $this;
    #}

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
    $this->image = $image;

    return $this;
     }

    public function getWriterId(): ?int
    {
        return $this->writer_id;
    }

    #public function setWriterId(?int $writer_id): self
    #{
    # $this->writer_id = $writer_id;

    # return $this;
    #}

    public function getCategoryId(): ?int
    {
        return $this->category_id;
    }

    # public function setCategoryId(?int $category_id): self
    #{
    # $this->category_id = $category_id;

    #return $this;
    # }

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    #public function setUserId(?int $user_id): self
    #{
    # $this->user_id = $user_id;

    #return $this;
    #}

    public function getStatus(): ?string
    {
        return $this->status;
    }

    #public function setStatus(?string $status): self
    #{
    #$this->status = $status;

    #return $this;
    #}
}

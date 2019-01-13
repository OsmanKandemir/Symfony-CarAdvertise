<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminCategoryRepository")
 */
class AdminCategory
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    public $parent_id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    public $title;

    /**
     * @ORM\Column(type="string", length=40)
     */
    public $keywords;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $description;

    /**
     * @ORM\Column(type="string", length=15)
     */
    public $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParentId(): ?int
    {
        return $this->parent_id;
    }


    public function getTitle(): ?string
    {
        return $this->title;
    }


    public function getKeywords(): ?string
    {
        return $this->keywords;
    }


    public function getDescription(): ?string
    {
        return $this->description;
    }


    public function getStatus(): ?string
    {
        return $this->status;
    }


}

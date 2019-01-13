<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminSettingsRepository")
 */
class AdminSettings
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
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    public $description;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    public $keywords;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $address;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    public $fax;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    public $tel;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    public $email;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    public $smtpserver;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    public $smtpmail;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    public $smtppasw;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    public $smtpport;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    public $aboutus;

    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */
    public $contract;

    /**
     * @ORM\Column(type="string",length=255, nullable=true)
     */
    public $referans;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSmtpserver(): ?string
    {
        return $this->smtpserver;
    }

    public function setSmtpserver(?string $smtpserver): self
    {
        $this->smtpserver = $smtpserver;

        return $this;
    }

    public function getSmtpmail(): ?string
    {
        return $this->smtpmail;
    }

    public function setSmtpmail(?string $smtpmail): self
    {
        $this->smtpmail = $smtpmail;

        return $this;
    }

    public function getSmtppasw(): ?string
    {
        return $this->smtppasw;
    }

    public function setSmtppasw(?string $smtppasw): self
    {
        $this->smtppasw = $smtppasw;

        return $this;
    }

    public function getSmtpport(): ?string
    {
        return $this->smtpport;
    }

    public function setSmtpport(?string $smtpport): self
    {
        $this->smtpport = $smtpport;

        return $this;
    }

    public function getAboutus(): ?string
    {
        return $this->aboutus;
    }

    public function setAboutus(?string $aboutus): self
    {
        $this->aboutus = $aboutus;

        return $this;
    }

    public function getContract(): ?string
    {
        return $this->contract;
    }

    public function setContract(?string $contract): self
    {
        $this->contract = $contract;

        return $this;
    }

    public function getReferans(): ?string
    {
        return $this->referans;
    }

    public function setReferans(?string $referans): self
    {
        $this->referans = $referans;

        return $this;
    }

}

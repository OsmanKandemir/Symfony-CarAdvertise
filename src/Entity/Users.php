<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use http\Env\Request;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 *
 */
class Users
{


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    public $isimsoyisim;

    /**
     * @ORM\Column(type="string", length=40)
     */
    public $email;

    /**
     * @ORM\Column(type="string", length=40)
     */
    public $password;

    /**
     * @ORM\Column(type="string", length=40)
     */

    /**
     * @ORM\Column(type="string", length=50)
     */
    public $roles = [];



    public $status;

    /**
     * @ORM\Column(type="string", length=40)
     */
    public $types;

    /**
     * @ORM\Column(type="string", length=40)
     */
    public $telefon;

    /**
     * Get id
     *
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Get id
     *
     * @return string
     */





    public function getIsimsoyisim(): ?string
    {
        return $this->isimsoyisim;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }
    public function getPassword(): ?string
    {
        return $this->password;
    }
    public function getTypes(): ?string
    {
        return $this->types;
    }
    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function getTelefon(): ?string
    {
        return $this->status;
    }

}
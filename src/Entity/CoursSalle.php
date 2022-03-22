<?php

namespace App\Entity;

use App\Repository\CoursSalleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CoursSalleRepository::class)
 */
class CoursSalle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="text")
     */
    private $info;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbrTotal;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbrActuel;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomCour;

    /**
     * @ORM\Column(type="time")
     */
    private $tCour;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(string $info): self
    {
        $this->info = $info;

        return $this;
    }

    public function getNbrTotal(): ?int
    {
        return $this->nbrTotal;
    }

    public function setNbrTotal(int $nbrTotal): self
    {
        $this->nbrTotal = $nbrTotal;

        return $this;
    }

    public function getNbrActuel(): ?int
    {
        return $this->nbrActuel;
    }

    public function setNbrActuel(int $nbrActuel): self
    {
        $this->nbrActuel = $nbrActuel;

        return $this;
    }

    public function getNomCour(): ?string
    {
        return $this->nomCour;
    }

    public function setNomCour(string $nomCour): self
    {
        $this->nomCour = $nomCour;

        return $this;
    }

    public function getTCour(): ?\DateTimeInterface
    {
        return $this->tCour;
    }

    public function setTCour(\DateTimeInterface $tCour): self
    {
        $this->tCour = $tCour;

        return $this;
    }
}

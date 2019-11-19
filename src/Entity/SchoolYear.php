<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SchoolYearRepository")
 */
class SchoolYear
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="date")
     */
    private $q1Start;

    /**
     * @ORM\Column(type="date")
     */
    private $q1End;

    /**
     * @ORM\Column(type="date")
     */
    private $q2Start;

    /**
     * @ORM\Column(type="date")
     */
    private $q2End;

    /**
     * @ORM\Column(type="date")
     */
    private $q3Start;

    /**
     * @ORM\Column(type="date")
     */
    private $q3End;

    /**
     * @ORM\Column(type="date")
     */
    private $q4Start;

    /**
     * @ORM\Column(type="date")
     */
    private $q4End;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getQ1Start(): ?\DateTimeInterface
    {
        return $this->q1Start;
    }

    public function setQ1Start(\DateTimeInterface $q1Start): self
    {
        $this->q1Start = $q1Start;

        return $this;
    }

    public function getQ1End(): ?\DateTimeInterface
    {
        return $this->q1End;
    }

    public function setQ1End(\DateTimeInterface $q1End): self
    {
        $this->q1End = $q1End;

        return $this;
    }

    public function getQ2Start(): ?\DateTimeInterface
    {
        return $this->q2Start;
    }

    public function setQ2Start(\DateTimeInterface $q2Start): self
    {
        $this->q2Start = $q2Start;

        return $this;
    }

    public function getQ2End(): ?\DateTimeInterface
    {
        return $this->q2End;
    }

    public function setQ2End(\DateTimeInterface $q2End): self
    {
        $this->q2End = $q2End;

        return $this;
    }

    public function getQ3Start(): ?\DateTimeInterface
    {
        return $this->q3Start;
    }

    public function setQ3Start(\DateTimeInterface $q3Start): self
    {
        $this->q3Start = $q3Start;

        return $this;
    }

    public function getQ3End(): ?\DateTimeInterface
    {
        return $this->q3End;
    }

    public function setQ3End(\DateTimeInterface $q3End): self
    {
        $this->q3End = $q3End;

        return $this;
    }

    public function getQ4Start(): ?\DateTimeInterface
    {
        return $this->q4Start;
    }

    public function setQ4Start(\DateTimeInterface $q4Start): self
    {
        $this->q4Start = $q4Start;

        return $this;
    }

    public function getQ4End(): ?\DateTimeInterface
    {
        return $this->q4End;
    }

    public function setQ4End(\DateTimeInterface $q4End): self
    {
        $this->q4End = $q4End;

        return $this;
    }
}

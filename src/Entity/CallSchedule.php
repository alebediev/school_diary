<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CallScheduleRepository")
 */
class CallSchedule
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
    private $lessonName;

    /**
     * @ORM\Column(type="time")
     */
    private $timeStart;

    /**
     * @ORM\Column(type="time")
     */
    private $timeEnd;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLessonName(): ?string
    {
        return $this->lessonName;
    }

    public function setLessonName(string $lessonName): self
    {
        $this->lessonName = $lessonName;

        return $this;
    }

    public function getTimeStart(): ?\DateTimeInterface
    {
        return $this->timeStart;
    }

    public function setTimeStart(\DateTimeInterface $timeStart): self
    {
        $this->timeStart = $timeStart;

        return $this;
    }

    public function getTimeEnd(): ?\DateTimeInterface
    {
        return $this->timeEnd;
    }

    public function setTimeEnd(\DateTimeInterface $timeEnd): self
    {
        $this->timeEnd = $timeEnd;

        return $this;
    }
}

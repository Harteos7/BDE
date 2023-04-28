<?php

namespace App\Entity;

use App\Repository\StageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StageRepository::class)]
class Stage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateS_start = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateS_end = null;

    #[ORM\Column(length: 255)]
    private ?string $info = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateSStart(): ?\DateTimeInterface
    {
        return $this->dateS_start;
    }

    public function setDateSStart(\DateTimeInterface $dateS_start): self
    {
        $this->dateS_start = $dateS_start;

        return $this;
    }

    public function getDateSEnd(): ?\DateTimeInterface
    {
        return $this->dateS_end;
    }

    public function setDateSEnd(\DateTimeInterface $dateS_end): self
    {
        $this->dateS_end = $dateS_end;

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
}

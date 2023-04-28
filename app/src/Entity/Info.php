<?php

namespace App\Entity;

use App\Repository\InfoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfoRepository::class)]
class Info
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'info', targetEntity: stage::class)]
    private Collection $info_i;

    #[ORM\Column(length: 255)]
    private ?string $color = null;

    public function __construct()
    {
        $this->info_i = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, stage>
     */
    public function getInfoI(): Collection
    {
        return $this->info_i;
    }

    public function addInfoI(stage $infoI): self
    {
        if (!$this->info_i->contains($infoI)) {
            $this->info_i->add($infoI);
            $infoI->setInfo($this);
        }

        return $this;
    }

    public function removeInfoI(stage $infoI): self
    {
        if ($this->info_i->removeElement($infoI)) {
            // set the owning side to null (unless already changed)
            if ($infoI->getInfo() === $this) {
                $infoI->setInfo(null);
            }
        }

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }
}

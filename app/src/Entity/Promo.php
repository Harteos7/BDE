<?php

namespace App\Entity;

use App\Repository\PromoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromoRepository::class)]
class Promo
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_p = null;

    #[ORM\Column]
    private ?int $date_p = null;

    #[ORM\OneToMany(mappedBy: 'promo', targetEntity: user::class)]
    private Collection $id_user;

    public function __construct()
    {
        $this->id_user = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomP(): ?string
    {
        return $this->nom_p;
    }

    public function setNomP(string $nom_p): self
    {
        $this->nom_p = $nom_p;

        return $this;
    }

    public function getDateP(): ?int
    {
        return $this->date_p;
    }

    public function setDateP(int $date_p): self
    {
        $this->date_p = $date_p;

        return $this;
    }

    /**
     * @return Collection<int, user>
     */
    public function getIdUser(): Collection
    {
        return $this->id_user;
    }

    public function addIdUser(user $idUser): self
    {
        if (!$this->id_user->contains($idUser)) {
            $this->id_user->add($idUser);
            $idUser->setPromo($this);
        }

        return $this;
    }

    public function removeIdUser(user $idUser): self
    {
        if ($this->id_user->removeElement($idUser)) {
            // set the owning side to null (unless already changed)
            if ($idUser->getPromo() === $this) {
                $idUser->setPromo(null);
            }
        }

        return $this;
    }

    public function __toString(){
        return $this->getNomP();
    }
}

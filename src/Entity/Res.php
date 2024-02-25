<?php

namespace App\Entity;

use App\Repository\ResRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ResRepository::class)]
class Res
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(targetEntity: Voyage::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Voyage $pays = null;
    #[ORM\Column]
    private ?int $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $origine = null;

    #[ORM\Column]
    private ?int $age = null;

    #[ORM\OneToOne(targetEntity: User::class, cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id', nullable: false)]
    private ?User $user = null;

    #[ORM\Column(type:'boolean')]
    private bool $confirmed = false; // Nouvelle propriété pour le statut de confirmation

  

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPays(): ?Voyage
    {
        return $this->pays;
    }

    public function setPays(Voyage $pays): static
    {
        $this->pays = $pays;

        return $this;
    }

    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    public function setNombre(int $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getOrigine(): ?string
    {
        return $this->origine;
    }

    public function setOrigine(string $origine): static
    {
        $this->origine = $origine;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user): static
    {
        $this->user = $user;

        return $this;
    }
    public function isConfirmed(): bool // Méthode pour vérifier le statut de confirmation
    {
        return $this->confirmed;
    }

    public function setConfirmed(bool $confirmed): static // Méthode pour définir le statut de confirmation
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    

   
    

   
}

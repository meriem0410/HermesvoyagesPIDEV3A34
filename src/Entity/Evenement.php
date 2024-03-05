<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups ;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups(['evenements'])]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le titre est obiligatoire")]
    #[Groups(['evenements'])]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"la description est obiligatoire")]
    #[Groups(['evenements'])]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups(['evenements'])]
    private ?\DateTimeInterface $datedebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Groups(['evenements'])]
    private ?\DateTimeInterface $datefin = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message:"le lieu est obiligatoire")]
    #[Groups(['evenements'])]
    private ?string $lieu = null;



    #[ORM\Column(length: 255)]
    #[Groups(['evenements'])]
    private ?string $image = null;

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }




    
    #[ORM\Column(length: 255)]
    #[Groups(['evenements'])]
    private ?string $type = null;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }









    #[ORM\ManyToOne(inversedBy: 'evenement')]
    #[Groups(['evenements'])]
    private ?Billet $billet = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDatedebut(): ?\DateTimeInterface
    {
        return $this->datedebut;
    }

    public function setDatedebut(\DateTimeInterface $datedebut): static
    {
        $this->datedebut = $datedebut;

        return $this;
    }

    public function getDatefin(): ?\DateTimeInterface
    {
        return $this->datefin;
    }

    public function setDatefin(\DateTimeInterface $datefin): static
    {
        $this->datefin = $datefin;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): static
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getBillet(): ?Billet
    {
        return $this->billet;
    }

    public function setBillet(?Billet $billet): static
    {
        $this->billet = $billet;

        return $this;
    }
}

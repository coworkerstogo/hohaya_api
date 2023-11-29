<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\BiensImmobiliersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BiensImmobiliersRepository::class)]
#[ApiResource]
class BiensImmobiliers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $ville;

    #[ORM\Column(type: 'string', length: 255)]
    private $quartier;

    #[ORM\Column(type: 'integer')]
    private $nbChambre;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $nbSalleDeBaim;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $superficie;

    #[ORM\Column(type: 'text')]
    private $description;

    #[ORM\Column(type: 'integer')]
    private $prix;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $nbCoLocataire;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $proprioExiste;

    #[ORM\Column(type: 'integer')]
    private $caution;

    #[ORM\Column(type: 'integer')]
    private $avance;

    #[ORM\Column(type: 'datetime')]
    private $postDate;

    #[ORM\Column(type: 'string', length: 255)]
    private $etat;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $GetAt;

    #[ORM\ManyToOne(targetEntity: Users::class, inversedBy: 'biensImmobiliers')]
    private $idGetMan;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getQuartier(): ?string
    {
        return $this->quartier;
    }

    public function setQuartier(string $quartier): self
    {
        $this->quartier = $quartier;

        return $this;
    }

    public function getNbChambre(): ?int
    {
        return $this->nbChambre;
    }

    public function setNbChambre(int $nbChambre): self
    {
        $this->nbChambre = $nbChambre;

        return $this;
    }

    public function getNbSalleDeBaim(): ?int
    {
        return $this->nbSalleDeBaim;
    }

    public function setNbSalleDeBaim(?int $nbSalleDeBaim): self
    {
        $this->nbSalleDeBaim = $nbSalleDeBaim;

        return $this;
    }

    public function getSuperficie(): ?string
    {
        return $this->superficie;
    }

    public function setSuperficie(?string $superficie): self
    {
        $this->superficie = $superficie;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNbCoLocataire(): ?int
    {
        return $this->nbCoLocataire;
    }

    public function setNbCoLocataire(?int $nbCoLocataire): self
    {
        $this->nbCoLocataire = $nbCoLocataire;

        return $this;
    }

    public function getProprioExiste(): ?string
    {
        return $this->proprioExiste;
    }

    public function setProprioExiste(?string $proprioExiste): self
    {
        $this->proprioExiste = $proprioExiste;

        return $this;
    }

    public function getCaution(): ?int
    {
        return $this->caution;
    }

    public function setCaution(int $caution): self
    {
        $this->caution = $caution;

        return $this;
    }

    public function getAvance(): ?int
    {
        return $this->avance;
    }

    public function setAvance(int $avance): self
    {
        $this->avance = $avance;

        return $this;
    }

    public function getPostDate(): ?\DateTimeInterface
    {
        return $this->postDate;
    }

    public function setPostDate(\DateTimeInterface $postDate): self
    {
        $this->postDate = $postDate;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getGetAt(): ?\DateTimeInterface
    {
        return $this->GetAt;
    }

    public function setGetAt(?\DateTimeInterface $GetAt): self
    {
        $this->GetAt = $GetAt;

        return $this;
    }

    public function getIdGetMan(): ?Users
    {
        return $this->idGetMan;
    }

    public function setIdGetMan(?Users $idGetMan): self
    {
        $this->idGetMan = $idGetMan;

        return $this;
    }
}

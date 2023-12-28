<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BiensImmobiliersRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: BiensImmobiliersRepository::class)]
#[ApiResource(
    itemOperations: [
        'put',
        'delete',
        'get' => [
            'normalization_context' => ['groups' => ['read:bien']]
        ]
    ],
    normalizationContext: ['groups' => ['read:bien']]
)]
class BiensImmobiliers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[Groups(['read:bien'])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['read:bien'])]
    private $ville;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['read:bien'])]
    private $quartier;

    #[ORM\Column(type: 'integer')]
    #[Groups(['read:bien'])]
    private $nbChambre;

    #[ORM\Column(type: 'integer', nullable: true)]
    #[Groups(['read:bien'])]
    private $nbSalleDeBaim;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Groups(['read:bien'])]
    private $superficie;

    #[ORM\Column(type: 'text')]
    #[Groups(['read:bien'])]
    private $description;

    #[ORM\Column(type: 'integer')]
    #[Groups(['read:bien'])]
    private $prix;

    #[ORM\Column(type: 'integer', nullable: true)]
    #[Groups(['read:bien'])]
    private $nbCoLocataire;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    #[Groups(['read:bien'])]
    private $proprioExiste;

    #[ORM\Column(type: 'integer')]
    #[Groups(['read:bien'])]
    private $caution;

    #[ORM\Column(type: 'integer')]
    #[Groups(['read:bien'])]
    private $avance;

    #[ORM\Column(type: 'datetime')]
    #[Groups(['read:bien'])]
    private $postDate;

    #[ORM\Column(type: 'string', length: 255)]
    #[Groups(['read:bien'])]
    private $etat;

    #[ORM\Column(type: 'datetime', nullable: true)]
    #[Groups(['read:bien'])]
    private $getAt;

    #[ORM\ManyToOne(inversedBy: 'biensImmobiliers')]
    private ?User $user = null;


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
        return $this->getAt;
    }

    public function setGetAt(?\DateTimeInterface $getAt): self
    {
        $this->getAt = $getAt;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }
}

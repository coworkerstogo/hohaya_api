<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
#[ApiResource]
class Users
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $nom;

    #[ORM\Column(type: 'string', length: 255)]
    private $prenom;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $email;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $telephone;

    #[ORM\Column(type: 'text', nullable: true)]
    private $avatar;

    #[ORM\Column(type: 'string', length: 255)]
    private $password;

    #[ORM\OneToMany(mappedBy: 'idGetMan', targetEntity: BiensImmobiliers::class)]
    private $biensImmobiliers;

    public function __construct()
    {
        $this->biensImmobiliers = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Collection<int, BiensImmobiliers>
     */
    public function getBiensImmobiliers(): Collection
    {
        return $this->biensImmobiliers;
    }

    public function addBiensImmobilier(BiensImmobiliers $biensImmobilier): self
    {
        if (!$this->biensImmobiliers->contains($biensImmobilier)) {
            $this->biensImmobiliers[] = $biensImmobilier;
            $biensImmobilier->setIdGetMan($this);
        }

        return $this;
    }

    public function removeBiensImmobilier(BiensImmobiliers $biensImmobilier): self
    {
        if ($this->biensImmobiliers->removeElement($biensImmobilier)) {
            // set the owning side to null (unless already changed)
            if ($biensImmobilier->getIdGetMan() === $this) {
                $biensImmobilier->setIdGetMan(null);
            }
        }

        return $this;
    }
}

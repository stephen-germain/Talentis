<?php

namespace App\Entity;

use App\Repository\ProfilRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProfilRepository::class)
 */
class Profil
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="integer")
     */
    private $age;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $metier;

    /**
     * @ORM\Column(type="integer")
     */
    private $experience;

    /**
     * @ORM\OneToMany(targetEntity=SoftSkills::class, mappedBy="profil")
     */
    private $softSkills;

    /**
     * @ORM\OneToMany(targetEntity=HardSkills::class, mappedBy="profil")
     */
    private $hardSkills;

    public function __construct()
    {
        $this->softSkills = new ArrayCollection();
        $this->hardSkills = new ArrayCollection();
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

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getMetier(): ?string
    {
        return $this->metier;
    }

    public function setMetier(string $metier): self
    {
        $this->metier = $metier;

        return $this;
    }

    public function getExperience(): ?int
    {
        return $this->experience;
    }

    public function setExperience(int $experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * @return Collection|SoftSkills[]
     */
    public function getSoftSkills(): Collection
    {
        return $this->softSkills;
    }

    public function addSoftSkill(SoftSkills $softSkill): self
    {
        if (!$this->softSkills->contains($softSkill)) {
            $this->softSkills[] = $softSkill;
            $softSkill->setProfil($this);
        }

        return $this;
    }

    public function removeSoftSkill(SoftSkills $softSkill): self
    {
        if ($this->softSkills->contains($softSkill)) {
            $this->softSkills->removeElement($softSkill);
            // set the owning side to null (unless already changed)
            if ($softSkill->getProfil() === $this) {
                $softSkill->setProfil(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|HardSkills[]
     */
    public function getHardSkills(): Collection
    {
        return $this->hardSkills;
    }

    public function addHardSkill(HardSkills $hardSkill): self
    {
        if (!$this->hardSkills->contains($hardSkill)) {
            $this->hardSkills[] = $hardSkill;
            $hardSkill->setProfil($this);
        }

        return $this;
    }

    public function removeHardSkill(HardSkills $hardSkill): self
    {
        if ($this->hardSkills->contains($hardSkill)) {
            $this->hardSkills->removeElement($hardSkill);
            // set the owning side to null (unless already changed)
            if ($hardSkill->getProfil() === $this) {
                $hardSkill->setProfil(null);
            }
        }

        return $this;
    }
}

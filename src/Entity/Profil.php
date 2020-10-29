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
     * @ORM\ManyToMany(targetEntity=HardSkills::class, inversedBy="profils")
     */
    private $competences;

    /**
     * @ORM\ManyToMany(targetEntity=SoftSkills::class, inversedBy="profils")
     */
    private $capacites;

    public function __construct()
    {
        $this->competences = new ArrayCollection();
        $this->capacites = new ArrayCollection();
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
     * @return Collection|HardSkills[]
     */
    public function getCompetences(): Collection
    {
        return $this->competences;
    }

    public function addCompetence(HardSkills $competence): self
    {
        if (!$this->competences->contains($competence)) {
            $this->competences[] = $competence;
        }

        return $this;
    }

    public function removeCompetence(HardSkills $competence): self
    {
        if ($this->competences->contains($competence)) {
            $this->competences->removeElement($competence);
        }

        return $this;
    }

    /**
     * @return Collection|SoftSkills[]
     */
    public function getCapacites(): Collection
    {
        return $this->capacites;
    }

    public function addCapacite(SoftSkills $capacite): self
    {
        if (!$this->capacites->contains($capacite)) {
            $this->capacites[] = $capacite;
        }

        return $this;
    }

    public function removeCapacite(SoftSkills $capacite): self
    {
        if ($this->capacites->contains($capacite)) {
            $this->capacites->removeElement($capacite);
        }

        return $this;
    }
}

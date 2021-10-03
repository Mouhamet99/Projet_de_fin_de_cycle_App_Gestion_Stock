<?php

namespace App\Entity;

use App\Repository\BondeCommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BondeCommandeRepository::class)
 */
class BondeCommande           
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


 
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $note;

   

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $numero;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $totaux;    

    /**
     * @ORM\ManyToOne(targetEntity=Fournisseur::class, inversedBy="fournisseurBdc" )
     */
    private $fournisseurBdc;

    

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $etat;


    /**
     * @ORM\OneToMany(targetEntity=MedicItems::class, mappedBy="medicItemBdc",
     * fetch="EXTRA_LAZY",
     * orphanRemoval=true, 
     * cascade={"persist", "remove"},
     * orphanRemoval=true
     * )
     */
    private $medicItems;

    public function __construct()
    {
       // $this->listItem = new ArrayCollection();
        $this->medicItems = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

 
    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->note = $note;

        return $this;
    }


    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(/*\DateTimeInterface*/ $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getNumero(): ?string
    {
        return $this->numero;
    }

    public function setNumero(string $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getTotaux(): ?float
    {
        return $this->totaux;
    }

    public function setTotaux(float $totaux): self
    {
        $this->totaux = $totaux;

        return $this;
    }

    public function getFournisseurBdc(): ?Fournisseur
    {
        return $this->fournisseurBdc;
    }

    public function setFournisseurBdc(?Fournisseur $fournisseurBdc): self
    {
        $this->fournisseurBdc = $fournisseurBdc;

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

    /**
     * @return Collection|MedicItems[]
     */
    public function getMedicItems(): Collection
    {
        return $this->medicItems;
    }

    public function addMedicItem(MedicItems $medicItem): self
    {
        if (!$this->medicItems->contains($medicItem)) {
            $this->medicItems[] = $medicItem;
            $medicItem->setMedicItemBdc($this);
        }

        return $this;
    }

    public function removeMedicItem(MedicItems $medicItem): self
    {
        if ($this->medicItems->removeElement($medicItem)) {
            // set the owning side to null (unless already changed)
            if ($medicItem->getMedicItemBdc() === $this) {
                $medicItem->setMedicItemBdc(null);
            }
        }

        return $this;
    }


}

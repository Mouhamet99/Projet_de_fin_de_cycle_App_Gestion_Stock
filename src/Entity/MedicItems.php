<?php

namespace App\Entity;

use App\Repository\MedicItemsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MedicItemsRepository::class)
 */
class MedicItems
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $prixUnitaire;

    /**
     * @ORM\ManyToOne(targetEntity=Medicament::class, inversedBy="ItemMedicament")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ItemMedicament;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $total;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Length(
     * min = 0,
     * minMessage="Doit etre inferieur ou egal à la quantité commandé",
     * )
     * @Assert\LessThanOrEqual(propertyPath="quantite")
     */
    private $recu;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $prixAchat;

    /**
     * @ORM\ManyToOne(targetEntity=BondeCommande::class, inversedBy="medicItems")
     * @ORM\JoinColumn(nullable=false)
     */
    private $medicItemBdc;

    /**
     * @ORM\ManyToOne(targetEntity=BonDeLivraison::class, inversedBy="bdlMedicItems")
     */
    private $medicItemBdl;

    /**
     * @ORM\Column(type="integer")
     */
    private $totalBdc;


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getPrixUnitaire(): ?int
    {
        return $this->prixUnitaire;
    }

    public function setPrixUnitaire(?int $prixUnitaire): self
    {
        $this->prixUnitaire = $prixUnitaire;
        
        return $this;
    }

    public function getItemMedicament(): ?Medicament
    {
        return $this->ItemMedicament;
    }

    public function setItemMedicament(?Medicament $ItemMedicament): self
    {
        $this->ItemMedicament = $ItemMedicament;

        return $this;
    }
    
    
/*
    public function addBdcMedicItem(): ?BondeCommande
    {
        return $this->bdcMedicItem;
    }

    public function removeBdcMedicItem(?BondeCommande $bdcMedicItem): self
    {
        $this->bdcMedicItem = $bdcMedicItem;

        return $this;
    }*/

    public function getTotal(): ?int
    {
        return $this->total;
    }

    public function setTotal(int $total): self
    {
        $this->total = $total;

        return $this;
    }
    public function calculTotal():?int
    {
        $this->total = $this->recu * $this->prixAchat;

        return $this->total;
    }

    public function getRecu(): ?int
    {
        return $this->recu;
    }

    public function setRecu(?int $recu): self
    {
        $this->recu = $recu;

        return $this;
    }

    public function getPrixAchat(): ?float
    {
        return $this->prixAchat;
    }

    public function setPrixAchat(?float $prixAchat): self
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    public function getMedicItemBdc(): ?BondeCommande
    {
        return $this->medicItemBdc;
    }

    public function setMedicItemBdc(?BondeCommande $medicItemBdc): self
    {
        $this->medicItemBdc = $medicItemBdc;

        return $this;
    }

    public function getMedicItemBdl(): ?BonDeLivraison
    {
        return $this->medicItemBdl;
    }

    public function setMedicItemBdl(?BonDeLivraison $medicItemBdl): self
    {
        $this->medicItemBdl = $medicItemBdl;

        return $this;
    }

    public function getTotalBdc(): ?int
    {
        return $this->totalBdc;
    }

    public function setTotalBdc(int $totalBdc): self
    {
        $this->totalBdc = $totalBdc;

        return $this;
    }
  
}

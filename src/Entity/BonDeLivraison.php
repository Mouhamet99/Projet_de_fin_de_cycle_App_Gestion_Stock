<?php

namespace App\Entity;

use App\Repository\BonDeLivraisonRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BonDeLivraisonRepository::class)
 */
class BonDeLivraison
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="float")
     */
    private $netAPayer;

    /**
     * @ORM\Column(type="float")
     * @Assert\LessThanOrEqual(
     *     value = 100,
     *     message="Doit etre compris entre 0 et 100",
     * )
     * @Assert\PositiveOrZero
     */
    
    private $remise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $modeDePayement;


    /**
     * @ORM\OneToMany(targetEntity=MedicItems::class, mappedBy="medicItemBdl")
     */
    private $bdlMedicItems;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $facture;

    public function __construct()
    {
        $this->bdlMedicItems = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

   

    public function getNetAPayer(): ?float
        {
            return $this->netAPayer;
        }

    public function setNetAPayer(float $netAPayer): self
        {
            $this->netAPayer = $netAPayer;

            return $this;
        }

    public function getRemise(): ?float
    {
        return $this->remise;
    }

    public function setRemise(float $remise): self
    {
        $this->remise = $remise;

        return $this;
    }

    public function getModeDePayement(): ?string
    {
        return $this->modeDePayement;
    }

    public function setModeDePayement(string $modeDePayement): self
    {
        $this->modeDePayement = $modeDePayement;

        return $this;
    }   

    /**
     * @return Collection|MedicItems[]
     */
    public function getBdlMedicItems(): Collection
    {
        return $this->bdlMedicItems;
    }

    public function addMedicItem(MedicItems $medicItem): self
    {
        if (!$this->bdlMedicItems->contains($medicItem)) {
            $this->bdlMedicItems[] = $medicItem;
            $medicItem->setMedicItemBdl($this);
        }

        return $this;
    }

    public function removeMedicItem(MedicItems $medicItem): self
    {
        if ($this->bdlMedicItems->removeElement($medicItem)) {
            // set the owning side to null (unless already changed)
            if ($medicItem->getMedicItemBdl() === $this) {
                $medicItem->setMedicItemBdl(null);
            }
        }

        return $this;
    }

    public function getFacture(): ?string
    {
        return $this->facture;
    }

    public function setFacture(string $facture): self
    {
        $this->facture = $facture;

        return $this;
    }

}

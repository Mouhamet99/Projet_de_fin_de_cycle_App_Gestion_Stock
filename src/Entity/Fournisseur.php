<?php

namespace App\Entity;

use App\Repository\FournisseurRepository;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FournisseurRepository::class)
 */
class Fournisseur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $codeFourn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomFourn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $company;

    /**
     * @ORM\Column(type="integer")
     */
    private $telFourn;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mailFourn;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresseFourn;

    /**
     * @ORM\OneToMany(targetEntity=BondeCommande::class, mappedBy="fournisseurBdc")
     */
    private $fournisseurBdc;

    public function __construct()
    {
        $this->fournisseurBdc = new ArrayCollection();
    }

  

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeFourn(): ?int
    {
        return $this->codeFourn;
    }

    public function setCodeFourn(int $codeFourn): self
    {
        $this->codeFourn = $codeFourn;

        return $this;
    }

    public function getNomFourn(): ?string
    {
        return $this->nomFourn;
    }

    public function setNomFourn(string $nomFourn): self
    {
        $this->nomFourn = $nomFourn;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getTelFourn(): ?int
    {
        return $this->telFourn;
    }

    public function setTelFourn(int $telFourn): self
    {
        $this->telFourn = $telFourn;

        return $this;
    }

    public function getMailFourn(): ?string
    {
        return $this->mailFourn;
    }

    public function setMailFourn(?string $mailFourn): self
    {
        $this->mailFourn = $mailFourn;

        return $this;
    }

    public function getAdresseFourn(): ?string
    {
        return $this->adresseFourn;
    }

    public function setAdresseFourn(string $adresseFourn): self
    {
        $this->adresseFourn = $adresseFourn;

        return $this;
    }

    /**
     * @return Collection|BondeCommande[]
     */
    public function getFournisseurBdc(): Collection
    {
        return $this->fournisseurBdc;
    }

    public function addFournisseurBdc(BondeCommande $fournisseurBdc): self
    {
        if (!$this->fournisseurBdc->contains($fournisseurBdc)) {
            $this->fournisseurBdc[] = $fournisseurBdc;
            $fournisseurBdc->setFournisseurBdc($this);
        }

        return $this;
    }

    public function removeFournisseurBdc(BondeCommande $fournisseurBdc): self
    {
        if ($this->fournisseurBdc->removeElement($fournisseurBdc)) {
            // set the owning side to null (unless already changed)
            if ($fournisseurBdc->getFournisseurBdc() === $this) {
                $fournisseurBdc->setFournisseurBdc(null);
            }
        }

        return $this;
    }


}

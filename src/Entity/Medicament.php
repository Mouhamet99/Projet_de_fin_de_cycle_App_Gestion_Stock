<?php

namespace App\Entity;

use App\Repository\MedicamentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=MedicamentRepository::class)
 */
class Medicament
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     * min = 5,
     * max=255,
     * minMessage="Trop court!!,le doit faire au moins 5 caracteres",
     * )
     */
    private $dci;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @ORM\Column(type="float")
     */
    private $pa;

    /**
     * @ORM\Column(type="float")
     */
    private $pv;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dosage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $forme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $categorie;

    /**
     * @ORM\Column(type="integer")
     */
    private $stock;

    /**
     * @ORM\Column(type="integer")
     */
    private $avoir;

    

   
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $jouRupture;


  

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $max;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $peremption;

  

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $min;

    /**
     * @ORM\OneToMany(targetEntity=MedicItems::class, mappedBy="ItemMedicament")
     */
    private $ItemMedicament;

    /**
     * @ORM\OneToMany(targetEntity=SortieItem::class, mappedBy="medicament", cascade={"remove"}, orphanRemoval=true))
     * @ORM\JoinColumn(nullable=true)
     */
    private $sortieItems;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $etat;

  

    public function __construct()
    {
        $this->ItemMedicament = new ArrayCollection();
        $this->sortieItems = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

     public function getDci(): ?string
    {
        return $this->dci;
    }
    
    public function setDci(?string $dci): ?self
    {
        $this->dci = $dci;
        return $this;
    }
   
    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getPa(): ?float
    {
        return $this->pa;
    }

    public function setPa(float $pa): self
    {
        $this->pa = $pa;

        return $this;
    }

    public function getPv(): ?float
    {
        return $this->pv;
    }

    public function setPv(float $pv): self
    {
        $this->pv = $pv;

        return $this;
    }

    public function getDosage(): ?string
    {
        return $this->dosage;
    }

    public function setDosage(string $dosage): self
    {
        $this->dosage = $dosage;

        return $this;
    }

    public function getForme(): ?string
    {
        return $this->forme;
    }

    public function setForme(string $forme): self
    {
        $this->forme = $forme;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(?string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getAvoir(): ?int
    {
        return $this->avoir;
    }

    public function setAvoir(int $avoir): self
    {
        $this->avoir = $avoir;

        return $this;
    }


    public function getJouRupture(): ?int
    {
        return $this->jouRupture;
    }

    public function setJouRupture(?int $jouRupture): self
    {
        $this->jouRupture = $jouRupture;

        return $this;
    }

    public function getMax(): ?int
    {
        return $this->max;
    }

    public function setMax(?int $max): self
    {
        $this->max = $max;

        return $this;
    } 

    public function getPeremption(): ?\DateTimeInterface
    {
        return $this->peremption;
    }

    public function setPeremption( $peremption): self
    {
        $this->peremption = $peremption;

        return $this;
    }

  
    public function getMin(): ?int
    {
        return $this->min;
    }

    public function setMin(?int $min): self
    {
        $this->min = $min;

        return $this;
    }

    /**
     * @return Collection|MedicItems[]
     */
    public function getItemMedicament(): Collection
    {
        return $this->ItemMedicament;
    }

    public function addItemMedicament(MedicItems $itemMedicament): self
    {
        if (!$this->ItemMedicament->contains($itemMedicament)) {
            $this->ItemMedicament[] = $itemMedicament;
            $itemMedicament->setItemMedicament($this);
        }

        return $this;
    }

    public function removeItemMedicament(MedicItems $itemMedicament): self
    {
        if ($this->ItemMedicament->removeElement($itemMedicament)) {
            // set the owning side to null (unless already changed)
            if ($itemMedicament->getItemMedicament() === $this) {
                $itemMedicament->setItemMedicament(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SortieItem[]
     */
    public function getSortieItems(): Collection
    {
        return $this->sortieItems;
    }

    public function addSortieItem(SortieItem $sortieItem): self
    {
        if (!$this->sortieItems->contains($sortieItem)) {
            $this->sortieItems[] = $sortieItem;
            $sortieItem->setMedicament($this);
        }

        return $this;
    }

    public function removeSortieItem(SortieItem $sortieItem): self
    {
        if ($this->sortieItems->removeElement($sortieItem)) {
            // set the owning side to null (unless already changed)
            if ($sortieItem->getMedicament() === $this) {
                $sortieItem->setMedicament(null);
            }
        }

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

   
   
}

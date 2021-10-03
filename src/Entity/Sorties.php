<?php

namespace App\Entity;

use App\Repository\SortiesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SortiesRepository::class)
 */
class Sorties
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
    private $reference;

    /**
     * @ORM\OneToMany(targetEntity=SortieItem::class, mappedBy="sortie",cascade={"persist"})
     */
    private $sortieItems;

    public function __construct()
    {
        $this->sortieItems = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?\DateTimeInterface
    {
        return $this->reference;
    }

    public function setReference( $reference): self
    {
        $this->reference = $reference;

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
            $sortieItem->setSortie($this);
        }

        return $this;
    }

    public function removeSortieItem(SortieItem $sortieItem): self
    {
        if ($this->sortieItems->removeElement($sortieItem)) {
            // set the owning side to null (unless already changed)
            if ($sortieItem->getSortie() === $this) {
                $sortieItem->setSortie(null);
            }
        }

        return $this;
    }
}

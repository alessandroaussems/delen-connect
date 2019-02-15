<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AccountManagerRepository")
 */
class AccountManager
{
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Customer", mappedBy="accountmanager", cascade={"all"}, orphanRemoval=true)
     */
    private $customer;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Satisfaction", mappedBy="accountmanager", cascade={"all"}, orphanRemoval=true)
     */
    private $satisfactionscores;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function __construct()
    {
        $this->customer = new ArrayCollection();
        $this->satisfactionscores = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function __toString()
    {
        return (string)$this->getName() ?: 'New';
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Customer[]
     */
    public function getCustomer(): Collection
    {
        return $this->customer;
    }

    public function addCustomer(Customer $customer): self
    {
        if (!$this->customer->contains($customer)) {
            $this->customer[] = $customer;
            $customer->setAccountmanager($this);
        }

        return $this;
    }

    public function removeCustomer(Customer $customer): self
    {
        if ($this->customer->contains($customer)) {
            $this->customer->removeElement($customer);
            // set the owning side to null (unless already changed)
            if ($customer->getAccountmanager() === $this) {
                $customer->setAccountmanager(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Satisfaction[]
     */
    public function getSatisfactionscores(): Collection
    {
        return $this->satisfactionscores;
    }

    public function addSatisfactionscore(Satisfaction $satisfactionscore): self
    {
        if (!$this->satisfactionscores->contains($satisfactionscore)) {
            $this->satisfactionscores[] = $satisfactionscore;
            $satisfactionscore->setAccountmanager($this);
        }

        return $this;
    }

    public function removeSatisfactionscore(Satisfaction $satisfactionscore): self
    {
        if ($this->satisfactionscores->contains($satisfactionscore)) {
            $this->satisfactionscores->removeElement($satisfactionscore);
            // set the owning side to null (unless already changed)
            if ($satisfactionscore->getAccountmanager() === $this) {
                $satisfactionscore->setAccountmanager(null);
            }
        }

        return $this;
    }
}

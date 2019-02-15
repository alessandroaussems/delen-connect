<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HappeningRepository")
 */
class Happening
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer", inversedBy="appointment", cascade={"merge","persist","refresh","detach"})
     * @ORM\JoinTable(name="customer_appointment")
     */
    private $customer;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="occurence_name", type="string", nullable=true)
     */
    private $occurenceName;

    /**
     * @ORM\Column(name="occurence_date", type="date", nullable=true)
     */
    private $occurenceDate;

    /**
     * @ORM\Column(name="occurence_symbol", type="string", nullable=true)
     */
    private $occurenceSymbol;

    /**
     * @ORM\Column(name="occurence_type", type="string", nullable=true)
     */
    private $occurenceType;

    public function __toString()
    {
        return $this->getOccurenceName() ?: 'New';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOccurenceDate(): ?\DateTimeInterface
    {
        return $this->occurenceDate;
    }

    public function setOccurenceDate(?\DateTimeInterface $occurenceDate): self
    {
        $this->occurenceDate = $occurenceDate;

        return $this;
    }

    public function getOccurenceName(): ?string
    {
        return $this->occurenceName;
    }

    public function setOccurenceName(?string $occurenceName): self
    {
        $this->occurenceName = $occurenceName;

        return $this;
    }

    public function getOccurenceSymbol(): ?string
    {
        return $this->occurenceSymbol;
    }

    public function setOccurenceSymbol(?string $occurenceSymbol): self
    {
        $this->occurenceSymbol = $occurenceSymbol;

        return $this;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getOccurenceType(): ?string
    {
        return $this->occurenceType;
    }

    public function setOccurenceType(?string $occurenceType): self
    {
        $this->occurenceType = $occurenceType;

        return $this;
    }
}

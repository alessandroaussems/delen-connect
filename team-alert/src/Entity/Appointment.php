<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AppointmentRepository")
 */
class Appointment
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Customer", inversedBy="appointment", cascade={"merge","persist","refresh","detach"})
     * @ORM\JoinTable(name="customer_appointment")
     */
    private $customer;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Chattext", mappedBy="appointment", cascade={"all"}, orphanRemoval=true)
     */
    private $chattext;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    public function __construct()
    {
        $this->chattext = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

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

    /**
     * @return Collection|Chattext[]
     */
    public function getChattext(): Collection
    {
        return $this->chattext;
    }

    public function addChattext(Chattext $chattext): self
    {
        if (!$this->chattext->contains($chattext)) {
            $this->chattext[] = $chattext;
            $chattext->setAppointment($this);
        }

        return $this;
    }

    public function removeChattext(Chattext $chattext): self
    {
        if ($this->chattext->contains($chattext)) {
            $this->chattext->removeElement($chattext);
            // set the owning side to null (unless already changed)
            if ($chattext->getAppointment() === $this) {
                $chattext->setAppointment(null);
            }
        }

        return $this;
    }
}

<?php

namespace App\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AppointmentRepository")
 * @ORM\HasLifecycleCallbacks
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
     * @var DateTime $created
     *
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @var DateTime $updated
     *
     * @ORM\Column(type="datetime", nullable = true)
     */
    protected $updated;

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

    /**
     * @ORM\Column(name="satisfaction_score", type="string", nullable=true)
     */
    private $satisfactionScore;


    public function __toString()
    {
        return (string)$this->getId() ?: 'New';
    }

    public function __construct()
    {
        $this->chattext = new ArrayCollection();
        $this->created = new \DateTime("now");
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

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getUpdated(): ?\DateTimeInterface
    {
        return $this->updated;
    }

    public function setUpdated(?\DateTimeInterface $updated): self
    {
        $this->updated = $updated;

        return $this;
    }

    public function getSatisfactionScore(): ?string
    {
        return $this->satisfactionScore;
    }

    public function setSatisfactionScore(?string $satisfactionScore): self
    {
        $this->satisfactionScore = $satisfactionScore;

        return $this;
    }
}

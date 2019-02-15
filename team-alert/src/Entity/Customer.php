<?php

namespace App\Entity;

use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CustomerRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Customer
{
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Appointment", mappedBy="customer", cascade={"all"}, orphanRemoval=true)
     */
    private $appointment;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Happening", mappedBy="customer", cascade={"all"}, orphanRemoval=true)
     */
    private $happening;

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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @ORM\Column(name="year_of_birth", type="date", nullable=true)
     */
    private $yearOfBirth;

    /**
     * @ORM\Column(name="year_of_death", type="date", nullable=true)
     */
    private $yearOfDeath;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="sec", type="string", length=255, nullable=true)
     */
    private $sex;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="stat_rv", type="string", length=255, nullable=true)
     */
    private $statRv;

    public function __construct()
    {
        $this->appointment = new ArrayCollection();
        $this->happening = new ArrayCollection();
        $this->created = new \DateTime("now");
    }

    public function __toString()
    {
        return $this->getName() ?: 'New';
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getYearOfBirth(): ?\DateTimeInterface
    {
        return $this->yearOfBirth;
    }

    public function setYearOfBirth(?\DateTimeInterface $yearOfBirth): self
    {
        $this->yearOfBirth = $yearOfBirth;

        return $this;
    }

    public function getYearOfDeath(): ?\DateTimeInterface
    {
        return $this->yearOfDeath;
    }

    public function setYearOfDeath(?\DateTimeInterface $yearOfDeath): self
    {
        $this->yearOfDeath = $yearOfDeath;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getSex(): ?string
    {
        return $this->sex;
    }

    public function setSex(?string $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getStatRv(): ?string
    {
        return $this->statRv;
    }

    public function setStatRv(?string $statRv): self
    {
        $this->statRv = $statRv;

        return $this;
    }

    /**
     * @return Collection|Appointment[]
     */
    public function getAppointment(): Collection
    {
        return $this->appointment;
    }

    public function addAppointment(Appointment $appointment): self
    {
        if (!$this->appointment->contains($appointment)) {
            $this->appointment[] = $appointment;
            $appointment->setCustomer($this);
        }

        return $this;
    }

    public function removeAppointment(Appointment $appointment): self
    {
        if ($this->appointment->contains($appointment)) {
            $this->appointment->removeElement($appointment);
            // set the owning side to null (unless already changed)
            if ($appointment->getCustomer() === $this) {
                $appointment->setCustomer(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Happening[]
     */
    public function getHappening(): Collection
    {
        return $this->happening;
    }

    public function addHappening(Happening $happening): self
    {
        if (!$this->happening->contains($happening)) {
            $this->happening[] = $happening;
            $happening->setCustomer($this);
        }

        return $this;
    }

    public function removeHappening(Happening $happening): self
    {
        if ($this->happening->contains($happening)) {
            $this->happening->removeElement($happening);
            // set the owning side to null (unless already changed)
            if ($happening->getCustomer() === $this) {
                $happening->setCustomer(null);
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
}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SatisfactionRepository")
 */
class Satisfaction
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\AccountManager", inversedBy="satisfactionscores", cascade={"merge","persist","refresh","detach"})
     * @ORM\JoinTable(name="accountmanager_satisfactionscores")
     */
    private $accountmanager;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="score", type="integer", nullable=true)
     */
    private $score;

    /**
     * @var string
     *
     * @ORM\Column(name="reason", type="text", nullable=true)
     */
    private $reason;

    public function __toString()
    {
        return (string)$this->getScore() ?: 'New';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getScore(): ?int
    {
        return $this->score;
    }

    public function setScore(?int $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getAccountmanager(): ?AccountManager
    {
        return $this->accountmanager;
    }

    public function setAccountmanager(?AccountManager $accountmanager): self
    {
        $this->accountmanager = $accountmanager;

        return $this;
    }
    
}

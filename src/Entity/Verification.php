<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

class Verification
{
    public function __construct(bool $verified, string $reason)
    {
        $this->verified = $verified;
        $this->reason = $reason;
    }

    /**
     * @var bool
     */
    private $verified;

    /**
     * @var string
     */
    private $reason;

    /**
     * @var null
     */
    private $signature;

    /**
     * @var null
     */
    private $payload;

    public function isVerified(): ?bool
    {
        return $this->verified;
    }

    public function setVerified(bool $verified): void
    {
        $this->verified = $verified;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(string $reason): void
    {
        $this->reason = $reason;
    }
}
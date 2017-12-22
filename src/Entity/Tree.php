<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

class Tree
{
    public function __construct(string $sha, string $url)
    {
        $this->sha = $sha;
        $this->url = $url;
    }

    /**
     * @var string
     */
    private $sha;

    /**
     * @var string
     */
    private $url;

    public function getSha(): ?string
    {
        return $this->sha;
    }

    public function setSha(string $sha): void
    {
        $this->sha = $sha;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }
}
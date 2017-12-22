<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

class ParentCommit
{
    public function __construct(string $sha, string $url, strind $htmlUrl)
    {
        $this->sha = $sha;
        $this->url = $url;
        $this->htmlUrl = $htmlUrl;
    }

    /**
     * @var string
     */
    private $sha;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $htmlUrl;

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

    public function getHtmlUrl(): ?string
    {
        return $this->htmlUrl;
    }

    public function setHtmlUrl(string $htmlUrl): void
    {
        $this->htmlUrl = $htmlUrl;
    }
}
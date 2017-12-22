<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

class User
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $avatarUrl;

    /**
     * @var string
     */
    private $gravatarId;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $htmlUrl;

    /**
     * @var string
     */
    private $followersUrl;

    /**
     * @var string
     */
    private $followingUrl;

    /**
     * @var string
     */
    private $gistsUrl;

    /**
     * @var string
     */
    private $starredUrl;

    /**
     * @var string
     */
    private $subscriptionsUrl;

    /**
     * @var string
     */
    private $organizationsUrl;

    /**
     * @var string
     */
    private $reposUrl;

    /**
     * @var string
     */
    private $eventsUrl;

    /**
     * @var string
     */
    private $receivedEventsUrl;

    /**
     * @var string
     */
    private $type;

    /**
     * @var bool
     */
    private $siteAdmin;

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getAvatarUrl(): ?string
    {
        return $this->avatarUrl;
    }

    public function setAvatarUrl(string $avatarUrl): void
    {
        $this->avatarUrl = $avatarUrl;
    }

    public function getGravatarIrd(): ?string
    {
        return $this->gravatarId;
    }

    public function setGravatarId(string $gravatarId): void
    {
        $this->gravatarId = $gravatarId;
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

    public function getFollowersUrl(): ?string
    {
        return $this->followersUrl;
    }

    public function setFollowersUrl(string $followersUrl): void
    {
        $this->followersUrl = $followersUrl;
    }

    public function getFollowingUrl(): ?string
    {
        return $this->followingUrl;
    }

    public function setFollowingUrl(string $followingUrl): void
    {
        $this->followingUrl = $followingUrl;
    }

    public function getGistsUrl(): ?string
    {
        return $this->gistsUrl;
    }

    public function setGistsUrl(string $gistsUrl): void
    {
        $this->gistsUrl = $gistsUrl;
    }

    public function getStarredUrl(): ?string
    {
        return $this->starredUrl;
    }

    public function setStarredUrl(string $starredUrl): void
    {
        $this->starredUrl = $starredUrl;
    }

    public function getSubscriptionsUrl(): ?string
    {
        return $this->subscriptionsUrl;
    }

    public function setSubscriptionsUrl(string $subscriptionsUrl): void
    {
        $this->subscriptionsUrl = $subscriptionsUrl;
    }

    public function getOrganizationsUrl(): ?string
    {
        return $this->organizationsUrl;
    }

    public function setOrganizationsUrl(string $organizationsUrl): void
    {
        $this->organizationsUrl = $organizationsUrl;
    }

    public function getReposUrl(): ?string
    {
        return $this->reposUrl;
    }

    public function setReposUrl(string $reposUrl): void
    {
        $this->reposUrl = $reposUrl;
    }

    public function getEventsUrl(): ?string
    {
        return $this->eventsUrl;
    }

    public function setEventsUrl(string $eventsUrl): void
    {
        $this->eventsUrl = $eventsUrl;
    }

    public function getReceivedEventsUrl(): ?string
    {
        return $this->receivedEventsUrl;
    }

    public function setReceivedEventsUrl(string $receivedEventsUrl): void
    {
        $this->receivedEventsUrl = $receivedEventsUrl;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function isSiteAdmin(): ?bool
    {
        return $this->siteAdmin;
    }

    public function setSiteAdmin(bool $siteAdmin): void
    {
        $this->siteAdmin = $siteAdmin;
    }
}
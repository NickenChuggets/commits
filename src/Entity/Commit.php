<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity;

use CommitSmall;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class Commit
{
    public function __construct(string $sha, CommitSmall $commit, string $url, string $htmlUrl, string $commentsUrl, User $author, User $committer, array $parents)
    {
        $this->sha = $sha;
        $this->commit = $commit;
        $this->url = $url;
        $this->htmlUrl = $htmlUrl;
        $this->commentsUrl = $commentsUrl;
        $this->author = $author;
        $this->committer = $committer;
        $this->parents = $parents;
    }

    /**
     * @var string
     */
    private $sha;

    /**
     * @var CommitSmall
     */
    private $commit;

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
    private $commentsUrl;

    /**
     * @var User
     */
    private $author;

    /**
     * @var User
     */
    private $committer;

    /**
     * @var ParentCommit[]|ArrayCollection
     */
    private $parents;

    public function getSha(): ?string
    {
        return $this->sha;
    }

    public function setSha(string $sha): void
    {
        $this->sha = $sha;
    }

    public function getCommit(): CommitSmall
    {
        return $this->commit;
    }

    public function setCommit(CommitSmall $commit): void
    {
        $this->commit = $commit;
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

    public function getCommentsUrl(): ?string
    {
        return $this->commentsUrl;
    }

    public function setCommentsUrl(string $commentsUrl): void
    {
        $this->commentsUrl = $commentsUrl;
    }

    public function getAuthor(): User
    {
        return $this->author;
    }

    public function setAuthor(User $author): void
    {
        $this->author = $author;
    }

    public function getCommitter(): User
    {
        return $this->committer;
    }

    public function setCommitter(User $committer): void
    {
        $this->committer = $committer;
    }

    public function getParents(): array
    {
        return $this->parents;
    }

    public function setParents(array $parents): void
    {
        $this->parents = $parents;
    }
}

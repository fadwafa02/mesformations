<?php

namespace App\Entity;

use App\Repository\FormationRepository;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormationRepository::class)
 */
class Formation
{
    /**
     * Début de chemin vers les images
     */
<<<<<<< HEAD
    private const CHEMINIMAGE = "https://i.ytimg.com/vi/";
=======
<<<<<<< HEAD
    private const CHEMINIMAGE = "https://i.ytimg.com/vi/";
=======
<<<<<<< HEAD
    private const CHEMINIMAGE = "https://i.ytimg.com/vi/";
=======
<<<<<<< HEAD
    private const CHEMINIMAGE = "https://i.ytimg.com/vi/";
=======
<<<<<<< HEAD
    private const CHEMINIMAGE = "https://i.ytimg.com/vi/";
=======
<<<<<<< HEAD
    private const CHEMINIMAGE = "https://i.ytimg.com/vi/";
=======
    private const cheminImage = "https://i.ytimg.com/vi/";
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
>>>>>>> 16a443d0cf4f73ad29871a54d73c1b7af6cf32ca
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $publishedAt;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $videoId;

    /**
     * @ORM\ManyToOne(targetEntity=Playlist::class, inversedBy="formations")
     */
    private $playlist;

    /**
     * @ORM\ManyToMany(targetEntity=Categorie::class, inversedBy="formations")
     */
    private $categories;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPublishedAt(): ?DateTimeInterface
    {
        return $this->publishedAt;
    }

    public function setPublishedAt(?DateTimeInterface $publishedAt): self
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }
    
    public function getPublishedAtString(): string {
        if($this->publishedAt == null){
            return "";
        }
        return $this->publishedAt->format('d/m/Y');     
    }      

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getMiniature(): ?string
    {
<<<<<<< HEAD
        return self::CHEMINIMAGE.$this->videoId."/default.jpg";
=======
<<<<<<< HEAD
        return self::CHEMINIMAGE.$this->videoId."/default.jpg";
=======
<<<<<<< HEAD
        return self::CHEMINIMAGE.$this->videoId."/default.jpg";
=======
<<<<<<< HEAD
        return self::CHEMINIMAGE.$this->videoId."/default.jpg";
=======
<<<<<<< HEAD
        return self::CHEMINIMAGE.$this->videoId."/default.jpg";
=======
<<<<<<< HEAD
        return self::CHEMINIMAGE.$this->videoId."/default.jpg";
=======
        return self::cheminImage.$this->videoId."/default.jpg";
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
>>>>>>> 16a443d0cf4f73ad29871a54d73c1b7af6cf32ca
    }

    public function getPicture(): ?string
    {
<<<<<<< HEAD
        return self::CHEMINIMAGE.$this->videoId."/hqdefault.jpg";
=======
<<<<<<< HEAD
        return self::CHEMINIMAGE.$this->videoId."/hqdefault.jpg";
=======
<<<<<<< HEAD
        return self::CHEMINIMAGE.$this->videoId."/hqdefault.jpg";
=======
<<<<<<< HEAD
        return self::CHEMINIMAGE.$this->videoId."/hqdefault.jpg";
=======
<<<<<<< HEAD
        return self::CHEMINIMAGE.$this->videoId."/hqdefault.jpg";
=======
<<<<<<< HEAD
        return self::CHEMINIMAGE.$this->videoId."/hqdefault.jpg";
=======
        return self::cheminImage.$this->videoId."/hqdefault.jpg";
>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
>>>>>>> 16a443d0cf4f73ad29871a54d73c1b7af6cf32ca
    }

    public function getVideoId(): ?string
    {
        return $this->videoId;
    }

    public function setVideoId(?string $videoId): self
    {
        $this->videoId = $videoId;

        return $this;
    }

    public function getPlaylist(): ?Playlist
    {
        return $this->playlist;
    }

    public function setPlaylist(?Playlist $playlist): self
    {
        $this->playlist = $playlist;

        return $this;
    }

    /**
     * @return Collection<int, Categorie>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categorie $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories[] = $category;
        }

        return $this;
    }

    public function removeCategory(Categorie $category): self
    {
        $this->categories->removeElement($category);

        return $this;
    }
}

<?php

namespace App\Entity;

use App\Repository\PlaylistRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlaylistRepository::class)
 */
class Playlist
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Formation::class, mappedBy="playlist")
     */
    private $formations;

    public function __construct()
    {
        $this->formations = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, Formation>
     */
    public function getFormations(): Collection
    {
        return $this->formations;
    }

    public function addFormation(Formation $formation): self
    {
        if (!$this->formations->contains($formation)) {
            $this->formations[] = $formation;
            $formation->setPlaylist($this);
        }

        return $this;
    }

    public function removeFormation(Formation $formation): self
    {
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
>>>>>>> 16a443d0cf4f73ad29871a54d73c1b7af6cf32ca
        if ($this->formations->removeElement($formation) 
                && $formation->getPlaylist() === $this) {
            // set the owning side to null (unless already changed)
                $formation->setPlaylist(null);
        }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
>>>>>>> 16a443d0cf4f73ad29871a54d73c1b7af6cf32ca
        return $this;
    }
    
    /**
     *  @return Collection<int, string>
     */
    public function getCategoriesPlaylist() : Collection
    {
        $categories = new ArrayCollection ();
        foreach ($this->formations as $formation){
            $categoriesFormation = $formation->getCategories();
            foreach($categoriesFormation as $categorieFormation){
                if(!$categories->contains($categorieFormation->getName())){
                    $categories[] = $categorieFormation->getName();
                }
            }
        }
        return $categories;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
        return $this;
    }
    
=======
=======
        if ($this->formations->removeElement($formation)) {
            // set the owning side to null (unless already changed)
            if ($formation->getPlaylist() === $this) {
                $formation->setPlaylist(null);
            }
        }

>>>>>>> 5eea30864a5f6b7d0248714e2dc5e256b554c2c0
        return $this;
    }
>>>>>>> 8c9550a3327b002572efbb209dd39b70966b4c5e
>>>>>>> d1e13274c5a7529f65dea67420db63c13f7639e9
>>>>>>> 895f8a9f39b6833ab241a4715059b0088104f88b
>>>>>>> b2fd15cadb7d09e34f5c4b4993253bb3363ba15b
>>>>>>> 16a443d0cf4f73ad29871a54d73c1b7af6cf32ca
}

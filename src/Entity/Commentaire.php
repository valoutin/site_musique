<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Article", mappedBy="commentaire")
     */
    private $id_article;

    public function __construct()
    {
        $this->id_article = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Article[]
     */
    public function getIdArticle(): Collection
    {
        return $this->id_article;
    }

    public function addIdArticle(Article $idArticle): self
    {
        if (!$this->id_article->contains($idArticle)) {
            $this->id_article[] = $idArticle;
            $idArticle->setCommentaire($this);
        }

        return $this;
    }

    public function removeIdArticle(Article $idArticle): self
    {
        if ($this->id_article->contains($idArticle)) {
            $this->id_article->removeElement($idArticle);
            // set the owning side to null (unless already changed)
            if ($idArticle->getCommentaire() === $this) {
                $idArticle->setCommentaire(null);
            }
        }

        return $this;
    }
}

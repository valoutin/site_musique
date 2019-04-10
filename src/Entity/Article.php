<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 5,
     *      max = 100,
     *      minMessage = "Le titre doit faire plus de {{ limit }} caracters.",
     *      maxMessage = "Le titre doit faire moins de {{ limit }} caracters."
     * )
     */
    private $titre;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 30,
     *      max = 3500,
     *      minMessage = "Le texte doit faire plus de {{ limit }} caracters.",
     *      maxMessage = "Le texte doit faire moins de {{ limit }} caracters."
     * )
     */
    private $texte;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_video;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_video2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_video3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_video4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_img;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_img2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_img3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_img4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_sound;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_sound2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_sound3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_sound4;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updated_at;

    /**
     * @ORM\Column(type="string", length=15)
     * @Assert\NotBlank
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Commentaire", inversedBy="id_article")
     */
    private $commentaire;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(?string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }

    public function getUrlVideo(): ?string
    {
        return $this->url_video;
    }

    public function setUrlVideo(?string $url_video): self
    {
        $this->url_video = $url_video;

        return $this;
    }

    public function getUrlVideo2(): ?string
    {
        return $this->url_video2;
    }

    public function setUrlVideo2(?string $url_video2): self
    {
        $this->url_video2 = $url_video2;

        return $this;
    }

    public function getUrlVideo3(): ?string
    {
        return $this->url_video3;
    }

    public function setUrlVideo3(?string $url_video3): self
    {
        $this->url_video3 = $url_video3;

        return $this;
    }

    public function getUrlVideo4(): ?string
    {
        return $this->url_video4;
    }

    public function setUrlVideo4(?string $url_video4): self
    {
        $this->url_video4 = $url_video4;

        return $this;
    }

    public function getUrlImg(): ?string
    {
        return $this->url_img;
    }

    public function setUrlImg(?string $url_img): self
    {
        $this->url_img = $url_img;

        return $this;
    }

    public function getUrlImg2(): ?string
    {
        return $this->url_img2;
    }

    public function setUrlImg2(?string $url_img2): self
    {
        $this->url_img2 = $url_img2;

        return $this;
    }

    public function getUrlImg3(): ?string
    {
        return $this->url_img3;
    }

    public function setUrlImg3(?string $url_img3): self
    {
        $this->url_img3 = $url_img3;

        return $this;
    }

    public function getUrlImg4(): ?string
    {
        return $this->url_img4;
    }

    public function setUrlImg4(?string $url_img4): self
    {
        $this->url_img4 = $url_img4;

        return $this;
    }

    public function getUrlSound(): ?string
    {
        return $this->url_sound;
    }

    public function setUrlSound(?string $url_sound): self
    {
        $this->url_sound = $url_sound;

        return $this;
    }

    public function getUrlSound2(): ?string
    {
        return $this->url_sound2;
    }

    public function setUrlSound2(?string $url_sound2): self
    {
        $this->url_sound2 = $url_sound2;

        return $this;
    }

    public function getUrlSound3(): ?string
    {
        return $this->url_sound3;
    }

    public function setUrlSound3(?string $url_sound3): self
    {
        $this->url_sound3 = $url_sound3;

        return $this;
    }

    public function getUrlSound4(): ?string
    {
        return $this->url_sound4;
    }

    public function setUrlSound4(?string $url_sound4): self
    {
        $this->url_sound4 = $url_sound4;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCommentaire(): ?Commentaire
    {
        return $this->commentaire;
    }

    public function setCommentaire(?Commentaire $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }
}

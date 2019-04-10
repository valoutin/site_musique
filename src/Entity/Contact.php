<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactRepository")
 */
class Contact
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
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
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 10,
     *      max = 120,
     *      minMessage = "Votre mail doit faire plus de {{ limit }} caracters.",
     *      maxMessage = "Votre mail doit faire moins de {{ limit }} caracters."
     * )
     */
    private $mail;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 20,
     *      max = 800,
     *      minMessage = "Votre demande doit faire plus de {{ limit }} caracters.",
     *      maxMessage = "Votre demande doit faire moins de {{ limit }} caracters."
     * )
     */
    private $resquest;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $raison_sociale;

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

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getResquest(): ?string
    {
        return $this->resquest;
    }

    public function setResquest(string $resquest): self
    {
        $this->resquest = $resquest;

        return $this;
    }

    public function getRaisonSociale(): ?string
    {
        return $this->raison_sociale;
    }

    public function setRaisonSociale(string $raison_sociale): self
    {
        $this->raison_sociale = $raison_sociale;

        return $this;
    }
}

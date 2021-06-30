<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Utilisateur;
use App\Entity\Patisserie;
use Symfony\Component\Serializer\Annotation\Groups;



/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation", indexes={@ORM\Index(name="id_pat", columns={"idpatisserie"}), @ORM\Index(name="id_user", columns={"idutilisateur"})})
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reclamation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups("post:read")
     */
    private $idReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="imessage", type="string", length=255, nullable=false)
     * @Groups("post:read")
     */
    private $imessage;

    /**
     * @var int
     *
     * @ORM\Column(name="visible", type="integer", nullable=false)
     * @Groups("post:read")
     */
    private $visible;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false)
     * @Groups("post:read")
     */
    private $status = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="reponse", type="string", length=255, nullable=true)
     * @Groups("post:read")
     */
    private $reponse;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idutilisateur", referencedColumnName="id")
     * })
     * @Groups("post:read")
     */
    private $idutilisateur;

    /**
     * @var \Patisserie
     *
     * @ORM\ManyToOne(targetEntity="Patisserie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpatisserie", referencedColumnName="id")
     * })
     * @Groups("post:read")
     */
    private $idpatisserie;

    /**
     * @return int
     */
    public function getIdReclamation(): int
    {
        return $this->idReclamation;
    }

    /**
     * @param int $idReclamation
     */
    public function setIdReclamation(int $idReclamation): void
    {
        $this->idReclamation = $idReclamation;
    }

    /**
     * @return string
     */
    public function getImessage(): string
    {
        return $this->imessage;
    }

    /**
     * @param string $imessage
     */
    public function setImessage(string $imessage): void
    {
        $this->imessage = $imessage;
    }

    /**
     * @return int
     */
    public function getVisible(): int
    {
        return $this->visible;
    }

    /**
     * @param int $visible
     */
    public function setVisible(int $visible): void
    {
        $this->visible = $visible;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return string|null
     */
    public function getReponse(): ?string
    {
        return $this->reponse;
    }

    /**
     * @param string|null $reponse
     */
    public function setReponse(?string $reponse): void
    {
        $this->reponse = $reponse;
    }

    /**
     * @return \Utilisateur
     */
    public function getIdutilisateur(): \Utilisateur
    {
        return $this->idutilisateur;
    }

    /**
     * @param \Utilisateur $idutilisateur
     */
    public function setIdutilisateur(\Utilisateur $idutilisateur): void
    {
        $this->idutilisateur = $idutilisateur;
    }

    /**
     * @return \Patisserie
     */
    public function getIdpatisserie(): \Patisserie
    {
        return $this->idpatisserie;
    }

    /**
     * @param \Patisserie $idpatisserie
     */
    public function setIdpatisserie(\Patisserie $idpatisserie): void
    {
        $this->idpatisserie = $idpatisserie;
    }


}

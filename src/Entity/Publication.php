<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publication
 *
 * @ORM\Table(name="publication", indexes={@ORM\Index(name="id_cmp", columns={"idcompetition"}), @ORM\Index(name="id_user1", columns={"idutilisateur"})})
 * @ORM\Entity
 */
class Publication
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_publication", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPublication;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="texte", type="string", length=255, nullable=false)
     */
    private $texte;

    /**
     * @var string|null
     *
     * @ORM\Column(name="media", type="string", length=255, nullable=true)
     */
    private $media;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idutilisateur", referencedColumnName="id")
     * })
     */
    private $idutilisateur;

    /**
     * @var \Competition
     *
     * @ORM\ManyToOne(targetEntity="Competition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcompetition", referencedColumnName="id_competition")
     * })
     */
    private $idcompetition;


}

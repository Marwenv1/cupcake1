<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="id_pat1", columns={"idpatisserie"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="ref_pdt", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refPdt;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=255, nullable=false)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var int
     *
     * @ORM\Column(name="qte_stock", type="integer", nullable=false)
     */
    private $qteStock;

    /**
     * @var int
     *
     * @ORM\Column(name="note", type="integer", nullable=false)
     */
    private $note;

    /**
     * @var \Patisserie
     *
     * @ORM\ManyToOne(targetEntity="Patisserie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idpatisserie", referencedColumnName="id")
     * })
     */
    private $idpatisserie;


}

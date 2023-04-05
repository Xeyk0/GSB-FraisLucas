<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignefraisforfait
 *
 * @ORM\Table(name="LigneFraisForfait", indexes={@ORM\Index(name="IDX_146093DC1D06ADE3D6B08CB7", columns={"idVisiteur", "mois"}), @ORM\Index(name="idFraisForfait", columns={"idFraisForfait"})})
 * @ORM\Entity
 */
class Lignefraisforfait
{
    /**
     * @var string
     *
     * @ORM\Column(name="mois", type="string", length=6, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mois;

    /**
     * @var string
     *
     * @ORM\Column(name="idVisiteur", type="string", length=4, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idvisiteur;

    /**
     * @var string
     *
     * @ORM\Column(name="idFraisForfait", type="string", length=3, nullable=false, options={"fixed"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idfraisforfait;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     */
    private $quantite;


}

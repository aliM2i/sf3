<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneCommande
 *
 * @ORM\Table(name="line_commande")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LigneCommandeRepository")
 */
class LigneCommande
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="quantit�", type="integer")
     */
    private $quantite;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set prix
     *
     * @param float $prix
     *
     * @return LigneCommande
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set quantit�
     *
     * @param integer $quantit�
     *
     * @return LigneCommande
     */
    public function setQuantit�($quantit�)
    {
        $this->quantit� = $quantit�;

        return $this;
    }

    /**
     * Get quantit�
     *
     * @return int
     */
    public function getQuantit�()
    {
        return $this->quantit�;
    }
}


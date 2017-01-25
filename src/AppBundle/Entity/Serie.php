<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Serie
 *
 * @ORM\Table(name="serie")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SerieRepository")
 */
class Serie
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
     *@ORM\OneToMany(targetEntity="Saison",mappedBy="serie")
     */
    private $saisons;
     
       /**
     *@ORM\ManyToOne(targetEntity="Pays",inversedBy="series")
     *@ORM\JoinColumn(name="pays_id")
     */
    private $pays;
    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=64)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Synopsis", type="string", length=255)
     */
    private $synopsis;

    /**
     * @var int
     *
     * @ORM\Column(name="NbreSaison", type="integer")
     */
    private $nbreSaison;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Serie
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set synopsis
     *
     * @param string $synopsis
     *
     * @return Serie
     */
    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    /**
     * Get synopsis
     *
     * @return string
     */
    public function getSynopsis()
    {
        return $this->synopsis;
    }

    /**
     * Set nbreSaison
     *
     * @param integer $nbreSaison
     *
     * @return Serie
     */
    public function setNbreSaison($nbreSaison)
    {
        $this->nbreSaison = $nbreSaison;

        return $this;
    }

    /**
     * Get nbreSaison
     *
     * @return int
     */
    public function getNbreSaison()
    {
        return $this->nbreSaison;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->saisons = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add saison
     *
     * @param \AppBundle\Entity\Saison $saison
     *
     * @return Serie
     */
    public function addSaison(\AppBundle\Entity\Saison $saison)
    {
        $this->saisons[] = $saison;

        return $this;
    }

    /**
     * Remove saison
     *
     * @param \AppBundle\Entity\Saison $saison
     */
    public function removeSaison(\AppBundle\Entity\Saison $saison)
    {
        $this->saisons->removeElement($saison);
    }

    /**
     * Get saisons
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSaisons()
    {
        return $this->saisons;
    }

    /**
     * Set pays
     *
     * @param \AppBundle\Entity\Pays $pays
     *
     * @return Serie
     */
    public function setPays(\AppBundle\Entity\Pays $pays = null)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return \AppBundle\Entity\Pays
     */
    public function getPays()
    {
        return $this->pays;
    }
}

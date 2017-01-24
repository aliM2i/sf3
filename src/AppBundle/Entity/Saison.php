<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Saison
 *
 * @ORM\Table(name="saison")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SaisonRepository")
 */
class Saison
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
     * @var int
     *
     * @ORM\Column(name="numSaison", type="integer")
     */
    private $numSaison;

    /**
     * @var int
     *
     * @ORM\Column(name="nbreEpisode", type="integer")
     */
    private $nbreEpisode;


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
     * Set numSaison
     *
     * @param integer $numSaison
     *
     * @return Saison
     */
    public function setNumSaison($numSaison)
    {
        $this->numSaison = $numSaison;

        return $this;
    }

    /**
     * Get numSaison
     *
     * @return int
     */
    public function getNumSaison()
    {
        return $this->numSaison;
    }

    /**
     * Set nbreEpisode
     *
     * @param integer $nbreEpisode
     *
     * @return Saison
     */
    public function setNbreEpisode($nbreEpisode)
    {
        $this->nbreEpisode = $nbreEpisode;

        return $this;
    }

    /**
     * Get nbreEpisode
     *
     * @return int
     */
    public function getNbreEpisode()
    {
        return $this->nbreEpisode;
    }
}


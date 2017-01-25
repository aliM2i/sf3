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
     *@ORM\ManyToOne(targetEntity="Serie",inversedBy="saisons")
     *@ORM\JoinColumn(name="serie_id")
     */
    private $serie;
     /**
     *@ORM\OneToMany(targetEntity="Episode",mappedBy="saison")
     */
    private $episodes;
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->episodes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set serie
     *
     * @param \AppBundle\Entity\Serie $serie
     *
     * @return Saison
     */
    public function setSerie(\AppBundle\Entity\Serie $serie = null)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return \AppBundle\Entity\Serie
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Add episode
     *
     * @param \AppBundle\Entity\Episode $episode
     *
     * @return Saison
     */
    public function addEpisode(\AppBundle\Entity\Episode $episode)
    {
        $this->episodes[] = $episode;

        return $this;
    }

    /**
     * Remove episode
     *
     * @param \AppBundle\Entity\Episode $episode
     */
    public function removeEpisode(\AppBundle\Entity\Episode $episode)
    {
        $this->episodes->removeElement($episode);
    }

    /**
     * Get episodes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEpisodes()
    {
        return $this->episodes;
    }
}

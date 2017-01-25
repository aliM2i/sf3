<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Episode
 *
 * @ORM\Table(name="episode")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EpisodeRepository")
 */
class Episode
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
     * @ORM\Column(name="numEpisode", type="integer")
     */
    private $numEpisode;
     /**
     *@ORM\OneToMany(targetEntity="Lien",mappedBy="episode")
     */
    private $liens;
       /**
     *@ORM\ManyToOne(targetEntity="Saison",inversedBy="episodes")
     *@ORM\JoinColumn(name="saison_id")
     */
    private $saison;
    /**
     * @var \DateTimed
     *
     * @ORM\Column(name="duree", type="time")
     */
    private $duree;


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
     * Set numEpisode
     *
     * @param integer $numEpisode
     *
     * @return Episode
     */
    public function setNumEpisode($numEpisode)
    {
        $this->numEpisode = $numEpisode;

        return $this;
    }

    /**
     * Get numEpisode
     *
     * @return int
     */
    public function getNumEpisode()
    {
        return $this->numEpisode;
    }

    /**
     * Set duree
     *
     * @param \DateTime $duree
     *
     * @return Episode
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return \DateTime
     */
    public function getDuree()
    {
        return $this->duree;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->liens = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add lien
     *
     * @param \AppBundle\Entity\Lien $lien
     *
     * @return Episode
     */
    public function addLien(\AppBundle\Entity\Lien $lien)
    {
        $this->liens[] = $lien;

        return $this;
    }

    /**
     * Remove lien
     *
     * @param \AppBundle\Entity\Lien $lien
     */
    public function removeLien(\AppBundle\Entity\Lien $lien)
    {
        $this->liens->removeElement($lien);
    }

    /**
     * Get liens
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLiens()
    {
        return $this->liens;
    }

    /**
     * Set saison
     *
     * @param \AppBundle\Entity\Saison $saison
     *
     * @return Episode
     */
    public function setSaison(\AppBundle\Entity\Saison $saison = null)
    {
        $this->saison = $saison;

        return $this;
    }

    /**
     * Get saison
     *
     * @return \AppBundle\Entity\Saison
     */
    public function getSaison()
    {
        return $this->saison;
    }
}

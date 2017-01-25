<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lien
 *
 * @ORM\Table(name="lien")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LienRepository")
 */
class Lien
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
     *@ORM\ManyToOne(targetEntity="Film",inversedBy="liens")
     *@ORM\JoinColumn(name="film_id")
     */
    private $film;   
     /**
     *@ORM\ManyToOne(targetEntity="Episode",inversedBy="liens")
     *@ORM\JoinColumn(name="episode_id")
     */
    private $episode;   
    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
     
    private $url;


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
     * Set url
     *
     * @param string $url
     *
     * @return Lien
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set film
     *
     * @param \AppBundle\Entity\Film $film
     *
     * @return Lien
     */
    public function setFilm(\AppBundle\Entity\Film $film = null)
    {
        $this->film = $film;

        return $this;
    }

    /**
     * Get film
     *
     * @return \AppBundle\Entity\Film
     */
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * Set episode
     *
     * @param \AppBundle\Entity\Episode $episode
     *
     * @return Lien
     */
    public function setEpisode(\AppBundle\Entity\Episode $episode = null)
    {
        $this->episode = $episode;

        return $this;
    }

    /**
     * Get episode
     *
     * @return \AppBundle\Entity\Episode
     */
    public function getEpisode()
    {
        return $this->episode;
    }
}

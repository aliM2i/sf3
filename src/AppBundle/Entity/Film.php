<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FilmRepository")
 */
class Film
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
     *@ORM\ManyToOne(targetEntity="Genre",inversedBy="films")
     *@ORM\JoinColumn(name="genre_id")
     */
    private $genre;   
    
       /**
     *@ORM\ManyToOne(targetEntity="Pays",inversedBy="films")
     *@ORM\JoinColumn(name="pays_id")
     */
    private $pays;
         /**
     *@ORM\OneToMany(targetEntity="Lien",mappedBy="film")
     */
    private $liens;
    
    /**
    * @ORM\ManyToMany(targetEntity="Casting",inversedBy="filmsinterpretes")
    * @ORM\JoinTable(name="films_interpretes")
    */   
    private $interpretes;
    
     /**
     * @ORM\ManyToMany(targetEntity="Casting",inversedBy="filmsrealises")
     * @ORM\JoinTable(name="films_realises")
     */   
    private $realisateurs;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Synopsis", type="string", length=255)
     */
    private $synopsis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duree", type="time")
     */
    private $duree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="anneeProd", type="datetime")
     */
    private $anneeProd;


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
     * @return Film
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
     * @return Film
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
     * Set duree
     *
     * @param \DateTime $duree
     *
     * @return Film
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
     * Set anneeProd
     *
     * @param \DateTime $anneeProd
     *
     * @return Film
     */
    public function setAnneeProd($anneeProd)
    {
        $this->anneeProd = $anneeProd;

        return $this;
    }

    /**
     * Get anneeProd
     *
     * @return \DateTime
     */
    public function getAnneeProd()
    {
        return $this->anneeProd;
    }

    /**
     * Set genre
     *
     * @param \AppBundle\Entity\Genre $genre
     *
     * @return Film
     */
    public function setGenre(\AppBundle\Entity\Genre $genre = null)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return \AppBundle\Entity\Genre
     */
    public function getGenre()
    {
        return $this->genre;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->liens = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set pays
     *
     * @param \AppBundle\Entity\Pays $pays
     *
     * @return Film
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

    /**
     * Add lien
     *
     * @param \AppBundle\Entity\Liens $lien
     *
     * @return Film
     */
    public function addLien(\AppBundle\Entity\Liens $lien)
    {
        $this->liens[] = $lien;

        return $this;
    }

    /**
     * Remove lien
     *
     * @param \AppBundle\Entity\Liens $lien
     */
    public function removeLien(\AppBundle\Entity\Liens $lien)
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
     * Add interprete
     *
     * @param \AppBundle\Entity\Casting $interprete
     *
     * @return Film
     */
    public function addInterprete(\AppBundle\Entity\Casting $interprete)
    {
        $this->interpretes[] = $interprete;

        return $this;
    }

    /**
     * Remove interprete
     *
     * @param \AppBundle\Entity\Casting $interprete
     */
    public function removeInterprete(\AppBundle\Entity\Casting $interprete)
    {
        $this->interpretes->removeElement($interprete);
    }

    /**
     * Get interpretes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInterpretes()
    {
        return $this->interpretes;
    }

    /**
     * Add realisateur
     *
     * @param \AppBundle\Entity\Casting $realisateur
     *
     * @return Film
     */
    public function addRealisateur(\AppBundle\Entity\Casting $realisateur)
    {
        $this->realisateurs[] = $realisateur;

        return $this;
    }

    /**
     * Remove realisateur
     *
     * @param \AppBundle\Entity\Casting $realisateur
     */
    public function removeRealisateur(\AppBundle\Entity\Casting $realisateur)
    {
        $this->realisateurs->removeElement($realisateur);
    }

    /**
     * Get realisateurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRealisateurs()
    {
        return $this->realisateurs;
    }
}

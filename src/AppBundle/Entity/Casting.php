<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Casting
 *
 * @ORM\Table(name="casting")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CastingRepository")
 */
class Casting
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
    * @ORM\ManyToMany(targetEntity="Film",mappedBy="interpretes")
    * 
    */   
    private $filmsinterpretes;
    
     /**
     * @ORM\ManyToMany(targetEntity="Film",mappedBy="realisateurs")
     */   
    private $filmsrealises;

    
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;
    
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Casting
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Casting
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->filmsinterpretes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->filmsrealises = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add filmsinterprete
     *
     * @param \AppBundle\Entity\Film $filmsinterprete
     *
     * @return Casting
     */
    public function addFilmsinterprete(\AppBundle\Entity\Film $filmsinterprete)
    {
        $this->filmsinterpretes[] = $filmsinterprete;

        return $this;
    }

    /**
     * Remove filmsinterprete
     *
     * @param \AppBundle\Entity\Film $filmsinterprete
     */
    public function removeFilmsinterprete(\AppBundle\Entity\Film $filmsinterprete)
    {
        $this->filmsinterpretes->removeElement($filmsinterprete);
    }

    /**
     * Get filmsinterpretes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilmsinterpretes()
    {
        return $this->filmsinterpretes;
    }

    /**
     * Add filmsrealise
     *
     * @param \AppBundle\Entity\Film $filmsrealise
     *
     * @return Casting
     */
    public function addFilmsrealise(\AppBundle\Entity\Film $filmsrealise)
    {
        $this->filmsrealises[] = $filmsrealise;

        return $this;
    }

    /**
     * Remove filmsrealise
     *
     * @param \AppBundle\Entity\Film $filmsrealise
     */
    public function removeFilmsrealise(\AppBundle\Entity\Film $filmsrealise)
    {
        $this->filmsrealises->removeElement($filmsrealise);
    }

    /**
     * Get filmsrealises
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilmsrealises()
    {
        return $this->filmsrealises;
    }
}

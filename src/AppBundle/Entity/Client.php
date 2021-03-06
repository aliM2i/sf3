<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="clientEn")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClientRepository")
 */
class Client
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=32)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=32)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=32)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="anneeNaissance", type="integer", nullable=true)
     */
    private $anneeNaissance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=false)
     */
  
     private $dateHeureCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime", nullable=false)
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
     * @return Client
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
     * @return Client
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
     * Set email
     *
     * @param string $email
     *
     * @return Client
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set anneeNaissance
     *
     * @param integer $anneeNaissance
     *
     * @return Client
     */
    public function setAnneeNaissance($anneeNaissance)
    {
        $this->anneeNaissance = $anneeNaissance;

        return $this;
    }

    /**
     * Get anneeNaissance
     *
     * @return int
     */
    public function getAnneeNaissance()
    {
        return $this->anneeNaissance;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Client
     */

    /**
     * Set dateHeureCreation
     *
     * @param \DateTime $dateHeureCreation
     *
     * @return Client
     */
    public function setDateHeureCreation($dateHeureCreation)
    {
        $this->dateHeureCreation = $dateHeureCreation;

        return $this;
    }

    /**
     * Get dateHeureCreation
     *
     * @return \DateTime
     */
    public function getDateHeureCreation()
    {
        return $this->dateHeureCreation;
    }
}

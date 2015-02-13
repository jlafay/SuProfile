<?php

namespace SuProfile\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\ExecutionContextInterface;

/**
 * SuProfile\BlogBundle\Entity\Suprofile
 *
 * @ORM\Table(name="suprofile")
 * @ORM\Entity(repositoryClass="SuProfile\BlogBundle\Entity\SuprofileRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Suprofile
{
	/**
	* @ORM\Column(name="id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;
	
	/**
	* @ORM\OneToOne(targetEntity="SuProfile\UserBundle\Entity\User")
	*/
	private $user;
	
	/**
	* @ORM\Column(name="nom", type="text", nullable=true)
	*/
	private $nom;
	
	/**
	* @ORM\Column(name="prenom", type="text", nullable=true)
	*/
	private $prenom;
	
	/**
	* @ORM\Column(name="adresse", type="text", nullable=true)
	*/
	private $adresse;
	
	/**
	* @ORM\Column(name="classe", type="text", nullable=true)
	*/
	private $classe;
	
	/**
	* @ORM\Column(name="formations", type="text", nullable=true)
	*/
	private $formations;
	
	/**
	* @ORM\Column(name="competences", type="text", nullable=true)
	*/
	private $competences;
	
	/**
	* @ORM\Column(name="experiences", type="text", nullable=true)
	*/
	private $experiences;
	
	/**
	* @ORM\OneToOne(targetEntity="SuProfile\BlogBundle\Entity\Image", cascade={"persist", "remove"})
	*/
	private $image;
	
	/**
	* @ORM\OneToOne(targetEntity="SuProfile\BlogBundle\Entity\B1", cascade={"persist", "remove"})
	*/
	private $B1;
	
	/**
	* @ORM\OneToOne(targetEntity="SuProfile\BlogBundle\Entity\B2", cascade={"persist", "remove"})
	*/
	private $B2;
	
	/**
	* @ORM\OneToOne(targetEntity="SuProfile\BlogBundle\Entity\B3", cascade={"persist", "remove"})
	*/
	private $B3;
	
	/**
	* @ORM\OneToOne(targetEntity="SuProfile\BlogBundle\Entity\M1", cascade={"persist", "remove"})
	*/
	private $M1;
	
	/**
	* @ORM\OneToOne(targetEntity="SuProfile\BlogBundle\Entity\M2", cascade={"persist", "remove"})
	*/
	private $M2;
	public function __construct()
	{
	}
	
	public function setNom($nom)
	{
		$this->nom = $nom;
	}

	public function getNom()
	{
		return $this->nom;
	}
	
	public function setPrenom($prenom)
	{
		$this->prenom = $prenom;
	}

	public function getPrenom()
	{
		return $this->prenom;
	}
	
	public function setAdresse($adresse)
	{
		$this->adresse = $adresse;
	}

	public function getAdresse()
	{
		return $this->adresse;
	}
	
	public function setClasse($classe)
	{
		$this->classe = $classe;
	}

	public function getClasse()
	{
		return $this->classe;
	}

	public function setFormations($formations)
	{
		$this->formations = $formations;
	}

	public function getFormations()
	{
		return $this->formations;
	}
	
	public function setCompetences($competences)
	{
		$this->competences = $competences;
	}

	public function getCompetences()
	{
		return $this->competences;
	}
	
	public function setExperiences($experiences)
	{
		$this->experiences = $experiences;
	}

	public function getExperiences()
	{
		return $this->experiences;
	}

	public function setImage(\SuProfile\BlogBundle\Entity\Image $image = null)
	{
		$this->image = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function setB1(\SuProfile\BlogBundle\Entity\B1 $B1 = null)
	{
		$this->B1 = $B1;
	}

	public function getB1()
	{
		return $this->B1;
	}
	
	public function setB2(\SuProfile\BlogBundle\Entity\B2 $B2 = null)
	{
		$this->B2 = $B2;
	}

	public function getB2()
	{
		return $this->B2;
	}
	
	public function setB3(\SuProfile\BlogBundle\Entity\B3 $B3 = null)
	{
		$this->B3 = $B3;
	}

	public function getB3()
	{
		return $this->B3;
	}
	
	public function setM1(\SuProfile\BlogBundle\Entity\M1 $M1 = null)
	{
		$this->M1 = $M1;
	}

	public function getM1()
	{
		return $this->M1;
	}
	
	public function setM2(\SuProfile\BlogBundle\Entity\M2 $M2 = null)
	{
		$this->M2 = $M2;
	}

	public function getM2()
	{
		return $this->M2;
	}
	
	public function setUser(\SuProfile\UserBundle\Entity\User $user = null)
	{
		$this->user = $user;
		return $this;
	}

	public function getUser()
	{
		return $this->user;
	}
	
	public function getId()
	{
		return $this->id;
	}
}

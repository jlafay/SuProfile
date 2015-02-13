<?php

namespace SuProfile\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\ExecutionContextInterface;

/**
 * SuProfile\BlogBundle\Entity\Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="SuProfile\BlogBundle\Entity\ArticleRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Article
{
	/**
	* @ORM\Column(name="id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;
	
	/**
	* @ORM\Column(name="date", type="datetime")
	*/
	private $date;
	
	/**
	* @ORM\Column(name="titre", type="string", length=255)
	*/
	private $titre;
	
	/**
	* @ORM\Column(name="video", type="string", length=255, nullable=true)
	*/
	private $video;
	
	/**
	* @ORM\Column(name="contenu", type="text", nullable=true)
	*/
	private $contenu;
	
	/**
	* @ORM\Column(type="date", nullable=true)
	*/
	private $dateEdition;
	
	/**
	* @Gedmo\Slug(fields={"titre"})
	* @ORM\Column(length=128, unique=true)
	*/
	private $slug;
	
	/**
	* @ORM\OneToOne(targetEntity="SuProfile\BlogBundle\Entity\Image", cascade={"persist", "remove"})
	*/
	private $image;
	
	/**
	* @ORM\ManyToMany(targetEntity="SuProfile\BlogBundle\Entity\Categorie", cascade={"persist"})
	* @ORM\JoinTable(name="article_categorie")
	*/
	private $categories;
	
	/**
	* @ORM\OneToMany(targetEntity="SuProfile\BlogBundle\Entity\Commentaire", mappedBy="article", cascade={"remove"})
	*/
	private $commentaires; // Ici commentaires prend un "s", car un article a plusieurs commentaires !
	
	/**
	* @ORM\OneToOne(targetEntity="SuProfile\BlogBundle\Entity\Fichier", cascade={"persist", "remove"})
	*/
	private $fichier;
	
	/**
	* @ORM\ManyToOne(targetEntity="SuProfile\UserBundle\Entity\User")
	*/
	private $user;

	public function __construct()
	{
		$this->date         = new \Datetime;
		$this->categories   = new \Doctrine\Common\Collections\ArrayCollection();
		$this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
	}

	/**
	* @ORM\PreUpdate
	*/
	public function updateDate()
	{
		$this->setDateEdition(new \Datetime());
	}

	public function getId()
	{
		return $this->id;
	}

	/**
     * @param datetime $date
     * @return Commentaire
     */
    public function setDate(\Datetime $date)
    {
        $this->date = $date;
        return $this;
    }
	
	/**
     * @return datetime
     */
    public function getDate()
    {
        return $this->date;
    }

	public function setTitre($titre)
	{
		$this->titre = $titre;
	}

	public function getTitre()
	{
		return $this->titre;
	}
	
	public function setVideo($video)
	{
		$this->video = $video;
	}

	public function getVideo()
	{
		return $this->video;
	}

	public function setContenu($contenu)
	{
		$this->contenu = $contenu;
	}

	public function getContenu()
	{
		return $this->contenu;
	}

	public function setImage(\SuProfile\BlogBundle\Entity\Image $image = null)
	{
		$this->image = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	public function addCategorie(\SuProfile\BlogBundle\Entity\Categorie $categorie)
	{
		$this->categories[] = $categorie;
	}

	public function removeCategorie(\SuProfile\BlogBundle\Entity\Categorie $categorie)
	{
		$this->categories->removeElement($categorie);
	}

	public function getCategories()
	{
		return $this->categories;
	}

	public function addCommentaire(\SuProfile\BlogBundle\Entity\Commentaire $commentaire)
	{
		$this->commentaires[] = $commentaire;
	}

	public function removeCommentaire(\SuProfile\BlogBundle\Entity\Commentaire $commentaire)
	{
		$this->commentaires->removeElement($commentaire);
	}

	public function getCommentaires()
	{
		return $this->commentaires;
	}
	
	public function setFichier(\SuProfile\BlogBundle\Entity\Fichier $fichier = null)
	{
		$this->fichier = $fichier;
	}

	public function getFichier()
	{
		return $this->fichier;
	}

	public function setDateEdition(\Datetime $dateEdition)
	{
		$this->dateEdition = $dateEdition;
	}

	public function getDateEdition()
	{
		return $this->dateEdition;
	}

	public function setSlug($slug)
	{
		$this->slug = $slug;
	}

	public function getSlug()
	{
		return $this->slug;
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
}

<?php

namespace SuProfile\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="SuProfile\BlogBundle\Entity\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="contenu", type="text")
     * @Assert\NotBlank()
     */
    private $contenu;

    /**
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="SuProfile\BlogBundle\Entity\Article", inversedBy="commentaires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $article;

    /**
     * @ORM\ManyToOne(targetEntity="SuProfile\UserBundle\Entity\User")
     */
    private $user;

    public function __construct()
    {
        $this->date = new \Datetime();
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param text $contenu
     * @return Commentaire
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
        return $this;
    }

    /**
     * @return text
     */
    public function getContenu()
    {
        return $this->contenu;
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

    /**
     * @param SuProfile\BlogBundle\Entity\Article $article
     * @return Commentaire
     */
    public function setArticle(\SuProfile\BlogBundle\Entity\Article $article)
    {
        $this->article = $article;
        return $this;
    }

    /**
     * @return SuProfile\BlogBundle\Entity\Article
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set user
     *
     * @param \SuProfile\UserBundle\Entity\User $user
     * @return Commentaire
     */
    public function setUser(\SuProfile\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \SuProfile\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
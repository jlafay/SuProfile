<?php

namespace SuProfile\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="fichier")
 * @ORM\Entity(repositoryClass="SuProfile\BlogBundle\Entity\FichierRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Fichier
{
	/**
	* @ORM\Column(name="id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;

	/**
	* @ORM\Column(name="format", type="string", length=255)
	*/
	private $format;
	
	/**
	* @ORM\Column(name="alt", type="string", length=255)
	*/
	private $alt;

	/**
	* @Assert\File(maxSize="5000k")
	*/
	private $file;

	private $tempFilename;

	/**
	* @ORM\PrePersist()
	* @ORM\PreUpdate()
	*/
	public function preUpload()
	{
		if (null === $this->file) {
			return;
		}
		
		$this->format = $this->file->guessExtension();

		$this->alt = $this->file->getClientOriginalName();
	}

	/**
	* @ORM\PostPersist()
	* @ORM\PostUpdate()
	*/
	public function upload()
	{
		if (null === $this->file) {
			return;
		}

		if (null !== $this->tempFilename) {
			$oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
			if (file_exists($oldFile)) {
				unlink($oldFile);
			}
		}

		$this->file->move(
		$this->getUploadRootDir(),
		$this->id.'.'.$this->format
		);
	}

	/**
	* @ORM\PreRemove()
	*/
	public function preRemoveUpload()
	{
		$this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->format;
	}

	/**
	* @ORM\PostRemove()
	*/
	public function removeUpload()
	{
		if (file_exists($this->tempFilename)) {
			unlink($this->tempFilename);
		}
	}

	public function getUploadDir()
	{
		return 'uploads/dl';
	}

	public function getUploadRootDir()
	{
		return __DIR__.'/../../../../web/'.$this->getUploadDir();
	}

	public function getWebPath()
	{
		return $this->getUploadDir().'/'.$this->getId().'.'.$this->getFormat();
	}
	
	public function getFullFichierPath() {
        return null === $this->fichier ? null : $this->getUploadRootDir(). $this->fichier;
    }

	/**
	* @return integer
	*/
	public function getId()
	{
		return $this->id;
	}

	/**
	* @param string $format
	* @return Fichier
	*/
	public function setFormat($format)
	{
		$this->format = $format;
		return $this;
	}

	/**
	* @return string
	*/
	public function getFormat()
	{
		return $this->format;
	}

	/**
	* @param string $alt
	* @return Fichier
	*/
	public function setAlt($alt)
	{
		$this->alt = $alt;
		return $this;
	}

	/**
	* @return string
	*/
	public function getAlt()
	{
		return $this->alt;
	}

	public function setFile($file)
	{
		$this->file = $file;

		if (null !== $this->format) {
			$this->tempFilename = $this->format;

			$this->format = null;
			$this->alt = null;
		}
	}

	public function getFile()
	{	
		return $this->file;
	}
}

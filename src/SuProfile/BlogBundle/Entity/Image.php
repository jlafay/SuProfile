<?php

namespace SuProfile\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="SuProfile\BlogBundle\Entity\ImageRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Image
{
	/**
	* @ORM\Column(name="id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;

	/**
	* @ORM\Column(name="url", type="string", length=255)
	*/
	private $url;
	
	/**
	* @ORM\Column(name="alt", type="string", length=255)
	*/
	private $alt;

	/**
	* @Assert\File(maxSize="500k")
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
		
		$this->url = $this->file->guessExtension();

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
		$this->id.'.'.$this->url
		);
	}

	/**
	* @ORM\PreRemove()
	*/
	public function preRemoveUpload()
	{
		$this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->url;
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
		return 'uploads/img';
	}

	public function getUploadRootDir()
	{
		return __DIR__.'/../../../../web/'.$this->getUploadDir();
	}

	public function getWebPath()
	{
		return $this->getUploadDir().'/'.$this->getId().'.'.$this->getUrl();
	}
	
	public function getFullImagePath() {
        return null === $this->image ? null : $this->getUploadRootDir(). $this->image;
    }

	/**
	* @return integer
	*/
	public function getId()
	{
		return $this->id;
	}

	/**
	* @param string $url
	* @return Image
	*/
	public function setUrl($url)
	{
		$this->url = $url;
		return $this;
	}

	/**
	* @return string
	*/
	public function getUrl()
	{
		return $this->url;
	}

	/**
	* @param string $alt
	* @return Image
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

		if (null !== $this->url) {
			$this->tempFilename = $this->url;

			$this->url = null;
			$this->alt = null;
		}
	}

	public function getFile()
	{	
		return $this->file;
	}
}

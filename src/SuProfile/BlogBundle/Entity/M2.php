<?php

namespace SuProfile\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="M2")
 * @ORM\Entity(repositoryClass="SuProfile\BlogBundle\Entity\M2Repository")
 * @ORM\HasLifecycleCallbacks
 */
class M2
{
	/**
	* @ORM\Column(name="id", type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	private $id;

	/**
	* @ORM\Column(name="ENG", type="integer", nullable=true)
	*/
	private $ENG;
	
	/**
	* @ORM\Column(name="MGT", type="integer", nullable=true)
	*/
	private $MGT;
	
	/**
	* @ORM\Column(name="LAW", type="integer", nullable=true)
	*/
	private $LAW;
	
	/**
	* @ORM\Column(name="EPS", type="integer", nullable=true)
	*/
	private $EPS;
	
	/**
	* @ORM\Column(name="ORC", type="integer", nullable=true)
	*/
	private $ORC;
	
	/**
	* @ORM\Column(name="BIS", type="integer", nullable=true)
	*/
	private $BIS;
	
	/**
	* @ORM\Column(name="MET", type="integer", nullable=true)
	*/
	private $MET;
	
	/**
	* @ORM\Column(name="VTZ", type="integer", nullable=true)
	*/
	private $VTZ;
	
	/**
	* @ORM\Column(name="DAT", type="integer", nullable=true)
	*/
	private $DAT;
	
	/**
	* @ORM\Column(name="EBP", type="integer", nullable=true)
	*/
	private $EBP;

	/**
	* @return integer
	*/
	public function getId()
	{
		return $this->id;
	}

	/**
	* @param integer $ENG
	* @return M2
	*/
	public function setENG($ENG)
	{
		$this->ENG = $ENG;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getENG()
	{
		return $this->ENG;
	}
	
	/**
	* @param integer $MGT
	* @return M2
	*/
	public function setMGT($MGT)
	{
		$this->MGT = $MGT;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getMGT()
	{
		return $this->MGT;
	}
	
	/**
	* @param integer $LAW
	* @return M2
	*/
	public function setLAW($LAW)
	{
		$this->LAW = $LAW;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getLAW()
	{
		return $this->LAW;
	}
	
	/**
	* @param integer $EPS
	* @return M2
	*/
	public function setEPS($EPS)
	{
		$this->EPS = $EPS;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getEPS()
	{
		return $this->EPS;
	}
	
	/**
	* @param integer $ORC
	* @return M2
	*/
	public function setORC($ORC)
	{
		$this->ORC = $ORC;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getORC()
	{
		return $this->ORC;
	}
	
	/**
	* @param integer $BIS
	* @return M2
	*/
	public function setBIS($BIS)
	{
		$this->BIS = $BIS;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getBIS()
	{
		return $this->BIS;
	}
	
	/**
	* @param integer $MET
	* @return M2
	*/
	public function setMET($MET)
	{
		$this->MET = $MET;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getMET()
	{
		return $this->MET;
	}
	
	/**
	* @param integer $VTZ
	* @return M2
	*/
	public function setVTZ($VTZ)
	{
		$this->VTZ = $VTZ;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getVTZ()
	{
		return $this->VTZ;
	}
	
	/**
	* @param integer $DAT
	* @return M2
	*/
	public function setDAT($DAT)
	{
		$this->DAT = $DAT;
		return $this;
	}
	
	/**
	* @return integer
	*/
	public function getDAT()
	{
		return $this->DAT;
	}
	
	/**
	* @param integer $EBP
	* @return M2
	*/
	public function setEBP($EBP)
	{
		$this->EBP = $EBP;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getEBP()
	{
		return $this->EBP;
	}
}

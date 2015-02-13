<?php

namespace SuProfile\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="M1")
 * @ORM\Entity(repositoryClass="SuProfile\BlogBundle\Entity\M1Repository")
 * @ORM\HasLifecycleCallbacks
 */
class M1
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
	* @ORM\Column(name="MET", type="integer", nullable=true)
	*/
	private $MET;
	
	/**
	* @ORM\Column(name="LAW", type="integer", nullable=true)
	*/
	private $LAW;
	
	/**
	* @ORM\Column(name="JVA", type="integer", nullable=true)
	*/
	private $JVA;
	
	/**
	* @ORM\Column(name="MSE", type="integer", nullable=true)
	*/
	private $MSE;
	
	/**
	* @ORM\Column(name="NET", type="integer", nullable=true)
	*/
	private $NET;
	
	/**
	* @ORM\Column(name="ERP", type="integer", nullable=true)
	*/
	private $ERP;
	
	/**
	* @ORM\Column(name="BIS", type="integer", nullable=true)
	*/
	private $BIS;
	
	/**
	* @ORM\Column(name="MOS", type="integer", nullable=true)
	*/
	private $MOS;
	
	/**
	* @ORM\Column(name="AIT", type="integer", nullable=true)
	*/
	private $AIT;
	
	/**
	* @ORM\Column(name="VIP", type="integer", nullable=true)
	*/
	private $VIP;
	
	/**
	* @ORM\Column(name="VTZ", type="integer", nullable=true)
	*/
	private $VTZ;
	
	/**
	* @ORM\Column(name="DEV", type="integer", nullable=true)
	*/
	private $DEV;
	
	/**
	* @ORM\Column(name="ARC", type="integer", nullable=true)
	*/
	private $ARC;

	/**
	* @return integer
	*/
	public function getId()
	{
		return $this->id;
	}
	
	/**
	* @param integer $ENG
	* @return M1
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
	* @return M1
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
	* @param integer $MET
	* @return M1
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
	* @param integer $LAW
	* @return M1
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
	* @param integer $JVA
	* @return M1
	*/
	public function setJVA($JVA)
	{
		$this->JVA = $JVA;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getJVA()
	{
		return $this->JVA;
	}
	
	/**
	* @param integer $MSE
	* @return M1
	*/
	public function setMSE($MSE)
	{
		$this->MSE = $MSE;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getMSE()
	{
		return $this->MSE;
	}
	
	/**
	* @return integer
	*/
	public function getBIS()
	{
		return $this->BIS;
	}
	
	/**
	* @param integer $NET
	* @return M1
	*/
	public function setNET($NET)
	{
		$this->NET = $NET;
		return $this;
	}
	
	/**
	* @return integer
	*/
	public function getNET()
	{
		return $this->NET;
	}
	
	/**
	* @param integer $ERP
	* @return M1
	*/
	public function setERP($ERP)
	{
		$this->ERP = $ERP;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getERP()
	{
		return $this->ERP;
	}

	/**
	* @param integer $BIS
	* @return M1
	*/
	public function setBIS($BIS)
	{
		$this->BIS = $BIS;
		return $this;
	}
	
	/**
	* @param integer $MOS
	* @return M1
	*/
	public function setMOS($MOS)
	{
		$this->MOS = $MOS;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getMOS()
	{
		return $this->MOS;
	}
	
	/**
	* @param integer $AIT
	* @return M1
	*/
	public function setAIT($AIT)
	{
		$this->AIT = $AIT;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getAIT()
	{
		return $this->AIT;
	}
	
	/**
	* @param integer $VIP
	* @return M1
	*/
	public function setVIP($VIP)
	{
		$this->VIP = $VIP;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getVIP()
	{
		return $this->VIP;
	}
	
	/**
	* @param integer $VTZ
	* @return M1
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
	* @param integer $DEV
	* @return M1
	*/
	public function setDEV($DEV)
	{
		$this->DEV = $DEV;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getDEV()
	{
		return $this->DEV;
	}
	
	/**
	* @param integer $ARC
	* @return M1
	*/
	public function setARC($ARC)
	{
		$this->ARC = $ARC;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getARC()
	{
		return $this->ARC;
	}
}

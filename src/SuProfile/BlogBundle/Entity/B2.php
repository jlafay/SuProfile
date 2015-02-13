<?php

namespace SuProfile\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="B2")
 * @ORM\Entity(repositoryClass="SuProfile\BlogBundle\Entity\B2Repository")
 * @ORM\HasLifecycleCallbacks
 */
class B2
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
	* @ORM\Column(name="ADS", type="integer", nullable=true)
	*/
	private $ADS;
	
	/**
	* @ORM\Column(name="WEB", type="integer", nullable=true)
	*/
	private $WEB;
	
	/**
	* @ORM\Column(name="LIN", type="integer", nullable=true)
	*/
	private $LIN;
	
	/**
	* @ORM\Column(name="ORC", type="integer", nullable=true)
	*/
	private $ORC;
	
	/**
	* @ORM\Column(name="JVA", type="integer", nullable=true)
	*/
	private $JVA;
	
	/**
	* @ORM\Column(name="NET", type="integer", nullable=true)
	*/
	private $NET;
	
	/**
	* @ORM\Column(name="GRA", type="integer", nullable=true)
	*/
	private $GRA;
	
	/**
	* @ORM\Column(name="CNS", type="integer", nullable=true)
	*/
	private $CNS;
	
	/**
	* @ORM\Column(name="CMP", type="integer", nullable=true)
	*/
	private $CMP;
	
	/**
	* @ORM\Column(name="PBS", type="integer", nullable=true)
	*/
	private $PBS;
	
	/**
	* @ORM\Column(name="MSA", type="integer", nullable=true)
	*/
	private $MSA;
	
	/**
	* @ORM\Column(name="JWB", type="integer", nullable=true)
	*/
	private $JWB;
	
	/**
	* @ORM\Column(name="DEV", type="integer", nullable=true)
	*/
	private $DEV;
	
	/**
	* @ORM\Column(name="DWB", type="integer", nullable=true)
	*/
	private $DWB;

	/**
	* @return integer
	*/
	public function getId()
	{
		return $this->id;
	}

	/**
	* @param integer $ENG
	* @return B2
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
	* @return B2
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
	* @return B2
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
	* @param integer $ADS
	* @return B2
	*/
	public function setADS($ADS)
	{
		$this->ADS = $ADS;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getADS()
	{
		return $this->ADS;
	}
	
	/**
	* @param integer $WEB
	* @return B2
	*/
	public function setWEB($WEB)
	{
		$this->WEB = $WEB;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getWEB()
	{
		return $this->WEB;
	}
	
	/**
	* @param integer $LIN
	* @return B2
	*/
	public function setLIN($LIN)
	{
		$this->LIN = $LIN;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getLIN()
	{
		return $this->LIN;
	}

	/**
	* @param integer $ORC
	* @return B2
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
	* @param integer $JVA
	* @return B2
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
	* @param integer $NET
	* @return B2
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
	* @param integer $GRA
	* @return B2
	*/
	public function setGRA($GRA)
	{
		$this->GRA = $GRA;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getGRA()
	{
		return $this->GRA;
	}
	
	/**
	* @param integer $CNS
	* @return B2
	*/
	public function setCNS($CNS)
	{
		$this->CNS = $CNS;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getCNS()
	{
		return $this->CNS;
	}
	
	/**
	* @param integer $CMP
	* @return B2
	*/
	public function setCMP($CMP)
	{
		$this->CMP = $CMP;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getCMP()
	{
		return $this->CMP;
	}
	
	/**
	* @param integer $PBS
	* @return B2
	*/
	public function setPBS($PBS)
	{
		$this->PBS = $PBS;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getPBS()
	{
		return $this->PBS;
	}
	
	/**
	* @param integer $MSA
	* @return B2
	*/
	public function setMSA($MSA)
	{
		$this->MSA = $MSA;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getMSA()
	{
		return $this->MSA;
	}
	
	/**
	* @param integer $JWB
	* @return B2
	*/
	public function setJWB($JWB)
	{
		$this->JWB = $JWB;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getJWB()
	{
		return $this->JWB;
	}
	
	/**
	* @param integer $DEV
	* @return B2
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
	* @param integer $DWB
	* @return B2
	*/
	public function setDWB($DWB)
	{
		$this->DWB = $DWB;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getDWB()
	{
		return $this->DWB;
	}
}

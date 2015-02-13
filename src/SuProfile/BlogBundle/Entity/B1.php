<?php

namespace SuProfile\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="B1")
 * @ORM\Entity(repositoryClass="SuProfile\BlogBundle\Entity\B1Repository")
 * @ORM\HasLifecycleCallbacks
 */
class B1
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
	* @ORM\Column(name="MAT", type="integer", nullable=true)
	*/
	private $MAT;
	
	/**
	* @ORM\Column(name="ARI", type="integer", nullable=true)
	*/
	private $ARI;
	
	/**
	* @ORM\Column(name="CCNA", type="integer", nullable=true)
	*/
	private $CCNA;
	
	/**
	* @ORM\Column(name="ADS", type="integer", nullable=true)
	*/
	private $ADS;
	
	/**
	* @ORM\Column(name="WEB", type="integer", nullable=true)
	*/
	private $WEB;
	
	/**
	* @ORM\Column(name="CPA", type="integer", nullable=true)
	*/
	private $CPA;
	
	/**
	* @ORM\Column(name="OSS", type="integer", nullable=true)
	*/
	private $OSS;
	
	/**
	* @ORM\Column(name="LIN", type="integer", nullable=true)
	*/
	private $LIN;
	
	/**
	* @ORM\Column(name="MER", type="integer", nullable=true)
	*/
	private $MER;
	
	/**
	* @ORM\Column(name="SEC", type="integer", nullable=true)
	*/
	private $SEC;
	
	/**
	* @ORM\Column(name="ORC", type="integer", nullable=true)
	*/
	private $ORC;
	
	/**
	* @ORM\Column(name="JWB", type="integer", nullable=true)
	*/
	private $JWB;
	
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
	* @return B1
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
	* @return B1
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
	* @return B1
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
	* @param integer $MAT
	* @return B1
	*/
	public function setMAT($MAT)
	{
		$this->MAT = $MAT;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getMAT()
	{
		return $this->MAT;
	}
	
	/**
	* @param integer $ARI
	* @return B1
	*/
	public function setARI($ARI)
	{
		$this->ARI = $ARI;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getARI()
	{
		return $this->ARI;
	}
	
	/**
	* @param integer $CCNA
	* @return B1
	*/
	public function setCCNA($CCNA)
	{
		$this->CCNA = $CCNA;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getCCNA()
	{
		return $this->CCNA;
	}
	
	/**
	* @param integer $ADS
	* @return B1
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
	* @return B1
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
	* @param integer $CPA
	* @return B1
	*/
	public function setCPA($CPA)
	{
		$this->CPA = $CPA;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getCPA()
	{
		return $this->CPA;
	}
	
	/**
	* @param integer $OSS
	* @return B1
	*/
	public function setOSS($OSS)
	{
		$this->OSS = $OSS;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getOSS()
	{
		return $this->OSS;
	}
	
	/**
	* @param integer $LIN
	* @return B1
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
	* @param integer $MER
	* @return B1
	*/
	public function setMER($MER)
	{
		$this->MER = $MER;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getMER()
	{
		return $this->MER;
	}
	
	/**
	* @param integer $SEC
	* @return B1
	*/
	public function setSEC($SEC)
	{
		$this->SEC = $SEC;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getSEC()
	{
		return $this->SEC;
	}
	
	/**
	* @param integer $ORC
	* @return B1
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
	* @param integer $JWB
	* @return B1
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
	* @return B1
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
	* @return B1
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

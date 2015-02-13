<?php

namespace SuProfile\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Table(name="B3")
 * @ORM\Entity(repositoryClass="SuProfile\BlogBundle\Entity\B3Repository")
 * @ORM\HasLifecycleCallbacks
 */
class B3
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
	* @ORM\Column(name="ORC", type="integer", nullable=true)
	*/
	private $ORC;
	
	/**
	* @ORM\Column(name="LAW", type="integer", nullable=true)
	*/
	private $LAW;
	
	/**
	* @ORM\Column(name="NET", type="integer", nullable=true)
	*/
	private $NET;
	
	/**
	* @ORM\Column(name="LIN", type="integer", nullable=true)
	*/
	private $LIN;
	
	/**
	* @ORM\Column(name="APL", type="integer", nullable=true)
	*/
	private $APL;
	
	/**
	* @ORM\Column(name="JVA", type="integer", nullable=true)
	*/
	private $JVA;
	
	/**
	* @ORM\Column(name="MSD", type="integer", nullable=true)
	*/
	private $MSD;
	
	/**
	* @ORM\Column(name="AIT", type="integer", nullable=true)
	*/
	private $AIT;
	
	/**
	* @ORM\Column(name="MET", type="integer", nullable=true)
	*/
	private $MET;
	
	/**
	* @ORM\Column(name="MGT", type="integer", nullable=true)
	*/
	private $MGT;
	
	/**
	* @ORM\Column(name="WEB", type="integer", nullable=true)
	*/
	private $WEB;
	
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
	* @return B3
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
	* @param integer $ORC
	* @return B3
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
	* @param integer $LAW
	* @return B3
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
	* @param integer $NET
	* @return B3
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
	* @param integer $LIN
	* @return B3
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
	* @param integer $APL
	* @return B3
	*/
	public function setAPL($APL)
	{
		$this->APL = $APL;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getAPL()
	{
		return $this->APL;
	}
	
	/**
	* @param integer $JVA
	* @return B3
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
	* @param integer $MSD
	* @return B3
	*/
	public function setMSD($MSD)
	{
		$this->MSD = $MSD;
		return $this;
	}

	/**
	* @return integer
	*/
	public function getMSD()
	{
		return $this->MSD;
	}
	
	/**
	* @param integer $AIT
	* @return B3
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
	* @param integer $MET
	* @return B3
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
	* @param integer $MGT
	* @return B3
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
	* @param integer $WEB
	* @return B3
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
	* @param integer $DEV
	* @return B3
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
	* @return B3
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

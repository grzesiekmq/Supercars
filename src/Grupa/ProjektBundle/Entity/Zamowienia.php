<?php

namespace Grupa\ProjektBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Grupa\ProjektBundle\Entity\User as User;
use Doctrine\Common\Collections\ArrayCollection;

/**
* @ORM\Entity
* @ORM\Table()
*/
class Zamowienia
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;
	
	/**
	* @ORM\ManyToMany(targetEntity="Film", mappedBy="zamowienie")
	*/
	protected $filmy;
	
	/**
	* @ORM\Column(type="datetime", name="data_zamowienia")
	*/
	protected $dataZamowienia;
	public function __construct()
	{
	$this->filmy = new ArrayCollection();
	$this->dataZamowienia = new \DateTime('now');
	}
	
	/**
	* @ORM\ManyToOne(targetEntity="User", inversedBy="zamowienia")
	* @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	*/
	protected $user;
	
	/**
	* @ORM\Column(type="datetime", name="data_realizacji", nullable=true)
	*/
	protected $dataRealizacji;
	
	/**
	* Get id
	*
	* @return integer
	*/
	public function getId()
	{
	return $this->id;
	}
	
	/**
	* Set dataZamowienia
	*
	* @param \DateTime $dataZamowienia
	* @return Zamowienia
	*/
	public function setDataZamowienia($dataZamowienia)
	{
	$this->dataZamowienia = $dataZamowienia;
	return $this;
	}
	
	/**
	* Get dataZamowienia
	*
	* @return \DateTime
	*/
	public function getDataZamowienia()
	{
	return $this->dataZamowienia;
	}
	
	/**
	* Set dataRealizacji
	*
	* @param \DateTime $dataRealizacji
	* @return Zamowienia
	*/
	public function setDataRealizacji($dataRealizacji)
	{
	$this->dataRealizacji = $dataRealizacji;
	return $this;
	}
	
	/**
	* Get dataRealizacji
	*
	* @return \DateTime
	*/
	public function getDataRealizacji()
	{
	return $this->dataRealizacji;
	}
	
	/**
	* Add filmy
	*
	* @param \Grupa\ProjektBundle\Entity\Film $filmy
	* @return Zamowienia
	*/
	public function addFilmy(\Grupa\ProjektBundle\Entity\Film $filmy)
	{
	$this->filmy[] = $filmy;
	return $this;
	}
	
	/**
	* Remove filmy
	*
	* @param \Grupa\ProjektBundle\Entity\Film $filmy
	*/
	public function removeFilmy(\Grupa\ProjektBundle\Entity\Film $filmy)
	{
	$this->filmy->removeElement($filmy);
	}
	
	/**
	* Get filmy
	*
	* @return \Doctrine\Common\Collections\Collection
	*/
	public function getFilmy()
	{
	return $this->filmy;
	}
	
	/**
	* Set user
	*
	* @param \Grupa\ProjektBundle\Entity\User $user
	* @return Zamowienia
	*/
	public function setUser(\Grupa\ProjektBundle\Entity\User $user = null)
	{
	$this->user = $user;
	return $this;
	}
	
	/**
	* Get user
	*
	* @return \Grupa\ProjektBundle\Entity\User
	*/
	public function getUser()
	{
	return $this->user;
	}
	
}

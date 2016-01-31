<?php

namespace Grupa\ProjektBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Grupa\ProjektBundle\Entity\Film as Film;
use Doctrine\Common\Collections\ArrayCollection;

/**
* @ORM\Entity
* @ORM\Table()
*/
class FilmGatunek
{
	/**
	* @ORM\Id
	* @ORM\Column(type="string")
	*/
	protected $name;
	
	/**
	* Get name
	*
	* @return string
	*/
	public function getName()
	{
		return $this->name;
	}
	
	/**
	* @ORM\OneToMany(targetEntity="Film", mappedBy="gatunek")
	*/
	protected $filmy;
	
	public function __construct()
	{
		$this->filmy = new ArrayCollection();
	}
	
	/**
	* Set name
	*
	* @param string $name
	* @return FilmGatunek
	*/
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}
	
	/**
	* Add filmy
	*
	* @param \Grupa\ProjektBundle\Entity\Film $filmy
	* @return FilmGatunek
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
}

<?php
namespace Grupa\ProjektBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Grupa\ProjektBundle\Entity\User as User;
use Grupa\ProjektBundle\Entity\Film as Film;

/**
* @ORM\Entity
* @ORM\Table()
*/

class Recenzja
{
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;
	
	/**
	* @ORM\ManyToOne(targetEntity="Film", inversedBy="recenzje")
	* @ORM\JoinColumn(name="film_id", referencedColumnName="id")
	*/
	protected $film;

	/**
	* @ORM\ManyToOne(targetEntity="User", inversedBy="recenzje")
	* @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	*/
	protected $user;

	/**
	* @ORM\Column(type="string", length=900)
	*/
	protected $tresc;

	/**
	* @ORM\Column(type="datetime", name="data_recenzji")
	*/
	protected $dataRecenzji;

	/**
	* @ORM\Column(type="integer", name="status_recenzji", options = {"default"="0"})
	*/
	protected $statusRecenzji;

	public function __construct()
	{
		$this->dataRecenzji = new \DateTime('now');
	}
	
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
	* Set tresc
	*
	* @param string $tresc
	* @return Recenzja
	*/
	public function setTresc($tresc)
	{
		$this->tresc = $tresc;
		return $this;
	}
	
	/**
	* Get tresc
	*
	* @return string
	*/
	public function getTresc()
	{
		return $this->tresc;
	}
	
	/**
	* Set dataRecenzji
	*
	* @param \DateTime $dataRecenzji
	* @return Recenzja
	*/
	public function setDataRecenzji($dataRecenzji)
	{
		$this->dataRecenzji = $dataRecenzji;
		return $this;
	}
	
	/**
	* Get dataRecenzji
	*
	* @return \DateTime
	*/
	public function getDataRecenzji()
	{
		return $this->dataRecenzji;
	}
	
	/**
	* Set statusRecenzji
	*
	* @param integer $statusRecenzji
	* @return Recenzja
	*/
	public function setStatusRecenzji($statusRecenzji)
	{
		$this->statusRecenzji = $statusRecenzji;
		return $this;
	}
	
	/**
	* Get statusRecenzji
	*
	* @return integer
	*/
	public function getStatusRecenzji()
	{
		return $this->statusRecenzji;
	}
	
	/**
	* Set film
	*
	* @param \Grupa\ProjektBundle\Entity\Film $film
	* @return Recenzja
	*/
	public function setFilm(\Grupa\ProjektBundle\Entity\Film $film = null)
	{
		$this->film = $film;
		return $this;
	}
	
	/**
	* Get film
	*
	* @return \Grupa\ProjektBundle\Entity\Film
	*/
	public function getFilm()
	{
		return $this->film;
	}
	
	/**
	* Set user
	*
	* @param \Grupa\ProjektBundle\Entity\User $user
	* @return Recenzja
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

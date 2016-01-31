<?php

namespace Grupa\ProjektBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Grupa\ProjektBundle\Entity\Recenzja as Recenzja;
use Grupa\ProjektBundle\Entity\Zamowienia as Zamowienia;

/**
 * @ORM\Entity
 * @ORM\Table()
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	/**
      * @ORM\OneToMany(targetEntity="Zamowienia", mappedBy="user")
      */
	protected $zamowienia;
	
	/**
      * @ORM\OneToMany(targetEntity="Recenzja", mappedBy="user")
      */
	protected $recenzje;
	
	public function __construct()
	{
		parent::__construct();
		$this->zamowienia = new ArrayCollection();
		$this->recenzje = new ArrayCollection();
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
     * Add zamowienia
     *
     * @param \Grupa\ProjektBundle\Entity\Zamowienia $zamowienia
     * @return User
     */
    public function addZamowienium(\Grupa\ProjektBundle\Entity\Zamowienia $zamowienia)
    {
        $this->zamowienia[] = $zamowienia;

        return $this;
    }

    /**
     * Remove zamowienia
     *
     * @param \Grupa\ProjektBundle\Entity\Zamowienia $zamowienia
     */
    public function removeZamowienium(\Grupa\ProjektBundle\Entity\Zamowienia $zamowienia)
    {
        $this->zamowienia->removeElement($zamowienia);
    }

    /**
     * Get zamowienia
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getZamowienia()
    {
        return $this->zamowienia;
    }

    /**
     * Add recenzje
     *
     * @param \Grupa\ProjektBundle\Entity\Recenzja $recenzje
     * @return User
     */
    public function addRecenzje(\Grupa\ProjektBundle\Entity\Recenzja $recenzje)
    {
        $this->recenzje[] = $recenzje;

        return $this;
    }

    /**
     * Remove recenzje
     *
     * @param \Grupa\ProjektBundle\Entity\Recenzja $recenzje
     */
    public function removeRecenzje(\Grupa\ProjektBundle\Entity\Recenzja $recenzje)
    {
        $this->recenzje->removeElement($recenzje);
    }

    /**
     * Get recenzje
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRecenzje()
    {
        return $this->recenzje;
    }
}

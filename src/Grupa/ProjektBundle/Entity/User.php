<?php

namespace Grupa\ProjektBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

 /**
  * @ORM\Entity
  * @ORM\Table(name="`user`")
  */
class User
{
	/**
      * @ORM\Id
      * @ORM\Column(type="integer")
      */
	protected $userId;

}
<?php

namespace Grupa\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class EnController extends Controller

{
	public function enAction(){
		return $this->render('GrupaProjektBundle:En:enL.html.twig');
	}

}
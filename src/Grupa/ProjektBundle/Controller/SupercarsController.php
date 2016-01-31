<?php

namespace Grupa\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class SupercarsController extends Controller
{
	public function showAction($slug)
	{
		$url = $this->generateUrl('grupa_projekt_supercars',
			array('slug' => 'marka')
			);
		return $this->render('GrupaProjektBundle:Sc:supercars.html.twig');
	}


}
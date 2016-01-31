<?php

namespace Grupa\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
class IndexController extends Controller

{
	public function showIndexAction()
	{	
		return $this->render('GrupaProjektBundle:Index:index.html.twig');
	}
	public function logowanieAction()
	{
		return $this->render('GrupaProjektBundle:Uzytkownik:logowanie.html.twig');
	}

}
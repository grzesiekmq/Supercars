<?php

namespace Grupa\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class FilmyController extends Controller
{
	public function showFilmAction()
	{
		return $this->render('GrupaProjektBundle:Filmy:filmy.index.html.twig');
	}

	public function f1Action()
	{
		return $this->render('GrupaProjektBundle:Filmy:f1.html.twig');
	}

	public function f2Action()
	{
		return $this->render('GrupaProjektBundle:Filmy:f2.html.twig');
	}
	
	public function f3Action()
	{
		return $this->render('GrupaProjektBundle:Filmy:f3.html.twig');
	}
	public function f4Action()
	{
		return $this->render('GrupaProjektBundle:Filmy:f4.html.twig');
	}
	
	public function f5Action()
	{
		return $this->render('GrupaProjektBundle:Filmy:f5.html.twig');
	}
	
	public function f6Action()
	{
		return $this->render('GrupaProjektBundle:Filmy:f6.html.twig');
	}
	
	public function f7Action()
	{
		return $this->render('GrupaProjektBundle:Filmy:f7.html.twig');
	}

}
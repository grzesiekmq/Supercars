<?php

namespace Grupa\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Grupa\ProjektBundle\Entity\Film;
use Grupa\ProjektBundle\Form\FilmType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AdminController extends Controller

{
	public function dodajFilmAction(Request $request)
	{
		$film = new Film();
		$form = $this->createForm(
				new FilmType(),
				$film
		);
		
		if ($request->isMethod('POST') && $form->handleRequest($request) 		&& $form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($movie);
				$em->flush();
	}
		return $this->render('GrupaProjektBundle:Admin:dodajFilm.html.twig', array(
				'form' => $form->createView())
);
	}

	public function usunFilmAction()
		{
			return $this->render('GrupaProjektBundle:Admin:usunFilm.html.twig');
		}

	public function panelAction()
		{
			return $this->render('GrupaProjektBundle:Admin:panel.html.twig');
		}
}
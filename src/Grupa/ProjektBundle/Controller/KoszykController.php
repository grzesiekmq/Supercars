<?php

namespace Grupa\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class KoszykController extends Controller
{
    public function pokazKoszykAction()
    {
        return $this->render('GrupaProjektBundle:Koszyk:pokazKoszyk.html.twig', array(
                // ...
            ));    }

}

<?php

namespace Grupa\ProjektBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ZamowieniaController extends Controller
{
    public function showZamowieniaAction()
    {
        return $this->render('GrupaProjektBundle:Zamowienia:zamowienia.html.twig', array(
                // ...
            ));    }

}

<?php

namespace NensQueFem\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use NensQueFem\Bundle\FrontBundle\Form\SearchActivitatType;

class DefaultController extends Controller
{
    public function portadaAction()
    {
        $peticion = $this->getRequest();

        $search_arr = array();
        $form_search   = $this->createForm(new SearchActivitatType(), $search_arr);


        return $this->render('NensQueFemFrontBundle:Default:portal.html.twig', array(
            'entities'      => array(),
            'form_search'   => $form_search->createView()
        ));
    }
}

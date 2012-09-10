<?php

namespace NensQueFem\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use NensQueFem\Bundle\FrontBundle\Form\SearchActivitatType;

class DefaultController extends Controller
{

    /**
     * @Route("/home", defaults={"url_search" = 1}, name="NQFFrontBundle_home")
     * @Route("/search", defaults={"url_search" = 1}, name="NQFFrontBundle_search")
     * @Route("/search/{url_search}", name="NQFFrontBundle_search_param")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function searchAction($url_search)
    {
        $peticion = $this->getRequest();

        $params = array();
        $formSearch   = $this->createForm(new SearchActivitatType(), $params);

        $searchResult    = $this->get('nqf.search')->getResult($params);

        return $this->render('NensQueFemFrontBundle:Default:home.html.twig', array(
            'search_result_arr'    => $searchResult,
            'form_search'   => $formSearch->createView()
        ));
    }

    /**
     * @param $param_arr
     * @return string
     */
    public function ArrayToSlug($param_arr)
    {

        return 'slug';
    }

    /**
     * @param $slug
     * @return array
     */
    public function SlugToArray($slug)
    {

        return array();
    }
}

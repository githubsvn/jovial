<?php

namespace SM\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SM\Bundle\AdminBundle\Repository\MenuRepository;

class NewsController extends Controller {
    
    /**
     * View cat product by slug
     * 
     * @param type $slug
     * @return type 
     */
    public function viewCatAction($slug)
    {
        return $this->render('SMFrontBundle:News:view-cat.html.twig', array(
            'slug' => $slug
        ));
    }
    
    public function detailAction($slug)
    {
        return $this->render('SMFrontBundle:News:detail.html.twig', array(
            'slug' => $slug
        ));
    }
}

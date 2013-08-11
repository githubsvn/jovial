<?php

namespace SM\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SM\Bundle\AdminBundle\Repository\MenuRepository;

class PageController extends Controller {
    
    /**
     * View cat product by slug
     * 
     * @param type $slug
     * @return type 
     */
    public function detailAction($slug)
    {
        return $this->render('SMFrontBundle:Page:detail.html.twig', array(
            'slug' => $slug
        ));
    }
}

<?php

namespace SM\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SM\Bundle\AdminBundle\Repository\MenuRepository;

class DefaultController extends Controller {
    
    /**
     * Render content for home page
     * 
     * @return type 
     */
    public function indexAction(Request $request) {

        return $this->render('SMFrontBundle:Default:index.html.twig');
    }
    
    /**
     * Render menu left
     * 
     * @return type 
     */
    public function menuAction(Request $request)
    {
        $currentUrl = $this->getRequest()->getUri();
        $menus = array();
        
        $repMenu = $this->getDoctrine()
                        ->getRepository('SMAdminBundle:Menu');
        
        $mnuPosLeft = $this->container->getParameter('menu_position_left');
        $menuLeftTop = $repMenu->getOptionParent($mnuPosLeft);
        unset($menuLeftTop[0]); //unset for menu Lua Chon
        $menuLeftTop = $this->removeHostUrl($menuLeftTop);
        
        $mnuPosLeftBottom = $this->container->getParameter('menu_position_left_bottom');
        $menuLeftBottom = $repMenu->getOptionParent($mnuPosLeftBottom);
        unset($menuLeftBottom[0]);  //unset for menu Lua Chon
        $menuLeftBottom = $this->removeHostUrl($menuLeftBottom);
        
        $urlHost = $this->container->getParameter('host');
        $currentUrl = str_replace($urlHost, '', $currentUrl);
        
        return $this->render('SMFrontBundle:Default:menu.html.twig', array(
            'menuLeftTop' => $menuLeftTop,
            'menuLeftBottom' => $menuLeftBottom,
            'currentUrl' => $currentUrl
            
        ));
    }
    
    /**
     * Remove url host that to set active for menu
     * 
     * @param type $menus
     * @return type 
     */
    private function removeHostUrl($menus)
    {
        $urlHost = $this->container->getParameter('host');
        $rst = array();
        if (is_array($menus) && count($menus) > 0) {
            foreach ($menus as $mnu) {
                $mnu->url = str_replace($urlHost, '', $mnu->url);
                $rst[] = $mnu;
            }
        }
        return $rst;
    }
    
    /**
     * Render image slide
     * 
     * @return type 
     */
    public function slideImageAction()
    {
        $images = array();
        $images[] = 'intro-1.jpg';
        $images[] = 'intro-2.jpg';
        $images[] = 'intro-1.jpg';
        $images[] = 'intro-2.jpg';
        
        return $this->render('SMFrontBundle:Default:slide-image.html.twig', array('images' => $images));
    }
    
    /**
     * To count visitor
     * 
     * @return type 
     */
    public function counterAction()
    {
        $count = 12345;
        return $this->render('SMFrontBundle:Default:counter.html.twig', array('count' => $count));
    }
    
    /**
     * Return support block
     * 
     * @return type 
     */
    public function supportAction()
    {
        $yahoos = array('minhthienvt');
        $skypes = array('minhthienvt');
        
        return $this->render('SMFrontBundle:Default:support.html.twig', array(
            'yahoos' => $yahoos,
            'skypes' => $skypes
        ));
    }
    
    /**
     * Render html fot block Footer
     * 
     * @return type 
     */
    public function footerAction()
    {
        $infos = array();
        return $this->render('SMFrontBundle:Default:footer.html.twig', array(
            'infos' => $infos
        ));
    }
    
    /**
     * Render block right of the page product cat
     * 
     * @return type 
     */
    public function rightAction()
    {
        return $this->render('SMFrontBundle:Default:right.html.twig', array(
        ));
    }
}

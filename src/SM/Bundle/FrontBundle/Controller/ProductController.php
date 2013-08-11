<?php

namespace SM\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SM\Bundle\AdminBundle\Repository\MenuRepository;
use SM\Bundle\AdminBundle\Utilities\Helper;

class ProductController extends Controller {
    
    /**
     * View cat product by slug
     * 
     * @param type $slug
     * @return type 
     */
    public function viewCatAction($slug)
    {
        //Get branch id
        $branchId = Helper::getIdFromUrl($slug);
        
        $lang = $this->container->getParameter('locale');
        $page = 1;
        $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : $lang;

        //get list language
        $langList = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->findAll();

        if (is_null($lang)) {
            foreach ($langList as $langData) {
                $isDefault = $langData->getIsDefault();
                if ($isDefault == 1) {
                    $lang = $langData->getId();
                    break;
                }
            }
        }

        $currentLanguage = $this->getDoctrine()
                ->getRepository("SMAdminBundle:Language")
                ->find($lang);

        $total = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductLanguage")
                ->getTotalByLangAndNameAndType($lang, '', $branchId);

        $perPage = $this->container->getParameter('per_item_page_front');
        $lastPage = ceil($total / $perPage);
        $previousPage = $page > 1 ? $page - 1 : 1;
        $nextPage = $page < $lastPage ? $page + 1 : $lastPage;

        $entities = $this->getDoctrine()
                ->getRepository("SMAdminBundle:ProductLanguage")
                ->findByLangAndNameAndBranchAndProductGroup($lang, '', $branchId, $perPage, ($page - 1) * $perPage);
        
        
        return $this->render('SMFrontBundle:Product:view-cat.html.twig', array(
            'entities' => $entities
        ));
    }
    
    /**
     * View product detail
     * 
     * @param type $slug
     * @return type 
     */
    public function detailAction($slug)
    {
        return $this->render('SMFrontBundle:Product:detail.html.twig', array(
            'slug' => $slug
        ));
    }
}
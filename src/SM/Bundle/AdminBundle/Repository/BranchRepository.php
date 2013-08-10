<?php

namespace SM\Bundle\AdminBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\UnitOfWork;

/**
 * BranchRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BranchRepository extends EntityRepository
{

    /**
     *
     * @param type $limit
     * @param type $offset
     * @param type $criteria ==> array(
     *                              0 => array (
     *                                  'op' => 'LIKE'
     *                                  'fieldName' => 'name'
     *                                  'fieldValue' => 'ABC'
     *                              )
     *                              1 => array (
     *                                  'op' => '>'
     *                                  'fieldName' => 'id'
     *                                  'fieldValue' => '2'
     *                              )
     *                          )
     * @param type $orderBy ==> array(
     *                              0 => array()
     *                          )
     * @return type
     */
    public function getList($limit = null, $offset = null, $criteria = array(), $orderBy = array('lft' => 'ASC'))
    {
        $qb = $this->createQueryBuilder('t');
        $qb->select('t');

        if (!empty($limit)) {
            $qb->setMaxResults($limit);
        }

        if (!empty($offset)) {
            $qb->setFirstResult($offset);
        }

        if (is_array($criteria) && count($criteria) > 0) {
            foreach ($criteria as $key => $cri) {
                $qb->andWhere("t." . $cri['fieldName']. " ". $cri['op']." ". " ?$key");

                if ($cri['op'] == 'LIKE') {
                    $qb->setParameter($key, "%".$cri['fieldName']."%");
                } else {
                    $qb->setParameter($key, $cri['fieldValue']);
                }
            }
        }

        if (is_array($orderBy) && count($orderBy) > 0) {
            foreach ($orderBy as $fieldName => $sort) {
                $qb->orderBy("t.$fieldName", $sort);
            }
        }
        //echo $qb->getQuery()->getSQL();
        return $qb->getQuery()->getResult();

    }

    /**
     * get total item
     *
     * @param type $criteria
     * @return total
     */
    public function getTotal($criteria = array())
    {
        $qb = $this->createQueryBuilder('t');
        $qb->select('COUNT(t.id) as total');
        if (is_array($criteria) && count($criteria) > 0) {
            foreach ($criteria as $key => $cri) {
                $qb->andWhere("t." . $cri['fieldName']. " ". $cri['op']." ". " ?$key");

                if ($cri['op'] == 'LIKE') {
                    $qb->setParameter($key, "%".$cri['fieldName']."%");
                } else {
                    $qb->setParameter($key, $cri['fieldValue']);
                }
            }
        }
        //echo $qb->getQuery()->getSQL();
        $rst = $qb->getQuery()->getScalarResult();
        if (!empty($rst[0]['total'])) {

            return $rst[0]['total'];
        }

        return 0;
    }

    /**
     * Delete language by array id
     *
     * @param array $ids
     *
     * @return array
     */
    public function deleteByIds($ids = array())
    {
        $em = $this->getEntityManager();
        $rst = array();
        if (is_array($ids) && count($ids)) {
            foreach ($ids as $id) {
                $entity = $this->find($id);
                $em->remove($entity);
                if ($em->getUnitOfWork()->getEntityState($entity) == UnitOfWork::STATE_REMOVED) {
                    $rst[] = $id;
                }
            }
            $em->flush();
        }

        return $rst;
    }

    /**
     * get page root
     *
     * @return Page the entity page
     */
    public function getPageRoot()
    {
        $queryBuilder = $this->createQueryBuilder('j');
        $queryBuilder->andWhere('j.parent is NULL');
        $query = $queryBuilder->getQuery();
        $rst = $query->getResult();
        if (!empty($rst[0])) {

            return $rst[0];
        } else {
            $stmt = $this->_em
                    ->getConnection()
                    ->prepare("INSERT INTO {$this->_class->getTableName()} (lft, rgt) VALUES (0, 0)");
            $stmt->execute();
            $root = $this->_em->getRepository($this->_entityName)
                    ->find($this->_em->getConnection()->lastInsertId());

            return $root;
        }

        return null;
    }


    /**
     * getChildren
     *
     * @param type $parentId the id
     *
     * @return array
     */
    public function getChildren($parentId)
    {
        return $this->getEntityManager()
                        ->getRepository('SMAdminBundle:Branch')
                        ->createQueryBuilder('c')
                        ->where('c.parent = :parentId')
                        ->andWhere('c.parent != c.id')
                        ->setParameter('parentId', $parentId)
                        ->orderBy('c.lft', 'ASC')
                        ->getQuery()
                        ->getResult();
    }

    /**
     * getChildrenArray
     *
     * @param type $parentId the id
     *
     * @return array
     */
    public function getChildrenArray($parentId)
    {
        return $this->getEntityManager()
                        ->getRepository('SMAdminBundle:Branch')
                        ->createQueryBuilder('c')
                        ->select('c.id, c.lft, c.rgt')
                        ->where('c.parent = :parentId')
                        ->andWhere('c.parent != c.id')
                        ->setParameter('parentId', $parentId)
                        ->orderBy('c.lft', 'ASC')
                        ->getQuery()
                        ->getArrayResult();
    }

    /**
     * @param type $idPage The id of page
     * @param type $lft    Position of left
     * @param type $rgt    Position of right
     *
     * @return type
     */
    public function setLftRgt($idPage, $lft, $rgt)
    {
        return $this->getEntityManager()
                        ->getRepository('SMAdminBundle:Branch')
                        ->createQueryBuilder('c')
                        ->update()
                        ->set('c.lft', $lft)
                        ->set('c.rgt', $rgt)
                        ->where('c.id = :id')
                        ->setParameter('id', $idPage)
                        ->getQuery()
                        ->execute();
    }

    /**
     * @param type $idPage The id of page
     *
     * @return type
     */
    public function getEntityArray($idPage)
    {
        return $this->getEntityManager()
                        ->getRepository('SMAdminBundle:Branch')
                        ->createQueryBuilder('c')
                        ->select('c.id, c.lft, c.rgt')
                        ->where('c.id = :id')
                        ->setParameter('id', $idPage)
                        ->getQuery()
                        ->getArrayResult();
    }

    /**
     * @param type $options the option
     *
     * @return null
     */
    public function findOneArrayBy($options = array())
    {
        $queryBuilder = $this->getEntityManager()
                ->getRepository('SMAdminBundle:Branch')
                ->createQueryBuilder('c')
                ->select('c.id, c.lft, c.rgt');
        $num = 0;
        foreach ($options as $key => $option) {
            $queryBuilder->andWhere("c.$key = :ii$num")
                    ->setParameter("ii$num", $option);
        }
        $rerult = $queryBuilder->getQuery()->getArrayResult();
        if (is_array($rerult) and count($rerult) > 0) {

            return $rerult[0];
        }

        return null;
    }

    /**
     * @return boolean
     */
    public function rebuildLftRgt()
    {
        //get all parent tree
        $trees = $this->getEntityManager()
                ->getRepository('SMAdminBundle:Branch')
                ->createQueryBuilder('c')
                ->select('c.id, c.lft, c.rgt')
                ->where('c.parent IS NULL')
                ->getQuery()
                ->getArrayResult();
        $begin = 1;
        $end = 0;
        foreach ($trees as $tree) {
            $this->postOrderTraversal($tree, $begin, $end);
            $begin = $end + 1;
        }

        return true;
    }

    /**
     * @param type $tree  tree
     * @param type $begin begin
     * @param type &$end  end
     */
    public function postOrderTraversal($tree, $begin, &$end)
    {
        $repositor = $this->_em->getRepository('SMAdminBundle:Branch');
        //get $tree childrens
        $children = $this->_em->getRepository('SMAdminBundle:Branch')
                ->getChildrenArray($tree['id']);

        $tree['lft'] = $begin;
        $end = ++$begin;
        //Travesal the tree
        foreach ($children as $child) {
            $repositor->postOrderTraversal($child, $begin, $end);
            $begin = ++$end;
        }
        $tree['rgt'] = $end;
        $this->setLftRgt($tree['id'], $tree['lft'], $tree['rgt']);
    }

    /**
     * @param \SM\Bundle\AdminBundle\Entity\Branch $page the page
     */
    public function moveUp(\SM\Bundle\AdminBundle\Entity\Branch $page)
    {
        //get the area upper
        $entityManager = $this->_em;
        $pageArray = array(
            'id' => $page->getId(),
            'lft' => $page->getLft(),
            'rgt' => $page->getRgt(),
        );

        $repositor = $entityManager->getRepository('SMAdminBundle:Branch');
        $pageUpper = $repositor->findOneArrayBy(array('rgt' => ($pageArray['lft'] - 1)));

        if ($pageUpper) {
            $del1 = $pageArray['rgt'] - $pageArray['lft'];
            $del2 = $pageUpper['rgt'] - $pageUpper['lft'];

            //calculate new lft, rgt of 2 node and swap
            $pageArray['lft'] = $pageUpper['lft'];
            $pageArray['rgt'] = $pageArray['lft'] + $del1;
            $pageUpper['lft'] = $pageArray['rgt'] + 1;
            $pageUpper['rgt'] = $pageUpper['lft'] + $del2;
            $end = 0;
            //save new order
            $repositor->postOrderTraversal($pageUpper, $pageUpper['lft'], $end);
            $repositor->postOrderTraversal($pageArray, $pageArray['lft'], $end);
        }
    }

    /**
     * @param \SM\Bundle\AdminBundle\Entity\Branch $page the page
     */
    public function moveDown(\SM\Bundle\AdminBundle\Entity\Branch $page)
    {
        //get the area upper
        $entityManager = $this->_em;
        $pageArray = array(
            'id' => $page->getId(),
            'lft' => $page->getLft(),
            'rgt' => $page->getRgt(),
        );

        $repositor = $entityManager->getRepository('SMAdminBundle:Branch');
        $pageUnder = $repositor->findOneArrayBy(array('lft' => ($pageArray['rgt'] + 1)));
        if ($pageUnder) {
            $del1 = $pageArray['rgt'] - $pageArray['lft'];
            $del2 = $pageUnder['rgt'] - $pageUnder['lft'];

            //calculate new lft, rgt of 2 node and swap
            $pageUnder['lft'] = $pageArray['lft'];
            $pageUnder['rgt'] = $pageArray['lft'] + $del2;
            $pageArray['lft'] = $pageUnder['rgt'] + 1;
            $pageArray['rgt'] = $pageArray['lft'] + $del1;
            $end = 0;
            //save new order
            $repositor->postOrderTraversal($pageUnder, $pageUnder['lft'], $end);
            $repositor->postOrderTraversal($pageArray, $pageArray['lft'], $end);
        }
    }

    /**
     * @param type $lft lft
     * @param type $rgt rgt
     *
     * @return type
     */
    public function getAllChildren($lft, $rgt)
    {
        return $this->getEntityManager()
                ->getRepository($this->_entityName)
                ->createQueryBuilder('c')
                ->where('c.lft >= :lft')
                ->andWhere('c.rgt != :rgt')
                ->setParameters(array('lft' => $lft, 'rgt' => $rgt))
                ->orderBy('c.lft', 'ASC')
                ->getQuery()
                ->getResult();
    }

    /**
     * get option that to build param in the menu type
     *
     * @return type
     */
    public function getOptions()
    {
        $options = array();

        //get list language
        $repLanguage = $this->getEntityManager()->getRepository("SMAdminBundle:Language");
        //Get list language
        $langList = $repLanguage->getList();
        $defaultLanguage = null;
        if (is_array($langList)) {
            foreach ($langList as $language) {
                if ($language->getIsDefault()) {
                    $defaultLanguage = $language;
                }
            }
        }

        $criteria = array();
        $criteria[] = array('op' => '>', 'fieldName' => 'lft', 'fieldValue' => '1');
        $criteria[] = array('op' => '=', 'fieldName' => 'status', 'fieldValue' => '1');

        $entities = $this->getList(null, null, $criteria, array('lft' => 'ASC'));
        
        if (is_array($entities) && count($entities) > 0) {
            foreach ($entities as $obj) {
                if (is_object($defaultLanguage) && is_object($obj)) {
                    $obj->setLanguage($defaultLanguage);
                    $std = new \stdClass();
                    $std->name = $obj->getCurrentLanguage()->getTreeName();
                    $std->id = $obj->getId();
                    $options[] = $std;
                }
            }
        }
        
        return $options;
    }
}

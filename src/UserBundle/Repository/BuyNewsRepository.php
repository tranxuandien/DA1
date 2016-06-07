<?php

namespace UserBundle\Repository;

use Doctrine\ORM\EntityRepository as BaseRepo;
use Symfony\Component\HttpFoundation\Request;
/**
 * BuyNewsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BuyNewsRepository extends BaseRepo
{
    public function getNewData(Request $request ){
//        $brand=$request->query->get('brand');
//        $status=$request->query->get('status');
        $price=$request->query->get('price');
//        $year=$request->query->get('year');
        $city=$request->query->get('city');
        if(($price!="")||($city!="")) {
            $queryBuilder = $this->getEntityManager()->createQueryBuilder()
                ->select('n')
                ->from($this->getEntityName(),'n')
                ->innerJoin('FosBundle\\Entity\\User','u','WITH', "u.id = n.userId");
            if($price!=null){
                    $queryBuilder->andwhere('n.price LIKE :price')
                        ->setParameter('price','%'.$price.'%' );
            }
            if($city!=null){
                $queryBuilder->andwhere('u.city LIKE :city')
                    ->setParameter('city', '%'.$city.'%');
            }
            $result=$queryBuilder->getQuery()->getResult();
            return $result;
        }
        else
        {
            return $this->getAllData();
        }
    }

    public function getAllData(){
        $queryBuilder = $this->getEntityManager()->createQueryBuilder()
            ->select('n')
            ->from($this->getEntityName(),'n')
            ->innerJoin('FosBundle\\Entity\\User','u','WITH', "u.id = n.userId");
        $result=$queryBuilder->getQuery()->getResult();
//        echo "<pre>";
//        print_r($result);die;
        return $result;
    }
    public function getNewsForUser($userId){
        $queryBuilder = $this->getEntityManager()->createQueryBuilder()
            ->select('n')
            ->from($this->getEntityName(),'n')
            ->where('n.userId = :userId')
            ->setParameter('userId',$userId);
//            ->innerJoin('FosBundle\\Entity\\User','u','WITH', "u.id = n.userId");
        $result=$queryBuilder->getQuery()->getResult();
//        echo "<pre>";
//        print_r($result);die;
        return $result;
    }
}
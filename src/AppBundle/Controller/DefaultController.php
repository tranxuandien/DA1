<?php

namespace AppBundle\Controller;

use AppBundle\Entity\BuyNews;
use AppBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

//        $product=new Product();
//        $product->setName('sanpham1');
//        $product->setPrice(19.9);
//
//        $em = $this->getDoctrine()->getManager();
//        $em->persist($product);
//        $em->flush();

         $brands=$this->getDoctrine()
             ->getRepository('AppBundle:Brands')
             ->findAll();

         $paginator = $this->get('knp_paginator');
         $pagination = $paginator->paginate( $brands, $request->query->get('page', 1), 10 );
//            ->findOneBy(array('code'=>'MX-508963'));

//        $BuyNews=new BuyNews();
//        $code=$BuyNews->getCode();
//        $title=$BuyNews->getTitle();
//        $address=$BuyNews->getAddress();
//        $city=$BuyNews->getCity();
//        $content=$BuyNews->getContent();
        return $this->render('default/main.html.twig',
            array(
//                'brands'=>$brands,
                 'pagination'=>$pagination
//                'code' => $code,
//                'title'=> $title,
//                'address'=>$address,
//                'city'=>$city,
//                'content'=>$content
            )
        );

        // replace this example code with whatever you need
//        return $this->render('default/index.html.twig', [
//            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
//        ]);
    }
    public function sellListAction(Request $request){
    	$currentPage=$request->query->get('page', 1);
    	$news=$this->getDoctrine()
            ->getRepository('AppBundle:SellNews')
            ->findAll();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate( $news, $request->query->get('page', 1), 20 );

        return $this->render('default/SellNews.html.twig',
            array(
                'pagination'=>$pagination,
                'pageRequest'=>$currentPage,
            )
        );

    }
    public function buyListAction(Request $request){
    	$product=$this->getDoctrine()
            ->getRepository('AppBundle:BuyNews')
            ->findAll();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate( $product, $request->query->get('page', 1), 10 );
        return $this->render('lucky/BuyNews.html.twig',
            array(
                'pagination'=>$pagination
            )
        );
    }
}

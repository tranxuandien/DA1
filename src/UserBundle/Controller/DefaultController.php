<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UserBundle\Entity\BuyNews;
use UserBundle\Entity\SellNews;
use UserBundle\Repository\BuyNewsRepository;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $brands = $this->getDoctrine()
            ->getRepository('UserBundle:Brands')
            ->findAll();

        $brandName = $this->getDoctrine()
            ->getRepository('UserBundle:Brands')
            ->getBrandname();

        $currentPage = $request->query->get('page', 1);
        $news = $this->getDoctrine()
            ->getRepository('UserBundle:SellNews')
            ->getDataSellNews($request);

        $paginator = $this->get('knp_paginator');
//        $paginationBrands = $paginator->paginate($brands, $request->query->get('page', 1), 80);
        $paginationNews = $paginator->paginate($news, $request->query->get('page', 1), 22);

        return $this->render('UserBundle:main:main.html.twig',
            array(
                'brs' => $brands,
                'brands' => $brandName,
//                'paginationBrands' => $paginationBrands,
                'pagination' => $paginationNews,
                'pageRequest' => $currentPage,
            )
        );
    }

    public function sellListAction(Request $request)
    {
        $currentPage = $request->query->get('page', 1);
        $news = $this->getDoctrine()
            ->getRepository('UserBundle:SellNews')
            ->getAllData();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($news, $request->query->get('page', 1), 20);

        return $this->render('UserBundle:SellNews:SellNews.html.twig',
            array(
                'pagination' => $pagination,
                'pageRequest' => $currentPage,
            )
        );

    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function buyListAction(Request $request)
    {
        $news = $this->getDoctrine()
            ->getRepository('UserBundle:BuyNews')
            ->getNewData($request);

//        $product = $this->getDoctrine()
//            ->getRepository('UserBundle:BuyNews')->getNewData();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($news, $request->query->get('page', 1), 20);
        return $this->render('UserBundle:BuyNews:BuyNews.html.twig',
            array(
                'pagination' => $pagination,
            )
        );
    }

    public function getDataSearchAction(Request $request)
    {
        return $this->indexAction($request);
    }

    public function upBuyNewAction()
    {
        $a = rand(1, 99); // this will get a number between 2 and 9
        $b = rand(1, 99); // this will also get a number between 2 and 9. You can change this according to your wish
        $c = $a + $b;
        $_SESSION['c'] = $c;;
        return $this->render('UserBundle:UpNews:UpBuyNews.html.twig',
            array(
                'a' => $a,
                'b' => $b
            )
        );
    }

    public function upSellNewAction()
    {
        $a = rand(1, 99); // this will get a number between 2 and 9
        $b = rand(1, 99); // this will also get a number between 2 and 9. You can change this according to your wish
        $d = $a + $b;
        $_SESSION['d'] = $d;;

        $brands = $this->getDoctrine()
            ->getRepository('UserBundle:Brands')
            ->findAll();

        return $this->render('UserBundle:UpNews:UpSellNews.html.twig',
            array(
                'a' => $a,
                'b' => $b,
                'brands' => $brands,
            )
        );
    }

    public function upBuyNewConfirmAction(Request $request)
    {
        //up news logic here
//        $newsCode = $request->request->get('code', null);
        $title = $request->request->get('tieude', null);
        $content = $request->request->get('noidung', null);
        $price = $request->request->get('gia', null);
//        $userId = $request->request->get('user_id', null);
        $c = $request->request->get('recaptcha', null);
        $checked = 0;
        $code = 0;
//        echo $newsCode . "<br>";
//        echo $title . "<br>";
//        echo $content . "<br>";
//        echo $price . "<br>";
        if ($this->getUser() == null) {
            $checked = 2;
        } else {
            if ($_SESSION['c'] == $c) {
                $checked = 1;
                do {
                    $code = rand(100000, 999999);
                } while ($this->checkCodeBuyNews($code) != null);

                $news = new BuyNews();
                $news->setCode($code);
                $news->setTitle($title);
                $news->setContent($content);
                $news->setPrice($price);
                $news->setDate(date("d/m/Y"));
                $news->setUserId($this->getUser());
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($news);
                $em->flush();
            }
        }
//        $this->getDoctrine()
//            ->getRepository('UserBundle:BuyNews')->saveData("buy_news","code",$newsCode);
//        $newsCode=$request->request->get('code',null);
        return $this->render('UserBundle:UpNews:UpNewsConfirm.html.twig',
            array(
                'checked' => $checked
            ));
    }

    public function upSellNewConfirmAction(Request $request)
    {

        //up news logic
        $brand = $request->request->get('brand', null);
        $status = $request->request->get('status', null);
        $kind = $request->request->get('kind', null);
        $price = $request->request->get('price', null);
        $year = $request->request->get('year', null);
        $info = $request->request->get('info', null);
        $d = $request->request->get('recaptcha', null);
        $code = 0;
        $checked = 0;
//        echo $brand . "<br>";
//        echo $status . "<br>";
//        echo $kind . "<br>";
//        echo $price . "<br>";
//        echo $year . "<br>";
//        echo $info . "<br>";
//        echo $d . "<br>";
        if ($this->getUser() == null) {
            $checked = 2;
        } else {
            if ($_SESSION['d'] == $d) {
                $_SESSION['d'] = $d + 1;
                $checked = 1;
                do {
                    $code = rand(100000, 999999);
                } while ($this->checkCode($code) != null);

                $news = new SellNews();
                $news->setCode($code);
                $news->setUserId($this->getUser());

                $brandId = $this->getDoctrine()
                    ->getRepository('UserBundle:Brands')
                    ->findOneById($brand);
                $news->setBrandId($brandId);

                $shopId = $this->getDoctrine()
                    ->getRepository('UserBundle:ShopInfo')
                    ->findOneById(0);
                $news->setShopId($shopId);
                $news->setStatus($status);
                $news->setKind($kind);
                $news->setPrice($price);
                $news->setCity($this->getUser()->getCity());
                $news->setImageLink("waiting...");
                $news->setInfo($info);
                $news->setYear($year);
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($news);
                $em->flush();
            }
        }
//        $this->getDoctrine()
//            ->getRepository('UserBundle:BuyNews')->saveData("buy_news","code",$newsCode);
//        $newsCode=$request->request->get('code',null);
        return $this->render('UserBundle:UpNews:UpNewsConfirm.html.twig',
            array(
                'checked' => $checked
            ));
    }

    public function checkCode($code)
    {
        $result = $this->getDoctrine()
            ->getRepository('UserBundle:SellNews')
            ->findOneBy(array(
                'code' => $code
            ));
//        var_dump($result);die;
        return $result;
    }

    public function checkCodeBuyNews($code)
    {
        $result = $this->getDoctrine()
            ->getRepository('UserBundle:BuyNews')
            ->findOneBy(array(
                'code' => $code
            ));
//        var_dump($result);die;
        return $result;
    }

    public function shopListAction(Request $request)
    {

//        $product = $this->getDoctrine()
//            ->getRepository('UserBundle:ShopInfo')->findAll();

        $salons = $this->getDoctrine()
            ->getRepository('UserBundle:ShopInfo')
            ->getDataSearch($request);

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate($salons, $request->query->get('page', 1), 20);
        return $this->render('UserBundle:ShopInfo:ShopInfo.html.twig',
            array(
                'pagination' => $pagination,
            )
        );
    }

    public function shopDetailAction(Request $request)
    {
        $salonId = $request->query->get('salonId');
        $salon = $this->getDoctrine()
            ->getRepository('UserBundle:ShopInfo')->findOneBy(
                array(
                    'id' => $salonId
                ));
        $salonNews = $this->getDoctrine()
            ->getRepository('UserBundle:ShopInfo')->setNewsOfShop($salonId);
//        echo $salonId;
//        var_dump($salonNews);die;
        return $this->render('UserBundle:ShopInfo:ShopDetail.html.twig', array(
            'salon' => $salon,
            'salonNews' => $salonNews
        ));
    }

    public function getDataSearchShopAction(Request $request)
    {
        return $this->shopListAction($request);
    }

    public function getBuySearchAction(Request $request)
    {
        return $this->buyListAction($request);
    }

    public function newsManageAction()
    {
        if($this->getUser()!=null)
        {
            $buyNews=$this->getDoctrine()
                ->getRepository('UserBundle:BuyNews')->getNewsForUser($this->getUser()->getId());
            $sellNews=$this->getDoctrine()
                ->getRepository('UserBundle:SellNews')->getNewsForUser($this->getUser()->getId());
        }
        return $this->render('UserBundle:NewsManage:NewsManage.html.twig', array(
            'sellNews' => $sellNews,
            'buyNews' => $buyNews
        ));
    }
}

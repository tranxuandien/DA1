<?php
/**
 * Created by PhpStorm.
 * User: GOLDENLOTUS
 * Date: 4/28/2016
 * Time: 11:47 AM
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class LuckyController extends Controller
{
    public function apiNumberAction()
    {
        $data=array(
            'lucky_number'=>rand(1,100),

    );
        return new Response(
            json_encode($data),
            200,
            array('Content-Type' => 'application/json')
            );
    }
    public function numberAction($count,$var2 ){
        echo $var2  ;
        $numbers = array();
        for ($i = 0; $i < $count; $i++) {
            $numbers[] = rand(0, 100);
        }
        $numbersList = implode(', ', $numbers);

        return new Response(
            '<html><body>Lucky numbers: '.$numbersList.'</body></html>'
        );
    }
    public function templateAction($count){
//        if(is_null($count))
//        {
//            throw $this->createNotFoundException('Khong co gia tri so luong');
//        }
        $numbers = array();
        for ($i = 0; $i < $count; $i++) {
            $numbers[] = rand(0, 100);
        }
        $numbersList = implode(', ', $numbers);

        return $this->render(
            'lucky/number.html.twig',
            array('luckyNumberList' => $numbersList)
        );
    }
    public function rediAction(){
        $this->addFlash(
            'notice',
            'Your changes were saved!'
        );
        return $this->redirectToRoute(
            'lucky_tem',
            array('count'=>13),
            301);
    }

}
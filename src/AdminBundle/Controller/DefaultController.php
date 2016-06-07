<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        echo "vao duoc trang admin ";
        return $this->render('AdminBundle:Default:index.html.twig');
    }
}

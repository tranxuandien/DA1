<?php

/* header.html.twig */
class __TwigTemplate_5b17f05384c7fece61145b7e44c4cf47170bedf942cc9c647a00ab797e89a198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "header.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<style type=\"text/css\">
    /*header*/
        #header{
            padding-top: 10px;
            padding-bottom: 10px;
            height: 15%;
        }
        .head-left{
            float: left;
            /*width: 150px;*/
            /*height: 100px;*/
        }
        #logo-image{
            width: 150px;
            height: 100px;
        }
        .head-right{
            float: right;
        }
        /*set font text*/
        .head-text{
        }
        /*=======*/

        #bs-example-navbar-collapse-1 {
            text-align: center;
        }
        .table-pos{
            padding-left: 1%;
            padding-right: 1%;
        }
        .table-header{
            font-size: small;
            text-align: center;
        }
        .table-content{
            font-size: small;
            text-align: center;
        }
        .main-info{
            text-align: left;
        }
        .main-contact{
            text-align: left;
        }
        .buy-news{
            font-size: small;
            text-align: center;
        }
        .buy-news-content{
            text-align: left;
        }
        .buy-news-contact{
            text-align: left;
        }
        .info{
            width: 25%;
        }
        .status{
            width: 10%;
        }
        .price{
            width: 5%;
        }
        .city{
            width: 9%;
        }
        .contact{
            width: 20%;
        }
        .pagi-top{
            padding-left: 1%;
        }
        .count{
            padding-left: 1%;
        }
        .table-bordered{
            width: 100%;
        }
        .navbar .navbar-collapse {
            text-align: center;
        }
        /*.main{*/
            /*background-color: #F2F2F2;*/
        /*}*/
        /*.main-left{*/
            /*width: 30%;*/
            /*float: left;*/
        /*}*/
        /*.main-right{*/
            /*background-color: white;*/
            /*margin-top: 10px;*/
            /*margin-bottom: 10px;*/
            /*width: 70%;*/
            /*float: right;*/
        /*}*/
        /*.smbt{*/
            /*display: none;*/
        /*}*/
    </style>
    <div id=\"wrapper\">
        <div id=\"container\">
        <!-- row 1 -->
            <div class=\"container\">
                <div id=\"header\" >
                    <div class=\"head-left\">
                        <img id=\"logo-image\" src=\"http://img.v3.news.zdn.vn/w660/Uploaded/ynssi/2013_12_15/lamborghinivang1.jpg\">
                        <i class=\"head-text\">Thế giới xe cho mọi người</i>
                    </div>
                    <div class=\"head-right\">
                        <ul class=\"nav nav-pills\">
                            ";
        // line 115
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 116
            echo "                                <li role=\"presentation\">
                                <a href=\"#\"> ";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                                <li class=\"presentation\">
                                <a href=\"";
            // line 120
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                    ";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                                </li>
                            ";
        } else {
            // line 125
            echo "                                <li class=\"presentation\">
                                <a href=\"";
            // line 126
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                                <li class=\"presentation\">
                                <a href=\"";
            // line 129
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                            ";
        }
        // line 132
        echo "                            <li role=\"presentation\"><a href=\"#\">Hướng dẫn</a></li>
                            <li role=\"presentation\"><a href=\"#\">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            ";
        // line 139
        echo "            <div class=\"nav-bar\">
                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                            <ul class=\"nav navbar-nav\">
                                <li><a href=\"/home\">Trang chủ </a></li>
                                <li><a href=\"/buy\">Tin cần mua xe</a></li>
                                <li><a href=\"/salon\">Cửa hàng</a></li>
                                <li><a href=\"/sell\">Tin bán xe</a></li>
                                ";
        // line 149
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 150
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("up_buy_news");
            echo "\">Đăng tin mua</a></li>
                                <li><a href=\"";
            // line 151
            echo $this->env->getExtension('routing')->getPath("up_sell_news");
            echo "\">Đăng tin bán</a></li>
                                    ";
        } else {
            // line 153
            echo "                                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Đăng tin mua</a></li>
                                        <li><a href=\"";
            // line 154
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Đăng tin bán</a></li>
                                ";
        }
        // line 156
        echo "                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
            <!-- end row 1 -->  
           </div>
        </div>
";
    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 156,  222 => 154,  217 => 153,  212 => 151,  207 => 150,  205 => 149,  193 => 139,  185 => 132,  177 => 129,  169 => 126,  166 => 125,  159 => 121,  155 => 120,  149 => 117,  146 => 116,  144 => 115,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <style type="text/css">*/
/*     /*header*//* */
/*         #header{*/
/*             padding-top: 10px;*/
/*             padding-bottom: 10px;*/
/*             height: 15%;*/
/*         }*/
/*         .head-left{*/
/*             float: left;*/
/*             /*width: 150px;*//* */
/*             /*height: 100px;*//* */
/*         }*/
/*         #logo-image{*/
/*             width: 150px;*/
/*             height: 100px;*/
/*         }*/
/*         .head-right{*/
/*             float: right;*/
/*         }*/
/*         /*set font text*//* */
/*         .head-text{*/
/*         }*/
/*         /*=======*//* */
/* */
/*         #bs-example-navbar-collapse-1 {*/
/*             text-align: center;*/
/*         }*/
/*         .table-pos{*/
/*             padding-left: 1%;*/
/*             padding-right: 1%;*/
/*         }*/
/*         .table-header{*/
/*             font-size: small;*/
/*             text-align: center;*/
/*         }*/
/*         .table-content{*/
/*             font-size: small;*/
/*             text-align: center;*/
/*         }*/
/*         .main-info{*/
/*             text-align: left;*/
/*         }*/
/*         .main-contact{*/
/*             text-align: left;*/
/*         }*/
/*         .buy-news{*/
/*             font-size: small;*/
/*             text-align: center;*/
/*         }*/
/*         .buy-news-content{*/
/*             text-align: left;*/
/*         }*/
/*         .buy-news-contact{*/
/*             text-align: left;*/
/*         }*/
/*         .info{*/
/*             width: 25%;*/
/*         }*/
/*         .status{*/
/*             width: 10%;*/
/*         }*/
/*         .price{*/
/*             width: 5%;*/
/*         }*/
/*         .city{*/
/*             width: 9%;*/
/*         }*/
/*         .contact{*/
/*             width: 20%;*/
/*         }*/
/*         .pagi-top{*/
/*             padding-left: 1%;*/
/*         }*/
/*         .count{*/
/*             padding-left: 1%;*/
/*         }*/
/*         .table-bordered{*/
/*             width: 100%;*/
/*         }*/
/*         .navbar .navbar-collapse {*/
/*             text-align: center;*/
/*         }*/
/*         /*.main{*//* */
/*             /*background-color: #F2F2F2;*//* */
/*         /*}*//* */
/*         /*.main-left{*//* */
/*             /*width: 30%;*//* */
/*             /*float: left;*//* */
/*         /*}*//* */
/*         /*.main-right{*//* */
/*             /*background-color: white;*//* */
/*             /*margin-top: 10px;*//* */
/*             /*margin-bottom: 10px;*//* */
/*             /*width: 70%;*//* */
/*             /*float: right;*//* */
/*         /*}*//* */
/*         /*.smbt{*//* */
/*             /*display: none;*//* */
/*         /*}*//* */
/*     </style>*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*         <!-- row 1 -->*/
/*             <div class="container">*/
/*                 <div id="header" >*/
/*                     <div class="head-left">*/
/*                         <img id="logo-image" src="http://img.v3.news.zdn.vn/w660/Uploaded/ynssi/2013_12_15/lamborghinivang1.jpg">*/
/*                         <i class="head-text">Thế giới xe cho mọi người</i>*/
/*                     </div>*/
/*                     <div class="head-right">*/
/*                         <ul class="nav nav-pills">*/
/*                             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                 <li role="presentation">*/
/*                                 <a href="#"> {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }}</a>*/
/*                                 </li>*/
/*                                 <li class="presentation">*/
/*                                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                                 </a>*/
/*                                 </li>*/
/*                             {% else %}*/
/*                                 <li class="presentation">*/
/*                                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*                                 </li>*/
/*                                 <li class="presentation">*/
/*                                 <a href="{{ path('fos_user_registration_register') }}">{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}</a>*/
/*                                 </li>*/
/*                             {% endif %}*/
/*                             <li role="presentation"><a href="#">Hướng dẫn</a></li>*/
/*                             <li role="presentation"><a href="#">Liên hệ</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             {#nav bar#}*/
/*             <div class="nav-bar">*/
/*                 <nav class="navbar navbar-default">*/
/*                     <div class="container-fluid">*/
/*                         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                             <ul class="nav navbar-nav">*/
/*                                 <li><a href="/home">Trang chủ </a></li>*/
/*                                 <li><a href="/buy">Tin cần mua xe</a></li>*/
/*                                 <li><a href="/salon">Cửa hàng</a></li>*/
/*                                 <li><a href="/sell">Tin bán xe</a></li>*/
/*                                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                 <li><a href="{{ path('up_buy_news') }}">Đăng tin mua</a></li>*/
/*                                 <li><a href="{{ path('up_sell_news') }}">Đăng tin bán</a></li>*/
/*                                     {% else %}*/
/*                                         <li><a href="{{ path('fos_user_security_login') }}">Đăng tin mua</a></li>*/
/*                                         <li><a href="{{ path('fos_user_security_login') }}">Đăng tin bán</a></li>*/
/*                                 {% endif %}*/
/*                             </ul>*/
/*                         </div><!-- /.navbar-collapse -->*/
/*                     </div><!-- /.container-fluid -->*/
/*                 </nav>*/
/*             </div>*/
/*             <!-- end row 1 -->  */
/*            </div>*/
/*         </div>*/
/* {% endblock %}*/
/* */

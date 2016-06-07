<?php

/* header.html.twig */
class __TwigTemplate_54659b72310fde3e82afe315edeacf22325fcabc4d92aed86b823d991e9b30bc extends Twig_Template
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
        $__internal_77a1a956ec308c7aa50da5313ca1864d0bf17d8e45eead182de220af7f1fd56f = $this->env->getExtension("native_profiler");
        $__internal_77a1a956ec308c7aa50da5313ca1864d0bf17d8e45eead182de220af7f1fd56f->enter($__internal_77a1a956ec308c7aa50da5313ca1864d0bf17d8e45eead182de220af7f1fd56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77a1a956ec308c7aa50da5313ca1864d0bf17d8e45eead182de220af7f1fd56f->leave($__internal_77a1a956ec308c7aa50da5313ca1864d0bf17d8e45eead182de220af7f1fd56f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_168e232c076254cbc878466ff46cd52cdf21c2c19c51ba982dfa7a05bb392a70 = $this->env->getExtension("native_profiler");
        $__internal_168e232c076254cbc878466ff46cd52cdf21c2c19c51ba982dfa7a05bb392a70->enter($__internal_168e232c076254cbc878466ff46cd52cdf21c2c19c51ba982dfa7a05bb392a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
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
                                <li role=\"presentation\"><a href=\"";
            // line 124
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Thông tin cá nhân</a></li>
                                <li role=\"presentation\"><a href=\"";
            // line 125
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Thay đổi thông tin cá nhân</a></li>
                            ";
        } else {
            // line 127
            echo "                                <li class=\"presentation\">
                                <a href=\"";
            // line 128
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                                <li class=\"presentation\">
                                <a href=\"";
            // line 131
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                            ";
        }
        // line 134
        echo "                            <li role=\"presentation\"><a href=\"#\">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            ";
        // line 140
        echo "            <div class=\"nav-bar\">
                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                            <ul class=\"nav navbar-nav\">
                                <li><a href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("main_page");
        echo "\">Trang chủ </a></li>
                                <li><a href=\"";
        // line 147
        echo $this->env->getExtension('routing')->getPath("buy_news");
        echo "\">Tin cần mua xe</a></li>
                                <li><a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("salon_list");
        echo "\">Cửa hàng</a></li>
                                <li><a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("sell_news");
        echo "\">Tin bán xe</a></li>
                                ";
        // line 150
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 151
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("up_buy_news");
            echo "\">Đăng tin mua</a></li>
                                <li><a href=\"";
            // line 152
            echo $this->env->getExtension('routing')->getPath("up_sell_news");
            echo "\">Đăng tin bán</a></li>
                                <li><a href=\"";
            // line 153
            echo $this->env->getExtension('routing')->getPath("news_manage");
            echo "\">Quản lý tin đăng</a></li>
                                    ";
        } else {
            // line 155
            echo "                                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Đăng tin mua</a></li>
                                        <li><a href=\"";
            // line 156
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Đăng tin bán</a></li>
                                ";
        }
        // line 158
        echo "                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
            <!-- end row 1 -->  
           </div>
        </div>
";
        
        $__internal_168e232c076254cbc878466ff46cd52cdf21c2c19c51ba982dfa7a05bb392a70->leave($__internal_168e232c076254cbc878466ff46cd52cdf21c2c19c51ba982dfa7a05bb392a70_prof);

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
        return array (  259 => 158,  254 => 156,  249 => 155,  244 => 153,  240 => 152,  235 => 151,  233 => 150,  229 => 149,  225 => 148,  221 => 147,  217 => 146,  209 => 140,  202 => 134,  194 => 131,  186 => 128,  183 => 127,  178 => 125,  174 => 124,  168 => 121,  164 => 120,  158 => 117,  155 => 116,  153 => 115,  40 => 4,  34 => 3,  11 => 1,);
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
/*                                 <li role="presentation"><a href="{{ path('fos_user_profile_show') }}">Thông tin cá nhân</a></li>*/
/*                                 <li role="presentation"><a href="{{ path('fos_user_profile_edit') }}">Thay đổi thông tin cá nhân</a></li>*/
/*                             {% else %}*/
/*                                 <li class="presentation">*/
/*                                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*                                 </li>*/
/*                                 <li class="presentation">*/
/*                                 <a href="{{ path('fos_user_registration_register') }}">{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}</a>*/
/*                                 </li>*/
/*                             {% endif %}*/
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
/*                                 <li><a href="{{ path('main_page') }}">Trang chủ </a></li>*/
/*                                 <li><a href="{{ path('buy_news') }}">Tin cần mua xe</a></li>*/
/*                                 <li><a href="{{ path('salon_list') }}">Cửa hàng</a></li>*/
/*                                 <li><a href="{{ path('sell_news') }}">Tin bán xe</a></li>*/
/*                                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                                 <li><a href="{{ path('up_buy_news') }}">Đăng tin mua</a></li>*/
/*                                 <li><a href="{{ path('up_sell_news') }}">Đăng tin bán</a></li>*/
/*                                 <li><a href="{{ path('news_manage') }}">Quản lý tin đăng</a></li>*/
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

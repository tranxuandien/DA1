<?php

/* header.html.twig */
class __TwigTemplate_178dcbbf7c58f1121137ea701cd62fd18bc67cc8744fc8749ebf6e917d666fad extends Twig_Template
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
        // line 60
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 61
            echo "                                <li role=\"presentation\">
                                <a href=\"#\"> ";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                                <li class=\"presentation\">
                                <a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                    ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                                </li>
                            ";
        } else {
            // line 70
            echo "                                <li class=\"presentation\">
                                <a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                                <li class=\"presentation\">
                                <a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                            ";
        }
        // line 77
        echo "                                    ";
        // line 78
        echo "                                        ";
        // line 79
        echo "                                    ";
        // line 80
        echo "                                        ";
        // line 81
        echo "                                        ";
        // line 82
        echo "                                    ";
        // line 83
        echo "                            ";
        // line 84
        echo "                            <li role=\"presentation\"><a href=\"#\">Hướng dẫn</a></li>
                            <li role=\"presentation\"><a href=\"#\">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            ";
        // line 91
        echo "            <div class=\"nav-bar\">
                <nav class=\"navbar navbar-default\">
                    <div class=\"container-fluid\">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                            <ul class=\"nav navbar-nav\">
                                <li><a href=\"/home\">Trang chủ </a></li>
                                <li><a href=\"/buy\">Tìm mua xe</a></li>
                                <li><a href=\"#\">Cửa hàng</a></li>
                                <li><a href=\"/sell\">Tin bán xe</a></li>
                            </ul>
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
        return array (  152 => 91,  144 => 84,  142 => 83,  140 => 82,  138 => 81,  136 => 80,  134 => 79,  132 => 78,  130 => 77,  122 => 74,  114 => 71,  111 => 70,  104 => 66,  100 => 65,  94 => 62,  91 => 61,  89 => 60,  31 => 4,  28 => 3,  11 => 1,);
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
/*                                     {#{% if is_granted('ROLE_ADMIN') %}#}*/
/*                                         {#<li><a href="{{ path('logout') }}">Đăng xuất</a></li>#}*/
/*                                     {#{% else %}#}*/
/*                                         {#<li><a href="{{ path('login') }}">Đăng nhập</a></li>#}*/
/*                                         {#<li role="presentation"><a href="#">Đăng kí</a></li>#}*/
/*                                     {#{% endif %}#}*/
/*                             {#<li role="presentation"><a href="#">Đăng nhập</a></li>#}*/
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
/*                                 <li><a href="/buy">Tìm mua xe</a></li>*/
/*                                 <li><a href="#">Cửa hàng</a></li>*/
/*                                 <li><a href="/sell">Tin bán xe</a></li>*/
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

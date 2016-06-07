<?php

/* :default:main.html.twig */
class __TwigTemplate_ce20fcb2ef3b5e8a9b2f7ae2bc37374aadcb66ece1b60c58c13cb0316189d08c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cc4c3f29641152c605b7e10ae4c3d7c37cf4fb391a4a0791f3875ffb4bf25eb = $this->env->getExtension("native_profiler");
        $__internal_8cc4c3f29641152c605b7e10ae4c3d7c37cf4fb391a4a0791f3875ffb4bf25eb->enter($__internal_8cc4c3f29641152c605b7e10ae4c3d7c37cf4fb391a4a0791f3875ffb4bf25eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:main.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8cc4c3f29641152c605b7e10ae4c3d7c37cf4fb391a4a0791f3875ffb4bf25eb->leave($__internal_8cc4c3f29641152c605b7e10ae4c3d7c37cf4fb391a4a0791f3875ffb4bf25eb_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_46a7e9c052313f12601e290415e2999d3bf332bf92c5af630d16cd884fb80b08 = $this->env->getExtension("native_profiler");
        $__internal_46a7e9c052313f12601e290415e2999d3bf332bf92c5af630d16cd884fb80b08->enter($__internal_46a7e9c052313f12601e290415e2999d3bf332bf92c5af630d16cd884fb80b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        .main{
            background-color: #F2F2F2;
        }
        .main-left{
            width: 30%;
            float: left;
        }
        .main-right{
            background-color: white;
            margin-top: 10px;
            margin-bottom: 10px;
            width: 70%;
            float: right;
        }
        .smbt{
            display: none;
        }
        #hightchart{
            width:100%;
            height:400px;
        }
    </style>
    <div id=\"wrapper\">
        <div id=\"container\">
        <!-- row 1 -->
            ";
        // line 57
        echo "                ";
        // line 58
        echo "                    ";
        // line 59
        echo "                        ";
        // line 60
        echo "                        ";
        // line 61
        echo "                    ";
        // line 62
        echo "                    ";
        // line 63
        echo "                        ";
        // line 64
        echo "                            ";
        // line 65
        echo "                            ";
        // line 66
        echo "                            ";
        // line 67
        echo "                            ";
        // line 68
        echo "                        ";
        // line 69
        echo "                    ";
        // line 70
        echo "                ";
        // line 71
        echo "            ";
        // line 72
        echo "            ";
        // line 73
        echo "            ";
        // line 74
        echo "                ";
        // line 75
        echo "                    ";
        // line 76
        echo "                        ";
        // line 77
        echo "                        ";
        // line 78
        echo "                            ";
        // line 79
        echo "                                ";
        // line 80
        echo "                                ";
        // line 81
        echo "                                ";
        // line 82
        echo "                                ";
        // line 83
        echo "                            ";
        // line 84
        echo "                        ";
        // line 85
        echo "                    ";
        // line 86
        echo "                ";
        // line 87
        echo "            ";
        // line 88
        echo "            ";
        $this->loadTemplate("header.html.twig", ":default:main.html.twig", 88)->display($context);
        // line 89
        echo "            <!-- end row 1 -->  
            <div class=\"row main\">
                <div class=\"main-left\">
                    <div class=\"brands\">
                        <ul>
                            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["pagi"]) {
            // line 95
            echo "                            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagi"], "name", array()), "html", null, true);
            echo "</li>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                        </ul>
                        <div class=\"navigation\">
                            ";
        // line 100
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"main-right\">
                    <label><input type=\"checkbox\">ファイル名</input></label> <label><input type=\"checkbox\">ファイル説明</input></label> <label><input class=\"form-control\" type=\"text\" placeholder=\"Nhập thông tin cần tìm kiếm\"></input></label><label><button class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\"></span> Search</button></label>
                    営業TR　>　あるある
                    <br><br>
                    <div class=\"panel-heading\" style=\"background-color: #F2F2F2\">営業チーム</div>
                    <br><br>
                    <table class=\"table .info .table-striped\">
                        <thead>
                            <tr>
                                <th>ファイル説明</th>
                                <th>最終更新</th>
                                <th>col3</th>
                                <th>col4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class=\"info\">
                                <td><span class=\"glyphicon glyphicon-folder-close\"></span>col1<br>営業TR　>　あるある</td>
                                <td>1/12/2010</td>
                                <td>col3</td>
                                <td>col4</td>
                            </tr>
                            <tr>
                                <td>col1</td>
                                <td>col2</td>
                                <td>col3</td>
                                <td>col4</td>
                            </tr>
                            <tr class=\"info\">
                                <td>col1</td>
                                <td>col2</td>
                                <td>col3</td>
                                <td>col4</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <button class=\"btn btn-warning\">test</button>            
        </div>
    </div>
";
        
        $__internal_46a7e9c052313f12601e290415e2999d3bf332bf92c5af630d16cd884fb80b08->leave($__internal_46a7e9c052313f12601e290415e2999d3bf332bf92c5af630d16cd884fb80b08_prof);

    }

    public function getTemplateName()
    {
        return ":default:main.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  182 => 100,  178 => 98,  168 => 95,  164 => 94,  157 => 89,  154 => 88,  152 => 87,  150 => 86,  148 => 85,  146 => 84,  144 => 83,  142 => 82,  140 => 81,  138 => 80,  136 => 79,  134 => 78,  132 => 77,  130 => 76,  128 => 75,  126 => 74,  124 => 73,  122 => 72,  120 => 71,  118 => 70,  116 => 69,  114 => 68,  112 => 67,  110 => 66,  108 => 65,  106 => 64,  104 => 63,  102 => 62,  100 => 61,  98 => 60,  96 => 59,  94 => 58,  92 => 57,  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {#{% extends 'base.html.twig' %}#}*/
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
/*         .main{*/
/*             background-color: #F2F2F2;*/
/*         }*/
/*         .main-left{*/
/*             width: 30%;*/
/*             float: left;*/
/*         }*/
/*         .main-right{*/
/*             background-color: white;*/
/*             margin-top: 10px;*/
/*             margin-bottom: 10px;*/
/*             width: 70%;*/
/*             float: right;*/
/*         }*/
/*         .smbt{*/
/*             display: none;*/
/*         }*/
/*         #hightchart{*/
/*             width:100%;*/
/*             height:400px;*/
/*         }*/
/*     </style>*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*         <!-- row 1 -->*/
/*             {#<div class="container">#}*/
/*                 {#<div id="header" >#}*/
/*                     {#<div class="head-left">#}*/
/*                         {#<img id="logo-image" src="http://img.v3.news.zdn.vn/w660/Uploaded/ynssi/2013_12_15/lamborghinivang1.jpg">#}*/
/*                         {#<i class="head-text">Thế giới xe cho mọi người</i>#}*/
/*                     {#</div>#}*/
/*                     {#<div class="head-right">#}*/
/*                         {#<ul class="nav nav-pills">#}*/
/*                             {#<li role="presentation"><a href="#">Đăng nhập</a></li>#}*/
/*                             {#<li role="presentation"><a href="#">Đăng kí</a></li>#}*/
/*                             {#<li role="presentation"><a href="#">Hướng dẫn</a></li>#}*/
/*                             {#<li role="presentation"><a href="#">Liên hệ</a></li>#}*/
/*                         {#</ul>#}*/
/*                     {#</div>#}*/
/*                 {#</div>#}*/
/*             {#</div>#}*/
/*             {#nav bar#}*/
/*             {#<div class="nav-bar">#}*/
/*                 {#<nav class="navbar navbar-default">#}*/
/*                     {#<div class="container-fluid">#}*/
/*                         {#<!-- Collect the nav links, forms, and other content for toggling -->#}*/
/*                         {#<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">#}*/
/*                             {#<ul class="nav navbar-nav">#}*/
/*                                 {#<li><a href="#">Trang chủ </a></li>#}*/
/*                                 {#<li><a href="/buy">Tìm mua xe</a></li>#}*/
/*                                 {#<li><a href="#">Cửa hàng</a></li>#}*/
/*                                 {#<li><a href="/sell">Tin bán xe</a></li>#}*/
/*                             {#</ul>#}*/
/*                         {#</div><!-- /.navbar-collapse -->#}*/
/*                     {#</div><!-- /.container-fluid -->#}*/
/*                 {#</nav>#}*/
/*             {#</div>#}*/
/*             {% include('header.html.twig') %}*/
/*             <!-- end row 1 -->  */
/*             <div class="row main">*/
/*                 <div class="main-left">*/
/*                     <div class="brands">*/
/*                         <ul>*/
/*                             {% for pagi in pagination %}*/
/*                             <li>{{ pagi.name }}</li>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                         <div class="navigation">*/
/*                             {{ knp_pagination_render(pagination) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="main-right">*/
/*                     <label><input type="checkbox">ファイル名</input></label> <label><input type="checkbox">ファイル説明</input></label> <label><input class="form-control" type="text" placeholder="Nhập thông tin cần tìm kiếm"></input></label><label><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></label>*/
/*                     営業TR　>　あるある*/
/*                     <br><br>*/
/*                     <div class="panel-heading" style="background-color: #F2F2F2">営業チーム</div>*/
/*                     <br><br>*/
/*                     <table class="table .info .table-striped">*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th>ファイル説明</th>*/
/*                                 <th>最終更新</th>*/
/*                                 <th>col3</th>*/
/*                                 <th>col4</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             <tr class="info">*/
/*                                 <td><span class="glyphicon glyphicon-folder-close"></span>col1<br>営業TR　>　あるある</td>*/
/*                                 <td>1/12/2010</td>*/
/*                                 <td>col3</td>*/
/*                                 <td>col4</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <td>col1</td>*/
/*                                 <td>col2</td>*/
/*                                 <td>col3</td>*/
/*                                 <td>col4</td>*/
/*                             </tr>*/
/*                             <tr class="info">*/
/*                                 <td>col1</td>*/
/*                                 <td>col2</td>*/
/*                                 <td>col3</td>*/
/*                                 <td>col4</td>*/
/*                             </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         <button class="btn btn-warning">test</button>            */
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

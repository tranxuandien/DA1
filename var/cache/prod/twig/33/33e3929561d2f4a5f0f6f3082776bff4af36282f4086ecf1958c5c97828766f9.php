<?php

/* UserBundle:main:main.html.twig */
class __TwigTemplate_ac77ab221d5111a269f37cc504f637783813775c0f6f4573484d71ce229a391f extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <style type=\"text/css\">
        .main{
        background-color: #F2F2F2;
        }
        .main-left{
        width: 19%;
        float: left;
            /*padding-left: 1%;*/
            /*padding-right: 1%;*/
            /*margin-left: 1%;*/
            margin-right: 1%;
        }
        .pagination-part{
            padding-left: 4%;
        }
        .main-center{
        background-color: white;
        /*margin-top: 10px;*/
        margin-bottom: 10px;
        width: 60%;
            float: left;
        }
        .main-right{
            width: 19%;
            float: right;
            /*padding-left: 1%;*/
            /*padding-right: 1%;*/
            margin-left: 1%;
            /*margin-right: 1%;*/
        }
        .panel-heading{
            text-align: center;
        }
        #container{
            overflow: auto;
        }
    </style>
    <div id=\"wrapper\">
        <div id=\"container\">
            ";
        // line 44
        echo "            ";
        $this->loadTemplate("header.html.twig", "UserBundle:main:main.html.twig", 44)->display($context);
        // line 45
        echo "            ";
        // line 46
        echo "<div id=\"wrapper\">
    <div class=\"container\">
            <div class=\"row main\">
                <div class=\"main-left\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">Hãng xe</div>
                        <div class=\"brands\">
                            <ul>
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["pagi"]) {
            // line 55
            echo "                                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pagi"], "name", array()), "html", null, true);
            echo "</li>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                            </ul>
                            <div class=\"navigation pagination-part\">
                                ";
        // line 60
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"main-center\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">Hệ thống thông tin mua bán lớn nhất Vn</div>
                    <label><input type=\"checkbox\">フ ァイル名</input></label> <label><input type=\"checkbox\">ファイル説明</input></label> <label><input class=\"form-control\" type=\"text\" placeholder=\"Nhập thông tin cần tìm kiếm\"></input></label><label><button class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\"></span> Search</button></label>
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
                <div class=\"main-right\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-heading\">Liên hệ</div>
                        </div>
                </div>
            </div>
    </div>
</div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "UserBundle:main:main.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 60,  99 => 58,  89 => 55,  85 => 54,  75 => 46,  73 => 45,  70 => 44,  29 => 4,  23 => 3,  20 => 2,);
    }
}
/* {#{% extends 'base.html.twig' %}#}*/
/* */
/* {% block body %}*/
/*     <style type="text/css">*/
/*         .main{*/
/*         background-color: #F2F2F2;*/
/*         }*/
/*         .main-left{*/
/*         width: 19%;*/
/*         float: left;*/
/*             /*padding-left: 1%;*//* */
/*             /*padding-right: 1%;*//* */
/*             /*margin-left: 1%;*//* */
/*             margin-right: 1%;*/
/*         }*/
/*         .pagination-part{*/
/*             padding-left: 4%;*/
/*         }*/
/*         .main-center{*/
/*         background-color: white;*/
/*         /*margin-top: 10px;*//* */
/*         margin-bottom: 10px;*/
/*         width: 60%;*/
/*             float: left;*/
/*         }*/
/*         .main-right{*/
/*             width: 19%;*/
/*             float: right;*/
/*             /*padding-left: 1%;*//* */
/*             /*padding-right: 1%;*//* */
/*             margin-left: 1%;*/
/*             /*margin-right: 1%;*//* */
/*         }*/
/*         .panel-heading{*/
/*             text-align: center;*/
/*         }*/
/*         #container{*/
/*             overflow: auto;*/
/*         }*/
/*     </style>*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             {#header#}*/
/*             {% include('header.html.twig') %}*/
/*             {#end header#}*/
/* <div id="wrapper">*/
/*     <div class="container">*/
/*             <div class="row main">*/
/*                 <div class="main-left">*/
/*                     <div class="panel panel-info">*/
/*                         <div class="panel-heading">Hãng xe</div>*/
/*                         <div class="brands">*/
/*                             <ul>*/
/*                                 {% for pagi in pagination %}*/
/*                                 <li>{{ pagi.name }}</li>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                             <div class="navigation pagination-part">*/
/*                                 {{ knp_pagination_render(pagination) }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="main-center">*/
/*                     <div class="panel panel-info">*/
/*                         <div class="panel-heading">Hệ thống thông tin mua bán lớn nhất Vn</div>*/
/*                     <label><input type="checkbox">フ ァイル名</input></label> <label><input type="checkbox">ファイル説明</input></label> <label><input class="form-control" type="text" placeholder="Nhập thông tin cần tìm kiếm"></input></label><label><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Search</button></label>*/
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
/*                     </div>*/
/*                 </div>*/
/*                 <div class="main-right">*/
/*                     <div class="panel panel-info">*/
/*                         <div class="panel-heading">Liên hệ</div>*/
/*                         </div>*/
/*                 </div>*/
/*             </div>*/
/*     </div>*/
/* </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

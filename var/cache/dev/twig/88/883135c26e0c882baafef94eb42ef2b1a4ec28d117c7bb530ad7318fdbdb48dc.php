<?php

/* @User/ShopInfo/ShopDetail.html.twig */
class __TwigTemplate_5b4ad21c4a5817045dbc311ce8d57377f2b5927b38f1ecbc402b463aefe652f2 extends Twig_Template
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
        $__internal_583fcae40a6f4135a235e60a12edb5607ae491e0958d8a2844a2322a0f8cad67 = $this->env->getExtension("native_profiler");
        $__internal_583fcae40a6f4135a235e60a12edb5607ae491e0958d8a2844a2322a0f8cad67->enter($__internal_583fcae40a6f4135a235e60a12edb5607ae491e0958d8a2844a2322a0f8cad67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/ShopInfo/ShopDetail.html.twig"));

        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_583fcae40a6f4135a235e60a12edb5607ae491e0958d8a2844a2322a0f8cad67->leave($__internal_583fcae40a6f4135a235e60a12edb5607ae491e0958d8a2844a2322a0f8cad67_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_bf508c5c09e08818762bb4bc1247c74c14c3e4dc7f3a776e3877131b6236725b = $this->env->getExtension("native_profiler");
        $__internal_bf508c5c09e08818762bb4bc1247c74c14c3e4dc7f3a776e3877131b6236725b->enter($__internal_bf508c5c09e08818762bb4bc1247c74c14c3e4dc7f3a776e3877131b6236725b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            ";
        // line 5
        $this->loadTemplate("header.html.twig", "@User/ShopInfo/ShopDetail.html.twig", 5)->display($context);
        // line 6
        echo "            <div id=\"wrapper\">
                <div class=\"container\">
                    <div class=\"shop-info\">
                        <div class=\"panel panel-primary panel-config\">
                            <div class=\"panel-heading\"><h4>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salon"]) ? $context["salon"] : $this->getContext($context, "salon")), "name", array()), "html", null, true);
        echo "</h4></div>
                            <label>Địa chỉ:</label> ";
        // line 11
        echo $this->getAttribute((isset($context["salon"]) ? $context["salon"] : $this->getContext($context, "salon")), "address", array());
        echo "
                            <div>";
        // line 12
        echo $this->getAttribute((isset($context["salon"]) ? $context["salon"] : $this->getContext($context, "salon")), "about", array());
        echo "
                            </div>
                        </div>
                        <div class=\"shop-image\"></div>
                        <div class=\"shop-news\">
                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading\">Danh sách các tin bán của ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["salon"]) ? $context["salon"] : $this->getContext($context, "salon")), "name", array()), "html", null, true);
        echo "</div>
                                <table class=\"table-responsive table-striped table-bordered\">
                                    ";
        // line 20
        if (((isset($context["salonNews"]) ? $context["salonNews"] : $this->getContext($context, "salonNews")) != null)) {
            // line 21
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["salonNews"]) ? $context["salonNews"] : $this->getContext($context, "salonNews")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 22
                echo "                                            <tr>
                                                <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "code", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 24
                echo $this->getAttribute($context["article"], "imageLink", array());
                echo "</td>
                                                <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "status", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "info", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "price", array()), "html", null, true);
                echo "</td>
                                                ";
                // line 28
                if (($this->getAttribute($this->getAttribute($context["article"], "shopId", array()), "id", array()) == 0)) {
                    // line 29
                    echo "                                                    <td><b>Liên hệ:</b><br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "username", array()), "html", null, true);
                    echo "<br><b>Địa
                                                            chỉ:</b><br>";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "address", array()), "html", null, true);
                    echo "<br><b>ĐT:</b><br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "phone", array()), "html", null, true);
                    echo "<br>
                                                    </td>
                                                    <td>";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "city", array()), "html", null, true);
                    echo "</td>
                                                ";
                } else {
                    // line 34
                    echo "                                                    <td><b>Liên hệ:</b><br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "shopId", array()), "name", array()), "html", null, true);
                    echo "<br><b>Địa
                                                            chỉ:</b><br>";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "shopId", array()), "address", array()), "html", null, true);
                    echo "<br><b>ĐT:</b><br>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "shopId", array()), "phone", array()), "html", null, true);
                    echo "<br>
                                                    </td>
                                                    <td></td>
                                                ";
                }
                // line 39
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                                    ";
        }
        // line 42
        echo "                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_bf508c5c09e08818762bb4bc1247c74c14c3e4dc7f3a776e3877131b6236725b->leave($__internal_bf508c5c09e08818762bb4bc1247c74c14c3e4dc7f3a776e3877131b6236725b_prof);

    }

    public function getTemplateName()
    {
        return "@User/ShopInfo/ShopDetail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  142 => 42,  139 => 41,  132 => 39,  123 => 35,  118 => 34,  113 => 32,  106 => 30,  101 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  83 => 24,  79 => 23,  76 => 22,  71 => 21,  69 => 20,  64 => 18,  55 => 12,  51 => 11,  47 => 10,  41 => 6,  39 => 5,  35 => 3,  23 => 2,);
    }
}
/* {#{% extends 'base.html.twig' %}#}*/
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             {% include('header.html.twig') %}*/
/*             <div id="wrapper">*/
/*                 <div class="container">*/
/*                     <div class="shop-info">*/
/*                         <div class="panel panel-primary panel-config">*/
/*                             <div class="panel-heading"><h4>{{ salon.name }}</h4></div>*/
/*                             <label>Địa chỉ:</label> {{ salon.address|raw }}*/
/*                             <div>{{ salon.about|raw }}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="shop-image"></div>*/
/*                         <div class="shop-news">*/
/*                             <div class="panel panel-primary">*/
/*                                 <div class="panel-heading">Danh sách các tin bán của {{ salon.name }}</div>*/
/*                                 <table class="table-responsive table-striped table-bordered">*/
/*                                     {% if salonNews != null %}*/
/*                                         {% for article in salonNews %}*/
/*                                             <tr>*/
/*                                                 <td>{{ article.code }}</td>*/
/*                                                 <td>{{ article.imageLink|raw }}</td>*/
/*                                                 <td>{{ article.status }}</td>*/
/*                                                 <td>{{ article.info }}</td>*/
/*                                                 <td>{{ article.price }}</td>*/
/*                                                 {% if article.shopId.id == 0 %}*/
/*                                                     <td><b>Liên hệ:</b><br>{{ article.userId.username }}<br><b>Địa*/
/*                                                             chỉ:</b><br>{{ article.userId.address }}<br><b>ĐT:</b><br>{{ article.userId.phone }}<br>*/
/*                                                     </td>*/
/*                                                     <td>{{ article.city }}</td>*/
/*                                                 {% else %}*/
/*                                                     <td><b>Liên hệ:</b><br>{{ article.shopId.name }}<br><b>Địa*/
/*                                                             chỉ:</b><br>{{ article.shopId.address }}<br><b>ĐT:</b><br>{{ article.shopId.phone }}<br>*/
/*                                                     </td>*/
/*                                                     <td></td>*/
/*                                                 {% endif %}*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/*                                     {% endif %}*/
/*                                 </table>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/

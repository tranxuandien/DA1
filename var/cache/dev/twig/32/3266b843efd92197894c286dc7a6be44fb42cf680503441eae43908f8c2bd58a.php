<?php

/* UserBundle:NewsManage:NewsManage.html.twig */
class __TwigTemplate_da67d55b9a46bb7012f3fb2c8a17ac88b156301251240845a4e71039d501471c extends Twig_Template
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
        $__internal_8be616fc03200aad18597a77409bf344cd44f0e8a811ea3db0f10f11fd3786dc = $this->env->getExtension("native_profiler");
        $__internal_8be616fc03200aad18597a77409bf344cd44f0e8a811ea3db0f10f11fd3786dc->enter($__internal_8be616fc03200aad18597a77409bf344cd44f0e8a811ea3db0f10f11fd3786dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:NewsManage:NewsManage.html.twig"));

        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8be616fc03200aad18597a77409bf344cd44f0e8a811ea3db0f10f11fd3786dc->leave($__internal_8be616fc03200aad18597a77409bf344cd44f0e8a811ea3db0f10f11fd3786dc_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_e7d3e3ce6c730fa3efbdf83fbd99f37633bbd8aef1e582370764f88cb973f64f = $this->env->getExtension("native_profiler");
        $__internal_e7d3e3ce6c730fa3efbdf83fbd99f37633bbd8aef1e582370764f88cb973f64f->enter($__internal_e7d3e3ce6c730fa3efbdf83fbd99f37633bbd8aef1e582370764f88cb973f64f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            ";
        // line 5
        $this->loadTemplate("header.html.twig", "UserBundle:NewsManage:NewsManage.html.twig", 5)->display($context);
        // line 6
        echo "            <div id=\"wrapper\">
                <div class=\"container\">
                    <div class=\"shop-info\">
                        ";
        // line 10
        echo "                            ";
        // line 11
        echo "                            ";
        // line 12
        echo "                            ";
        // line 13
        echo "                            ";
        // line 14
        echo "                        ";
        // line 15
        echo "                        ";
        // line 16
        echo "                        <div class=\"shop-news\">
                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading\">Danh sách các tin mua bạn đã đăng </div>
                                <table class=\"table-responsive table-striped table-bordered\">
                                    ";
        // line 20
        if (((isset($context["buyNews"]) ? $context["buyNews"] : $this->getContext($context, "buyNews")) != null)) {
            // line 21
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["buyNews"]) ? $context["buyNews"] : $this->getContext($context, "buyNews")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 22
                echo "                                            <tr>
                                                <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "code", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
                echo "</td>
                                                ";
                // line 27
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "price", array()), "html", null, true);
                echo "</td>
                                                ";
                // line 29
                echo "                                                    ";
                // line 30
                echo "                                                            ";
                // line 31
                echo "                                                    ";
                // line 32
                echo "                                                    ";
                // line 33
                echo "                                                ";
                // line 34
                echo "                                                    ";
                // line 35
                echo "                                                            ";
                // line 36
                echo "                                                    ";
                // line 37
                echo "                                                    ";
                // line 38
                echo "                                                ";
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
                            <div class=\"panel panel-primary\">
                                <div class=\"panel-heading\">Danh sách các tin bán bạn đã đăng </div>
                                <table class=\"table-responsive table-striped table-bordered\">
                                    ";
        // line 47
        if (((isset($context["sellNews"]) ? $context["sellNews"] : $this->getContext($context, "sellNews")) != null)) {
            // line 48
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sellNews"]) ? $context["sellNews"] : $this->getContext($context, "sellNews")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 49
                echo "                                            <tr>
                                                <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "code", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "status", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "info", array()), "html", null, true);
                echo "</td>
                                                ";
                // line 54
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "price", array()), "html", null, true);
                echo "</td>
                                                ";
                // line 56
                echo "                                                ";
                // line 57
                echo "                                                ";
                // line 58
                echo "                                                ";
                // line 59
                echo "                                                ";
                // line 60
                echo "                                                ";
                // line 61
                echo "                                                ";
                // line 62
                echo "                                                ";
                // line 63
                echo "                                                ";
                // line 64
                echo "                                                ";
                // line 65
                echo "                                                ";
                // line 66
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                                    ";
        }
        // line 69
        echo "                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_e7d3e3ce6c730fa3efbdf83fbd99f37633bbd8aef1e582370764f88cb973f64f->leave($__internal_e7d3e3ce6c730fa3efbdf83fbd99f37633bbd8aef1e582370764f88cb973f64f_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:NewsManage:NewsManage.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  185 => 69,  182 => 68,  175 => 66,  173 => 65,  171 => 64,  169 => 63,  167 => 62,  165 => 61,  163 => 60,  161 => 59,  159 => 58,  157 => 57,  155 => 56,  150 => 54,  146 => 52,  142 => 51,  138 => 50,  135 => 49,  130 => 48,  128 => 47,  121 => 42,  118 => 41,  111 => 39,  109 => 38,  107 => 37,  105 => 36,  103 => 35,  101 => 34,  99 => 33,  97 => 32,  95 => 31,  93 => 30,  91 => 29,  86 => 27,  82 => 25,  78 => 24,  74 => 23,  71 => 22,  66 => 21,  64 => 20,  58 => 16,  56 => 15,  54 => 14,  52 => 13,  50 => 12,  48 => 11,  46 => 10,  41 => 6,  39 => 5,  35 => 3,  23 => 2,);
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
/*                         {#<div class="panel panel-primary panel-config">#}*/
/*                             {#<div class="panel-heading"><h4>{{ salon.name }}</h4></div>#}*/
/*                             {#<label>Địa chỉ:</label> {{ salon.address|raw }}#}*/
/*                             {#<div>{{ salon.about|raw }}#}*/
/*                             {#</div>#}*/
/*                         {#</div>#}*/
/*                         {#<div class="shop-image"></div>#}*/
/*                         <div class="shop-news">*/
/*                             <div class="panel panel-primary">*/
/*                                 <div class="panel-heading">Danh sách các tin mua bạn đã đăng </div>*/
/*                                 <table class="table-responsive table-striped table-bordered">*/
/*                                     {% if buyNews != null %}*/
/*                                         {% for article in buyNews %}*/
/*                                             <tr>*/
/*                                                 <td>{{ article.code }}</td>*/
/*                                                 <td>{{ article.title }}</td>*/
/*                                                 <td>{{ article.content }}</td>*/
/*                                                 {#<td>{{ article.info }}</td>#}*/
/*                                                 <td>{{ article.price }}</td>*/
/*                                                 {#{% if article.shopId.id == 0 %}#}*/
/*                                                     {#<td><b>Liên hệ:</b><br>{{ article.userId.username }}<br><b>Địa#}*/
/*                                                             {#chỉ:</b><br>{{ article.userId.address }}<br><b>ĐT:</b><br>{{ article.userId.phone }}<br>#}*/
/*                                                     {#</td>#}*/
/*                                                     {#<td>{{ article.city }}</td>#}*/
/*                                                 {#{% else %}#}*/
/*                                                     {#<td><b>Liên hệ:</b><br>{{ article.shopId.name }}<br><b>Địa#}*/
/*                                                             {#chỉ:</b><br>{{ article.shopId.address }}<br><b>ĐT:</b><br>{{ article.shopId.phone }}<br>#}*/
/*                                                     {#</td>#}*/
/*                                                     {#<td></td>#}*/
/*                                                 {#{% endif %}#}*/
/*                                             </tr>*/
/*                                         {% endfor %}*/
/*                                     {% endif %}*/
/*                                 </table>*/
/*                             </div>*/
/*                             <div class="panel panel-primary">*/
/*                                 <div class="panel-heading">Danh sách các tin bán bạn đã đăng </div>*/
/*                                 <table class="table-responsive table-striped table-bordered">*/
/*                                     {% if sellNews != null %}*/
/*                                         {% for article in sellNews %}*/
/*                                             <tr>*/
/*                                                 <td>{{ article.code }}</td>*/
/*                                                 <td>{{ article.status }}</td>*/
/*                                                 <td>{{ article.info }}</td>*/
/*                                                 {#<td>{{ article.info }}</td>#}*/
/*                                                 <td>{{ article.price }}</td>*/
/*                                                 {#{% if article.shopId.id == 0 %}#}*/
/*                                                 {#<td><b>Liên hệ:</b><br>{{ article.userId.username }}<br><b>Địa#}*/
/*                                                 {#chỉ:</b><br>{{ article.userId.address }}<br><b>ĐT:</b><br>{{ article.userId.phone }}<br>#}*/
/*                                                 {#</td>#}*/
/*                                                 {#<td>{{ article.city }}</td>#}*/
/*                                                 {#{% else %}#}*/
/*                                                 {#<td><b>Liên hệ:</b><br>{{ article.shopId.name }}<br><b>Địa#}*/
/*                                                 {#chỉ:</b><br>{{ article.shopId.address }}<br><b>ĐT:</b><br>{{ article.shopId.phone }}<br>#}*/
/*                                                 {#</td>#}*/
/*                                                 {#<td></td>#}*/
/*                                                 {#{% endif %}#}*/
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

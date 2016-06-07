<?php

/* @User/SellNews/SellNews.html.twig */
class __TwigTemplate_ea980d0b3d8b358cdf383801f59592e8b571da8b63dc02067f61357e6188e558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@User/SellNews/SellNews.html.twig", 1);
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
        $__internal_60f756b0fc6cd60a3db464400d1d3987e76dfc1015065cb456a9700263b9a8b6 = $this->env->getExtension("native_profiler");
        $__internal_60f756b0fc6cd60a3db464400d1d3987e76dfc1015065cb456a9700263b9a8b6->enter($__internal_60f756b0fc6cd60a3db464400d1d3987e76dfc1015065cb456a9700263b9a8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/SellNews/SellNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60f756b0fc6cd60a3db464400d1d3987e76dfc1015065cb456a9700263b9a8b6->leave($__internal_60f756b0fc6cd60a3db464400d1d3987e76dfc1015065cb456a9700263b9a8b6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad36567a8e553e4d1226ee8c4039e87c645c452ef796f0153a125cc8d8cf918b = $this->env->getExtension("native_profiler");
        $__internal_ad36567a8e553e4d1226ee8c4039e87c645c452ef796f0153a125cc8d8cf918b->enter($__internal_ad36567a8e553e4d1226ee8c4039e87c645c452ef796f0153a125cc8d8cf918b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div id=\"wrapper\">
    <div id=\"container\">
        ";
        // line 5
        $this->loadTemplate("header.html.twig", "@User/SellNews/SellNews.html.twig", 5)->display($context);
        // line 6
        echo "        <div id=\"wrapper\">
            <div class=\"container\">
                <div class=\"navigation\">
                    ";
        // line 9
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
                <div class=\"count\">
                    <i>
                        Trang";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["pageRequest"]) ? $context["pageRequest"] : $this->getContext($context, "pageRequest")), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "pageCount", array()), "html", null, true);
        echo " (Tổng ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " tin
                        mua).
                    </i>
                </div>
                <table class=\"table-responsive table-striped table-bordered\">
                    <tr>
                        ";
        // line 20
        echo "                        <th>";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Mã Tin", "a.Id");
        echo "</th>
                        <th>";
        // line 21
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Hình ảnh", "a.Id");
        echo "</th>
                        <th>";
        // line 22
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Trạng thái", "a.Id");
        echo "</th>
                        <th>";
        // line 23
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Chi tiết", "a.Id");
        echo "</th>
                        <th>";
        // line 24
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Giá", "a.Id");
        echo "</th>
                        <th>";
        // line 25
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Liên hệ", "a.Id");
        echo "</th>
                        <th>";
        // line 26
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Tỉnh", "a.Id");
        echo "</th>
                    </tr>

                    ";
        // line 30
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 31
            echo "                        <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "code", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo $this->getAttribute($context["article"], "imageLink", array());
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "status", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "info", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "price", array()), "html", null, true);
            echo "</td>
                            ";
            // line 37
            if (($this->getAttribute($this->getAttribute($context["article"], "shopId", array()), "id", array()) == 0)) {
                // line 38
                echo "                                <td><b>Liên hệ:</b><br>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "username", array()), "html", null, true);
                echo "<br><b>Địa
                                        chỉ:</b><br>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "address", array()), "html", null, true);
                echo "
                                    <br><b>ĐT:</b><br>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "phone", array()), "html", null, true);
                echo "<br>
                                </td>
                                <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "city", array()), "html", null, true);
                echo "</td>
                            ";
            } else {
                // line 44
                echo "                                <td><b>Liên hệ:</b><br>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "shopId", array()), "name", array()), "html", null, true);
                echo "<br><b>Địa
                                        chỉ:</b><br>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "shopId", array()), "address", array()), "html", null, true);
                echo "
                                    <br><b>ĐT:</b><br>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "shopId", array()), "phone", array()), "html", null, true);
                echo "<br>
                                </td>
                                <td></td>
                            ";
            }
            // line 50
            echo "                        </tr>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                </table>
                ";
        // line 54
        echo "                <div class=\"navigation\">
                    ";
        // line 55
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                </div>
                ";
        // line 58
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_ad36567a8e553e4d1226ee8c4039e87c645c452ef796f0153a125cc8d8cf918b->leave($__internal_ad36567a8e553e4d1226ee8c4039e87c645c452ef796f0153a125cc8d8cf918b_prof);

    }

    public function getTemplateName()
    {
        return "@User/SellNews/SellNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 58,  205 => 55,  202 => 54,  199 => 52,  184 => 50,  177 => 46,  173 => 45,  168 => 44,  163 => 42,  158 => 40,  154 => 39,  149 => 38,  147 => 37,  143 => 36,  139 => 35,  135 => 34,  131 => 33,  127 => 32,  120 => 31,  102 => 30,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  71 => 20,  58 => 13,  51 => 9,  46 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     <div id="wrapper">*/
/*     <div id="container">*/
/*         {% include('header.html.twig') %}*/
/*         <div id="wrapper">*/
/*             <div class="container">*/
/*                 <div class="navigation">*/
/*                     {{ knp_pagination_render(pagination) }}*/
/*                 </div>*/
/*                 <div class="count">*/
/*                     <i>*/
/*                         Trang{{ pageRequest }}/{{ pagination.pageCount }} (Tổng {{ pagination.getTotalItemCount }} tin*/
/*                         mua).*/
/*                     </i>*/
/*                 </div>*/
/*                 <table class="table-responsive table-striped table-bordered">*/
/*                     <tr>*/
/*                         {# sorting of properties based on query components #}*/
/*                         <th>{{ knp_pagination_sortable(pagination, 'Mã Tin', 'a.Id') }}</th>*/
/*                         <th>{{ knp_pagination_sortable(pagination, 'Hình ảnh', 'a.Id') }}</th>*/
/*                         <th>{{ knp_pagination_sortable(pagination, 'Trạng thái', 'a.Id') }}</th>*/
/*                         <th>{{ knp_pagination_sortable(pagination, 'Chi tiết', 'a.Id') }}</th>*/
/*                         <th>{{ knp_pagination_sortable(pagination, 'Giá', 'a.Id') }}</th>*/
/*                         <th>{{ knp_pagination_sortable(pagination, 'Liên hệ', 'a.Id') }}</th>*/
/*                         <th>{{ knp_pagination_sortable(pagination, 'Tỉnh', 'a.Id') }}</th>*/
/*                     </tr>*/
/* */
/*                     {# table body #}*/
/*                     {% for article in pagination %}*/
/*                         <tr {% if loop.index is odd %}class="color"{% endif %}>*/
/*                             <td>{{ article.code }}</td>*/
/*                             <td>{{ article.imageLink|raw }}</td>*/
/*                             <td>{{ article.status }}</td>*/
/*                             <td>{{ article.info }}</td>*/
/*                             <td>{{ article.price }}</td>*/
/*                             {% if article.shopId.id == 0 %}*/
/*                                 <td><b>Liên hệ:</b><br>{{ article.userId.username }}<br><b>Địa*/
/*                                         chỉ:</b><br>{{ article.userId.address }}*/
/*                                     <br><b>ĐT:</b><br>{{ article.userId.phone }}<br>*/
/*                                 </td>*/
/*                                 <td>{{ article.city }}</td>*/
/*                             {% else %}*/
/*                                 <td><b>Liên hệ:</b><br>{{ article.shopId.name }}<br><b>Địa*/
/*                                         chỉ:</b><br>{{ article.shopId.address }}*/
/*                                     <br><b>ĐT:</b><br>{{ article.shopId.phone }}<br>*/
/*                                 </td>*/
/*                                 <td></td>*/
/*                             {% endif %}*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </table>*/
/*                 {# display navigation #}*/
/*                 <div class="navigation">*/
/*                     {{ knp_pagination_render(pagination) }}*/
/*                 </div>*/
/*                 {#==========#}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/

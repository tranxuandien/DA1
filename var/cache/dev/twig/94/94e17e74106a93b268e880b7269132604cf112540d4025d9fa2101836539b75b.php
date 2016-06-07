<?php

/* @User/ShopInfo/ShopInfo.html.twig */
class __TwigTemplate_e2d5f0b3037c09a86c0852f7ac698dc90c1656ab7b9dbf54cb65865b5a089dac extends Twig_Template
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
        $__internal_514aae089b218c22f7314abe07e96b6c93b3206410067e887ad8ea40a13c10de = $this->env->getExtension("native_profiler");
        $__internal_514aae089b218c22f7314abe07e96b6c93b3206410067e887ad8ea40a13c10de->enter($__internal_514aae089b218c22f7314abe07e96b6c93b3206410067e887ad8ea40a13c10de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/ShopInfo/ShopInfo.html.twig"));

        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_514aae089b218c22f7314abe07e96b6c93b3206410067e887ad8ea40a13c10de->leave($__internal_514aae089b218c22f7314abe07e96b6c93b3206410067e887ad8ea40a13c10de_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_5de435a0f1fc2cb34bf8421e9682b1c6012bbd3b6261404d08b81d1cf0ef1e0f = $this->env->getExtension("native_profiler");
        $__internal_5de435a0f1fc2cb34bf8421e9682b1c6012bbd3b6261404d08b81d1cf0ef1e0f->enter($__internal_5de435a0f1fc2cb34bf8421e9682b1c6012bbd3b6261404d08b81d1cf0ef1e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            ";
        // line 5
        $this->loadTemplate("header.html.twig", "@User/ShopInfo/ShopInfo.html.twig", 5)->display($context);
        // line 6
        echo "            <div id=\"wrapper\">
                <div class=\"container\">
                    ";
        // line 9
        echo "                    ";
        // line 10
        echo "
                    <div class=\"search-salon\">
                        <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("salon_list");
        echo "\" method=\"get\">
                            <div class=\"row\">
                                <div class=\"col-xs-2\">
                                    <input class=\" form-control\" placeholder=\"Tên Salon\" type=\"text\"
                                           name=\"salonName\"
                                           value=\"\"/>
                                </div>
                            </div>
                            <br>
                            <div class=\"button-search\">
                                <label>
                                    <button type=\"submit\" class=\"btn btn-primary\"><span
                                                class=\"glyphicon glyphicon-search\"></span>
                                        Tìm kiếm
                                    </button>
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class=\"count\">
                        Có ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " Salon ô tô
                    </div>
                    <table class=\"table-responsive table-striped table-bordered\">;
                        <tr>
                            <th class=\"buy-news\">";
        // line 36
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Salon", "a.Id");
        echo "</th>
                            <th class=\"buy-news\">";
        // line 37
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Ảnh", "a.Id");
        echo "</th>
                            <th class=\"buy-news\">";
        // line 38
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Thông tin", "a.Id");
        echo "</th>
                            <th class=\"buy-news contact\">";
        // line 39
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Địa Chỉ Liên Hệ", "a.Id");
        echo "</th>
                        </tr>
                        ";
        // line 42
        echo "                        ";
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
            // line 43
            echo "                            <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                                <td class=\"buy-news\"><a
                                            href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("salon_detail");
            echo "?salonId=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "name", array()), "html", null, true);
            echo "</a>
                                </td>
                                <td class=\"buy-news buy-news-content\"><img src=\"";
            // line 47
            echo $this->getAttribute($context["article"], "image", array());
            echo "\"></td>
                                <td class=\"buy-news buy-news-content\">";
            // line 48
            echo $this->getAttribute($context["article"], "about", array());
            echo "</td>
                                <td class=\"buy-news\">";
            // line 49
            echo $this->getAttribute($context["article"], "address", array());
            echo "</td>
                            </tr>
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
        echo "                    </table>
                    ";
        // line 54
        echo "                    <div class=\"navigation\">
                        ";
        // line 55
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                    </div>
                    ";
        // line 58
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_5de435a0f1fc2cb34bf8421e9682b1c6012bbd3b6261404d08b81d1cf0ef1e0f->leave($__internal_5de435a0f1fc2cb34bf8421e9682b1c6012bbd3b6261404d08b81d1cf0ef1e0f_prof);

    }

    public function getTemplateName()
    {
        return "@User/ShopInfo/ShopInfo.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  169 => 58,  164 => 55,  161 => 54,  158 => 52,  141 => 49,  137 => 48,  133 => 47,  124 => 45,  116 => 43,  98 => 42,  93 => 39,  89 => 38,  85 => 37,  81 => 36,  74 => 32,  51 => 12,  47 => 10,  45 => 9,  41 => 6,  39 => 5,  35 => 3,  23 => 2,);
    }
}
/* {#{% extends 'base.html.twig' %}#}*/
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="container">*/
/*             {% include('header.html.twig') %}*/
/*             <div id="wrapper">*/
/*                 <div class="container">*/
/*                     {#========#}*/
/*                     {# total items count #}*/
/* */
/*                     <div class="search-salon">*/
/*                         <form action="{{ path('salon_list')}}" method="get">*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-2">*/
/*                                     <input class=" form-control" placeholder="Tên Salon" type="text"*/
/*                                            name="salonName"*/
/*                                            value=""/>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <br>*/
/*                             <div class="button-search">*/
/*                                 <label>*/
/*                                     <button type="submit" class="btn btn-primary"><span*/
/*                                                 class="glyphicon glyphicon-search"></span>*/
/*                                         Tìm kiếm*/
/*                                     </button>*/
/*                                 </label>*/
/*                             </div>*/
/*                         </form>*/
/*                     </div>*/
/*                     <div class="count">*/
/*                         Có {{ pagination.getTotalItemCount }} Salon ô tô*/
/*                     </div>*/
/*                     <table class="table-responsive table-striped table-bordered">;*/
/*                         <tr>*/
/*                             <th class="buy-news">{{ knp_pagination_sortable(pagination, 'Salon', 'a.Id') }}</th>*/
/*                             <th class="buy-news">{{ knp_pagination_sortable(pagination, 'Ảnh', 'a.Id') }}</th>*/
/*                             <th class="buy-news">{{ knp_pagination_sortable(pagination, 'Thông tin', 'a.Id') }}</th>*/
/*                             <th class="buy-news contact">{{ knp_pagination_sortable(pagination, 'Địa Chỉ Liên Hệ', 'a.Id') }}</th>*/
/*                         </tr>*/
/*                         {# table body #}*/
/*                         {% for article in pagination %}*/
/*                             <tr {% if loop.index is odd %}class="color"{% endif %}>*/
/*                                 <td class="buy-news"><a*/
/*                                             href="{{ path('salon_detail') }}?salonId={{ article.id }}">{{ article.name }}</a>*/
/*                                 </td>*/
/*                                 <td class="buy-news buy-news-content"><img src="{{ article.image|raw }}"></td>*/
/*                                 <td class="buy-news buy-news-content">{{ article.about|raw }}</td>*/
/*                                 <td class="buy-news">{{ article.address|raw }}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </table>*/
/*                     {# display navigation #}*/
/*                     <div class="navigation">*/
/*                         {{ knp_pagination_render(pagination) }}*/
/*                     </div>*/
/*                     {#==========#}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/

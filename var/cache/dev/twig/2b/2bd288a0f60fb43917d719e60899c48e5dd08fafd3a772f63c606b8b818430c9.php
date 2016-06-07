<?php

/* UserBundle:BuyNews:BuyNews.html.twig */
class __TwigTemplate_67d5eb877f6a5a7abbd1219b350ba7ee0aafbdee0178706ece7f03f457512d3e extends Twig_Template
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
        $__internal_f6695a6b39bdea21aae793763cae0708baeaaad6e4df1d3688cc2353ebd774c3 = $this->env->getExtension("native_profiler");
        $__internal_f6695a6b39bdea21aae793763cae0708baeaaad6e4df1d3688cc2353ebd774c3->enter($__internal_f6695a6b39bdea21aae793763cae0708baeaaad6e4df1d3688cc2353ebd774c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:BuyNews:BuyNews.html.twig"));

        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_f6695a6b39bdea21aae793763cae0708baeaaad6e4df1d3688cc2353ebd774c3->leave($__internal_f6695a6b39bdea21aae793763cae0708baeaaad6e4df1d3688cc2353ebd774c3_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_97c713ab7062f44b0e4f8cc720d0295150ceab9f112e7327d439ccc002d95acb = $this->env->getExtension("native_profiler");
        $__internal_97c713ab7062f44b0e4f8cc720d0295150ceab9f112e7327d439ccc002d95acb->enter($__internal_97c713ab7062f44b0e4f8cc720d0295150ceab9f112e7327d439ccc002d95acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            ";
        // line 5
        $this->loadTemplate("header.html.twig", "UserBundle:BuyNews:BuyNews.html.twig", 5)->display($context);
        // line 6
        echo "            <div id=\"wrapper\">
                <div class=\"container\">
                    ";
        // line 9
        echo "                    ";
        // line 10
        echo "                    <div class=\"count\">
                        Có ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " tin bán
                    </div>
                    <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("get_buy_news_search");
        echo "\" method=\"get\">
                        <label>Mức giá:</label>
                        <select name=\"price\">
                            <option value=\"\" selected></option>
                            <option value=\"[Dưới 200 Triệu]\">[Dưới 200 Triệu]</option>
                            <option value=\"[200-400 Triệu]\">[200-400 Triệu]</option>
                            <option value=\"[400-600 Triệu]\">[400-600 Triệu]</option>
                            <option value=\"[600-800 Triệu]\">[600-800 Triệu]</option>
                            <option value=\"[800-1 Tỉ]\">[800-1 Tỉ]</option>
                            <option value=\"[1 Tỉ]\">[1 Tỉ]</option>
                        </select>
                        <br>
                        <label>Tỉnh:</label>
                        <input type=\"text\" name=\"city\">

                        <div class=\"button-search\">
                            <label>
                                <button type=\"submit\" class=\"btn btn-primary\"><span
                                            class=\"glyphicon glyphicon-search\"></span>
                                    Tìm kiếm
                                </button>
                            </label>
                        </div>
                    </form>
                    <table class=\"table-responsive table-striped table-bordered\">;
                        <tr>
                            ";
        // line 40
        echo "                            <th class=\"buy-news\">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Mã Tin", "a.Id");
        echo "</th>
                            <th class=\"buy-news info\" ";
        // line 41
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nội dung", "a.title");
        echo "</th>
                            <th class=\"buy-news\">";
        // line 42
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Giá", "a.Id");
        echo "</th>
                            <th class=\"buy-news contact\">";
        // line 43
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Địa Chỉ Liên Hệ", "a.Id");
        echo "</th>
                            <th class=\"buy-news\">";
        // line 44
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "City", "a.Id");
        echo "</th>
                            <th class=\"buy-news\">";
        // line 45
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Date", "a.Id");
        echo "</th>
                        </tr>
                        ";
        // line 48
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
            // line 49
            echo "                            <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                                <td class=\"buy-news\">";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "code", array()), "html", null, true);
            echo "</td>
                                <td class=\"buy-news buy-news-content\">
                                    <b>";
            // line 52
            echo $this->getAttribute($context["article"], "title", array());
            echo "</b><br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "<br></td>
                                <td class=\"buy-news\">";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "price", array()), "html", null, true);
            echo "</td>
                                <td class=\"buy-news buy-news-contact\"><b>Liên
                                        hệ:</b>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "name", array()), "html", null, true);
            echo "
                                    <br><b>ĐT:</b>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "phone", array()), "html", null, true);
            echo "<br><b>Địa
                                        chỉ:</b>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "address", array()), "html", null, true);
            echo "</td>
                                <td class=\"buy-news\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "city", array()), "html", null, true);
            echo "</td>
                                <td class=\"buy-news\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "date", array()), "html", null, true);
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
        // line 62
        echo "                    </table>
                    ";
        // line 64
        echo "                    <div class=\"navigation\">
                        ";
        // line 65
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                    </div>
                    ";
        // line 68
        echo "                </div>
            </div>

        </div>
    </div>
    ";
        // line 73
        $this->loadTemplate("footer.html.twig", "UserBundle:BuyNews:BuyNews.html.twig", 73)->display($context);
        // line 74
        echo "
";
        
        $__internal_97c713ab7062f44b0e4f8cc720d0295150ceab9f112e7327d439ccc002d95acb->leave($__internal_97c713ab7062f44b0e4f8cc720d0295150ceab9f112e7327d439ccc002d95acb_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:BuyNews:BuyNews.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  208 => 74,  206 => 73,  199 => 68,  194 => 65,  191 => 64,  188 => 62,  171 => 59,  167 => 58,  163 => 57,  159 => 56,  155 => 55,  150 => 53,  144 => 52,  139 => 50,  132 => 49,  114 => 48,  109 => 45,  105 => 44,  101 => 43,  97 => 42,  89 => 41,  84 => 40,  55 => 13,  50 => 11,  47 => 10,  45 => 9,  41 => 6,  39 => 5,  35 => 3,  23 => 2,);
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
/*                     <div class="count">*/
/*                         Có {{ pagination.getTotalItemCount }} tin bán*/
/*                     </div>*/
/*                     <form action="{{ path('get_buy_news_search') }}" method="get">*/
/*                         <label>Mức giá:</label>*/
/*                         <select name="price">*/
/*                             <option value="" selected></option>*/
/*                             <option value="[Dưới 200 Triệu]">[Dưới 200 Triệu]</option>*/
/*                             <option value="[200-400 Triệu]">[200-400 Triệu]</option>*/
/*                             <option value="[400-600 Triệu]">[400-600 Triệu]</option>*/
/*                             <option value="[600-800 Triệu]">[600-800 Triệu]</option>*/
/*                             <option value="[800-1 Tỉ]">[800-1 Tỉ]</option>*/
/*                             <option value="[1 Tỉ]">[1 Tỉ]</option>*/
/*                         </select>*/
/*                         <br>*/
/*                         <label>Tỉnh:</label>*/
/*                         <input type="text" name="city">*/
/* */
/*                         <div class="button-search">*/
/*                             <label>*/
/*                                 <button type="submit" class="btn btn-primary"><span*/
/*                                             class="glyphicon glyphicon-search"></span>*/
/*                                     Tìm kiếm*/
/*                                 </button>*/
/*                             </label>*/
/*                         </div>*/
/*                     </form>*/
/*                     <table class="table-responsive table-striped table-bordered">;*/
/*                         <tr>*/
/*                             {# sorting of properties based on query components #}*/
/*                             <th class="buy-news">{{ knp_pagination_sortable(pagination, 'Mã Tin', 'a.Id') }}</th>*/
/*                             <th class="buy-news info" {% if pagination.isSorted('a.Title') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, 'Nội dung', 'a.title') }}</th>*/
/*                             <th class="buy-news">{{ knp_pagination_sortable(pagination, 'Giá', 'a.Id') }}</th>*/
/*                             <th class="buy-news contact">{{ knp_pagination_sortable(pagination, 'Địa Chỉ Liên Hệ', 'a.Id') }}</th>*/
/*                             <th class="buy-news">{{ knp_pagination_sortable(pagination, 'City', 'a.Id') }}</th>*/
/*                             <th class="buy-news">{{ knp_pagination_sortable(pagination, 'Date', 'a.Id') }}</th>*/
/*                         </tr>*/
/*                         {# table body #}*/
/*                         {% for article in pagination %}*/
/*                             <tr {% if loop.index is odd %}class="color"{% endif %}>*/
/*                                 <td class="buy-news">{{ article.code }}</td>*/
/*                                 <td class="buy-news buy-news-content">*/
/*                                     <b>{{ article.title|raw }}</b><br>{{ article.content }}<br></td>*/
/*                                 <td class="buy-news">{{ article.price }}</td>*/
/*                                 <td class="buy-news buy-news-contact"><b>Liên*/
/*                                         hệ:</b>{{ article.userId.name }}*/
/*                                     <br><b>ĐT:</b>{{ article.userId.phone }}<br><b>Địa*/
/*                                         chỉ:</b>{{ article.userId.address }}</td>*/
/*                                 <td class="buy-news">{{ article.userId.city }}</td>*/
/*                                 <td class="buy-news">{{ article.date }}</td>*/
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
/* */
/*         </div>*/
/*     </div>*/
/*     {% include('footer.html.twig') %}*/
/* */
/* {% endblock %}*/

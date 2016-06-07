<?php

/* @User/BuyNews/BuyNews.html.twig */
class __TwigTemplate_07259de0c7fccb7ea201d0cb83f65ab3845d3bdf8e522e125ac6cb7ed5979b16 extends Twig_Template
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
        $__internal_a21c0ce15197eb6120ae9f2d13c3c1807aa7ecca09d7128e8e01da86be8450f5 = $this->env->getExtension("native_profiler");
        $__internal_a21c0ce15197eb6120ae9f2d13c3c1807aa7ecca09d7128e8e01da86be8450f5->enter($__internal_a21c0ce15197eb6120ae9f2d13c3c1807aa7ecca09d7128e8e01da86be8450f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/BuyNews/BuyNews.html.twig"));

        // line 2
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_a21c0ce15197eb6120ae9f2d13c3c1807aa7ecca09d7128e8e01da86be8450f5->leave($__internal_a21c0ce15197eb6120ae9f2d13c3c1807aa7ecca09d7128e8e01da86be8450f5_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_4d9e975ceb1deaeaaac0d73b4c7d5fc1fd263662c034c7d592da11eee41178ba = $this->env->getExtension("native_profiler");
        $__internal_4d9e975ceb1deaeaaac0d73b4c7d5fc1fd263662c034c7d592da11eee41178ba->enter($__internal_4d9e975ceb1deaeaaac0d73b4c7d5fc1fd263662c034c7d592da11eee41178ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            ";
        // line 5
        $this->loadTemplate("header.html.twig", "@User/BuyNews/BuyNews.html.twig", 5)->display($context);
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
                    <table class=\"table-responsive table-striped table-bordered\">;
                        <tr>
                            ";
        // line 16
        echo "                            <th class=\"buy-news\">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Mã Tin", "a.Id");
        echo "</th>
                            <th class=\"buy-news info\" ";
        // line 17
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nội dung", "a.title");
        echo "</th>
                            <th class=\"buy-news\">";
        // line 18
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Giá", "a.Id");
        echo "</th>
                            <th class=\"buy-news contact\">";
        // line 19
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Địa Chỉ Liên Hệ", "a.Id");
        echo "</th>
                            <th class=\"buy-news\">";
        // line 20
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "City", "a.Id");
        echo "</th>
                            <th class=\"buy-news\">";
        // line 21
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Date", "a.Id");
        echo "</th>
                        </tr>
                        ";
        // line 24
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
            // line 25
            echo "                            <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                                <td class=\"buy-news\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "code", array()), "html", null, true);
            echo "</td>
                                <td class=\"buy-news buy-news-content\">
                                    <b>";
            // line 28
            echo $this->getAttribute($context["article"], "title", array());
            echo "</b><br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "<br></td>
                                <td class=\"buy-news\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "price", array()), "html", null, true);
            echo "</td>
                                <td class=\"buy-news buy-news-contact\"><b>Liên
                                        hệ:</b>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "usernameCanonical", array()), "html", null, true);
            echo "
                                    <br><b>ĐT:</b>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "phone", array()), "html", null, true);
            echo "<br><b>Địa
                                        chỉ:</b>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "address", array()), "html", null, true);
            echo "</td>
                                <td class=\"buy-news\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "userId", array()), "city", array()), "html", null, true);
            echo "</td>
                                <td class=\"buy-news\">";
            // line 35
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
        // line 38
        echo "                    </table>
                    ";
        // line 40
        echo "                    <div class=\"navigation\">
                        ";
        // line 41
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
                    </div>
                    ";
        // line 44
        echo "                </div>
            </div>

        </div>
    </div>
    ";
        // line 49
        $this->loadTemplate("footer.html.twig", "@User/BuyNews/BuyNews.html.twig", 49)->display($context);
        // line 50
        echo "
";
        
        $__internal_4d9e975ceb1deaeaaac0d73b4c7d5fc1fd263662c034c7d592da11eee41178ba->leave($__internal_4d9e975ceb1deaeaaac0d73b4c7d5fc1fd263662c034c7d592da11eee41178ba_prof);

    }

    public function getTemplateName()
    {
        return "@User/BuyNews/BuyNews.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  181 => 50,  179 => 49,  172 => 44,  167 => 41,  164 => 40,  161 => 38,  144 => 35,  140 => 34,  136 => 33,  132 => 32,  128 => 31,  123 => 29,  117 => 28,  112 => 26,  105 => 25,  87 => 24,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  62 => 17,  57 => 16,  50 => 11,  47 => 10,  45 => 9,  41 => 6,  39 => 5,  35 => 3,  23 => 2,);
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
/*                                         hệ:</b>{{ article.userId.usernameCanonical }}*/
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

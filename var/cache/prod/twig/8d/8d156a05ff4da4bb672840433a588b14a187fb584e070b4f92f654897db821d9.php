<?php

/* UserBundle:BuyNews:BuyNews.html.twig */
class __TwigTemplate_4197ef23dfb9db80c29cad03e92b5af8d961d284907a74ea1acffc1b24f17011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:BuyNews:BuyNews.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
    ";
        // line 4
        $this->loadTemplate("header.html.twig", "UserBundle:BuyNews:BuyNews.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        // line 6
        echo "    ";
        // line 7
        echo "    <div class=\"count\">
        Có ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array()), "html", null, true);
        echo " tin bán
    </div>
    <table class=\"table-responsive table-striped\">;
        <tr>
            ";
        // line 13
        echo "            <th>";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Mã Tin", "a.Id");
        echo "</th>
            <th";
        // line 14
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Title", "a.title");
        echo "</th>
            <th>";
        // line 15
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Content", "a.Id");
        echo "</th>
            <th>";
        // line 16
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Địa Chỉ", "a.Id");
        echo "</th>
            <th>";
        // line 17
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "City", "a.Id");
        echo "</th>
            <th>";
        // line 18
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Date", "a.Id");
        echo "</th>
        </tr>
        ";
        // line 21
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
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
            // line 22
            echo "            <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
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
                <td>";
            // line 26
            echo $this->getAttribute($context["article"], "address", array());
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "city", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
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
        // line 31
        echo "    </table>    
    ";
        // line 33
        echo "    <div class=\"navigation\">
        ";
        // line 34
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "UserBundle:BuyNews:BuyNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 34,  145 => 33,  142 => 31,  125 => 28,  121 => 27,  117 => 26,  113 => 25,  109 => 24,  105 => 23,  98 => 22,  80 => 21,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  55 => 14,  50 => 13,  43 => 8,  40 => 7,  38 => 6,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/* */
/*     {% include('header.html.twig') %}*/
/*     {#========#}*/
/*     {# total items count #}*/
/*     <div class="count">*/
/*         Có {{ pagination.getTotalItemCount }} tin bán*/
/*     </div>*/
/*     <table class="table-responsive table-striped">;*/
/*         <tr>*/
/*             {# sorting of properties based on query components #}*/
/*             <th>{{ knp_pagination_sortable(pagination, 'Mã Tin', 'a.Id') }}</th>*/
/*             <th{% if pagination.isSorted('a.Title') %} class="sorted"{% endif %}>{{ knp_pagination_sortable(pagination, 'Title', 'a.title') }}</th>*/
/*             <th>{{ knp_pagination_sortable(pagination, 'Content', 'a.Id') }}</th>*/
/*             <th>{{ knp_pagination_sortable(pagination, 'Địa Chỉ', 'a.Id') }}</th>*/
/*             <th>{{ knp_pagination_sortable(pagination, 'City', 'a.Id') }}</th>*/
/*             <th>{{ knp_pagination_sortable(pagination, 'Date', 'a.Id') }}</th>*/
/*         </tr>*/
/*         {# table body #}*/
/*         {% for article in pagination %}*/
/*             <tr {% if loop.index is odd %}class="color"{% endif %}>*/
/*                 <td>{{ article.code }}</td>*/
/*                 <td>{{ article.title }}</td>*/
/*                 <td>{{ article.content }}</td>*/
/*                 <td>{{ article.address|raw }}</td>*/
/*                 <td>{{ article.city }}</td>*/
/*                 <td>{{ article.date }}</td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>    */
/*     {# display navigation #}*/
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(pagination) }}*/
/*     </div>*/
/*     {#==========#}*/
/* {% endblock %}*/

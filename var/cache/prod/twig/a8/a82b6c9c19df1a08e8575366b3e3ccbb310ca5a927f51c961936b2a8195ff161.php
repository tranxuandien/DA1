<?php

/* :lucky:BuyNews.html.twig */
class __TwigTemplate_7c535c8cbef78e9ec09ed4a7158401d180e00d89f345d87f0bc562a5fcc0a312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":lucky:BuyNews.html.twig", 1);
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
        echo "    ";
        $this->loadTemplate("header.html.twig", ":lucky:BuyNews.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 5
            echo "        <div class=\"flash-notice\">
            ";
            // line 6
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
    ";
        // line 11
        echo "
    ";
        // line 13
        echo "        ";
        // line 14
        echo "        ";
        // line 15
        echo "            ";
        // line 16
        echo "            ";
        // line 17
        echo "            ";
        // line 18
        echo "            ";
        // line 19
        echo "            ";
        // line 20
        echo "            ";
        // line 21
        echo "            ";
        // line 22
        echo "            ";
        // line 23
        echo "            ";
        // line 24
        echo "        ";
        // line 25
        echo "        ";
        // line 26
        echo "    ";
        // line 27
        echo "    ";
        // line 28
        echo "    ";
        // line 29
        echo "    <div class=\"count\">
        Có ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array()), "html", null, true);
        echo " tin bán
    </div>
    <table class=\"table-responsive table-striped\">;
        <tr>
            ";
        // line 35
        echo "            <th>";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Mã Tin", "a.Id");
        echo "</th>
            <th";
        // line 36
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Title", "a.title");
        echo "</th>
            <th>";
        // line 37
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Content", "a.Id");
        echo "</th>
            <th>";
        // line 38
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Địa Chỉ", "a.Id");
        echo "</th>
            <th>";
        // line 39
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "City", "a.Id");
        echo "</th>
            <th>";
        // line 40
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Date", "a.Id");
        echo "</th>

        </tr>

        ";
        // line 45
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
            // line 46
            echo "            <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "code", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "address", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "city", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 52
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
        // line 55
        echo "    </table>    
    ";
        // line 57
        echo "    <div class=\"navigation\">
        ";
        // line 58
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
    </div>
    ";
        // line 61
        echo "
";
    }

    public function getTemplateName()
    {
        return ":lucky:BuyNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 61,  199 => 58,  196 => 57,  193 => 55,  176 => 52,  172 => 51,  168 => 50,  164 => 49,  160 => 48,  156 => 47,  149 => 46,  131 => 45,  124 => 40,  120 => 39,  116 => 38,  112 => 37,  104 => 36,  99 => 35,  92 => 30,  89 => 29,  87 => 28,  85 => 27,  83 => 26,  81 => 25,  79 => 24,  77 => 23,  75 => 22,  73 => 21,  71 => 20,  69 => 19,  67 => 18,  65 => 17,  63 => 16,  61 => 15,  59 => 14,  57 => 13,  54 => 11,  51 => 9,  42 => 6,  39 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     {% include('header.html.twig') %}*/
/*     {% for flash_message in app.session.flashBag.get('notice') %}*/
/*         <div class="flash-notice">*/
/*             {{ flash_message }}*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     {#<h1>Lucky Numbers: {{ luckyNumberList }}</h1>#}*/
/* */
/*     {#<table>#}*/
/*         {#{% for item in product %}#}*/
/*         {#<tr>#}*/
/*             {#&#123;&#35;<td>{{ item.id }}</td>&#35;&#125;#}*/
/*             {#&#123;&#35;<td>{{ item.name }}</td>&#35;&#125;#}*/
/*             {#&#123;&#35;<td>{{ item.price }}</td>&#35;&#125;#}*/
/*             {#<td>{{ item.code }}</td>#}*/
/*             {#<td>{{ item.title }}</td>#}*/
/*             {#<td>{{ item.content }}</td>#}*/
/*             {#<td>{{ item.city }}</td>#}*/
/*             {#<td>{{ item.address }}</td>#}*/
/*             {#<td>{{ item.date }}</td>#}*/
/*         {#</tr>#}*/
/*         {#{% endfor %}#}*/
/*     {#</table>#}*/
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
/* */
/*         </tr>*/
/* */
/*         {# table body #}*/
/*         {% for article in pagination %}*/
/*             <tr {% if loop.index is odd %}class="color"{% endif %}>*/
/*                 <td>{{ article.code }}</td>*/
/*                 <td>{{ article.title }}</td>*/
/*                 <td>{{ article.content }}</td>*/
/*                 <td>{{ article.address }}</td>*/
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
/* */
/* {% endblock %}*/

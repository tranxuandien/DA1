<?php

/* lucky/BuyNews.html.twig */
class __TwigTemplate_8c9a73972dbb3b998c4c310f13232c11bd7e45e54079a36a0022d56ba9482bfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lucky/BuyNews.html.twig", 1);
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
        $__internal_b784559d3b0fc49b764a7ac1887693803f8d0b7971d4a74c5449c900816b66a3 = $this->env->getExtension("native_profiler");
        $__internal_b784559d3b0fc49b764a7ac1887693803f8d0b7971d4a74c5449c900816b66a3->enter($__internal_b784559d3b0fc49b764a7ac1887693803f8d0b7971d4a74c5449c900816b66a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/BuyNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b784559d3b0fc49b764a7ac1887693803f8d0b7971d4a74c5449c900816b66a3->leave($__internal_b784559d3b0fc49b764a7ac1887693803f8d0b7971d4a74c5449c900816b66a3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_441de50015511effa7f5294fd3740062d502bda05795c1e1b360b2707042ce25 = $this->env->getExtension("native_profiler");
        $__internal_441de50015511effa7f5294fd3740062d502bda05795c1e1b360b2707042ce25->enter($__internal_441de50015511effa7f5294fd3740062d502bda05795c1e1b360b2707042ce25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->loadTemplate("header.html.twig", "lucky/BuyNews.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " tin bán
    </div>
    <table class=\"table-responsive table-striped\">;
        <tr>
            ";
        // line 35
        echo "            <th>";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Mã Tin", "a.Id");
        echo "</th>
            <th";
        // line 36
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.Title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Title", "a.title");
        echo "</th>
            <th>";
        // line 37
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Content", "a.Id");
        echo "</th>
            <th>";
        // line 38
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Địa Chỉ", "a.Id");
        echo "</th>
            <th>";
        // line 39
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "City", "a.Id");
        echo "</th>
            <th>";
        // line 40
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Date", "a.Id");
        echo "</th>

        </tr>

        ";
        // line 45
        echo "        ";
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
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>
    ";
        // line 61
        echo "
";
        
        $__internal_441de50015511effa7f5294fd3740062d502bda05795c1e1b360b2707042ce25->leave($__internal_441de50015511effa7f5294fd3740062d502bda05795c1e1b360b2707042ce25_prof);

    }

    public function getTemplateName()
    {
        return "lucky/BuyNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 61,  208 => 58,  205 => 57,  202 => 55,  185 => 52,  181 => 51,  177 => 50,  173 => 49,  169 => 48,  165 => 47,  158 => 46,  140 => 45,  133 => 40,  129 => 39,  125 => 38,  121 => 37,  113 => 36,  108 => 35,  101 => 30,  98 => 29,  96 => 28,  94 => 27,  92 => 26,  90 => 25,  88 => 24,  86 => 23,  84 => 22,  82 => 21,  80 => 20,  78 => 19,  76 => 18,  74 => 17,  72 => 16,  70 => 15,  68 => 14,  66 => 13,  63 => 11,  60 => 9,  51 => 6,  48 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
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

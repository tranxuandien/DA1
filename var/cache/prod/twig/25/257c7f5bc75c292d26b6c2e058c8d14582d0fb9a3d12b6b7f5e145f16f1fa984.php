<?php

/* default/SellNews.html.twig */
class __TwigTemplate_4dcf47bc1e5b9f2d74f933cead5908486ae4962a88a1bc7f8feaa2903a73a121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/SellNews.html.twig", 1);
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
        $this->loadTemplate("header.html.twig", "default/SellNews.html.twig", 3)->display($context);
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
        echo "    ";
        // line 12
        echo "    ";
        // line 13
        echo "    <div class=\"navigation\">
        ";
        // line 14
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
    </div>

    <div class=\"count\">
    <i>
        Trang";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["pageRequest"]) ? $context["pageRequest"] : null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "pageCount", array()), "html", null, true);
        echo " (Tổng ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "getTotalItemCount", array()), "html", null, true);
        echo " tin mua).
        </i>
    </div>
    
    <table class=\"table-responsive table-striped\">
        <tr>
            ";
        // line 26
        echo "            <th>";
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Mã Tin", "a.Id");
        echo "</th>
            <th>";
        // line 27
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Chi tiet", "a.Id");
        echo "</th>
            <th>";
        // line 28
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Lien He", "a.Id");
        echo "</th>
            <th>";
        // line 29
        echo $this->env->getExtension('knp_pagination')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : null), "Tinh", "a.Id");
        echo "</th>
        </tr>

        ";
        // line 33
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
            // line 34
            echo "            <tr ";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "code", array()), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "status", array()), "html", null, true);
            echo "</td>
                <td><b>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "kind", array()), "html", null, true);
            echo "</b><br>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "info", array()), "html", null, true);
            echo "</td>
                <td><b>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "price", array()), "html", null, true);
            echo "</b><br>";
            echo $this->getAttribute($context["article"], "contact", array());
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "city", array()), "html", null, true);
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
        // line 41
        echo "    </table>    
    ";
        // line 43
        echo "    <div class=\"navigation\">
        ";
        // line 44
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
    </div>
    ";
        // line 47
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/SellNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 47,  167 => 44,  164 => 43,  161 => 41,  144 => 38,  138 => 37,  132 => 36,  126 => 35,  119 => 34,  101 => 33,  95 => 29,  91 => 28,  87 => 27,  82 => 26,  69 => 19,  61 => 14,  58 => 13,  56 => 12,  54 => 11,  51 => 9,  42 => 6,  39 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
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
/*     {#========#}*/
/*     {# total items count #}*/
/*     {# display navigation #}*/
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(pagination) }}*/
/*     </div>*/
/* */
/*     <div class="count">*/
/*     <i>*/
/*         Trang{{pageRequest}}/{{pagination.pageCount}} (Tổng {{ pagination.getTotalItemCount }} tin mua).*/
/*         </i>*/
/*     </div>*/
/*     */
/*     <table class="table-responsive table-striped">*/
/*         <tr>*/
/*             {# sorting of properties based on query components #}*/
/*             <th>{{ knp_pagination_sortable(pagination, 'Mã Tin', 'a.Id') }}</th>*/
/*             <th>{{ knp_pagination_sortable(pagination, 'Chi tiet', 'a.Id') }}</th>*/
/*             <th>{{ knp_pagination_sortable(pagination, 'Lien He', 'a.Id') }}</th>*/
/*             <th>{{ knp_pagination_sortable(pagination, 'Tinh', 'a.Id') }}</th>*/
/*         </tr>*/
/* */
/*         {# table body #}*/
/*         {% for article in pagination %}*/
/*             <tr {% if loop.index is odd %}class="color"{% endif %}>*/
/*                 <td>{{ article.code }}<br>{{    article.status }}</td>*/
/*                 <td><b>{{ article.kind }}</b><br>{{ article.info }}</td>*/
/*                 <td><b>{{ article.price }}</b><br>{{ article.contact|raw }}</td>*/
/*                 <td>{{ article.city }}</td>*/
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

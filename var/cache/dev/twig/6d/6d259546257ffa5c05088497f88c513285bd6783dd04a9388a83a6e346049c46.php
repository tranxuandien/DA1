<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_425f14ff4c0c5b266f562b9b865a65e4b2fedb4a015a1c542a8dd9205fd33369 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb67d9b4f3f3f4dce1825811be23ef0d0d33459ff77851ed486c20796e75c940 = $this->env->getExtension("native_profiler");
        $__internal_fb67d9b4f3f3f4dce1825811be23ef0d0d33459ff77851ed486c20796e75c940->enter($__internal_fb67d9b4f3f3f4dce1825811be23ef0d0d33459ff77851ed486c20796e75c940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_fb67d9b4f3f3f4dce1825811be23ef0d0d33459ff77851ed486c20796e75c940->leave($__internal_fb67d9b4f3f3f4dce1825811be23ef0d0d33459ff77851ed486c20796e75c940_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <a{% for attr, value in options %} {{ attr }}="{{ value }}"{% endfor %}>{{ title }}</a>*/
/* */

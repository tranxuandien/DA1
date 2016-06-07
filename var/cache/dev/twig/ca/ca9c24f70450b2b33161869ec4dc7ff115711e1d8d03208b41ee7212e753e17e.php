<?php

/* @EasyAdmin/default/field_text.html.twig */
class __TwigTemplate_ee8175eb5b16ee2e3172b6d5688d8eb411ae843944d62dcdb21d62474059c3da extends Twig_Template
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
        $__internal_91908fdb4e4775c5fb6255057263ee2f314ae780711de95ce878edfb0303256a = $this->env->getExtension("native_profiler");
        $__internal_91908fdb4e4775c5fb6255057263ee2f314ae780711de95ce878edfb0303256a->enter($__internal_91908fdb4e4775c5fb6255057263ee2f314ae780711de95ce878edfb0303256a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_text.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_91908fdb4e4775c5fb6255057263ee2f314ae780711de95ce878edfb0303256a->leave($__internal_91908fdb4e4775c5fb6255057263ee2f314ae780711de95ce878edfb0303256a_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if view == 'show' %}*/
/*     {{ value|nl2br }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate }}*/
/* {% endif %}*/
/* */

<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_d9533d66f98584ce3bfc5cb15262ccfaf5b04666cac95897df4f1eaa70e256a0 extends Twig_Template
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
        $__internal_cbf37f2539545d303abd8c49a379f7d4d17b651a59d466f215cc08265762e9c7 = $this->env->getExtension("native_profiler");
        $__internal_cbf37f2539545d303abd8c49a379f7d4d17b651a59d466f215cc08265762e9c7->enter($__internal_cbf37f2539545d303abd8c49a379f7d4d17b651a59d466f215cc08265762e9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_cbf37f2539545d303abd8c49a379f7d4d17b651a59d466f215cc08265762e9c7->leave($__internal_cbf37f2539545d303abd8c49a379f7d4d17b651a59d466f215cc08265762e9c7_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
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
/* {{ value|date(field_options.format) }}*/
/* */

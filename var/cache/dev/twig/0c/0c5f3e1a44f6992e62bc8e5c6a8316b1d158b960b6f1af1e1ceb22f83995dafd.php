<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_f7eeda513e254ab13becc7d050ddd3614105eab4bc194aa964ec8fc239cb5eff extends Twig_Template
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
        $__internal_13d7116e1e9edcf33a0144a56e5ddbbc5e0fdf7c12b5e3ef427a7e47cea4641f = $this->env->getExtension("native_profiler");
        $__internal_13d7116e1e9edcf33a0144a56e5ddbbc5e0fdf7c12b5e3ef427a7e47cea4641f->enter($__internal_13d7116e1e9edcf33a0144a56e5ddbbc5e0fdf7c12b5e3ef427a7e47cea4641f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_13d7116e1e9edcf33a0144a56e5ddbbc5e0fdf7c12b5e3ef427a7e47cea4641f->leave($__internal_13d7116e1e9edcf33a0144a56e5ddbbc5e0fdf7c12b5e3ef427a7e47cea4641f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
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

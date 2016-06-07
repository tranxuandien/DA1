<?php

/* @EasyAdmin/default/field_datetimetz.html.twig */
class __TwigTemplate_48e114f7bc94f1d568b954265b3b587b485ed1b9fdcebf633ae29616169da867 extends Twig_Template
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
        $__internal_df21179abb0294a4d2c669c55f9337a72be5d410c80748b2aae2d91c94dfd74d = $this->env->getExtension("native_profiler");
        $__internal_df21179abb0294a4d2c669c55f9337a72be5d410c80748b2aae2d91c94dfd74d->enter($__internal_df21179abb0294a4d2c669c55f9337a72be5d410c80748b2aae2d91c94dfd74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_df21179abb0294a4d2c669c55f9337a72be5d410c80748b2aae2d91c94dfd74d->leave($__internal_df21179abb0294a4d2c669c55f9337a72be5d410c80748b2aae2d91c94dfd74d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetimetz.html.twig";
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

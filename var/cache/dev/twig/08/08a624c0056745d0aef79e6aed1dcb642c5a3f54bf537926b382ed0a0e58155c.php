<?php

/* @EasyAdmin/default/field_time.html.twig */
class __TwigTemplate_9fdd1a8b18d573a1e772629c26798c3effb2a6fccb7b2b06644631fa0ac8aa22 extends Twig_Template
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
        $__internal_8f29428163d2bffb59307444875c9c52b2c6af4f5d348dcfa3ff7af143146ada = $this->env->getExtension("native_profiler");
        $__internal_8f29428163d2bffb59307444875c9c52b2c6af4f5d348dcfa3ff7af143146ada->enter($__internal_8f29428163d2bffb59307444875c9c52b2c6af4f5d348dcfa3ff7af143146ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_8f29428163d2bffb59307444875c9c52b2c6af4f5d348dcfa3ff7af143146ada->leave($__internal_8f29428163d2bffb59307444875c9c52b2c6af4f5d348dcfa3ff7af143146ada_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_time.html.twig";
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

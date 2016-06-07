<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_0d76c4838faec79a15861ddd4a095927a48b67554937e8dc949a08629e6dbc7e extends Twig_Template
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
        $__internal_399c820db27069143359c3c9a7f3f77f7a6ac49a4346793902622004af765921 = $this->env->getExtension("native_profiler");
        $__internal_399c820db27069143359c3c9a7f3f77f7a6ac49a4346793902622004af765921->enter($__internal_399c820db27069143359c3c9a7f3f77f7a6ac49a4346793902622004af765921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_399c820db27069143359c3c9a7f3f77f7a6ac49a4346793902622004af765921->leave($__internal_399c820db27069143359c3c9a7f3f77f7a6ac49a4346793902622004af765921_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# this field template is used to avoid formatting the special ID attribute as a number #}*/
/* {{ value }}*/
/* */

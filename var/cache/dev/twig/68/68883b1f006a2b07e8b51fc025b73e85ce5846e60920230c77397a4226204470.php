<?php

/* @EasyAdmin/default/field_guid.html.twig */
class __TwigTemplate_7b5963dfe2ef64ad9f73eca24f1b09d19f8190b1ac4808ba96679a3fcac20de8 extends Twig_Template
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
        $__internal_49323269e9021b805cb013e679c7cb3383e11720b77a2b87b02eae64cd1f0dd6 = $this->env->getExtension("native_profiler");
        $__internal_49323269e9021b805cb013e679c7cb3383e11720b77a2b87b02eae64cd1f0dd6->enter($__internal_49323269e9021b805cb013e679c7cb3383e11720b77a2b87b02eae64cd1f0dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_guid.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_49323269e9021b805cb013e679c7cb3383e11720b77a2b87b02eae64cd1f0dd6->leave($__internal_49323269e9021b805cb013e679c7cb3383e11720b77a2b87b02eae64cd1f0dd6_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_guid.html.twig";
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
/*     {{ value }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate(7) }}*/
/* {% endif %}*/
/* */

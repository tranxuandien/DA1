<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_02758878c49c3dccb3f4b7a9ce129668c1b7618488525f53578b321e97cb6611 extends Twig_Template
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
        $__internal_9d6766e7c496f9b8e6b1d673229d20dd2f3ba76edb58e9230fed5cb2a522a4ee = $this->env->getExtension("native_profiler");
        $__internal_9d6766e7c496f9b8e6b1d673229d20dd2f3ba76edb58e9230fed5cb2a522a4ee->enter($__internal_9d6766e7c496f9b8e6b1d673229d20dd2f3ba76edb58e9230fed5cb2a522a4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

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
        
        $__internal_9d6766e7c496f9b8e6b1d673229d20dd2f3ba76edb58e9230fed5cb2a522a4ee->leave($__internal_9d6766e7c496f9b8e6b1d673229d20dd2f3ba76edb58e9230fed5cb2a522a4ee_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
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

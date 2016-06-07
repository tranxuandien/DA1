<?php

/* @EasyAdmin/default/field_decimal.html.twig */
class __TwigTemplate_f80404845d7633d8ba7b1735cef56a420716de21ac6dd51ba04715792db3e450 extends Twig_Template
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
        $__internal_dbca885d978cf6cb65e26f5d24cd30e53e06ed610e6eb563be4ae2cd3bf322a8 = $this->env->getExtension("native_profiler");
        $__internal_dbca885d978cf6cb65e26f5d24cd30e53e06ed610e6eb563be4ae2cd3bf322a8->enter($__internal_dbca885d978cf6cb65e26f5d24cd30e53e06ed610e6eb563be4ae2cd3bf322a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_decimal.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_dbca885d978cf6cb65e26f5d24cd30e53e06ed610e6eb563be4ae2cd3bf322a8->leave($__internal_dbca885d978cf6cb65e26f5d24cd30e53e06ed610e6eb563be4ae2cd3bf322a8_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_decimal.html.twig";
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
/* {% if field_options.format %}*/
/*     {{ field_options.format|format(value) }}*/
/* {% else %}*/
/*     {{ value|number_format(2) }}*/
/* {% endif %}*/
/* */

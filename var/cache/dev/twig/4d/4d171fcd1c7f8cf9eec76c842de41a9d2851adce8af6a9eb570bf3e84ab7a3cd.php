<?php

/* @EasyAdmin/default/field_bigint.html.twig */
class __TwigTemplate_54c37952e5f027a1296dc577657eb8af31f121b76ac9918d94f059b0329148ff extends Twig_Template
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
        $__internal_f161d972dde69036e9fc8e29d66b236aeffc9fd5dbeb48456fc47abd805f0e9f = $this->env->getExtension("native_profiler");
        $__internal_f161d972dde69036e9fc8e29d66b236aeffc9fd5dbeb48456fc47abd805f0e9f->enter($__internal_f161d972dde69036e9fc8e29d66b236aeffc9fd5dbeb48456fc47abd805f0e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_bigint.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_f161d972dde69036e9fc8e29d66b236aeffc9fd5dbeb48456fc47abd805f0e9f->leave($__internal_f161d972dde69036e9fc8e29d66b236aeffc9fd5dbeb48456fc47abd805f0e9f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_bigint.html.twig";
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
/*     {{ value|number_format }}*/
/* {% endif %}*/
/* */

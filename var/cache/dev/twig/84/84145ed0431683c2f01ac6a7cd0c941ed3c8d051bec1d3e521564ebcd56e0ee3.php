<?php

/* @EasyAdmin/default/field_integer.html.twig */
class __TwigTemplate_df67fd798daacbbba8bb8c32f32588951f8b1486055f15c8340cfa0b5c5477aa extends Twig_Template
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
        $__internal_db0a658bd2d744682b380a631b4b69b3a75db9b998d279da2b39c0e6e5a1a6f1 = $this->env->getExtension("native_profiler");
        $__internal_db0a658bd2d744682b380a631b4b69b3a75db9b998d279da2b39c0e6e5a1a6f1->enter($__internal_db0a658bd2d744682b380a631b4b69b3a75db9b998d279da2b39c0e6e5a1a6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

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
        
        $__internal_db0a658bd2d744682b380a631b4b69b3a75db9b998d279da2b39c0e6e5a1a6f1->leave($__internal_db0a658bd2d744682b380a631b4b69b3a75db9b998d279da2b39c0e6e5a1a6f1_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_integer.html.twig";
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

<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_dcf21932af8698d03362c3273b64b8359cffa079eefa278fcd5313655dc4a56c extends Twig_Template
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
        $__internal_61d97109f0b1be2573e11dcfd1614f36cfdba5bb9a993d648b74add1c6d36962 = $this->env->getExtension("native_profiler");
        $__internal_61d97109f0b1be2573e11dcfd1614f36cfdba5bb9a993d648b74add1c6d36962->enter($__internal_61d97109f0b1be2573e11dcfd1614f36cfdba5bb9a993d648b74add1c6d36962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
        
        $__internal_61d97109f0b1be2573e11dcfd1614f36cfdba5bb9a993d648b74add1c6d36962->leave($__internal_61d97109f0b1be2573e11dcfd1614f36cfdba5bb9a993d648b74add1c6d36962_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
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

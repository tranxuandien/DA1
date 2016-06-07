<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_36b2c0158af4c212eaf30ad16e88119ec4e38e847098bcc1340f24807d38249e extends Twig_Template
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
        $__internal_ce099604e44d17c0d044a509814ac80b712c41adf12a7fb06867d3aff2b53010 = $this->env->getExtension("native_profiler");
        $__internal_ce099604e44d17c0d044a509814ac80b712c41adf12a7fb06867d3aff2b53010->enter($__internal_ce099604e44d17c0d044a509814ac80b712c41adf12a7fb06867d3aff2b53010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_ce099604e44d17c0d044a509814ac80b712c41adf12a7fb06867d3aff2b53010->leave($__internal_ce099604e44d17c0d044a509814ac80b712c41adf12a7fb06867d3aff2b53010_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
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

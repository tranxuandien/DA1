<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_ebc911b46f456436f843face0fe2e85e85cfa1e26bb8bc43ade839109f02a2f2 extends Twig_Template
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
        $__internal_08d63330c42f46c05a72c066996b7ab7893e02fd733c82b0b4c04cf5d3b1d676 = $this->env->getExtension("native_profiler");
        $__internal_08d63330c42f46c05a72c066996b7ab7893e02fd733c82b0b4c04cf5d3b1d676->enter($__internal_08d63330c42f46c05a72c066996b7ab7893e02fd733c82b0b4c04cf5d3b1d676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_08d63330c42f46c05a72c066996b7ab7893e02fd733c82b0b4c04cf5d3b1d676->leave($__internal_08d63330c42f46c05a72c066996b7ab7893e02fd733c82b0b4c04cf5d3b1d676_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
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

<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_21f41aefc6ebd9db0008b1c3675f768531f02427d3344e1ec4b5bb4af606196c extends Twig_Template
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
        $__internal_fefc2a6d042d77b9851e263c7e8a275db375477580c1314e4c8e8d3237394049 = $this->env->getExtension("native_profiler");
        $__internal_fefc2a6d042d77b9851e263c7e8a275db375477580c1314e4c8e8d3237394049->enter($__internal_fefc2a6d042d77b9851e263c7e8a275db375477580c1314e4c8e8d3237394049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_fefc2a6d042d77b9851e263c7e8a275db375477580c1314e4c8e8d3237394049->leave($__internal_fefc2a6d042d77b9851e263c7e8a275db375477580c1314e4c8e8d3237394049_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
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

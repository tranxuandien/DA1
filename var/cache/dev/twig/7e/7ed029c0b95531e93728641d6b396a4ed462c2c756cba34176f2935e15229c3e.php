<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_0a16550afeba04e8381cf24b652ca7ce34321d04d1cacb2c008d626653ead364 extends Twig_Template
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
        $__internal_0c77e394b8287c4d5f18919bc339c6f15a9680e8c6f3dd9f4aede7eb64c3c34b = $this->env->getExtension("native_profiler");
        $__internal_0c77e394b8287c4d5f18919bc339c6f15a9680e8c6f3dd9f4aede7eb64c3c34b->enter($__internal_0c77e394b8287c4d5f18919bc339c6f15a9680e8c6f3dd9f4aede7eb64c3c34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_0c77e394b8287c4d5f18919bc339c6f15a9680e8c6f3dd9f4aede7eb64c3c34b->leave($__internal_0c77e394b8287c4d5f18919bc339c6f15a9680e8c6f3dd9f4aede7eb64c3c34b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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

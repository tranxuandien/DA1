<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_daadb99c611e227686de38b92494662b912bf35a349ffeb75e125f24251c7b08 extends Twig_Template
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
        $__internal_ad6f6356cf949e5885f9579f3b2fe131337426fb0dc5d32c0420e2234bdc6b74 = $this->env->getExtension("native_profiler");
        $__internal_ad6f6356cf949e5885f9579f3b2fe131337426fb0dc5d32c0420e2234bdc6b74->enter($__internal_ad6f6356cf949e5885f9579f3b2fe131337426fb0dc5d32c0420e2234bdc6b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ad6f6356cf949e5885f9579f3b2fe131337426fb0dc5d32c0420e2234bdc6b74->leave($__internal_ad6f6356cf949e5885f9579f3b2fe131337426fb0dc5d32c0420e2234bdc6b74_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

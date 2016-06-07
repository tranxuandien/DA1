<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_354c93a10894d0508cc6b511fb964ca9af5ad00c5b0b16a2eb2b9ae98db8c7e7 extends Twig_Template
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
        $__internal_c109429b4f0c597dd76654aecb3558c9d99d6b6cdd0b8ce4f97f593adad31790 = $this->env->getExtension("native_profiler");
        $__internal_c109429b4f0c597dd76654aecb3558c9d99d6b6cdd0b8ce4f97f593adad31790->enter($__internal_c109429b4f0c597dd76654aecb3558c9d99d6b6cdd0b8ce4f97f593adad31790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c109429b4f0c597dd76654aecb3558c9d99d6b6cdd0b8ce4f97f593adad31790->leave($__internal_c109429b4f0c597dd76654aecb3558c9d99d6b6cdd0b8ce4f97f593adad31790_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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

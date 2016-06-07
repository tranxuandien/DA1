<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_42c5388c20cda7eb0ff8144b890438c56ac0ba3576f80604de8133e751a0bbce extends Twig_Template
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
        $__internal_76255ffb7640170ac1a9e43d652105686141cd44c31eb5343621ed9462424585 = $this->env->getExtension("native_profiler");
        $__internal_76255ffb7640170ac1a9e43d652105686141cd44c31eb5343621ed9462424585->enter($__internal_76255ffb7640170ac1a9e43d652105686141cd44c31eb5343621ed9462424585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_76255ffb7640170ac1a9e43d652105686141cd44c31eb5343621ed9462424585->leave($__internal_76255ffb7640170ac1a9e43d652105686141cd44c31eb5343621ed9462424585_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

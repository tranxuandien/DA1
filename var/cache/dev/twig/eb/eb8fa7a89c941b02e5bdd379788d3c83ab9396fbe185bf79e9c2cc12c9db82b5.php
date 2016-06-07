<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_3fa4125619e49e1a0e17c784ce43092144cd4dc098eb79a09f83eb5624bb098e extends Twig_Template
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
        $__internal_564505a4806c77cd08a42eb816e63bafddcf90794ab1c57234d83ec32a706418 = $this->env->getExtension("native_profiler");
        $__internal_564505a4806c77cd08a42eb816e63bafddcf90794ab1c57234d83ec32a706418->enter($__internal_564505a4806c77cd08a42eb816e63bafddcf90794ab1c57234d83ec32a706418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_564505a4806c77cd08a42eb816e63bafddcf90794ab1c57234d83ec32a706418->leave($__internal_564505a4806c77cd08a42eb816e63bafddcf90794ab1c57234d83ec32a706418_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

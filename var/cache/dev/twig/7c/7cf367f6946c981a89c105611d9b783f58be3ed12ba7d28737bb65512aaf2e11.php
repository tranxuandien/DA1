<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a48a9482b791bc29fbe4cc62a76aab672168bb3a266abb47eead75658a8916c1 extends Twig_Template
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
        $__internal_ff0faa0e7dad211ccad0258c450af4056beb76380df2cb8354c7c9ed7b33cca0 = $this->env->getExtension("native_profiler");
        $__internal_ff0faa0e7dad211ccad0258c450af4056beb76380df2cb8354c7c9ed7b33cca0->enter($__internal_ff0faa0e7dad211ccad0258c450af4056beb76380df2cb8354c7c9ed7b33cca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_ff0faa0e7dad211ccad0258c450af4056beb76380df2cb8354c7c9ed7b33cca0->leave($__internal_ff0faa0e7dad211ccad0258c450af4056beb76380df2cb8354c7c9ed7b33cca0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

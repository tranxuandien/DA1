<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_15faa612064f86203e85c6f9994a11c8ea9a54c0ad3d1c16ad1076288a797940 extends Twig_Template
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
        $__internal_c6b1146c7ebceb37a53837a91b2d5567ccf98141d9aafc8b5c494b389c09891a = $this->env->getExtension("native_profiler");
        $__internal_c6b1146c7ebceb37a53837a91b2d5567ccf98141d9aafc8b5c494b389c09891a->enter($__internal_c6b1146c7ebceb37a53837a91b2d5567ccf98141d9aafc8b5c494b389c09891a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c6b1146c7ebceb37a53837a91b2d5567ccf98141d9aafc8b5c494b389c09891a->leave($__internal_c6b1146c7ebceb37a53837a91b2d5567ccf98141d9aafc8b5c494b389c09891a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

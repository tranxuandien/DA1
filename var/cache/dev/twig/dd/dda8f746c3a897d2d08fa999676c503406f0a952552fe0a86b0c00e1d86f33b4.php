<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_cbbf7ba756de873e50c8513901590ab472cc6dbbabcbfd1b1f4dc64be95a0b2c extends Twig_Template
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
        $__internal_3a8658087431099f0d54a3d4d0963841483c7a05a35ba0402e51ac0bdcb1669f = $this->env->getExtension("native_profiler");
        $__internal_3a8658087431099f0d54a3d4d0963841483c7a05a35ba0402e51ac0bdcb1669f->enter($__internal_3a8658087431099f0d54a3d4d0963841483c7a05a35ba0402e51ac0bdcb1669f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3a8658087431099f0d54a3d4d0963841483c7a05a35ba0402e51ac0bdcb1669f->leave($__internal_3a8658087431099f0d54a3d4d0963841483c7a05a35ba0402e51ac0bdcb1669f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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

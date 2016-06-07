<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_322c95231f63dc52972d536aae01f32906bb472558c544598c3657df96c8fab5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a76fc7bf7bf354b9efb2eacb9466679ef47435ce6e3186629a47dd349a503c40 = $this->env->getExtension("native_profiler");
        $__internal_a76fc7bf7bf354b9efb2eacb9466679ef47435ce6e3186629a47dd349a503c40->enter($__internal_a76fc7bf7bf354b9efb2eacb9466679ef47435ce6e3186629a47dd349a503c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a76fc7bf7bf354b9efb2eacb9466679ef47435ce6e3186629a47dd349a503c40->leave($__internal_a76fc7bf7bf354b9efb2eacb9466679ef47435ce6e3186629a47dd349a503c40_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_04d8917b7d0b706a3c6debdf54f94ae87c367343a48c8ec1522c87b7314cbf6c = $this->env->getExtension("native_profiler");
        $__internal_04d8917b7d0b706a3c6debdf54f94ae87c367343a48c8ec1522c87b7314cbf6c->enter($__internal_04d8917b7d0b706a3c6debdf54f94ae87c367343a48c8ec1522c87b7314cbf6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_04d8917b7d0b706a3c6debdf54f94ae87c367343a48c8ec1522c87b7314cbf6c->leave($__internal_04d8917b7d0b706a3c6debdf54f94ae87c367343a48c8ec1522c87b7314cbf6c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_f0ef1e3baee6f136f09848ce96f745855efe6f723598327f25b82695878d5851 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_19e3983fcb65c36eecc708d785e4d65e9e087d5ab307e5b1c1cb2e7b00fe5c15 = $this->env->getExtension("native_profiler");
        $__internal_19e3983fcb65c36eecc708d785e4d65e9e087d5ab307e5b1c1cb2e7b00fe5c15->enter($__internal_19e3983fcb65c36eecc708d785e4d65e9e087d5ab307e5b1c1cb2e7b00fe5c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19e3983fcb65c36eecc708d785e4d65e9e087d5ab307e5b1c1cb2e7b00fe5c15->leave($__internal_19e3983fcb65c36eecc708d785e4d65e9e087d5ab307e5b1c1cb2e7b00fe5c15_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_82bbcda262820d8e08271dedf2c0c5366d94a1a2d596c8733073bc1677641019 = $this->env->getExtension("native_profiler");
        $__internal_82bbcda262820d8e08271dedf2c0c5366d94a1a2d596c8733073bc1677641019->enter($__internal_82bbcda262820d8e08271dedf2c0c5366d94a1a2d596c8733073bc1677641019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_82bbcda262820d8e08271dedf2c0c5366d94a1a2d596c8733073bc1677641019->leave($__internal_82bbcda262820d8e08271dedf2c0c5366d94a1a2d596c8733073bc1677641019_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

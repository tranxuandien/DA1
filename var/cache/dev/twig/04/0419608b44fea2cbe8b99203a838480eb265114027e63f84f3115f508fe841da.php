<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f86a4fc4119cd03b71973001943d4225736f946013d50b1a0a57056a03ce045d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_4f9c7b6efb18305e5299d97677ba62b5ce90ab09af3611a241cbdf43761de766 = $this->env->getExtension("native_profiler");
        $__internal_4f9c7b6efb18305e5299d97677ba62b5ce90ab09af3611a241cbdf43761de766->enter($__internal_4f9c7b6efb18305e5299d97677ba62b5ce90ab09af3611a241cbdf43761de766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f9c7b6efb18305e5299d97677ba62b5ce90ab09af3611a241cbdf43761de766->leave($__internal_4f9c7b6efb18305e5299d97677ba62b5ce90ab09af3611a241cbdf43761de766_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60f2ed305bc94fbb965fb14e6b3550e93d65e60e4b7d17e32416b446d0d95694 = $this->env->getExtension("native_profiler");
        $__internal_60f2ed305bc94fbb965fb14e6b3550e93d65e60e4b7d17e32416b446d0d95694->enter($__internal_60f2ed305bc94fbb965fb14e6b3550e93d65e60e4b7d17e32416b446d0d95694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_60f2ed305bc94fbb965fb14e6b3550e93d65e60e4b7d17e32416b446d0d95694->leave($__internal_60f2ed305bc94fbb965fb14e6b3550e93d65e60e4b7d17e32416b446d0d95694_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_66d63f3c93857bb37c3e67456fc9844ffdb74256ad4f8e768c028ccd2c7e75c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_5490f79e021fd74bc44551a04e9108c97035084febc97f344bd92f56a1461e18 = $this->env->getExtension("native_profiler");
        $__internal_5490f79e021fd74bc44551a04e9108c97035084febc97f344bd92f56a1461e18->enter($__internal_5490f79e021fd74bc44551a04e9108c97035084febc97f344bd92f56a1461e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5490f79e021fd74bc44551a04e9108c97035084febc97f344bd92f56a1461e18->leave($__internal_5490f79e021fd74bc44551a04e9108c97035084febc97f344bd92f56a1461e18_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c839cd132193f1790c3de3b5d75c7995dc4055e3595938637548c8c8980c590f = $this->env->getExtension("native_profiler");
        $__internal_c839cd132193f1790c3de3b5d75c7995dc4055e3595938637548c8c8980c590f->enter($__internal_c839cd132193f1790c3de3b5d75c7995dc4055e3595938637548c8c8980c590f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 3)->display($context);
        
        $__internal_c839cd132193f1790c3de3b5d75c7995dc4055e3595938637548c8c8980c590f->leave($__internal_c839cd132193f1790c3de3b5d75c7995dc4055e3595938637548c8c8980c590f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

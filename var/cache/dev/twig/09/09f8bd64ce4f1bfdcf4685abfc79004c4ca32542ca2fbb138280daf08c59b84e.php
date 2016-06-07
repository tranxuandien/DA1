<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_7319ea2aeb1b41c6f1491ddac38f3ba9bcbabd3966f1a1c685c52bb9dda969bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_7acbb6c4b14a207834bc884e276ec3e60b08b1088d009377f1a6586a6ecc2b6c = $this->env->getExtension("native_profiler");
        $__internal_7acbb6c4b14a207834bc884e276ec3e60b08b1088d009377f1a6586a6ecc2b6c->enter($__internal_7acbb6c4b14a207834bc884e276ec3e60b08b1088d009377f1a6586a6ecc2b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7acbb6c4b14a207834bc884e276ec3e60b08b1088d009377f1a6586a6ecc2b6c->leave($__internal_7acbb6c4b14a207834bc884e276ec3e60b08b1088d009377f1a6586a6ecc2b6c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a505c98a4ca19d02b0773fd1405858a90f0a52630d136afa268662aba9f30951 = $this->env->getExtension("native_profiler");
        $__internal_a505c98a4ca19d02b0773fd1405858a90f0a52630d136afa268662aba9f30951->enter($__internal_a505c98a4ca19d02b0773fd1405858a90f0a52630d136afa268662aba9f30951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a505c98a4ca19d02b0773fd1405858a90f0a52630d136afa268662aba9f30951->leave($__internal_a505c98a4ca19d02b0773fd1405858a90f0a52630d136afa268662aba9f30951_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

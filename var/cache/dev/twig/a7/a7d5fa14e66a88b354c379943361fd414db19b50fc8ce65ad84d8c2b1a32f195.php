<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f6b9773a0d3b8165c0c7775a9df5993d346e1e7ccbf2e6a0a3ecd0f5ab901482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_54ec8ff5cd41b655e991fd993b29d85b50efdb3017f37f261b6a0c14a1f65b05 = $this->env->getExtension("native_profiler");
        $__internal_54ec8ff5cd41b655e991fd993b29d85b50efdb3017f37f261b6a0c14a1f65b05->enter($__internal_54ec8ff5cd41b655e991fd993b29d85b50efdb3017f37f261b6a0c14a1f65b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54ec8ff5cd41b655e991fd993b29d85b50efdb3017f37f261b6a0c14a1f65b05->leave($__internal_54ec8ff5cd41b655e991fd993b29d85b50efdb3017f37f261b6a0c14a1f65b05_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41a1d1d2c1a620dc093848ef7d26b2cec600c87ffad94c251f12071706e93596 = $this->env->getExtension("native_profiler");
        $__internal_41a1d1d2c1a620dc093848ef7d26b2cec600c87ffad94c251f12071706e93596->enter($__internal_41a1d1d2c1a620dc093848ef7d26b2cec600c87ffad94c251f12071706e93596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_41a1d1d2c1a620dc093848ef7d26b2cec600c87ffad94c251f12071706e93596->leave($__internal_41a1d1d2c1a620dc093848ef7d26b2cec600c87ffad94c251f12071706e93596_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

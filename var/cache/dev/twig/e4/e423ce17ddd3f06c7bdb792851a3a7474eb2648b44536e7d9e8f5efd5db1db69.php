<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_2678fd2e5b853a0ef494356154821b6ef97e23a4a424bab739a586f6f96116ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_66ffe6f506b793cfc9c3e011b47a7f19014e6a7a9f2c602905a132d513585852 = $this->env->getExtension("native_profiler");
        $__internal_66ffe6f506b793cfc9c3e011b47a7f19014e6a7a9f2c602905a132d513585852->enter($__internal_66ffe6f506b793cfc9c3e011b47a7f19014e6a7a9f2c602905a132d513585852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66ffe6f506b793cfc9c3e011b47a7f19014e6a7a9f2c602905a132d513585852->leave($__internal_66ffe6f506b793cfc9c3e011b47a7f19014e6a7a9f2c602905a132d513585852_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5756170bd380255a196467c32f3a95272a7d561b6032fc8d0f52e79ee1f492b = $this->env->getExtension("native_profiler");
        $__internal_e5756170bd380255a196467c32f3a95272a7d561b6032fc8d0f52e79ee1f492b->enter($__internal_e5756170bd380255a196467c32f3a95272a7d561b6032fc8d0f52e79ee1f492b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_e5756170bd380255a196467c32f3a95272a7d561b6032fc8d0f52e79ee1f492b->leave($__internal_e5756170bd380255a196467c32f3a95272a7d561b6032fc8d0f52e79ee1f492b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_125a8af4faaa268fcde085cf3ab5c327d1da5739c489f14f52a50955192e0fb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_d3cfd25a11061bc091fc613c4244d5e83b616baa4f111bf696f0857391776d7b = $this->env->getExtension("native_profiler");
        $__internal_d3cfd25a11061bc091fc613c4244d5e83b616baa4f111bf696f0857391776d7b->enter($__internal_d3cfd25a11061bc091fc613c4244d5e83b616baa4f111bf696f0857391776d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3cfd25a11061bc091fc613c4244d5e83b616baa4f111bf696f0857391776d7b->leave($__internal_d3cfd25a11061bc091fc613c4244d5e83b616baa4f111bf696f0857391776d7b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fce311f5c216ae22594c46bba68f54c1e181b16397b6404c596d052c5d98717a = $this->env->getExtension("native_profiler");
        $__internal_fce311f5c216ae22594c46bba68f54c1e181b16397b6404c596d052c5d98717a->enter($__internal_fce311f5c216ae22594c46bba68f54c1e181b16397b6404c596d052c5d98717a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_fce311f5c216ae22594c46bba68f54c1e181b16397b6404c596d052c5d98717a->leave($__internal_fce311f5c216ae22594c46bba68f54c1e181b16397b6404c596d052c5d98717a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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

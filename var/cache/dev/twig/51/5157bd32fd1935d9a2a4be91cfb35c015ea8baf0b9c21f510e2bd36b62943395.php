<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_17963570b2fcbefa133dc718852e5560650aef879c5c33cf054d8405376962cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_40282f729153aa280c129b4765072b416e6f8f64f6f5b750c560593895be95f7 = $this->env->getExtension("native_profiler");
        $__internal_40282f729153aa280c129b4765072b416e6f8f64f6f5b750c560593895be95f7->enter($__internal_40282f729153aa280c129b4765072b416e6f8f64f6f5b750c560593895be95f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40282f729153aa280c129b4765072b416e6f8f64f6f5b750c560593895be95f7->leave($__internal_40282f729153aa280c129b4765072b416e6f8f64f6f5b750c560593895be95f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2600c0ff9ae7c504f6f90671d9929b0104e9c31407c3d57b9e9b67320c89993f = $this->env->getExtension("native_profiler");
        $__internal_2600c0ff9ae7c504f6f90671d9929b0104e9c31407c3d57b9e9b67320c89993f->enter($__internal_2600c0ff9ae7c504f6f90671d9929b0104e9c31407c3d57b9e9b67320c89993f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_2600c0ff9ae7c504f6f90671d9929b0104e9c31407c3d57b9e9b67320c89993f->leave($__internal_2600c0ff9ae7c504f6f90671d9929b0104e9c31407c3d57b9e9b67320c89993f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

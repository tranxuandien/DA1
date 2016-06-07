<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_8c3314dfa37ba75e5e64985f0f6c12694a7e2e0b473d9c36d7c29059e28f9591 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_b3c86da094e35f8779795e08537502659014074e1d7e6a2ac835eb82e58cb2c6 = $this->env->getExtension("native_profiler");
        $__internal_b3c86da094e35f8779795e08537502659014074e1d7e6a2ac835eb82e58cb2c6->enter($__internal_b3c86da094e35f8779795e08537502659014074e1d7e6a2ac835eb82e58cb2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3c86da094e35f8779795e08537502659014074e1d7e6a2ac835eb82e58cb2c6->leave($__internal_b3c86da094e35f8779795e08537502659014074e1d7e6a2ac835eb82e58cb2c6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb5dd443e17a1dc0ee40c4276e922497313bbbcb6b7dd0bced588da4bcee4733 = $this->env->getExtension("native_profiler");
        $__internal_bb5dd443e17a1dc0ee40c4276e922497313bbbcb6b7dd0bced588da4bcee4733->enter($__internal_bb5dd443e17a1dc0ee40c4276e922497313bbbcb6b7dd0bced588da4bcee4733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_bb5dd443e17a1dc0ee40c4276e922497313bbbcb6b7dd0bced588da4bcee4733->leave($__internal_bb5dd443e17a1dc0ee40c4276e922497313bbbcb6b7dd0bced588da4bcee4733_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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

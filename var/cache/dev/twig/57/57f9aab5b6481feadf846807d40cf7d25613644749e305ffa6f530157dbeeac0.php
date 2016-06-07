<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_cb29f94904b53b2d4953bba1825109ceef286569d002bc9e4b7f2baf34797db8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_66266e3d6c461bcde9ab24da873ae30d3f5ea9ed8d73fd6a67d8fccf0929c432 = $this->env->getExtension("native_profiler");
        $__internal_66266e3d6c461bcde9ab24da873ae30d3f5ea9ed8d73fd6a67d8fccf0929c432->enter($__internal_66266e3d6c461bcde9ab24da873ae30d3f5ea9ed8d73fd6a67d8fccf0929c432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66266e3d6c461bcde9ab24da873ae30d3f5ea9ed8d73fd6a67d8fccf0929c432->leave($__internal_66266e3d6c461bcde9ab24da873ae30d3f5ea9ed8d73fd6a67d8fccf0929c432_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_469f76e3b98f7c9d4c7a331ec63f843f1a40bf6b115519fc5218aff47c267ce0 = $this->env->getExtension("native_profiler");
        $__internal_469f76e3b98f7c9d4c7a331ec63f843f1a40bf6b115519fc5218aff47c267ce0->enter($__internal_469f76e3b98f7c9d4c7a331ec63f843f1a40bf6b115519fc5218aff47c267ce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_469f76e3b98f7c9d4c7a331ec63f843f1a40bf6b115519fc5218aff47c267ce0->leave($__internal_469f76e3b98f7c9d4c7a331ec63f843f1a40bf6b115519fc5218aff47c267ce0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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

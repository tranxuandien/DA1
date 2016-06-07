<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_33ad40b5b15b486a95f2019cb9507621e1f1f7b49cf541969181016efb28fbaf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_3bbd4becd3b947e53e0ddb688c4f36820078d3927ecb60f0badaa6dadf9dbb3e = $this->env->getExtension("native_profiler");
        $__internal_3bbd4becd3b947e53e0ddb688c4f36820078d3927ecb60f0badaa6dadf9dbb3e->enter($__internal_3bbd4becd3b947e53e0ddb688c4f36820078d3927ecb60f0badaa6dadf9dbb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bbd4becd3b947e53e0ddb688c4f36820078d3927ecb60f0badaa6dadf9dbb3e->leave($__internal_3bbd4becd3b947e53e0ddb688c4f36820078d3927ecb60f0badaa6dadf9dbb3e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7759cc3395407d12ce54b3c85edd0693a6be770b12ddf45e90fda93c614ef004 = $this->env->getExtension("native_profiler");
        $__internal_7759cc3395407d12ce54b3c85edd0693a6be770b12ddf45e90fda93c614ef004->enter($__internal_7759cc3395407d12ce54b3c85edd0693a6be770b12ddf45e90fda93c614ef004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_7759cc3395407d12ce54b3c85edd0693a6be770b12ddf45e90fda93c614ef004->leave($__internal_7759cc3395407d12ce54b3c85edd0693a6be770b12ddf45e90fda93c614ef004_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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

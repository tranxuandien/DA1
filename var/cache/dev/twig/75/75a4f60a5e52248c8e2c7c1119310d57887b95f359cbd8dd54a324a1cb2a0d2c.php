<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_763cdf32b449dd342493d94a977123426e09e6f112ceee80d97fc9696a3804e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_fc26c55e220256382ec29c2b0d7de5f0d4036326542c4590a5a968d4756b087e = $this->env->getExtension("native_profiler");
        $__internal_fc26c55e220256382ec29c2b0d7de5f0d4036326542c4590a5a968d4756b087e->enter($__internal_fc26c55e220256382ec29c2b0d7de5f0d4036326542c4590a5a968d4756b087e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc26c55e220256382ec29c2b0d7de5f0d4036326542c4590a5a968d4756b087e->leave($__internal_fc26c55e220256382ec29c2b0d7de5f0d4036326542c4590a5a968d4756b087e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67e25d76e639e0a06e800a90626db037b72063329c3ecc3cd13a1ecd90b7c93a = $this->env->getExtension("native_profiler");
        $__internal_67e25d76e639e0a06e800a90626db037b72063329c3ecc3cd13a1ecd90b7c93a->enter($__internal_67e25d76e639e0a06e800a90626db037b72063329c3ecc3cd13a1ecd90b7c93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_67e25d76e639e0a06e800a90626db037b72063329c3ecc3cd13a1ecd90b7c93a->leave($__internal_67e25d76e639e0a06e800a90626db037b72063329c3ecc3cd13a1ecd90b7c93a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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

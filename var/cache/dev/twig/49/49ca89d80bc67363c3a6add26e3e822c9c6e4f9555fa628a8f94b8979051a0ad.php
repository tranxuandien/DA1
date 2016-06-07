<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_b439ff2ac5e4e09f1e78630702e09df4e4a75094dbc288c364187ed71ac3173d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_144d7c7cc348df1349e28ee1f91195b1e48e0a6e959707c8c3cf72ddb78c1a3c = $this->env->getExtension("native_profiler");
        $__internal_144d7c7cc348df1349e28ee1f91195b1e48e0a6e959707c8c3cf72ddb78c1a3c->enter($__internal_144d7c7cc348df1349e28ee1f91195b1e48e0a6e959707c8c3cf72ddb78c1a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_144d7c7cc348df1349e28ee1f91195b1e48e0a6e959707c8c3cf72ddb78c1a3c->leave($__internal_144d7c7cc348df1349e28ee1f91195b1e48e0a6e959707c8c3cf72ddb78c1a3c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8235f327d4022a32c856c6c16dea0bfe98442bc7352b547f3047714518c4a737 = $this->env->getExtension("native_profiler");
        $__internal_8235f327d4022a32c856c6c16dea0bfe98442bc7352b547f3047714518c4a737->enter($__internal_8235f327d4022a32c856c6c16dea0bfe98442bc7352b547f3047714518c4a737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_8235f327d4022a32c856c6c16dea0bfe98442bc7352b547f3047714518c4a737->leave($__internal_8235f327d4022a32c856c6c16dea0bfe98442bc7352b547f3047714518c4a737_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

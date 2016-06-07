<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_36de7d0c52ddbc194d1ff00252aa9a2dbb44a499dc23f9abf84cb04f9503bc3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_e0a778f1b8c7661ddcfab6b77863501961acea6430e3d0de41e2f766cfd5d5b0 = $this->env->getExtension("native_profiler");
        $__internal_e0a778f1b8c7661ddcfab6b77863501961acea6430e3d0de41e2f766cfd5d5b0->enter($__internal_e0a778f1b8c7661ddcfab6b77863501961acea6430e3d0de41e2f766cfd5d5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0a778f1b8c7661ddcfab6b77863501961acea6430e3d0de41e2f766cfd5d5b0->leave($__internal_e0a778f1b8c7661ddcfab6b77863501961acea6430e3d0de41e2f766cfd5d5b0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e4420c93c0f5f51b64155b0db73c6568806db030f1f7aa7e365522ab12c23b16 = $this->env->getExtension("native_profiler");
        $__internal_e4420c93c0f5f51b64155b0db73c6568806db030f1f7aa7e365522ab12c23b16->enter($__internal_e4420c93c0f5f51b64155b0db73c6568806db030f1f7aa7e365522ab12c23b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_e4420c93c0f5f51b64155b0db73c6568806db030f1f7aa7e365522ab12c23b16->leave($__internal_e4420c93c0f5f51b64155b0db73c6568806db030f1f7aa7e365522ab12c23b16_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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

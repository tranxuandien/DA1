<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_cd6e842567800c1ee91822c1935f14289a191c5761c8ec75b67df28fa7c33b00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a934e06f51cd7a06a1c45957172be020ad69e3bcf0597bcc9d12b374a9989106 = $this->env->getExtension("native_profiler");
        $__internal_a934e06f51cd7a06a1c45957172be020ad69e3bcf0597bcc9d12b374a9989106->enter($__internal_a934e06f51cd7a06a1c45957172be020ad69e3bcf0597bcc9d12b374a9989106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a934e06f51cd7a06a1c45957172be020ad69e3bcf0597bcc9d12b374a9989106->leave($__internal_a934e06f51cd7a06a1c45957172be020ad69e3bcf0597bcc9d12b374a9989106_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b19dc3451462723ee8d51cc60898e2185e3e46bf9f241416cbddbeffdeacd8be = $this->env->getExtension("native_profiler");
        $__internal_b19dc3451462723ee8d51cc60898e2185e3e46bf9f241416cbddbeffdeacd8be->enter($__internal_b19dc3451462723ee8d51cc60898e2185e3e46bf9f241416cbddbeffdeacd8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b19dc3451462723ee8d51cc60898e2185e3e46bf9f241416cbddbeffdeacd8be->leave($__internal_b19dc3451462723ee8d51cc60898e2185e3e46bf9f241416cbddbeffdeacd8be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

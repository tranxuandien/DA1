<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_5ce98c056dd043a3e293dcfaa828d1b503155664a3c859593eccc324f2d55bd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_c18ad8474c30703472958993c77497c6be55090acfb8e505826351808b214a6f = $this->env->getExtension("native_profiler");
        $__internal_c18ad8474c30703472958993c77497c6be55090acfb8e505826351808b214a6f->enter($__internal_c18ad8474c30703472958993c77497c6be55090acfb8e505826351808b214a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c18ad8474c30703472958993c77497c6be55090acfb8e505826351808b214a6f->leave($__internal_c18ad8474c30703472958993c77497c6be55090acfb8e505826351808b214a6f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df40b2e9715d7f676932ff24c3f1cd7c5b58cdf938298b40809a65ab18b1dbd4 = $this->env->getExtension("native_profiler");
        $__internal_df40b2e9715d7f676932ff24c3f1cd7c5b58cdf938298b40809a65ab18b1dbd4->enter($__internal_df40b2e9715d7f676932ff24c3f1cd7c5b58cdf938298b40809a65ab18b1dbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_df40b2e9715d7f676932ff24c3f1cd7c5b58cdf938298b40809a65ab18b1dbd4->leave($__internal_df40b2e9715d7f676932ff24c3f1cd7c5b58cdf938298b40809a65ab18b1dbd4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

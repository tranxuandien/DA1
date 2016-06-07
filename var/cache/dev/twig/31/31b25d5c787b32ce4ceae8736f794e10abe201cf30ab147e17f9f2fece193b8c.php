<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_458ec2bca1e00842298227b374ec28ef88b47c4d79a16d45869a8ab4795ff2da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_199ead0726390a7beed83c643c2a3cd67c4fb5bb84c90ab7b413987b205fdad9 = $this->env->getExtension("native_profiler");
        $__internal_199ead0726390a7beed83c643c2a3cd67c4fb5bb84c90ab7b413987b205fdad9->enter($__internal_199ead0726390a7beed83c643c2a3cd67c4fb5bb84c90ab7b413987b205fdad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_199ead0726390a7beed83c643c2a3cd67c4fb5bb84c90ab7b413987b205fdad9->leave($__internal_199ead0726390a7beed83c643c2a3cd67c4fb5bb84c90ab7b413987b205fdad9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c3b597f750f0652769bde9ccd4113e6c661e67429f3d66e574602e9b886c56c9 = $this->env->getExtension("native_profiler");
        $__internal_c3b597f750f0652769bde9ccd4113e6c661e67429f3d66e574602e9b886c56c9->enter($__internal_c3b597f750f0652769bde9ccd4113e6c661e67429f3d66e574602e9b886c56c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_c3b597f750f0652769bde9ccd4113e6c661e67429f3d66e574602e9b886c56c9->leave($__internal_c3b597f750f0652769bde9ccd4113e6c661e67429f3d66e574602e9b886c56c9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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

<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_064c5bc62fc154ac0b5fa2b8eee9304898cf7b011389df8b5ca71490b67637ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_149594a74b77bb7fea5d45937ec905979016b3e3f7f93e012a936ba2c4260eef = $this->env->getExtension("native_profiler");
        $__internal_149594a74b77bb7fea5d45937ec905979016b3e3f7f93e012a936ba2c4260eef->enter($__internal_149594a74b77bb7fea5d45937ec905979016b3e3f7f93e012a936ba2c4260eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_149594a74b77bb7fea5d45937ec905979016b3e3f7f93e012a936ba2c4260eef->leave($__internal_149594a74b77bb7fea5d45937ec905979016b3e3f7f93e012a936ba2c4260eef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d023262ecfaad3def5e17130df2662d7daa9d90e8e101db6a3d10f18be867664 = $this->env->getExtension("native_profiler");
        $__internal_d023262ecfaad3def5e17130df2662d7daa9d90e8e101db6a3d10f18be867664->enter($__internal_d023262ecfaad3def5e17130df2662d7daa9d90e8e101db6a3d10f18be867664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_d023262ecfaad3def5e17130df2662d7daa9d90e8e101db6a3d10f18be867664->leave($__internal_d023262ecfaad3def5e17130df2662d7daa9d90e8e101db6a3d10f18be867664_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

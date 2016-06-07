<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_bf7960c718cc79765c566b76cbf66d0d9cbd15ab47d27d64fb2e7209f35b692f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_3372731c92aa58667ea14991a39c8ae843a1f85b9edbee613ec283e735a537f0 = $this->env->getExtension("native_profiler");
        $__internal_3372731c92aa58667ea14991a39c8ae843a1f85b9edbee613ec283e735a537f0->enter($__internal_3372731c92aa58667ea14991a39c8ae843a1f85b9edbee613ec283e735a537f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3372731c92aa58667ea14991a39c8ae843a1f85b9edbee613ec283e735a537f0->leave($__internal_3372731c92aa58667ea14991a39c8ae843a1f85b9edbee613ec283e735a537f0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1c12126c68b6b7811a71dd17a888d60d0316aa29aac9328db8225e970df6c4cd = $this->env->getExtension("native_profiler");
        $__internal_1c12126c68b6b7811a71dd17a888d60d0316aa29aac9328db8225e970df6c4cd->enter($__internal_1c12126c68b6b7811a71dd17a888d60d0316aa29aac9328db8225e970df6c4cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1c12126c68b6b7811a71dd17a888d60d0316aa29aac9328db8225e970df6c4cd->leave($__internal_1c12126c68b6b7811a71dd17a888d60d0316aa29aac9328db8225e970df6c4cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

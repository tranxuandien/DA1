<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_99dcdff44b4e99369d98b38a23aba19de65efc48d10e828f18b96b5f4008bc9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_e89ea215cb759abce0deb75b2d34ed2e7dcdf4353d639b5040a2e5c33cbca246 = $this->env->getExtension("native_profiler");
        $__internal_e89ea215cb759abce0deb75b2d34ed2e7dcdf4353d639b5040a2e5c33cbca246->enter($__internal_e89ea215cb759abce0deb75b2d34ed2e7dcdf4353d639b5040a2e5c33cbca246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e89ea215cb759abce0deb75b2d34ed2e7dcdf4353d639b5040a2e5c33cbca246->leave($__internal_e89ea215cb759abce0deb75b2d34ed2e7dcdf4353d639b5040a2e5c33cbca246_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b742ee90610fdc78b6e693cd20c856c139446e9ef47dc67a4a892716066c7172 = $this->env->getExtension("native_profiler");
        $__internal_b742ee90610fdc78b6e693cd20c856c139446e9ef47dc67a4a892716066c7172->enter($__internal_b742ee90610fdc78b6e693cd20c856c139446e9ef47dc67a4a892716066c7172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b742ee90610fdc78b6e693cd20c856c139446e9ef47dc67a4a892716066c7172->leave($__internal_b742ee90610fdc78b6e693cd20c856c139446e9ef47dc67a4a892716066c7172_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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

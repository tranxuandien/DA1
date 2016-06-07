<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_733ce509a2f8371f8b5b6b89e2f447af8297dd6bdcfb5e14734d8f361bc887d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_ae4bbf77bac96d30cc1cc96355ceee6a3f96a8bfd4259bd8e964bdb099856a05 = $this->env->getExtension("native_profiler");
        $__internal_ae4bbf77bac96d30cc1cc96355ceee6a3f96a8bfd4259bd8e964bdb099856a05->enter($__internal_ae4bbf77bac96d30cc1cc96355ceee6a3f96a8bfd4259bd8e964bdb099856a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae4bbf77bac96d30cc1cc96355ceee6a3f96a8bfd4259bd8e964bdb099856a05->leave($__internal_ae4bbf77bac96d30cc1cc96355ceee6a3f96a8bfd4259bd8e964bdb099856a05_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35907c594e6fdc92c5d223e2fe4c3e910e4ae0f5bb9f4a3e69d076d8dc99c7cd = $this->env->getExtension("native_profiler");
        $__internal_35907c594e6fdc92c5d223e2fe4c3e910e4ae0f5bb9f4a3e69d076d8dc99c7cd->enter($__internal_35907c594e6fdc92c5d223e2fe4c3e910e4ae0f5bb9f4a3e69d076d8dc99c7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_35907c594e6fdc92c5d223e2fe4c3e910e4ae0f5bb9f4a3e69d076d8dc99c7cd->leave($__internal_35907c594e6fdc92c5d223e2fe4c3e910e4ae0f5bb9f4a3e69d076d8dc99c7cd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */

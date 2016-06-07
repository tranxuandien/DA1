<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_e192cf866d72f76734165539c98b565cb8813d14110fd742ba7ebdcf8257b5df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_fe13004997e707617df2f84b4a0684aaadd7718085a8f42fc4f20411e8fce2f7 = $this->env->getExtension("native_profiler");
        $__internal_fe13004997e707617df2f84b4a0684aaadd7718085a8f42fc4f20411e8fce2f7->enter($__internal_fe13004997e707617df2f84b4a0684aaadd7718085a8f42fc4f20411e8fce2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe13004997e707617df2f84b4a0684aaadd7718085a8f42fc4f20411e8fce2f7->leave($__internal_fe13004997e707617df2f84b4a0684aaadd7718085a8f42fc4f20411e8fce2f7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5102dc0f5813736456d26a782bc5717c2db0f95e9286804e180f85ad034e243f = $this->env->getExtension("native_profiler");
        $__internal_5102dc0f5813736456d26a782bc5717c2db0f95e9286804e180f85ad034e243f->enter($__internal_5102dc0f5813736456d26a782bc5717c2db0f95e9286804e180f85ad034e243f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_5102dc0f5813736456d26a782bc5717c2db0f95e9286804e180f85ad034e243f->leave($__internal_5102dc0f5813736456d26a782bc5717c2db0f95e9286804e180f85ad034e243f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */

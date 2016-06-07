<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_2679d542b3cfe6ba6db0c7ca891d92a229a3dca03a28022a15dc8063121c0db0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_3ca7b6232f5c9a224c8b8352f579d466c061b5c275edff6b1f702bba2de72776 = $this->env->getExtension("native_profiler");
        $__internal_3ca7b6232f5c9a224c8b8352f579d466c061b5c275edff6b1f702bba2de72776->enter($__internal_3ca7b6232f5c9a224c8b8352f579d466c061b5c275edff6b1f702bba2de72776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ca7b6232f5c9a224c8b8352f579d466c061b5c275edff6b1f702bba2de72776->leave($__internal_3ca7b6232f5c9a224c8b8352f579d466c061b5c275edff6b1f702bba2de72776_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f61049009235bfb403d8292856beed0f694738728e7688086d0559a3c79f67ec = $this->env->getExtension("native_profiler");
        $__internal_f61049009235bfb403d8292856beed0f694738728e7688086d0559a3c79f67ec->enter($__internal_f61049009235bfb403d8292856beed0f694738728e7688086d0559a3c79f67ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_f61049009235bfb403d8292856beed0f694738728e7688086d0559a3c79f67ec->leave($__internal_f61049009235bfb403d8292856beed0f694738728e7688086d0559a3c79f67ec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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

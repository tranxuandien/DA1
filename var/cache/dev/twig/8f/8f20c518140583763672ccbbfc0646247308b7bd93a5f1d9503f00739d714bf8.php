<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_d83d96473f90e3a20fb1d3ff29f2e40de9e91e7d406a97c825a993f2011c0554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e8648ff983278d13baccd6e6b350c520c1d7c43dfbbfef9286e38f25c7f065e = $this->env->getExtension("native_profiler");
        $__internal_8e8648ff983278d13baccd6e6b350c520c1d7c43dfbbfef9286e38f25c7f065e->enter($__internal_8e8648ff983278d13baccd6e6b350c520c1d7c43dfbbfef9286e38f25c7f065e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8e8648ff983278d13baccd6e6b350c520c1d7c43dfbbfef9286e38f25c7f065e->leave($__internal_8e8648ff983278d13baccd6e6b350c520c1d7c43dfbbfef9286e38f25c7f065e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5629bb7a0e7e42bfe4043eb11358ff0e75fa547d9600009e07a13a71e9f25efa = $this->env->getExtension("native_profiler");
        $__internal_5629bb7a0e7e42bfe4043eb11358ff0e75fa547d9600009e07a13a71e9f25efa->enter($__internal_5629bb7a0e7e42bfe4043eb11358ff0e75fa547d9600009e07a13a71e9f25efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_5629bb7a0e7e42bfe4043eb11358ff0e75fa547d9600009e07a13a71e9f25efa->leave($__internal_5629bb7a0e7e42bfe4043eb11358ff0e75fa547d9600009e07a13a71e9f25efa_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e1f4c83fe568e7eb9d67bcb45ab242209765db74bbbc0c7ac29dc1fbeaa0f381 = $this->env->getExtension("native_profiler");
        $__internal_e1f4c83fe568e7eb9d67bcb45ab242209765db74bbbc0c7ac29dc1fbeaa0f381->enter($__internal_e1f4c83fe568e7eb9d67bcb45ab242209765db74bbbc0c7ac29dc1fbeaa0f381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e1f4c83fe568e7eb9d67bcb45ab242209765db74bbbc0c7ac29dc1fbeaa0f381->leave($__internal_e1f4c83fe568e7eb9d67bcb45ab242209765db74bbbc0c7ac29dc1fbeaa0f381_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5b341af6da5957793104ec5f544b536d9385b5c2a3af7548ed4e42d4259e55b8 = $this->env->getExtension("native_profiler");
        $__internal_5b341af6da5957793104ec5f544b536d9385b5c2a3af7548ed4e42d4259e55b8->enter($__internal_5b341af6da5957793104ec5f544b536d9385b5c2a3af7548ed4e42d4259e55b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5b341af6da5957793104ec5f544b536d9385b5c2a3af7548ed4e42d4259e55b8->leave($__internal_5b341af6da5957793104ec5f544b536d9385b5c2a3af7548ed4e42d4259e55b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */

<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_8ba710a572d722ed27aa5c1d19c013fadd064eda90619090a6e7edf3432dd283 extends Twig_Template
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
        $__internal_8e16d041e650082d1f313c8d57f7d65ad2bec28ffe5f6b30cca5310a1d81bb2d = $this->env->getExtension("native_profiler");
        $__internal_8e16d041e650082d1f313c8d57f7d65ad2bec28ffe5f6b30cca5310a1d81bb2d->enter($__internal_8e16d041e650082d1f313c8d57f7d65ad2bec28ffe5f6b30cca5310a1d81bb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8e16d041e650082d1f313c8d57f7d65ad2bec28ffe5f6b30cca5310a1d81bb2d->leave($__internal_8e16d041e650082d1f313c8d57f7d65ad2bec28ffe5f6b30cca5310a1d81bb2d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e1bc55cafc5f3feff03e777dd4f269d566ed428804110d9b216ffad722b7adda = $this->env->getExtension("native_profiler");
        $__internal_e1bc55cafc5f3feff03e777dd4f269d566ed428804110d9b216ffad722b7adda->enter($__internal_e1bc55cafc5f3feff03e777dd4f269d566ed428804110d9b216ffad722b7adda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e1bc55cafc5f3feff03e777dd4f269d566ed428804110d9b216ffad722b7adda->leave($__internal_e1bc55cafc5f3feff03e777dd4f269d566ed428804110d9b216ffad722b7adda_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_70590f2b4896afcf277e2d27685c6ca0cc35578830228468406f221af1d4af0b = $this->env->getExtension("native_profiler");
        $__internal_70590f2b4896afcf277e2d27685c6ca0cc35578830228468406f221af1d4af0b->enter($__internal_70590f2b4896afcf277e2d27685c6ca0cc35578830228468406f221af1d4af0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_70590f2b4896afcf277e2d27685c6ca0cc35578830228468406f221af1d4af0b->leave($__internal_70590f2b4896afcf277e2d27685c6ca0cc35578830228468406f221af1d4af0b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6d2718df9f9f2a6db27fc98ec50945eb57f4fb4a2b1350ce3c6174ec7e9659a1 = $this->env->getExtension("native_profiler");
        $__internal_6d2718df9f9f2a6db27fc98ec50945eb57f4fb4a2b1350ce3c6174ec7e9659a1->enter($__internal_6d2718df9f9f2a6db27fc98ec50945eb57f4fb4a2b1350ce3c6174ec7e9659a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6d2718df9f9f2a6db27fc98ec50945eb57f4fb4a2b1350ce3c6174ec7e9659a1->leave($__internal_6d2718df9f9f2a6db27fc98ec50945eb57f4fb4a2b1350ce3c6174ec7e9659a1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */

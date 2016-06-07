<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_d370aac9c6ef168c142375f25df6a23cc5c015fa966e9b179dcd83be7998a13d extends Twig_Template
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
        $__internal_993156c599a37834dd497467768fd783e7e0a0982638d98cd51a5cc11aa4f3d8 = $this->env->getExtension("native_profiler");
        $__internal_993156c599a37834dd497467768fd783e7e0a0982638d98cd51a5cc11aa4f3d8->enter($__internal_993156c599a37834dd497467768fd783e7e0a0982638d98cd51a5cc11aa4f3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_993156c599a37834dd497467768fd783e7e0a0982638d98cd51a5cc11aa4f3d8->leave($__internal_993156c599a37834dd497467768fd783e7e0a0982638d98cd51a5cc11aa4f3d8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b866356ffa557ee767131c080d8b742c6afb3b27554831f1c9cf033c3781ffbd = $this->env->getExtension("native_profiler");
        $__internal_b866356ffa557ee767131c080d8b742c6afb3b27554831f1c9cf033c3781ffbd->enter($__internal_b866356ffa557ee767131c080d8b742c6afb3b27554831f1c9cf033c3781ffbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b866356ffa557ee767131c080d8b742c6afb3b27554831f1c9cf033c3781ffbd->leave($__internal_b866356ffa557ee767131c080d8b742c6afb3b27554831f1c9cf033c3781ffbd_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8f00b91eedcf7fd4578e9bfb1d7e8b6b0cf5e33f962c303730a11da4b65d171b = $this->env->getExtension("native_profiler");
        $__internal_8f00b91eedcf7fd4578e9bfb1d7e8b6b0cf5e33f962c303730a11da4b65d171b->enter($__internal_8f00b91eedcf7fd4578e9bfb1d7e8b6b0cf5e33f962c303730a11da4b65d171b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8f00b91eedcf7fd4578e9bfb1d7e8b6b0cf5e33f962c303730a11da4b65d171b->leave($__internal_8f00b91eedcf7fd4578e9bfb1d7e8b6b0cf5e33f962c303730a11da4b65d171b_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c7d3b936135c8f388ab773a74bef9bbd8773c9bb7fca71e1a9b120e5753eaa9f = $this->env->getExtension("native_profiler");
        $__internal_c7d3b936135c8f388ab773a74bef9bbd8773c9bb7fca71e1a9b120e5753eaa9f->enter($__internal_c7d3b936135c8f388ab773a74bef9bbd8773c9bb7fca71e1a9b120e5753eaa9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c7d3b936135c8f388ab773a74bef9bbd8773c9bb7fca71e1a9b120e5753eaa9f->leave($__internal_c7d3b936135c8f388ab773a74bef9bbd8773c9bb7fca71e1a9b120e5753eaa9f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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

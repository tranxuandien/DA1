<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_e29ab1d72f39967b501cd605130ea3017acab33bf486fad13d6ae2eda58ad0b3 extends Twig_Template
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
        $__internal_5be86d6bdb4fc5e4d90acb8e047e0016dff0519c3fbfa4f78bbb4fbc8c5cca2b = $this->env->getExtension("native_profiler");
        $__internal_5be86d6bdb4fc5e4d90acb8e047e0016dff0519c3fbfa4f78bbb4fbc8c5cca2b->enter($__internal_5be86d6bdb4fc5e4d90acb8e047e0016dff0519c3fbfa4f78bbb4fbc8c5cca2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5be86d6bdb4fc5e4d90acb8e047e0016dff0519c3fbfa4f78bbb4fbc8c5cca2b->leave($__internal_5be86d6bdb4fc5e4d90acb8e047e0016dff0519c3fbfa4f78bbb4fbc8c5cca2b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a111d86ff79a72427452a0a9270e70326faabe1f567d599aaa299e83598f90fe = $this->env->getExtension("native_profiler");
        $__internal_a111d86ff79a72427452a0a9270e70326faabe1f567d599aaa299e83598f90fe->enter($__internal_a111d86ff79a72427452a0a9270e70326faabe1f567d599aaa299e83598f90fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a111d86ff79a72427452a0a9270e70326faabe1f567d599aaa299e83598f90fe->leave($__internal_a111d86ff79a72427452a0a9270e70326faabe1f567d599aaa299e83598f90fe_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f104575fd16e6b3d0fa4aba8df2824566032b012036b605e9b2a2dd727a5eb3a = $this->env->getExtension("native_profiler");
        $__internal_f104575fd16e6b3d0fa4aba8df2824566032b012036b605e9b2a2dd727a5eb3a->enter($__internal_f104575fd16e6b3d0fa4aba8df2824566032b012036b605e9b2a2dd727a5eb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f104575fd16e6b3d0fa4aba8df2824566032b012036b605e9b2a2dd727a5eb3a->leave($__internal_f104575fd16e6b3d0fa4aba8df2824566032b012036b605e9b2a2dd727a5eb3a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a38f6c0de9a9d21fffb84f659fbbae9e8989ab41776fd0968a058ff0d01faa10 = $this->env->getExtension("native_profiler");
        $__internal_a38f6c0de9a9d21fffb84f659fbbae9e8989ab41776fd0968a058ff0d01faa10->enter($__internal_a38f6c0de9a9d21fffb84f659fbbae9e8989ab41776fd0968a058ff0d01faa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a38f6c0de9a9d21fffb84f659fbbae9e8989ab41776fd0968a058ff0d01faa10->leave($__internal_a38f6c0de9a9d21fffb84f659fbbae9e8989ab41776fd0968a058ff0d01faa10_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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

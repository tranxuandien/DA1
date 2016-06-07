<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_7111a8425270c0df344b4f039d5f8216c30f98ec3fa7b59332fd6b71ead528cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7902203547264b57de5a4137996532cc9e6a5d85408e0589e651db586c174eaa = $this->env->getExtension("native_profiler");
        $__internal_7902203547264b57de5a4137996532cc9e6a5d85408e0589e651db586c174eaa->enter($__internal_7902203547264b57de5a4137996532cc9e6a5d85408e0589e651db586c174eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_7902203547264b57de5a4137996532cc9e6a5d85408e0589e651db586c174eaa->leave($__internal_7902203547264b57de5a4137996532cc9e6a5d85408e0589e651db586c174eaa_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <span class="label">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */

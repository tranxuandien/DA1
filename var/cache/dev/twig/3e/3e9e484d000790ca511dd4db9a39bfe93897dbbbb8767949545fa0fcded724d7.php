<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_bf508f1eb691f976ff5cf19353240385a2356ba3b3c6f88d0c20362a0bec842b extends Twig_Template
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
        $__internal_2c9824c2b3243be86ddffd0b30b17755733da0759fea1d70cbb0b8587c46dcac = $this->env->getExtension("native_profiler");
        $__internal_2c9824c2b3243be86ddffd0b30b17755733da0759fea1d70cbb0b8587c46dcac->enter($__internal_2c9824c2b3243be86ddffd0b30b17755733da0759fea1d70cbb0b8587c46dcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_2c9824c2b3243be86ddffd0b30b17755733da0759fea1d70cbb0b8587c46dcac->leave($__internal_2c9824c2b3243be86ddffd0b30b17755733da0759fea1d70cbb0b8587c46dcac_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
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

<?php

/* @EasyAdmin/default/label_empty.html.twig */
class __TwigTemplate_74fb562103f33678998bc8422da20d51656eac4d72141148bdc5248d0cf8c2ef extends Twig_Template
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
        $__internal_5783e3c4ca489a2784f6669dec8ffa43f8fc1a16798f2568d1152dcd3ad05f4b = $this->env->getExtension("native_profiler");
        $__internal_5783e3c4ca489a2784f6669dec8ffa43f8fc1a16798f2568d1152dcd3ad05f4b->enter($__internal_5783e3c4ca489a2784f6669dec8ffa43f8fc1a16798f2568d1152dcd3ad05f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_5783e3c4ca489a2784f6669dec8ffa43f8fc1a16798f2568d1152dcd3ad05f4b->leave($__internal_5783e3c4ca489a2784f6669dec8ffa43f8fc1a16798f2568d1152dcd3ad05f4b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_empty.html.twig";
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
/* <span class="label label-empty">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */

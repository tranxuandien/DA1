<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_5a864ca775a50c9eceb3d53d4c5e2507627a300c24705135335a1d91aab74952 extends Twig_Template
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
        $__internal_8b8137a33c1ce7fbf07438c8fae9936ca57b98e6a182a2149490ca84f2573adb = $this->env->getExtension("native_profiler");
        $__internal_8b8137a33c1ce7fbf07438c8fae9936ca57b98e6a182a2149490ca84f2573adb->enter($__internal_8b8137a33c1ce7fbf07438c8fae9936ca57b98e6a182a2149490ca84f2573adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8b8137a33c1ce7fbf07438c8fae9936ca57b98e6a182a2149490ca84f2573adb->leave($__internal_8b8137a33c1ce7fbf07438c8fae9936ca57b98e6a182a2149490ca84f2573adb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

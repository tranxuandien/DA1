<?php

/* @EasyAdmin/default/field_tel.html.twig */
class __TwigTemplate_e1c37467552214e223a793a153ef775dd4cc20b93322ae6db47972e1d514f730 extends Twig_Template
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
        $__internal_91fb55e6b57eda3ed0c53ea5c12d9c029af0336f1379b3f93c1e63d3e8d49cc8 = $this->env->getExtension("native_profiler");
        $__internal_91fb55e6b57eda3ed0c53ea5c12d9c029af0336f1379b3f93c1e63d3e8d49cc8->enter($__internal_91fb55e6b57eda3ed0c53ea5c12d9c029af0336f1379b3f93c1e63d3e8d49cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_91fb55e6b57eda3ed0c53ea5c12d9c029af0336f1379b3f93c1e63d3e8d49cc8->leave($__internal_91fb55e6b57eda3ed0c53ea5c12d9c029af0336f1379b3f93c1e63d3e8d49cc8_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_tel.html.twig";
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
/* <a href="tel:{{ value }}">{{ value }}</a>*/
/* */

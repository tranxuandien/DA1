<?php

/* @EasyAdmin/default/field_smallint.html.twig */
class __TwigTemplate_806059a9650511cd6e3e3d6d471ddfd471da96316a06082433ffd1bfcddd4d65 extends Twig_Template
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
        $__internal_d18ef0c86018df68ffa2a957955168f6a6bd893c249075189d546014192cf235 = $this->env->getExtension("native_profiler");
        $__internal_d18ef0c86018df68ffa2a957955168f6a6bd893c249075189d546014192cf235->enter($__internal_d18ef0c86018df68ffa2a957955168f6a6bd893c249075189d546014192cf235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_smallint.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_d18ef0c86018df68ffa2a957955168f6a6bd893c249075189d546014192cf235->leave($__internal_d18ef0c86018df68ffa2a957955168f6a6bd893c249075189d546014192cf235_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_smallint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if field_options.format %}*/
/*     {{ field_options.format|format(value) }}*/
/* {% else %}*/
/*     {{ value|number_format }}*/
/* {% endif %}*/
/* */

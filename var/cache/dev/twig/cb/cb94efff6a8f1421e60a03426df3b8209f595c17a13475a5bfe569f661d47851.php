<?php

/* @EasyAdmin/default/field_float.html.twig */
class __TwigTemplate_ba4e5c1b81f4fd2796c60dfbb59547724c300b78878f37e306b68463c84514b1 extends Twig_Template
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
        $__internal_003ade128e827a2f793fdfe9b84b896f26a6941cc9953236016a674e6d470d08 = $this->env->getExtension("native_profiler");
        $__internal_003ade128e827a2f793fdfe9b84b896f26a6941cc9953236016a674e6d470d08->enter($__internal_003ade128e827a2f793fdfe9b84b896f26a6941cc9953236016a674e6d470d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_float.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_003ade128e827a2f793fdfe9b84b896f26a6941cc9953236016a674e6d470d08->leave($__internal_003ade128e827a2f793fdfe9b84b896f26a6941cc9953236016a674e6d470d08_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_float.html.twig";
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
/*     {{ value|number_format(2) }}*/
/* {% endif %}*/
/* */

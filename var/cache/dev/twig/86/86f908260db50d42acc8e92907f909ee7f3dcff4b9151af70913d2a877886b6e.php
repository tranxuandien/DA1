<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_014b7b3df66894fead3454fba1a30beb29a4f73c4e4446772ee83878a327ae87 extends Twig_Template
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
        $__internal_46b87fda6ac7254c7b7a6be0d4d5c259b1201b01adb0863726722c39c27c261a = $this->env->getExtension("native_profiler");
        $__internal_46b87fda6ac7254c7b7a6be0d4d5c259b1201b01adb0863726722c39c27c261a->enter($__internal_46b87fda6ac7254c7b7a6be0d4d5c259b1201b01adb0863726722c39c27c261a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
        
        $__internal_46b87fda6ac7254c7b7a6be0d4d5c259b1201b01adb0863726722c39c27c261a->leave($__internal_46b87fda6ac7254c7b7a6be0d4d5c259b1201b01adb0863726722c39c27c261a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
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

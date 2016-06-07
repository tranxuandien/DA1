<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_5008388844940bcdbda576e8607a9716fbbad20a356c102949005ca318294fdf extends Twig_Template
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
        $__internal_802ad9f61340a207e5d04fb9302523344ca3facf3b32a508f772f28bda06ea18 = $this->env->getExtension("native_profiler");
        $__internal_802ad9f61340a207e5d04fb9302523344ca3facf3b32a508f772f28bda06ea18->enter($__internal_802ad9f61340a207e5d04fb9302523344ca3facf3b32a508f772f28bda06ea18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
        
        $__internal_802ad9f61340a207e5d04fb9302523344ca3facf3b32a508f772f28bda06ea18->leave($__internal_802ad9f61340a207e5d04fb9302523344ca3facf3b32a508f772f28bda06ea18_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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

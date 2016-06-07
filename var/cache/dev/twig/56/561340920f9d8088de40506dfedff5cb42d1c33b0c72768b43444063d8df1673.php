<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_aad5acc9e1f6af428d58d8ce36d142157ebbe2b45e2353edd142da0beef1b5ad extends Twig_Template
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
        $__internal_ca877501113efa791ab4c43411127189b6b10457bdc04310130be912c2c7c627 = $this->env->getExtension("native_profiler");
        $__internal_ca877501113efa791ab4c43411127189b6b10457bdc04310130be912c2c7c627->enter($__internal_ca877501113efa791ab4c43411127189b6b10457bdc04310130be912c2c7c627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

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
        
        $__internal_ca877501113efa791ab4c43411127189b6b10457bdc04310130be912c2c7c627->leave($__internal_ca877501113efa791ab4c43411127189b6b10457bdc04310130be912c2c7c627_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
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

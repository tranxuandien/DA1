<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_36642d63a4b27a9943453378b6ac3febc92c3e9122ee76ea1aae3063c0a5835a extends Twig_Template
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
        $__internal_c77881705836f0d919c52c1ae4f52e9234cd337533de85d55d08ae28d87d5cfd = $this->env->getExtension("native_profiler");
        $__internal_c77881705836f0d919c52c1ae4f52e9234cd337533de85d55d08ae28d87d5cfd->enter($__internal_c77881705836f0d919c52c1ae4f52e9234cd337533de85d55d08ae28d87d5cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

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
        
        $__internal_c77881705836f0d919c52c1ae4f52e9234cd337533de85d55d08ae28d87d5cfd->leave($__internal_c77881705836f0d919c52c1ae4f52e9234cd337533de85d55d08ae28d87d5cfd_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
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

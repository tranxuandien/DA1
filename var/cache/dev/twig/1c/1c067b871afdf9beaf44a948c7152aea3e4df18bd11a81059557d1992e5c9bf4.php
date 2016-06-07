<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_6a24f9de2a995173afd04c2fd0536d18bb86629f64e413467593e3872708fb52 extends Twig_Template
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
        $__internal_444cb262ef63e2bf3488a50e96178fcaf79ea80fb9bf5e9bb9ab1e283a7b448f = $this->env->getExtension("native_profiler");
        $__internal_444cb262ef63e2bf3488a50e96178fcaf79ea80fb9bf5e9bb9ab1e283a7b448f->enter($__internal_444cb262ef63e2bf3488a50e96178fcaf79ea80fb9bf5e9bb9ab1e283a7b448f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_444cb262ef63e2bf3488a50e96178fcaf79ea80fb9bf5e9bb9ab1e283a7b448f->leave($__internal_444cb262ef63e2bf3488a50e96178fcaf79ea80fb9bf5e9bb9ab1e283a7b448f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
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
/* {% if view == 'show' %}*/
/*     {{ value }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate(7) }}*/
/* {% endif %}*/
/* */

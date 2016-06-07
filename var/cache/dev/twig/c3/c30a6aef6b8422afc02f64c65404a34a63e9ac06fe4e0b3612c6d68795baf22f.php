<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_76a598b481de77a5a63d3a44007eedd6c8232b4c2884b070f2ce1603ddb39296 extends Twig_Template
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
        $__internal_7fafacad1b9755de65709ac845b6987bac783a5018234bc9f3b0c935b4cff3a3 = $this->env->getExtension("native_profiler");
        $__internal_7fafacad1b9755de65709ac845b6987bac783a5018234bc9f3b0c935b4cff3a3->enter($__internal_7fafacad1b9755de65709ac845b6987bac783a5018234bc9f3b0c935b4cff3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_7fafacad1b9755de65709ac845b6987bac783a5018234bc9f3b0c935b4cff3a3->leave($__internal_7fafacad1b9755de65709ac845b6987bac783a5018234bc9f3b0c935b4cff3a3_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
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
/*     {{ value|nl2br }}*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate }}*/
/* {% endif %}*/
/* */

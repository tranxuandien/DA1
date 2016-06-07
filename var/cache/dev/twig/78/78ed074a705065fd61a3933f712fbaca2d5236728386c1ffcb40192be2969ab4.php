<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_f2dac80f79a7bb8af468114f48553fb1faed41dae1a0f262edd368cf9c31ce74 extends Twig_Template
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
        $__internal_7c2a0905dccb655c968bacec069b1e773d3c9bc1370ba88025858c8775973739 = $this->env->getExtension("native_profiler");
        $__internal_7c2a0905dccb655c968bacec069b1e773d3c9bc1370ba88025858c8775973739->enter($__internal_7c2a0905dccb655c968bacec069b1e773d3c9bc1370ba88025858c8775973739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_7c2a0905dccb655c968bacec069b1e773d3c9bc1370ba88025858c8775973739->leave($__internal_7c2a0905dccb655c968bacec069b1e773d3c9bc1370ba88025858c8775973739_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
/* <span class="label label-empty">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */

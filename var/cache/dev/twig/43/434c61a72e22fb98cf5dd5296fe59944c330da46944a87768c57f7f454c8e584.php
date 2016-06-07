<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_9f7a55b6533a21022c31e680cf4300036ce9ea18e98ea40c0f995f1343e546d1 extends Twig_Template
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
        $__internal_5a33cd3fb960511a0e01ae508e957dcc2323d874b40379d7cbd10d5f310ed771 = $this->env->getExtension("native_profiler");
        $__internal_5a33cd3fb960511a0e01ae508e957dcc2323d874b40379d7cbd10d5f310ed771->enter($__internal_5a33cd3fb960511a0e01ae508e957dcc2323d874b40379d7cbd10d5f310ed771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_5a33cd3fb960511a0e01ae508e957dcc2323d874b40379d7cbd10d5f310ed771->leave($__internal_5a33cd3fb960511a0e01ae508e957dcc2323d874b40379d7cbd10d5f310ed771_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* <span class="label label-danger" title="{{ 'label.inaccessible.explanation'|trans }}">*/
/*     {{ 'label.inaccessible'|trans }}*/
/* </span>*/
/* */

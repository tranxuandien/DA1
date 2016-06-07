<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_b899b3abb2da18d7193441ae425189e9ac47f88649660023594df77f22704e91 extends Twig_Template
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
        $__internal_8992a953dd6411ed7a3ee027050456a1436192cfd74f8129eae41396348ca7dd = $this->env->getExtension("native_profiler");
        $__internal_8992a953dd6411ed7a3ee027050456a1436192cfd74f8129eae41396348ca7dd->enter($__internal_8992a953dd6411ed7a3ee027050456a1436192cfd74f8129eae41396348ca7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_8992a953dd6411ed7a3ee027050456a1436192cfd74f8129eae41396348ca7dd->leave($__internal_8992a953dd6411ed7a3ee027050456a1436192cfd74f8129eae41396348ca7dd_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
/* <a href="tel:{{ value }}">{{ value }}</a>*/
/* */

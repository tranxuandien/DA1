<?php

/* EasyAdminBundle:default:field_url.html.twig */
class __TwigTemplate_958bc74b921a7aa84b7b4bf999870638e22028e435d53caab9597a93b1f8acb6 extends Twig_Template
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
        $__internal_3774e6f084897f1f5b923c3cff395b7fda4e39014aa72f57f22b0e404953d45b = $this->env->getExtension("native_profiler");
        $__internal_3774e6f084897f1f5b923c3cff395b7fda4e39014aa72f57f22b0e404953d45b->enter($__internal_3774e6f084897f1f5b923c3cff395b7fda4e39014aa72f57f22b0e404953d45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_url.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, twig_replace_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array("https://" => "", "http://" => ""))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_3774e6f084897f1f5b923c3cff395b7fda4e39014aa72f57f22b0e404953d45b->leave($__internal_3774e6f084897f1f5b923c3cff395b7fda4e39014aa72f57f22b0e404953d45b_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if view == 'show' %}*/
/*     <a target="_blank" href="{{ value }}">{{ value }}</a>*/
/* {% else %}*/
/*     <a target="_blank" href="{{ value }}">{{ value|replace({ 'https://': '', 'http://': '' })|easyadmin_truncate }}</a>*/
/* {% endif %}*/
/* */

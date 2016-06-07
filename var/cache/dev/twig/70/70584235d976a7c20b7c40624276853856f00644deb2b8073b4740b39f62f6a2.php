<?php

/* @EasyAdmin/default/field_url.html.twig */
class __TwigTemplate_bdf5758da67aeca1d2a5ee9db9106855318338606c55ae8ebd65d6d9ea668e3b extends Twig_Template
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
        $__internal_73654e697d769359c652deb6a45b0c3404927325171ad3bd24aaa3e8eac63cc3 = $this->env->getExtension("native_profiler");
        $__internal_73654e697d769359c652deb6a45b0c3404927325171ad3bd24aaa3e8eac63cc3->enter($__internal_73654e697d769359c652deb6a45b0c3404927325171ad3bd24aaa3e8eac63cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_url.html.twig"));

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
        
        $__internal_73654e697d769359c652deb6a45b0c3404927325171ad3bd24aaa3e8eac63cc3->leave($__internal_73654e697d769359c652deb6a45b0c3404927325171ad3bd24aaa3e8eac63cc3_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_url.html.twig";
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

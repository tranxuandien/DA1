<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_70ac3565fdb60ee9090e33623824920e5668a72168466be0c9b4dbb859866bf7 extends Twig_Template
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
        $__internal_9c42dc02bc9484bde450d8506e2fc8ae2ab4a2d1bdc168110cee848a527eb181 = $this->env->getExtension("native_profiler");
        $__internal_9c42dc02bc9484bde450d8506e2fc8ae2ab4a2d1bdc168110cee848a527eb181->enter($__internal_9c42dc02bc9484bde450d8506e2fc8ae2ab4a2d1bdc168110cee848a527eb181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if (((isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_9c42dc02bc9484bde450d8506e2fc8ae2ab4a2d1bdc168110cee848a527eb181->leave($__internal_9c42dc02bc9484bde450d8506e2fc8ae2ab4a2d1bdc168110cee848a527eb181_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
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
/*     <a href="mailto:{{ value }}">{{ value }}</a>*/
/* {% else %}*/
/*     <a href="mailto:{{ value }}">{{ value|easyadmin_truncate }}</a>*/
/* {% endif %}*/
/* */

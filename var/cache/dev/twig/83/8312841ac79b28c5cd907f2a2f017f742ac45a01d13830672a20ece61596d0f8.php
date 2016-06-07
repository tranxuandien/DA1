<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_948aa9521f260af3baf9013cc6de612ef7638efa924e8aa84688bdea6b7d953e extends Twig_Template
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
        $__internal_0d6e1b9afde718d165e01346cda30270fd9fa60136b1bdeb3c561c86ae7a50b5 = $this->env->getExtension("native_profiler");
        $__internal_0d6e1b9afde718d165e01346cda30270fd9fa60136b1bdeb3c561c86ae7a50b5->enter($__internal_0d6e1b9afde718d165e01346cda30270fd9fa60136b1bdeb3c561c86ae7a50b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0d6e1b9afde718d165e01346cda30270fd9fa60136b1bdeb3c561c86ae7a50b5->leave($__internal_0d6e1b9afde718d165e01346cda30270fd9fa60136b1bdeb3c561c86ae7a50b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

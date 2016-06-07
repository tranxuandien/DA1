<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_e054d261f5ecbeab2b8f8a007c2df5b9571e36f77f43b3d8d30c57ad68c99b0e extends Twig_Template
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
        $__internal_bd0b50076f4a1e72599acebb460f315e118885e470ac44c2eae2a347af9f3c7d = $this->env->getExtension("native_profiler");
        $__internal_bd0b50076f4a1e72599acebb460f315e118885e470ac44c2eae2a347af9f3c7d->enter($__internal_bd0b50076f4a1e72599acebb460f315e118885e470ac44c2eae2a347af9f3c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bd0b50076f4a1e72599acebb460f315e118885e470ac44c2eae2a347af9f3c7d->leave($__internal_bd0b50076f4a1e72599acebb460f315e118885e470ac44c2eae2a347af9f3c7d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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

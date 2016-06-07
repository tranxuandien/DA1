<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6e38cb57b74e433679f001cc68c2930b5f50a6a6ee69329e00f8640bfd04f5f8 extends Twig_Template
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
        $__internal_fbcfc4a64f511723d11b39f3abb64bcb7bb29a9a6206f1df971f09c0c3681e77 = $this->env->getExtension("native_profiler");
        $__internal_fbcfc4a64f511723d11b39f3abb64bcb7bb29a9a6206f1df971f09c0c3681e77->enter($__internal_fbcfc4a64f511723d11b39f3abb64bcb7bb29a9a6206f1df971f09c0c3681e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fbcfc4a64f511723d11b39f3abb64bcb7bb29a9a6206f1df971f09c0c3681e77->leave($__internal_fbcfc4a64f511723d11b39f3abb64bcb7bb29a9a6206f1df971f09c0c3681e77_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_89186825c9c631a6048664f2f9f93c70ac20217ed479d00b28d6a5c5ebe0fd2c extends Twig_Template
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
        $__internal_9a347b83dd008e44b9a4f6ca6bec0c50a1c71a4e708281b4bc3a20a394db9174 = $this->env->getExtension("native_profiler");
        $__internal_9a347b83dd008e44b9a4f6ca6bec0c50a1c71a4e708281b4bc3a20a394db9174->enter($__internal_9a347b83dd008e44b9a4f6ca6bec0c50a1c71a4e708281b4bc3a20a394db9174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9a347b83dd008e44b9a4f6ca6bec0c50a1c71a4e708281b4bc3a20a394db9174->leave($__internal_9a347b83dd008e44b9a4f6ca6bec0c50a1c71a4e708281b4bc3a20a394db9174_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

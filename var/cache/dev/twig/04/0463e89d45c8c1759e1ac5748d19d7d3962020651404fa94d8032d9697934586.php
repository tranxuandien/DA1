<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_62894d563940357fe999f32365a543bf55730bac2de9f21355a03054aa44da2b extends Twig_Template
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
        $__internal_36a3b9bca34bcc1f23b27505f6a8ec9a9e9aba90dc6795a3dc411d92abfd567d = $this->env->getExtension("native_profiler");
        $__internal_36a3b9bca34bcc1f23b27505f6a8ec9a9e9aba90dc6795a3dc411d92abfd567d->enter($__internal_36a3b9bca34bcc1f23b27505f6a8ec9a9e9aba90dc6795a3dc411d92abfd567d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_36a3b9bca34bcc1f23b27505f6a8ec9a9e9aba90dc6795a3dc411d92abfd567d->leave($__internal_36a3b9bca34bcc1f23b27505f6a8ec9a9e9aba90dc6795a3dc411d92abfd567d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

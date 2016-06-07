<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_eced3a3371abecf101b9cf8b046a254d437a49b2287a42fde0814697f7a9542e extends Twig_Template
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
        $__internal_36bb603edb4c8e0709823a5c891e56d99cca7c3e0c871de51e56418ecbd6e5eb = $this->env->getExtension("native_profiler");
        $__internal_36bb603edb4c8e0709823a5c891e56d99cca7c3e0c871de51e56418ecbd6e5eb->enter($__internal_36bb603edb4c8e0709823a5c891e56d99cca7c3e0c871de51e56418ecbd6e5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_36bb603edb4c8e0709823a5c891e56d99cca7c3e0c871de51e56418ecbd6e5eb->leave($__internal_36bb603edb4c8e0709823a5c891e56d99cca7c3e0c871de51e56418ecbd6e5eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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

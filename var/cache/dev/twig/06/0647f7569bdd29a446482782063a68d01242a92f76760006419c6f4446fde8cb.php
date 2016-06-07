<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3cee99265eca1b0c0985f99dbc1f86834406ec82baf1a85d8f811f8403e17387 extends Twig_Template
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
        $__internal_d619bfa414e6565108156771a99d8e55d3699b0163a3ab8c98ffddf47a6422e8 = $this->env->getExtension("native_profiler");
        $__internal_d619bfa414e6565108156771a99d8e55d3699b0163a3ab8c98ffddf47a6422e8->enter($__internal_d619bfa414e6565108156771a99d8e55d3699b0163a3ab8c98ffddf47a6422e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d619bfa414e6565108156771a99d8e55d3699b0163a3ab8c98ffddf47a6422e8->leave($__internal_d619bfa414e6565108156771a99d8e55d3699b0163a3ab8c98ffddf47a6422e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

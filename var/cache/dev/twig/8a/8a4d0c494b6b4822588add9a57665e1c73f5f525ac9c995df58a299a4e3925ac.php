<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_09b6550352bdd6cbfd9bf392854e41fb82d62821c3fc160b939a830ae4e8df32 extends Twig_Template
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
        $__internal_b7fedb65c4797dca31e48e56bb668156a189b1b20fef4467513a95feddc57bc4 = $this->env->getExtension("native_profiler");
        $__internal_b7fedb65c4797dca31e48e56bb668156a189b1b20fef4467513a95feddc57bc4->enter($__internal_b7fedb65c4797dca31e48e56bb668156a189b1b20fef4467513a95feddc57bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b7fedb65c4797dca31e48e56bb668156a189b1b20fef4467513a95feddc57bc4->leave($__internal_b7fedb65c4797dca31e48e56bb668156a189b1b20fef4467513a95feddc57bc4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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

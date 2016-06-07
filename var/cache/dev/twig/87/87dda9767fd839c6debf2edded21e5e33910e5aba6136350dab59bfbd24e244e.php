<?php

/* @EasyAdmin/default/field_object.html.twig */
class __TwigTemplate_f745805f510d062356a9c115be37837ddc1a6f1fec61f01069f94e103784f63f extends Twig_Template
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
        $__internal_0d7c312c5655a6221096c121f30996136b1c3f87bd1af0bd57e462fabc16e5bb = $this->env->getExtension("native_profiler");
        $__internal_0d7c312c5655a6221096c121f30996136b1c3f87bd1af0bd57e462fabc16e5bb->enter($__internal_0d7c312c5655a6221096c121f30996136b1c3f87bd1af0bd57e462fabc16e5bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_0d7c312c5655a6221096c121f30996136b1c3f87bd1af0bd57e462fabc16e5bb->leave($__internal_0d7c312c5655a6221096c121f30996136b1c3f87bd1af0bd57e462fabc16e5bb_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_object.html.twig";
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
/* <span class="label">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */

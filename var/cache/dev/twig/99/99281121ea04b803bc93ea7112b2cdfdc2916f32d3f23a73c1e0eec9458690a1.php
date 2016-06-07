<?php

/* @EasyAdmin/default/label_inaccessible.html.twig */
class __TwigTemplate_5f22d71e12aa62ea0a8f4a5c5fed8108eba25be1add9768e9c3f8f0afb4ff18c extends Twig_Template
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
        $__internal_030131763f434eff235ce880ae03745f5b2226e8d1c8bc4a5ec95f1511d0fbe8 = $this->env->getExtension("native_profiler");
        $__internal_030131763f434eff235ce880ae03745f5b2226e8d1c8bc4a5ec95f1511d0fbe8->enter($__internal_030131763f434eff235ce880ae03745f5b2226e8d1c8bc4a5ec95f1511d0fbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_030131763f434eff235ce880ae03745f5b2226e8d1c8bc4a5ec95f1511d0fbe8->leave($__internal_030131763f434eff235ce880ae03745f5b2226e8d1c8bc4a5ec95f1511d0fbe8_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'EasyAdminBundle' %}*/
/* */
/* <span class="label label-danger" title="{{ 'label.inaccessible.explanation'|trans }}">*/
/*     {{ 'label.inaccessible'|trans }}*/
/* </span>*/
/* */

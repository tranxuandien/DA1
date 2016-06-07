<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_014617e9cda04a03e1df043d2007477993d2b39998f60541d15dc809379cfe81 extends Twig_Template
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
        $__internal_e2d8a5bf4b664d74b449efbd161577af917d030ddeaa14feaf57c37b55ea1ddc = $this->env->getExtension("native_profiler");
        $__internal_e2d8a5bf4b664d74b449efbd161577af917d030ddeaa14feaf57c37b55ea1ddc->enter($__internal_e2d8a5bf4b664d74b449efbd161577af917d030ddeaa14feaf57c37b55ea1ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e2d8a5bf4b664d74b449efbd161577af917d030ddeaa14feaf57c37b55ea1ddc->leave($__internal_e2d8a5bf4b664d74b449efbd161577af917d030ddeaa14feaf57c37b55ea1ddc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */

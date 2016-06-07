<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_696624fad382ebb4d148f98fb8cc7f7e4d440a3229dbd05232bcb682dee6c097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c49fc8d5d94b6382779565b7ef5ab131e96120e20f0bcf0560188de233aaca5 = $this->env->getExtension("native_profiler");
        $__internal_7c49fc8d5d94b6382779565b7ef5ab131e96120e20f0bcf0560188de233aaca5->enter($__internal_7c49fc8d5d94b6382779565b7ef5ab131e96120e20f0bcf0560188de233aaca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c49fc8d5d94b6382779565b7ef5ab131e96120e20f0bcf0560188de233aaca5->leave($__internal_7c49fc8d5d94b6382779565b7ef5ab131e96120e20f0bcf0560188de233aaca5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_692d6a35d48a1240542f57991abed9f710c3b491405964a21fadbe25e563e6fe = $this->env->getExtension("native_profiler");
        $__internal_692d6a35d48a1240542f57991abed9f710c3b491405964a21fadbe25e563e6fe->enter($__internal_692d6a35d48a1240542f57991abed9f710c3b491405964a21fadbe25e563e6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_692d6a35d48a1240542f57991abed9f710c3b491405964a21fadbe25e563e6fe->leave($__internal_692d6a35d48a1240542f57991abed9f710c3b491405964a21fadbe25e563e6fe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_171772a72f837ece50daf2cc1b69470637f90dcb6d44d802086890321c11dd30 = $this->env->getExtension("native_profiler");
        $__internal_171772a72f837ece50daf2cc1b69470637f90dcb6d44d802086890321c11dd30->enter($__internal_171772a72f837ece50daf2cc1b69470637f90dcb6d44d802086890321c11dd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_171772a72f837ece50daf2cc1b69470637f90dcb6d44d802086890321c11dd30->leave($__internal_171772a72f837ece50daf2cc1b69470637f90dcb6d44d802086890321c11dd30_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

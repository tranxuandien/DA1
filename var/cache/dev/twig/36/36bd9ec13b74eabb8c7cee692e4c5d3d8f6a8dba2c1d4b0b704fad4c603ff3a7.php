<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ddadcb3c5bdd6c696ca99ee12ce28d1abb43846bae5a48ec5f80a5125757b43d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7c99de1526ba78e474c302f661dd288610a6384fa8a052bc944365b38e535b2f = $this->env->getExtension("native_profiler");
        $__internal_7c99de1526ba78e474c302f661dd288610a6384fa8a052bc944365b38e535b2f->enter($__internal_7c99de1526ba78e474c302f661dd288610a6384fa8a052bc944365b38e535b2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c99de1526ba78e474c302f661dd288610a6384fa8a052bc944365b38e535b2f->leave($__internal_7c99de1526ba78e474c302f661dd288610a6384fa8a052bc944365b38e535b2f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a1f90ee28cec12eeb6e6d40a0685fa348d99aa96e8c3e3ba0004ac10e645ed6a = $this->env->getExtension("native_profiler");
        $__internal_a1f90ee28cec12eeb6e6d40a0685fa348d99aa96e8c3e3ba0004ac10e645ed6a->enter($__internal_a1f90ee28cec12eeb6e6d40a0685fa348d99aa96e8c3e3ba0004ac10e645ed6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a1f90ee28cec12eeb6e6d40a0685fa348d99aa96e8c3e3ba0004ac10e645ed6a->leave($__internal_a1f90ee28cec12eeb6e6d40a0685fa348d99aa96e8c3e3ba0004ac10e645ed6a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5354b91cbc9a87cc679e3bb8aa749d53591edec08761065b6260dcfa0bcc4943 = $this->env->getExtension("native_profiler");
        $__internal_5354b91cbc9a87cc679e3bb8aa749d53591edec08761065b6260dcfa0bcc4943->enter($__internal_5354b91cbc9a87cc679e3bb8aa749d53591edec08761065b6260dcfa0bcc4943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5354b91cbc9a87cc679e3bb8aa749d53591edec08761065b6260dcfa0bcc4943->leave($__internal_5354b91cbc9a87cc679e3bb8aa749d53591edec08761065b6260dcfa0bcc4943_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_34febbebc7deedd3a577aff21c8c3acedfb05e2ff36a1ba1ac0bc8c84f4b0a2f = $this->env->getExtension("native_profiler");
        $__internal_34febbebc7deedd3a577aff21c8c3acedfb05e2ff36a1ba1ac0bc8c84f4b0a2f->enter($__internal_34febbebc7deedd3a577aff21c8c3acedfb05e2ff36a1ba1ac0bc8c84f4b0a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_34febbebc7deedd3a577aff21c8c3acedfb05e2ff36a1ba1ac0bc8c84f4b0a2f->leave($__internal_34febbebc7deedd3a577aff21c8c3acedfb05e2ff36a1ba1ac0bc8c84f4b0a2f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

<?php

/* :user:new.html.twig */
class __TwigTemplate_e094f4ccde8d4a7a08c286955c69ec7cb2bd564468ca53624f03716b6733d011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d05bffd3de4557d3c1331b32eca38c40522772db2134c0ed54068fe6fe06a6a = $this->env->getExtension("native_profiler");
        $__internal_0d05bffd3de4557d3c1331b32eca38c40522772db2134c0ed54068fe6fe06a6a->enter($__internal_0d05bffd3de4557d3c1331b32eca38c40522772db2134c0ed54068fe6fe06a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d05bffd3de4557d3c1331b32eca38c40522772db2134c0ed54068fe6fe06a6a->leave($__internal_0d05bffd3de4557d3c1331b32eca38c40522772db2134c0ed54068fe6fe06a6a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a19f67e9bd18eb4368fe9be18b223f04087a787cc90e383e539adf601095bf6a = $this->env->getExtension("native_profiler");
        $__internal_a19f67e9bd18eb4368fe9be18b223f04087a787cc90e383e539adf601095bf6a->enter($__internal_a19f67e9bd18eb4368fe9be18b223f04087a787cc90e383e539adf601095bf6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a19f67e9bd18eb4368fe9be18b223f04087a787cc90e383e539adf601095bf6a->leave($__internal_a19f67e9bd18eb4368fe9be18b223f04087a787cc90e383e539adf601095bf6a_prof);

    }

    public function getTemplateName()
    {
        return ":user:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

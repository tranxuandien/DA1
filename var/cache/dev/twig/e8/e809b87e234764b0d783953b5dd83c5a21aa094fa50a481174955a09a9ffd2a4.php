<?php

/* user/new.html.twig */
class __TwigTemplate_6812c4d5ecbdf8cbea603616a80217eac27cd814455440795200735c451c2b43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/new.html.twig", 1);
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
        $__internal_f2f0e2e83b53cba9d1fa20e9911c0651e8ef6640586d3b05c6d603d22e6e4bff = $this->env->getExtension("native_profiler");
        $__internal_f2f0e2e83b53cba9d1fa20e9911c0651e8ef6640586d3b05c6d603d22e6e4bff->enter($__internal_f2f0e2e83b53cba9d1fa20e9911c0651e8ef6640586d3b05c6d603d22e6e4bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2f0e2e83b53cba9d1fa20e9911c0651e8ef6640586d3b05c6d603d22e6e4bff->leave($__internal_f2f0e2e83b53cba9d1fa20e9911c0651e8ef6640586d3b05c6d603d22e6e4bff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e1d4e66a98a6d3109101b4e1a732552745de3fefd8bfdd858a01e5264955af5b = $this->env->getExtension("native_profiler");
        $__internal_e1d4e66a98a6d3109101b4e1a732552745de3fefd8bfdd858a01e5264955af5b->enter($__internal_e1d4e66a98a6d3109101b4e1a732552745de3fefd8bfdd858a01e5264955af5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e1d4e66a98a6d3109101b4e1a732552745de3fefd8bfdd858a01e5264955af5b->leave($__internal_e1d4e66a98a6d3109101b4e1a732552745de3fefd8bfdd858a01e5264955af5b_prof);

    }

    public function getTemplateName()
    {
        return "user/new.html.twig";
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

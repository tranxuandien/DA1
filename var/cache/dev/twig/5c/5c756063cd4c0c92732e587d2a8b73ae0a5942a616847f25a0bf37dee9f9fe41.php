<?php

/* :user:edit.html.twig */
class __TwigTemplate_891144e2de134fb3ac56a5ff42c043c12fb95945d00bb8a69164bc4e76c1256a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":user:edit.html.twig", 1);
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
        $__internal_fe21dc5d9fdb91144566e74bb38df2f30712f6cf487d26ab2bc46c53a393afe7 = $this->env->getExtension("native_profiler");
        $__internal_fe21dc5d9fdb91144566e74bb38df2f30712f6cf487d26ab2bc46c53a393afe7->enter($__internal_fe21dc5d9fdb91144566e74bb38df2f30712f6cf487d26ab2bc46c53a393afe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":user:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe21dc5d9fdb91144566e74bb38df2f30712f6cf487d26ab2bc46c53a393afe7->leave($__internal_fe21dc5d9fdb91144566e74bb38df2f30712f6cf487d26ab2bc46c53a393afe7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_580b5b5b96f4d34c8e75f002f799a9c2eb55e100cfd1b144cfb49b077fdf79d4 = $this->env->getExtension("native_profiler");
        $__internal_580b5b5b96f4d34c8e75f002f799a9c2eb55e100cfd1b144cfb49b077fdf79d4->enter($__internal_580b5b5b96f4d34c8e75f002f799a9c2eb55e100cfd1b144cfb49b077fdf79d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>User edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_580b5b5b96f4d34c8e75f002f799a9c2eb55e100cfd1b144cfb49b077fdf79d4->leave($__internal_580b5b5b96f4d34c8e75f002f799a9c2eb55e100cfd1b144cfb49b077fdf79d4_prof);

    }

    public function getTemplateName()
    {
        return ":user:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>User edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('user_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

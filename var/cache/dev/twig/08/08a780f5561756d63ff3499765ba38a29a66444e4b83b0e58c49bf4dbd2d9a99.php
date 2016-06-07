<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_b5281219c5f82713d78898f88c42b2f4e0e2ef65e0df678ae1386fe84ca9d98a extends Twig_Template
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
        $__internal_69e4612db6df1ecdb04f2eca03eaac0aea2fcc8e9fcccb04ad5cc71e5deb18f3 = $this->env->getExtension("native_profiler");
        $__internal_69e4612db6df1ecdb04f2eca03eaac0aea2fcc8e9fcccb04ad5cc71e5deb18f3->enter($__internal_69e4612db6df1ecdb04f2eca03eaac0aea2fcc8e9fcccb04ad5cc71e5deb18f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_69e4612db6df1ecdb04f2eca03eaac0aea2fcc8e9fcccb04ad5cc71e5deb18f3->leave($__internal_69e4612db6df1ecdb04f2eca03eaac0aea2fcc8e9fcccb04ad5cc71e5deb18f3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

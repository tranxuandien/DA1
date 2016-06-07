<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1bbca89dacef912b12503953903b6a6b7c08ef53f774c23964abcb3be12e93c2 extends Twig_Template
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
        $__internal_7435a90b13dac867ffb4e21ba40de006c29147fd02e423eb449546b6e8e23f29 = $this->env->getExtension("native_profiler");
        $__internal_7435a90b13dac867ffb4e21ba40de006c29147fd02e423eb449546b6e8e23f29->enter($__internal_7435a90b13dac867ffb4e21ba40de006c29147fd02e423eb449546b6e8e23f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_7435a90b13dac867ffb4e21ba40de006c29147fd02e423eb449546b6e8e23f29->leave($__internal_7435a90b13dac867ffb4e21ba40de006c29147fd02e423eb449546b6e8e23f29_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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

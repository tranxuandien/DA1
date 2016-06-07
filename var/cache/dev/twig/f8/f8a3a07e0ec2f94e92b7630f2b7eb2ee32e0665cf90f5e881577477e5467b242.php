<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f9373f5718ba765ebc52e5e4747644554fe192c76ea717704cdb996e91ae15d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_711309fd1bc089ac13f4b748904b4c856860fcca2f7398c552181989b0cc454b = $this->env->getExtension("native_profiler");
        $__internal_711309fd1bc089ac13f4b748904b4c856860fcca2f7398c552181989b0cc454b->enter($__internal_711309fd1bc089ac13f4b748904b4c856860fcca2f7398c552181989b0cc454b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_711309fd1bc089ac13f4b748904b4c856860fcca2f7398c552181989b0cc454b->leave($__internal_711309fd1bc089ac13f4b748904b4c856860fcca2f7398c552181989b0cc454b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5930df798cf03b1c8546812ebf9a9c6548fd80f2a64d9582a7e62dcd4e2fc13 = $this->env->getExtension("native_profiler");
        $__internal_f5930df798cf03b1c8546812ebf9a9c6548fd80f2a64d9582a7e62dcd4e2fc13->enter($__internal_f5930df798cf03b1c8546812ebf9a9c6548fd80f2a64d9582a7e62dcd4e2fc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f5930df798cf03b1c8546812ebf9a9c6548fd80f2a64d9582a7e62dcd4e2fc13->leave($__internal_f5930df798cf03b1c8546812ebf9a9c6548fd80f2a64d9582a7e62dcd4e2fc13_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f92f763b6601913f7b93d692e7bf066442ce89e8886add380f2c43e256e6fc31 = $this->env->getExtension("native_profiler");
        $__internal_f92f763b6601913f7b93d692e7bf066442ce89e8886add380f2c43e256e6fc31->enter($__internal_f92f763b6601913f7b93d692e7bf066442ce89e8886add380f2c43e256e6fc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f92f763b6601913f7b93d692e7bf066442ce89e8886add380f2c43e256e6fc31->leave($__internal_f92f763b6601913f7b93d692e7bf066442ce89e8886add380f2c43e256e6fc31_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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

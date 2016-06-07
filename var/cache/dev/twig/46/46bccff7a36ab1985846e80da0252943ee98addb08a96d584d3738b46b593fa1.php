<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f75ece94a8e14dd70304fd34e100fb0323d4354642b579616e3485ab5f805a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1639febeb670f7f460b8fb37b12fff4686fd40d79c26f9a28ac1c5979efbbdac = $this->env->getExtension("native_profiler");
        $__internal_1639febeb670f7f460b8fb37b12fff4686fd40d79c26f9a28ac1c5979efbbdac->enter($__internal_1639febeb670f7f460b8fb37b12fff4686fd40d79c26f9a28ac1c5979efbbdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1639febeb670f7f460b8fb37b12fff4686fd40d79c26f9a28ac1c5979efbbdac->leave($__internal_1639febeb670f7f460b8fb37b12fff4686fd40d79c26f9a28ac1c5979efbbdac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4a0cf42cbeff734d3dc128259931a6348ce5e150e29a2e7bf78d161b02d114f0 = $this->env->getExtension("native_profiler");
        $__internal_4a0cf42cbeff734d3dc128259931a6348ce5e150e29a2e7bf78d161b02d114f0->enter($__internal_4a0cf42cbeff734d3dc128259931a6348ce5e150e29a2e7bf78d161b02d114f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4a0cf42cbeff734d3dc128259931a6348ce5e150e29a2e7bf78d161b02d114f0->leave($__internal_4a0cf42cbeff734d3dc128259931a6348ce5e150e29a2e7bf78d161b02d114f0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3707f742962661c037e93f6f29f2aff24cdbb1811994ad9dfc400dc6db03a8f9 = $this->env->getExtension("native_profiler");
        $__internal_3707f742962661c037e93f6f29f2aff24cdbb1811994ad9dfc400dc6db03a8f9->enter($__internal_3707f742962661c037e93f6f29f2aff24cdbb1811994ad9dfc400dc6db03a8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3707f742962661c037e93f6f29f2aff24cdbb1811994ad9dfc400dc6db03a8f9->leave($__internal_3707f742962661c037e93f6f29f2aff24cdbb1811994ad9dfc400dc6db03a8f9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6a258edc617bff040b687d60d4ef0622d7a631e21cb696f277b29054bfc31cd = $this->env->getExtension("native_profiler");
        $__internal_a6a258edc617bff040b687d60d4ef0622d7a631e21cb696f277b29054bfc31cd->enter($__internal_a6a258edc617bff040b687d60d4ef0622d7a631e21cb696f277b29054bfc31cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a6a258edc617bff040b687d60d4ef0622d7a631e21cb696f277b29054bfc31cd->leave($__internal_a6a258edc617bff040b687d60d4ef0622d7a631e21cb696f277b29054bfc31cd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

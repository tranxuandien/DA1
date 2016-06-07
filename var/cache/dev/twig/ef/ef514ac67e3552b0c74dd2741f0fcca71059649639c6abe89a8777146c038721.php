<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8f3d0cf4f1a9c48baf425623513e5bf4b056f2033e302524f6b182fbe829c640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_8cb390b7e659425d8a7d5644bdba5cc4603e4a9ce03bf1e30ebe8b0eb3373fda = $this->env->getExtension("native_profiler");
        $__internal_8cb390b7e659425d8a7d5644bdba5cc4603e4a9ce03bf1e30ebe8b0eb3373fda->enter($__internal_8cb390b7e659425d8a7d5644bdba5cc4603e4a9ce03bf1e30ebe8b0eb3373fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cb390b7e659425d8a7d5644bdba5cc4603e4a9ce03bf1e30ebe8b0eb3373fda->leave($__internal_8cb390b7e659425d8a7d5644bdba5cc4603e4a9ce03bf1e30ebe8b0eb3373fda_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bbaa40cb2c7ffe1b73b217e9df848ad58bdd3f81dc1a7a62c97bfaaad2c772e1 = $this->env->getExtension("native_profiler");
        $__internal_bbaa40cb2c7ffe1b73b217e9df848ad58bdd3f81dc1a7a62c97bfaaad2c772e1->enter($__internal_bbaa40cb2c7ffe1b73b217e9df848ad58bdd3f81dc1a7a62c97bfaaad2c772e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bbaa40cb2c7ffe1b73b217e9df848ad58bdd3f81dc1a7a62c97bfaaad2c772e1->leave($__internal_bbaa40cb2c7ffe1b73b217e9df848ad58bdd3f81dc1a7a62c97bfaaad2c772e1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_494883b7bde98c62e8121e536d2a44b1e9ef198961f635c52086183aa3f96ff8 = $this->env->getExtension("native_profiler");
        $__internal_494883b7bde98c62e8121e536d2a44b1e9ef198961f635c52086183aa3f96ff8->enter($__internal_494883b7bde98c62e8121e536d2a44b1e9ef198961f635c52086183aa3f96ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_494883b7bde98c62e8121e536d2a44b1e9ef198961f635c52086183aa3f96ff8->leave($__internal_494883b7bde98c62e8121e536d2a44b1e9ef198961f635c52086183aa3f96ff8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_56271994c500c8e76fd7043076dc3e2895ddcad7bc988d603ce89eab4979dc51 = $this->env->getExtension("native_profiler");
        $__internal_56271994c500c8e76fd7043076dc3e2895ddcad7bc988d603ce89eab4979dc51->enter($__internal_56271994c500c8e76fd7043076dc3e2895ddcad7bc988d603ce89eab4979dc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_56271994c500c8e76fd7043076dc3e2895ddcad7bc988d603ce89eab4979dc51->leave($__internal_56271994c500c8e76fd7043076dc3e2895ddcad7bc988d603ce89eab4979dc51_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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

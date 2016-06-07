<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ea73a4d4a21a956880942aa28ec6ad0c12b0382c6aa8c3ef1329bd72ad1080e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8fd6e8d915be03b7902430b790ee9db6bf680766ce548c7bb71c390dbe996e1 = $this->env->getExtension("native_profiler");
        $__internal_c8fd6e8d915be03b7902430b790ee9db6bf680766ce548c7bb71c390dbe996e1->enter($__internal_c8fd6e8d915be03b7902430b790ee9db6bf680766ce548c7bb71c390dbe996e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c8fd6e8d915be03b7902430b790ee9db6bf680766ce548c7bb71c390dbe996e1->leave($__internal_c8fd6e8d915be03b7902430b790ee9db6bf680766ce548c7bb71c390dbe996e1_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ffdef17521ddb2dc31ecdd3cc46a91d2390ff296c8b8b0cf4557b393f2173f3 = $this->env->getExtension("native_profiler");
        $__internal_2ffdef17521ddb2dc31ecdd3cc46a91d2390ff296c8b8b0cf4557b393f2173f3->enter($__internal_2ffdef17521ddb2dc31ecdd3cc46a91d2390ff296c8b8b0cf4557b393f2173f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2ffdef17521ddb2dc31ecdd3cc46a91d2390ff296c8b8b0cf4557b393f2173f3->leave($__internal_2ffdef17521ddb2dc31ecdd3cc46a91d2390ff296c8b8b0cf4557b393f2173f3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

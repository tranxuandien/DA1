<?php

/* @User/UpNews/UpNewsConfirm.html.twig */
class __TwigTemplate_808743d7a628c43309cefd1d6a9a319292051f7316ed699ebfdd0eb26940f0af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@User/UpNews/UpNewsConfirm.html.twig", 1);
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
        $__internal_50af58fdac46063f3918c2bc16f17f93fbf7cff0f78df15d67e18347473fa031 = $this->env->getExtension("native_profiler");
        $__internal_50af58fdac46063f3918c2bc16f17f93fbf7cff0f78df15d67e18347473fa031->enter($__internal_50af58fdac46063f3918c2bc16f17f93fbf7cff0f78df15d67e18347473fa031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/UpNews/UpNewsConfirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50af58fdac46063f3918c2bc16f17f93fbf7cff0f78df15d67e18347473fa031->leave($__internal_50af58fdac46063f3918c2bc16f17f93fbf7cff0f78df15d67e18347473fa031_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d02e8305b6eff2489236f13020c4229c78bab88d3eb3c24f83e377a0b4def12c = $this->env->getExtension("native_profiler");
        $__internal_d02e8305b6eff2489236f13020c4229c78bab88d3eb3c24f83e377a0b4def12c->enter($__internal_d02e8305b6eff2489236f13020c4229c78bab88d3eb3c24f83e377a0b4def12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->loadTemplate("header.html.twig", "@User/UpNews/UpNewsConfirm.html.twig", 3)->display($context);
        // line 4
        echo "    <div style=\"padding-left: 10%\" class=\"confirm-message\">
    ";
        // line 5
        if (((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked")) == 1)) {
            // line 6
            echo "   <h1>TIN CỦA BẠN ĐÃ ĐƯỢC CẬP NHẬT TRÊN HỆ THỐNG!</h1>
        ";
        } elseif ((        // line 7
(isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked")) == 2)) {
            // line 8
            echo "            BẠN CẦN PHẢI ĐĂNG NHẬP ĐỂ ĐĂNG TIN
            ";
        } else {
            // line 10
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("up_buy_news");
            echo "\">THỬ LẠI!</a>
            ";
        }
        // line 12
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("main_page");
        echo "\">Quay lại trang chủ</a>
    </div>
";
        
        $__internal_d02e8305b6eff2489236f13020c4229c78bab88d3eb3c24f83e377a0b4def12c->leave($__internal_d02e8305b6eff2489236f13020c4229c78bab88d3eb3c24f83e377a0b4def12c_prof);

    }

    public function getTemplateName()
    {
        return "@User/UpNews/UpNewsConfirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  57 => 10,  53 => 8,  51 => 7,  48 => 6,  46 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     {% include('header.html.twig') %}*/
/*     <div style="padding-left: 10%" class="confirm-message">*/
/*     {% if checked == 1 %}*/
/*    <h1>TIN CỦA BẠN ĐÃ ĐƯỢC CẬP NHẬT TRÊN HỆ THỐNG!</h1>*/
/*         {% elseif checked == 2 %}*/
/*             BẠN CẦN PHẢI ĐĂNG NHẬP ĐỂ ĐĂNG TIN*/
/*             {% else %}*/
/*             <a href="{{ path('up_buy_news') }}">THỬ LẠI!</a>*/
/*             {% endif %}*/
/*     <a href="{{ path('main_page') }}">Quay lại trang chủ</a>*/
/*     </div>*/
/* {% endblock %}*/

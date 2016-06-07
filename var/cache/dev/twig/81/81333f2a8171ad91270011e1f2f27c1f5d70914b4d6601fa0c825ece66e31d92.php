<?php

/* UserBundle:UpNews:UpNewsConfirm.html.twig */
class __TwigTemplate_666958bbe715002567dc410bdcea168ab489be32520c68e6958f45018545e3fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UserBundle:UpNews:UpNewsConfirm.html.twig", 1);
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
        $__internal_d6f4b532678db1a28898d8862c26cd17b83bd3e2794cc4af94a915e9532530b8 = $this->env->getExtension("native_profiler");
        $__internal_d6f4b532678db1a28898d8862c26cd17b83bd3e2794cc4af94a915e9532530b8->enter($__internal_d6f4b532678db1a28898d8862c26cd17b83bd3e2794cc4af94a915e9532530b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:UpNews:UpNewsConfirm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6f4b532678db1a28898d8862c26cd17b83bd3e2794cc4af94a915e9532530b8->leave($__internal_d6f4b532678db1a28898d8862c26cd17b83bd3e2794cc4af94a915e9532530b8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4edc1d6ca74f068a16992d92a872b940d83f2d2533a3aa832342e47162326e5 = $this->env->getExtension("native_profiler");
        $__internal_a4edc1d6ca74f068a16992d92a872b940d83f2d2533a3aa832342e47162326e5->enter($__internal_a4edc1d6ca74f068a16992d92a872b940d83f2d2533a3aa832342e47162326e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->loadTemplate("header.html.twig", "UserBundle:UpNews:UpNewsConfirm.html.twig", 3)->display($context);
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
        
        $__internal_a4edc1d6ca74f068a16992d92a872b940d83f2d2533a3aa832342e47162326e5->leave($__internal_a4edc1d6ca74f068a16992d92a872b940d83f2d2533a3aa832342e47162326e5_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:UpNews:UpNewsConfirm.html.twig";
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

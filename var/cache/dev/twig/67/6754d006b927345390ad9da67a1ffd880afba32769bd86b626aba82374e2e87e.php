<?php

/* @User/UpNews/UpBuyNews.html.twig */
class __TwigTemplate_39096d36c7c7aa3a07352f3a3f99e77602796300da0388c12a6d9ce958130494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@User/UpNews/UpBuyNews.html.twig", 1);
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
        $__internal_486c52975a8001817c6116e9368964fb446835d8a51e4a2f9df31b0d852b9a26 = $this->env->getExtension("native_profiler");
        $__internal_486c52975a8001817c6116e9368964fb446835d8a51e4a2f9df31b0d852b9a26->enter($__internal_486c52975a8001817c6116e9368964fb446835d8a51e4a2f9df31b0d852b9a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/UpNews/UpBuyNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_486c52975a8001817c6116e9368964fb446835d8a51e4a2f9df31b0d852b9a26->leave($__internal_486c52975a8001817c6116e9368964fb446835d8a51e4a2f9df31b0d852b9a26_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_788cee5ed6717c81bd51020c81af3e0f2abc65a57fcde147b1712c70de29b50a = $this->env->getExtension("native_profiler");
        $__internal_788cee5ed6717c81bd51020c81af3e0f2abc65a57fcde147b1712c70de29b50a->enter($__internal_788cee5ed6717c81bd51020c81af3e0f2abc65a57fcde147b1712c70de29b50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->loadTemplate("header.html.twig", "@User/UpNews/UpBuyNews.html.twig", 3)->display($context);
        // line 4
        echo "    <h3>FORM ĐĂNG TIN CHO NGƯỜI CẦN MUA XE:</h3>
    <i>(Nhập thông tin về nhu cầu loại xe muốn mua)</i>
    <form style=\"padding-left: 10%\" action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("up_buy_news_confirm");
        echo "\" method=\"post\">

        ";
        // line 9
        echo "            ";
        // line 10
        echo "                ";
        // line 11
        echo "                       ";
        // line 12
        echo "            ";
        // line 13
        echo "        ";
        // line 14
        echo "
        <div class=\"row\">
            <div class=\"col-xs-4\">
                <label>Tiêu đề tin:</label>
                <input class=\" form-control\" placeholder=\"Tiêu đề\" type=\"text\" id=\"tieude\" name=\"tieude\"
                       value=\"\" required=\"required\"/>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-6\">
                <label>Nội dung tin:</label>
                <textarea class=\"form-control\" rows=\"5\" id=\"comment\" name=\"noidung\" required=\"required\"></textarea>
                ";
        // line 27
        echo "                       ";
        // line 28
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-3\">
                <label>Giá sẽ mua trong khoảng :</label>
                <select name=\"gia\">
                    <option value=\"\" selected></option>
                    <option value=\"[Dưới 200 Triệu]\">[Dưới 200 Triệu]</option>
                    <option value=\"[200-400 Triệu]\">[200-400 Triệu]</option>
                    <option value=\"[400-600 Triệu]\">[400-600 Triệu]</option>
                    <option value=\"[600-800 Triệu]\">[600-800 Triệu]</option>
                    <option value=\"[800-1 Tỉ]\">[800-1 Tỉ]</option>
                    <option value=\"[1 Tỉ]\">[Trên 1 Tỉ]</option>
                </select>
            </div>
        </div>
        <br>
        <div class=\"row\">
            <div class=\"col-xs-4\">
                <label>Kết quả phép tính ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "html", null, true);
        echo "+";
        echo twig_escape_filter($this->env, (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "html", null, true);
        echo "</label> <input class=\" form-control\" placeholder=\"Nhập kết quả phép tính\" type=\"text\" name=\"recaptcha\" />
                ";
        // line 49
        echo "                       ";
        // line 50
        echo "            </div>
        </div>
        <br>
        <div>
        <label>
            <button type=\"submit\" class=\"btn btn-primary\"><span
                        class=\"glyphicon glyphicon-upload\"></span>
                Đăng tin
            </button>
        </label>
        </div>
    </form>
";
        
        $__internal_788cee5ed6717c81bd51020c81af3e0f2abc65a57fcde147b1712c70de29b50a->leave($__internal_788cee5ed6717c81bd51020c81af3e0f2abc65a57fcde147b1712c70de29b50a_prof);

    }

    public function getTemplateName()
    {
        return "@User/UpNews/UpBuyNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 50,  105 => 49,  99 => 47,  78 => 28,  76 => 27,  62 => 14,  60 => 13,  58 => 12,  56 => 11,  54 => 10,  52 => 9,  47 => 6,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     {% include('header.html.twig') %}*/
/*     <h3>FORM ĐĂNG TIN CHO NGƯỜI CẦN MUA XE:</h3>*/
/*     <i>(Nhập thông tin về nhu cầu loại xe muốn mua)</i>*/
/*     <form style="padding-left: 10%" action="{{ path('up_buy_news_confirm') }}" method="post">*/
/* */
/*         {#<div class="row">#}*/
/*             {#<div class="col-xs-4">#}*/
/*                 {#<input class=" form-control" placeholder="Mã tin" type="text" id="code" name="code"#}*/
/*                        {#value="" required="required"/>#}*/
/*             {#</div>#}*/
/*         {#</div>#}*/
/* */
/*         <div class="row">*/
/*             <div class="col-xs-4">*/
/*                 <label>Tiêu đề tin:</label>*/
/*                 <input class=" form-control" placeholder="Tiêu đề" type="text" id="tieude" name="tieude"*/
/*                        value="" required="required"/>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-xs-6">*/
/*                 <label>Nội dung tin:</label>*/
/*                 <textarea class="form-control" rows="5" id="comment" name="noidung" required="required"></textarea>*/
/*                 {#<input class=" form-control" placeholder="Nội dung" type="text" id="noidung" name="noidung"#}*/
/*                        {#value="" required="required"/>#}*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-xs-3">*/
/*                 <label>Giá sẽ mua trong khoảng :</label>*/
/*                 <select name="gia">*/
/*                     <option value="" selected></option>*/
/*                     <option value="[Dưới 200 Triệu]">[Dưới 200 Triệu]</option>*/
/*                     <option value="[200-400 Triệu]">[200-400 Triệu]</option>*/
/*                     <option value="[400-600 Triệu]">[400-600 Triệu]</option>*/
/*                     <option value="[600-800 Triệu]">[600-800 Triệu]</option>*/
/*                     <option value="[800-1 Tỉ]">[800-1 Tỉ]</option>*/
/*                     <option value="[1 Tỉ]">[Trên 1 Tỉ]</option>*/
/*                 </select>*/
/*             </div>*/
/*         </div>*/
/*         <br>*/
/*         <div class="row">*/
/*             <div class="col-xs-4">*/
/*                 <label>Kết quả phép tính {{ a }}+{{ b }}</label> <input class=" form-control" placeholder="Nhập kết quả phép tính" type="text" name="recaptcha" />*/
/*                 {#<input class=" form-control" placeholder="Nội dung" type="text" id="noidung" name="noidung"#}*/
/*                        {#value="" required="required"/>#}*/
/*             </div>*/
/*         </div>*/
/*         <br>*/
/*         <div>*/
/*         <label>*/
/*             <button type="submit" class="btn btn-primary"><span*/
/*                         class="glyphicon glyphicon-upload"></span>*/
/*                 Đăng tin*/
/*             </button>*/
/*         </label>*/
/*         </div>*/
/*     </form>*/
/* {% endblock %}*/

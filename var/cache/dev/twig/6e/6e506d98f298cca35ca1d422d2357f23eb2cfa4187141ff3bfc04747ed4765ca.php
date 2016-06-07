<?php

/* @User/UpNews/UpSellNews.html.twig */
class __TwigTemplate_e2fc0c29a685ad66e61b1a86a646c45b5b2265f53b02c23cde792b264174022c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@User/UpNews/UpSellNews.html.twig", 1);
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
        $__internal_8b2352ea6e0dcb5bbb7cfbff2c42a1677cfa8ef2823bba2ea5d19d6715fd4dbc = $this->env->getExtension("native_profiler");
        $__internal_8b2352ea6e0dcb5bbb7cfbff2c42a1677cfa8ef2823bba2ea5d19d6715fd4dbc->enter($__internal_8b2352ea6e0dcb5bbb7cfbff2c42a1677cfa8ef2823bba2ea5d19d6715fd4dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/UpNews/UpSellNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b2352ea6e0dcb5bbb7cfbff2c42a1677cfa8ef2823bba2ea5d19d6715fd4dbc->leave($__internal_8b2352ea6e0dcb5bbb7cfbff2c42a1677cfa8ef2823bba2ea5d19d6715fd4dbc_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_84ce66dc665530c18393f7b847338ca7d8924767dcd65e86625d7376b26cf58c = $this->env->getExtension("native_profiler");
        $__internal_84ce66dc665530c18393f7b847338ca7d8924767dcd65e86625d7376b26cf58c->enter($__internal_84ce66dc665530c18393f7b847338ca7d8924767dcd65e86625d7376b26cf58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->loadTemplate("header.html.twig", "@User/UpNews/UpSellNews.html.twig", 3)->display($context);
        // line 4
        echo "    <h3>FORM ĐĂNG TIN CHO NGƯỜI CẦN BÁN XE:</h3>
    <form style=\"padding-left: 10%\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("up_sell_news_confirm");
        echo "\" method=\"post\">
        ";
        // line 7
        echo "        <div class=\"row\">
            <div class=\"col-xs-2\">
                <label>Hãng xe:</label>
                <select name=\"brand\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["brands"]) ? $context["brands"] : $this->getContext($context, "brands")));
        foreach ($context['_seq'] as $context["_key"] => $context["brand"]) {
            // line 12
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["brand"], "name", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['brand'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-2\">
                <label>Trạng thái xe:</label><br>
                <select name=\"status\">
                        <option value=\"Xe cũ\">Xe Cũ</option>
                        <option value=\"Xe mới\">Xe Mới</option>
                </select>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-3\">
                <label>Tên xe:</label>
                <input class=\" form-control\" placeholder=\"Tên xe\" type=\"text\" id=\"kind\" name=\"kind\"
                       value=\"\" required=\"required\"/>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-2\">
                <label>Giá bán:</label>
                <input class=\" form-control\" placeholder=\"Giá sẽ bán(\$USD)\" type=\"text\" id=\"price\" name=\"price\"
                       value=\"\" required=\"required\"/>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-2\">
                <label>Năm mua xe:</label><br>
                <select name=\"year\">
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1970, 2016));
        foreach ($context['_seq'] as $context["_key"] => $context["year"]) {
            // line 45
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["year"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['year'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </select>
                ";
        // line 49
        echo "                       ";
        // line 50
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-4\">
                <label>Thông tin mô tả:</label>
                <textarea class=\"form-control\" rows=\"5\" id=\"comment\" name=\"info\" required=\"required\"></textarea>

                ";
        // line 58
        echo "                       ";
        // line 59
        echo "            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-xs-2\">
                <label>Kết quả phép tính ";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "html", null, true);
        echo "+";
        echo twig_escape_filter($this->env, (isset($context["b"]) ? $context["b"] : $this->getContext($context, "b")), "html", null, true);
        echo "</label><input class=\"form-control\" placeholder=\"Nhập kết quả\" type=\"text\" name=\"recaptcha\" />
                ";
        // line 65
        echo "                ";
        // line 66
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
        
        $__internal_84ce66dc665530c18393f7b847338ca7d8924767dcd65e86625d7376b26cf58c->leave($__internal_84ce66dc665530c18393f7b847338ca7d8924767dcd65e86625d7376b26cf58c_prof);

    }

    public function getTemplateName()
    {
        return "@User/UpNews/UpSellNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 66,  146 => 65,  140 => 63,  134 => 59,  132 => 58,  123 => 50,  121 => 49,  118 => 47,  107 => 45,  103 => 44,  71 => 14,  60 => 12,  56 => 11,  50 => 7,  46 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block body %}*/
/*     {% include('header.html.twig') %}*/
/*     <h3>FORM ĐĂNG TIN CHO NGƯỜI CẦN BÁN XE:</h3>*/
/*     <form style="padding-left: 10%" action="{{ path('up_sell_news_confirm') }}" method="post">*/
/*         {#<input type="hidden" name="user_id" value="{{ app.user }}">#}*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 <label>Hãng xe:</label>*/
/*                 <select name="brand">*/
/*                     {% for brand in brands %}*/
/*                     <option value="{{ brand.id }}">{{ brand.name }}</option>*/
/*                         {% endfor %}*/
/*                 </select>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 <label>Trạng thái xe:</label><br>*/
/*                 <select name="status">*/
/*                         <option value="Xe cũ">Xe Cũ</option>*/
/*                         <option value="Xe mới">Xe Mới</option>*/
/*                 </select>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-xs-3">*/
/*                 <label>Tên xe:</label>*/
/*                 <input class=" form-control" placeholder="Tên xe" type="text" id="kind" name="kind"*/
/*                        value="" required="required"/>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 <label>Giá bán:</label>*/
/*                 <input class=" form-control" placeholder="Giá sẽ bán($USD)" type="text" id="price" name="price"*/
/*                        value="" required="required"/>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 <label>Năm mua xe:</label><br>*/
/*                 <select name="year">*/
/*                     {% for year in 1970..2016 %}*/
/*                     <option value="{{ year }}">{{ year }}</option>*/
/*                         {% endfor %}*/
/*                 </select>*/
/*                 {#<input class=" form-control" placeholder="Năm mua" type="text" id="year" #}*/
/*                        {#value="" required="required"/>#}*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-xs-4">*/
/*                 <label>Thông tin mô tả:</label>*/
/*                 <textarea class="form-control" rows="5" id="comment" name="info" required="required"></textarea>*/
/* */
/*                 {#<input class=" form-control" placeholder="Thông số" type="text" id="info" name="info"#}*/
/*                        {#value="" required="required"/>#}*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 <label>Kết quả phép tính {{ a }}+{{ b }}</label><input class="form-control" placeholder="Nhập kết quả" type="text" name="recaptcha" />*/
/*                 {#<input class=" form-control" placeholder="Nội dung" type="text" id="noidung" name="noidung"#}*/
/*                 {#value="" required="required"/>#}*/
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

<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_6d3a58d6ecb2183263f8aad5e3c1a1eee85c3d1066c41cc2964b352b45900567 extends Twig_Template
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
        $__internal_7b183b228fff38e20f41d27a75903757383672f69577581d6fd6ec29dd9391a9 = $this->env->getExtension("native_profiler");
        $__internal_7b183b228fff38e20f41d27a75903757383672f69577581d6fd6ec29dd9391a9->enter($__internal_7b183b228fff38e20f41d27a75903757383672f69577581d6fd6ec29dd9391a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 3
            echo "    <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\">
        ";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
            echo "
    </a>
";
        }
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        // line 10
        echo "        ";
        // line 11
        echo "    ";
        // line 13
        echo "<form style=\"padding-left: 100px\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" method=\"POST\">
    <div class=\"form-group\" id=\"fos_user_edit_form\">
        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.email", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
            </div>
        </div><br>

        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.username", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
            </div>
        </div><br>
        ";
        // line 29
        echo "            ";
        // line 30
        echo "                ";
        // line 31
        echo "                ";
        // line 32
        echo "            ";
        // line 33
        echo "        ";
        // line 34
        echo "        ";
        // line 35
        echo "            ";
        // line 36
        echo "                ";
        // line 37
        echo "                ";
        // line 38
        echo "            ";
        // line 39
        echo "        ";
        // line 40
        echo "        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.city", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'errors');
        echo "
            </div>
        </div><br>
        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.phone", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "
            </div>
        </div><br>
        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.address", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'errors');
        echo "
            </div>
        </div><br>
        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.current_password", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'errors');
        echo "
            </div>
        </div>
        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    </div>
    <div class=\"form-group\">
        <div class=\"row\">
            <div class=\"col-xs-2\">
                <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
            </div>
        </div>
    </div>
</form>
";
        
        $__internal_7b183b228fff38e20f41d27a75903757383672f69577581d6fd6ec29dd9391a9->leave($__internal_7b183b228fff38e20f41d27a75903757383672f69577581d6fd6ec29dd9391a9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 70,  146 => 64,  140 => 61,  136 => 60,  128 => 55,  124 => 54,  116 => 49,  112 => 48,  104 => 43,  100 => 42,  96 => 40,  94 => 39,  92 => 38,  90 => 37,  88 => 36,  86 => 35,  84 => 34,  82 => 33,  80 => 32,  78 => 31,  76 => 30,  74 => 29,  68 => 25,  64 => 24,  55 => 18,  51 => 17,  43 => 13,  41 => 11,  39 => 10,  37 => 9,  35 => 8,  29 => 4,  24 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*     <a href="{{ path('fos_user_change_password') }}">*/
/*         {{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}*/
/*     </a>*/
/* {% endif %}*/
/* {#{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}#}*/
/*     {#{{ form_widget(form) }}#}*/
/*     {#<div>#}*/
/*         {#<input type="submit" value="{{ 'profile.edit.submit'|trans }}" />#}*/
/*     {#</div>#}*/
/* {#{{ form_end(form) }}#}*/
/* <form style="padding-left: 100px" action="{{ path('fos_user_profile_edit') }}" method="POST">*/
/*     <div class="form-group" id="fos_user_edit_form">*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 {{ form_widget(form.email, { 'attr': {'class': 'form-control', 'placeholder': 'form.email'|trans } }) }}*/
/*                 {{ form_errors(form.email) }}*/
/*             </div>*/
/*         </div><br>*/
/* */
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 {{ form_widget(form.username, { 'attr': {'class': 'form-control', 'placeholder': 'form.username'|trans } }) }}*/
/*                 {{ form_errors(form.username) }}*/
/*             </div>*/
/*         </div><br>*/
/*         {#<div class="row">#}*/
/*             {#<div class="col-xs-2">#}*/
/*                 {#{{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control', 'placeholder': 'form.password'|trans } }) }}#}*/
/*                 {#{{ form_errors(form.plainPassword.first) }}#}*/
/*             {#</div>#}*/
/*         {#</div><br>#}*/
/*         {#<div class="row">#}*/
/*             {#<div class="col-xs-2">#}*/
/*                 {#{{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control', 'placeholder': 'form.password_confirmation'|trans } }) }}#}*/
/*                 {#{{ form_errors(form.plainPassword.second) }}#}*/
/*             {#</div>#}*/
/*         {#</div><br>#}*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 {{ form_widget(form.city, { 'attr': {'class': 'form-control', 'placeholder': 'form.city'|trans } }) }}*/
/*                 {{ form_errors(form.city) }}*/
/*             </div>*/
/*         </div><br>*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 {{ form_widget(form.phone, { 'attr': {'class': 'form-control', 'placeholder': 'form.phone'|trans } }) }}*/
/*                 {{ form_errors(form.phone) }}*/
/*             </div>*/
/*         </div><br>*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 {{ form_widget(form.address, { 'attr': {'class': 'form-control', 'placeholder': 'form.address'|trans } }) }}*/
/*                 {{ form_errors(form.address) }}*/
/*             </div>*/
/*         </div><br>*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 {{ form_widget(form.current_password, { 'attr': {'class': 'form-control', 'placeholder': 'form.current_password'|trans } }) }}*/
/*                 {{ form_errors(form.current_password) }}*/
/*             </div>*/
/*         </div>*/
/*         {{ form_rest(form) }}*/
/* */
/*     </div>*/
/*     <div class="form-group">*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 <input class="btn btn-lg btn-primary btn-block" type="submit" value="{{ 'profile.edit.submit'|trans }}">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </form>*/
/* */

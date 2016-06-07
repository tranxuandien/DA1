<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_350649c47c599f64d12966d498f9df584dc8d92e8c0578adc84a686080f1c7b6 extends Twig_Template
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
        $__internal_e0029c145d2a17e3457af1d33de8f10ea5351654bc456618bccadbbf7f20666f = $this->env->getExtension("native_profiler");
        $__internal_e0029c145d2a17e3457af1d33de8f10ea5351654bc456618bccadbbf7f20666f->enter($__internal_e0029c145d2a17e3457af1d33de8f10ea5351654bc456618bccadbbf7f20666f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        // line 6
        echo "        ";
        // line 7
        echo "    ";
        // line 9
        echo "<form style=\"padding-left: 100px\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\">
    <div class=\"form-group\" id=\"fos_user_registration_form\">
        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.email", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
            </div>
        </div><br>

        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.username", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
            </div>
        </div><br>
        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.name", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
            </div>
        </div><br>
        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.password", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
            </div>
        </div><br>
        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.password_confirmation", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
            </div>
        </div><br>
        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.city", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'errors');
        echo "
            </div>
        </div><br>
        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.phone", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "
            </div>
        </div><br>
        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.address", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'errors');
        echo "
            </div>
        </div>
        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    </div>
    <div class=\"form-group\">
        <div class=\"row\">
            <div class=\"col-xs-2\">
                <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
            </div>
        </div>
    </div>
</form>";
        
        $__internal_e0029c145d2a17e3457af1d33de8f10ea5351654bc456618bccadbbf7f20666f->leave($__internal_e0029c145d2a17e3457af1d33de8f10ea5351654bc456618bccadbbf7f20666f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 66,  136 => 60,  130 => 57,  126 => 56,  118 => 51,  114 => 50,  106 => 45,  102 => 44,  94 => 39,  90 => 38,  82 => 33,  78 => 32,  70 => 27,  66 => 26,  58 => 21,  54 => 20,  45 => 14,  41 => 13,  33 => 9,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {#{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}#}*/
/*     {#{{ form_widget(form) }}#}*/
/*     {#<div>#}*/
/*         {#<input type="submit" value="{{ 'registration.submit'|trans }}" />#}*/
/*     {#</div>#}*/
/* {#{{ form_end(form) }}#}*/
/* <form style="padding-left: 100px" action="{{ path('fos_user_registration_register') }}" method="POST">*/
/*     <div class="form-group" id="fos_user_registration_form">*/
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
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 {{ form_widget(form.name, { 'attr': {'class': 'form-control', 'placeholder': 'form.name'|trans } }) }}*/
/*                 {{ form_errors(form.name) }}*/
/*             </div>*/
/*         </div><br>*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control', 'placeholder': 'form.password'|trans } }) }}*/
/*                 {{ form_errors(form.plainPassword.first) }}*/
/*             </div>*/
/*         </div><br>*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control', 'placeholder': 'form.password_confirmation'|trans } }) }}*/
/*                 {{ form_errors(form.plainPassword.second) }}*/
/*             </div>*/
/*         </div><br>*/
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
/*         </div>*/
/*         {{ form_rest(form) }}*/
/* */
/*     </div>*/
/*     <div class="form-group">*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 <input class="btn btn-lg btn-primary btn-block" type="submit" value="{{ 'registration.submit'|trans }}">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </form>*/

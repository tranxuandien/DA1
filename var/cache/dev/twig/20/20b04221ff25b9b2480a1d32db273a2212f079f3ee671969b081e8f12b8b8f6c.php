<?php

/* @FOSUser/ChangePassword/changePassword_content.html.twig */
class __TwigTemplate_b1885ddc811e399ae54a3b3a16691c31a155699e5f49ef72c7c654d0cea14adc extends Twig_Template
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
        $__internal_47df5ed556fd30acf4434eee1688c5275b2d808603cf8590bdf42a0bdf156a54 = $this->env->getExtension("native_profiler");
        $__internal_47df5ed556fd30acf4434eee1688c5275b2d808603cf8590bdf42a0bdf156a54->enter($__internal_47df5ed556fd30acf4434eee1688c5275b2d808603cf8590bdf42a0bdf156a54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword_content.html.twig"));

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
        echo "
<form style=\"padding-left: 100px\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" method=\"POST\">
    <div class=\"form-group\" id=\"fos_user_change_password\">
        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.current_password", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'errors');
        echo "
            </div>
        </div><br>
        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.new_password", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
            </div>
        </div><br>
        <div class=\"row\">
            <div class=\"col-xs-2\">
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("form.new_password_confirmation", array(), "FOSUserBundle"))));
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
        echo "
            </div>
        </div><br>
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    </div>
    <div class=\"form-group\">
        <div class=\"row\">
            <div class=\"col-xs-2\">
                <input class=\"btn btn-lg btn-primary btn-block\" type=\"submit\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
            </div>
        </div>
    </div>
</form>";
        
        $__internal_47df5ed556fd30acf4434eee1688c5275b2d808603cf8590bdf42a0bdf156a54->leave($__internal_47df5ed556fd30acf4434eee1688c5275b2d808603cf8590bdf42a0bdf156a54_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 36,  77 => 30,  71 => 27,  67 => 26,  59 => 21,  55 => 20,  47 => 15,  43 => 14,  36 => 10,  33 => 9,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {#{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}#}*/
/*     {#{{ form_widget(form) }}#}*/
/*     {#<div>#}*/
/*         {#<input type="submit" value="{{ 'change_password.submit'|trans }}" />#}*/
/*     {#</div>#}*/
/* {#{{ form_end(form) }}#}*/
/* */
/* <form style="padding-left: 100px" action="{{ path('fos_user_change_password') }}" method="POST">*/
/*     <div class="form-group" id="fos_user_change_password">*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 {{ form_widget(form.current_password, { 'attr': {'class': 'form-control', 'placeholder': 'form.current_password'|trans } }) }}*/
/*                 {{ form_errors(form.current_password) }}*/
/*             </div>*/
/*         </div><br>*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control', 'placeholder': 'form.new_password'|trans } }) }}*/
/*                 {{ form_errors(form.plainPassword.first) }}*/
/*             </div>*/
/*         </div><br>*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control', 'placeholder': 'form.new_password_confirmation'|trans } }) }}*/
/*                 {{ form_errors(form.plainPassword.second) }}*/
/*             </div>*/
/*         </div><br>*/
/*         {{ form_rest(form) }}*/
/* */
/*     </div>*/
/*     <div class="form-group">*/
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 <input class="btn btn-lg btn-primary btn-block" type="submit" value="{{ 'change_password.submit'|trans }}">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </form>*/

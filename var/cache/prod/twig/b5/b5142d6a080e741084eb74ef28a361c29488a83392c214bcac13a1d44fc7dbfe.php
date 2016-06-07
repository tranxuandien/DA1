<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c0b7467f8b8e88d221d030815ae2e97db2a8858bb1c56805c387ed8c0885719e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "
    <form style=\"padding-left: 100px\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\"/>

        <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

        <div class=\"row\">
            <div class=\"col-xs-2\">
                <input class=\" form-control\" placeholder=\"Tên đăng nhập\" type=\"text\" id=\"username\" name=\"_username\"
                       value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\"/>
            </div>
        </div>

        <label for=\"password\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

        <div class=\"row\">
            <div class=\"col-xs-2\">
                <input class=\"form-control\" placeholder=\"Mật khẩu\" type=\"password\" id=\"password\" name=\"_password\"
                       required=\"required\"/>
            </div>
        </div>
        <br>
        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
        <label for=\"remember_me\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>

        <div class=\"form-group\">
            <div class=\"row\">
                <div class=\"col-xs-2\">
                    <input class=\"form-control\" type=\"submit\" id=\"_submit\" name=\"_submit\"
                           value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                </div>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 38,  80 => 32,  67 => 22,  60 => 18,  52 => 13,  47 => 11,  43 => 10,  40 => 9,  34 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/* */
/*     <form style="padding-left: 100px" action="{{ path("fos_user_security_check") }}" method="post">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/* */
/*         <label for="username">{{ 'security.login.username'|trans }}</label>*/
/* */
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 <input class=" form-control" placeholder="Tên đăng nhập" type="text" id="username" name="_username"*/
/*                        value="{{ last_username }}" required="required"/>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <label for="password">{{ 'security.login.password'|trans }}</label>*/
/* */
/*         <div class="row">*/
/*             <div class="col-xs-2">*/
/*                 <input class="form-control" placeholder="Mật khẩu" type="password" id="password" name="_password"*/
/*                        required="required"/>*/
/*             </div>*/
/*         </div>*/
/*         <br>*/
/*         <input type="checkbox" id="remember_me" name="_remember_me" value="on"/>*/
/*         <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*         <div class="form-group">*/
/*             <div class="row">*/
/*                 <div class="col-xs-2">*/
/*                     <input class="form-control" type="submit" id="_submit" name="_submit"*/
/*                            value="{{ 'security.login.submit'|trans }}"/>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </form>*/
/* {% endblock fos_user_content %}*/
/* */

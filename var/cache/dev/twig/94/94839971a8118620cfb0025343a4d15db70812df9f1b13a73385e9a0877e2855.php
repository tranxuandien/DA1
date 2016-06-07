<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_c35c5ac1953e6fffa62d4a0e4b289f682ca632916682fe8c0d2b4e62eb3fac97 extends Twig_Template
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
        $__internal_0e3c96841a86f3ea8ee5c64c858304780be4db2b6b147f6c12abccea27e034be = $this->env->getExtension("native_profiler");
        $__internal_0e3c96841a86f3ea8ee5c64c858304780be4db2b6b147f6c12abccea27e034be->enter($__internal_0e3c96841a86f3ea8ee5c64c858304780be4db2b6b147f6c12abccea27e034be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e3c96841a86f3ea8ee5c64c858304780be4db2b6b147f6c12abccea27e034be->leave($__internal_0e3c96841a86f3ea8ee5c64c858304780be4db2b6b147f6c12abccea27e034be_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_72d5ab6205eb142c77acbf6197d4d0d462b1d8daac47a35dff84e7d3f992113a = $this->env->getExtension("native_profiler");
        $__internal_72d5ab6205eb142c77acbf6197d4d0d462b1d8daac47a35dff84e7d3f992113a->enter($__internal_72d5ab6205eb142c77acbf6197d4d0d462b1d8daac47a35dff84e7d3f992113a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_72d5ab6205eb142c77acbf6197d4d0d462b1d8daac47a35dff84e7d3f992113a->leave($__internal_72d5ab6205eb142c77acbf6197d4d0d462b1d8daac47a35dff84e7d3f992113a_prof);

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
        return array (  98 => 38,  89 => 32,  76 => 22,  69 => 18,  61 => 13,  56 => 11,  52 => 10,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

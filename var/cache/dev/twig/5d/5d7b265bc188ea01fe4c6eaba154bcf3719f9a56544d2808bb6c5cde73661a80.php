<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_0a5ebd2492abbe8bb5fa1672cba21070c2fc549c142fd0d5dd34d6d6fbba097e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab60b666fded77ed3e50989dc939b18972ae7473ed4831430bfcfb28f0fe8b72 = $this->env->getExtension("native_profiler");
        $__internal_ab60b666fded77ed3e50989dc939b18972ae7473ed4831430bfcfb28f0fe8b72->enter($__internal_ab60b666fded77ed3e50989dc939b18972ae7473ed4831430bfcfb28f0fe8b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
";
        // line 8
        echo "    ";
        $this->loadTemplate("header.html.twig", "@FOSUser/layout.html.twig", 8)->display($context);
        // line 9
        echo "        <div>
            ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 16
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 18
        echo "        </div>

        ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 21
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 22
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 23
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 24
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
        }
        // line 29
        echo "
        <div>
            ";
        // line 31
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 33
        echo "        </div>
";
        // line 35
        echo "    </body>
</html>
";
        
        $__internal_ab60b666fded77ed3e50989dc939b18972ae7473ed4831430bfcfb28f0fe8b72->leave($__internal_ab60b666fded77ed3e50989dc939b18972ae7473ed4831430bfcfb28f0fe8b72_prof);

    }

    // line 31
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23d6a452bd5fc2533c0562f6c8d3968b4a360c2e09f279bfc9b1d07d4a21bf6d = $this->env->getExtension("native_profiler");
        $__internal_23d6a452bd5fc2533c0562f6c8d3968b4a360c2e09f279bfc9b1d07d4a21bf6d->enter($__internal_23d6a452bd5fc2533c0562f6c8d3968b4a360c2e09f279bfc9b1d07d4a21bf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 32
        echo "            ";
        
        $__internal_23d6a452bd5fc2533c0562f6c8d3968b4a360c2e09f279bfc9b1d07d4a21bf6d->leave($__internal_23d6a452bd5fc2533c0562f6c8d3968b4a360c2e09f279bfc9b1d07d4a21bf6d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  119 => 31,  110 => 35,  107 => 33,  105 => 31,  101 => 29,  98 => 28,  92 => 27,  83 => 24,  78 => 23,  73 => 22,  68 => 21,  66 => 20,  62 => 18,  54 => 16,  48 => 13,  44 => 12,  39 => 11,  37 => 10,  34 => 9,  31 => 8,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*     </head>*/
/*     <body>*/
/* {#{% block body %}#}*/
/*     {% include('header.html.twig') %}*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/* {#{% endblock %}#}*/
/*     </body>*/
/* </html>*/
/* */

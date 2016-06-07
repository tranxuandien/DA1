<?php

/* security/login.html.twig */
class __TwigTemplate_6fb7800ace505cbeb58e5471f07ecc865b32386f2e93d506f715556bf72537de extends Twig_Template
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
        $__internal_59a38fbe45a1dd00f4b7a082a71923ab9eef0feee020386216ec04b0bd59a72b = $this->env->getExtension("native_profiler");
        $__internal_59a38fbe45a1dd00f4b7a082a71923ab9eef0feee020386216ec04b0bd59a72b->enter($__internal_59a38fbe45a1dd00f4b7a082a71923ab9eef0feee020386216ec04b0bd59a72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 17
        echo "
    <button type=\"submit\">login</button>
</form>";
        
        $__internal_59a38fbe45a1dd00f4b7a082a71923ab9eef0feee020386216ec04b0bd59a72b->leave($__internal_59a38fbe45a1dd00f4b7a082a71923ab9eef0feee020386216ec04b0bd59a72b_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  38 => 7,  33 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path('login') }}" method="post">*/
/*     <label for="username">Username:</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Password:</label>*/
/*     <input type="password" id="password" name="_password" />*/
/* */
/*     {#*/
/*         If you want to control the URL the user*/
/*         is redirected to on success (more details below)*/
/*         <input type="hidden" name="_target_path" value="/account" />*/
/*     #}*/
/* */
/*     <button type="submit">login</button>*/
/* </form>*/

<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_efb9c62d14cc762335086cebef3ed0e532eb0779c3e1efc1333cfc0b150f719e extends Twig_Template
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
        $__internal_bb8b7c8ac4e78e748df8508e778ae7410559d377916b899c8a333a66943e9d19 = $this->env->getExtension("native_profiler");
        $__internal_bb8b7c8ac4e78e748df8508e778ae7410559d377916b899c8a333a66943e9d19->enter($__internal_bb8b7c8ac4e78e748df8508e778ae7410559d377916b899c8a333a66943e9d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p><b>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p><b>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ":</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    <p><b>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ":</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</p>
    <p><b>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.city", array(), "FOSUserBundle"), "html", null, true);
        echo ":</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city", array()), "html", null, true);
        echo "</p>
    <p><b>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.phone", array(), "FOSUserBundle"), "html", null, true);
        echo ":</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array()), "html", null, true);
        echo "</p>
    <p><b>";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.address", array(), "FOSUserBundle"), "html", null, true);
        echo ":</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_bb8b7c8ac4e78e748df8508e778ae7410559d377916b899c8a333a66943e9d19->leave($__internal_bb8b7c8ac4e78e748df8508e778ae7410559d377916b899c8a333a66943e9d19_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  50 => 8,  44 => 7,  38 => 6,  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p><b>{{ 'profile.show.username'|trans }}:</b> {{ user.username }}</p>*/
/*     <p><b>{{ 'profile.show.email'|trans }}:</b> {{ user.email }}</p>*/
/*     <p><b>{{ 'profile.show.name'|trans }}:</b> {{ user.name }}</p>*/
/*     <p><b>{{ 'profile.show.city'|trans }}:</b> {{ user.city }}</p>*/
/*     <p><b>{{ 'profile.show.phone'|trans }}:</b> {{ user.phone }}</p>*/
/*     <p><b>{{ 'profile.show.address'|trans }}:</b> {{ user.address }}</p>*/
/* </div>*/
/* */

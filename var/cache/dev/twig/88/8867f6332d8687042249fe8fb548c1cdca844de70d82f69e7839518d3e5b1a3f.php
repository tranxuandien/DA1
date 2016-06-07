<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_10f12a60e5ad82f3bc1083161304506d1034a3dcad9c6a25cda66664e9e1f0d5 extends Twig_Template
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
        $__internal_0e60239fa7aecd77ef02311ebc0f5efd0052d187c0887a8f5ed45aec845ebf15 = $this->env->getExtension("native_profiler");
        $__internal_0e60239fa7aecd77ef02311ebc0f5efd0052d187c0887a8f5ed45aec845ebf15->enter($__internal_0e60239fa7aecd77ef02311ebc0f5efd0052d187c0887a8f5ed45aec845ebf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.city", array(), "FOSUserBundle"), "html", null, true);
        echo ":</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "city", array()), "html", null, true);
        echo "</p>
    <p><b>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.phone", array(), "FOSUserBundle"), "html", null, true);
        echo ":</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "phone", array()), "html", null, true);
        echo "</p>
    <p><b>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.address", array(), "FOSUserBundle"), "html", null, true);
        echo ":</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "address", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_0e60239fa7aecd77ef02311ebc0f5efd0052d187c0887a8f5ed45aec845ebf15->leave($__internal_0e60239fa7aecd77ef02311ebc0f5efd0052d187c0887a8f5ed45aec845ebf15_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  44 => 7,  38 => 6,  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p><b>{{ 'profile.show.username'|trans }}:</b> {{ user.username }}</p>*/
/*     <p><b>{{ 'profile.show.email'|trans }}:</b> {{ user.email }}</p>*/
/*     <p><b>{{ 'profile.show.city'|trans }}:</b> {{ user.city }}</p>*/
/*     <p><b>{{ 'profile.show.phone'|trans }}:</b> {{ user.phone }}</p>*/
/*     <p><b>{{ 'profile.show.address'|trans }}:</b> {{ user.address }}</p>*/
/* </div>*/
/* */

<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_279e9730090b1e4623890d71fbf744423fe45366e091abd80e24e2fb7b8f1bad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_ed045d2211bd1aa2cccb32cf69e63fb990d83a7b403be16b9f9c04a32c3b4a34 = $this->env->getExtension("native_profiler");
        $__internal_ed045d2211bd1aa2cccb32cf69e63fb990d83a7b403be16b9f9c04a32c3b4a34->enter($__internal_ed045d2211bd1aa2cccb32cf69e63fb990d83a7b403be16b9f9c04a32c3b4a34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed045d2211bd1aa2cccb32cf69e63fb990d83a7b403be16b9f9c04a32c3b4a34->leave($__internal_ed045d2211bd1aa2cccb32cf69e63fb990d83a7b403be16b9f9c04a32c3b4a34_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f513e4d0c1cc30e3d812da3b1a47ba1f76095888db75c465532dd54703708c1 = $this->env->getExtension("native_profiler");
        $__internal_3f513e4d0c1cc30e3d812da3b1a47ba1f76095888db75c465532dd54703708c1->enter($__internal_3f513e4d0c1cc30e3d812da3b1a47ba1f76095888db75c465532dd54703708c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_3f513e4d0c1cc30e3d812da3b1a47ba1f76095888db75c465532dd54703708c1->leave($__internal_3f513e4d0c1cc30e3d812da3b1a47ba1f76095888db75c465532dd54703708c1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */

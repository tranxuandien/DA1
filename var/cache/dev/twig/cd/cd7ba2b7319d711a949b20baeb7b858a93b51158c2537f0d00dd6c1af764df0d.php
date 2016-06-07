<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_b4dbdb47e370de1db7a5233d03a8c21f4dba0f44d9ae73be2235752b8aaadf21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b7cbc15528e31241231d482676a5e18846e74e8dc6e23dc300205d57184a7eab = $this->env->getExtension("native_profiler");
        $__internal_b7cbc15528e31241231d482676a5e18846e74e8dc6e23dc300205d57184a7eab->enter($__internal_b7cbc15528e31241231d482676a5e18846e74e8dc6e23dc300205d57184a7eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7cbc15528e31241231d482676a5e18846e74e8dc6e23dc300205d57184a7eab->leave($__internal_b7cbc15528e31241231d482676a5e18846e74e8dc6e23dc300205d57184a7eab_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_e708fa93aeb64dad612f1f8806525c87c6bfb17ab0c35e1e4db65e3c366b0591 = $this->env->getExtension("native_profiler");
        $__internal_e708fa93aeb64dad612f1f8806525c87c6bfb17ab0c35e1e4db65e3c366b0591->enter($__internal_e708fa93aeb64dad612f1f8806525c87c6bfb17ab0c35e1e4db65e3c366b0591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_e708fa93aeb64dad612f1f8806525c87c6bfb17ab0c35e1e4db65e3c366b0591->leave($__internal_e708fa93aeb64dad612f1f8806525c87c6bfb17ab0c35e1e4db65e3c366b0591_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d55dfb9f66f3d740307916f146c88dc3e92e2f5f7e90dcaee8ffbfb84e0b1847 = $this->env->getExtension("native_profiler");
        $__internal_d55dfb9f66f3d740307916f146c88dc3e92e2f5f7e90dcaee8ffbfb84e0b1847->enter($__internal_d55dfb9f66f3d740307916f146c88dc3e92e2f5f7e90dcaee8ffbfb84e0b1847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "ERROR";
        
        $__internal_d55dfb9f66f3d740307916f146c88dc3e92e2f5f7e90dcaee8ffbfb84e0b1847->leave($__internal_d55dfb9f66f3d740307916f146c88dc3e92e2f5f7e90dcaee8ffbfb84e0b1847_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_0955cece68206629f1addaeca1ad6d6627f014ae33b0cf7497b2e1c82b95568c = $this->env->getExtension("native_profiler");
        $__internal_0955cece68206629f1addaeca1ad6d6627f014ae33b0cf7497b2e1c82b95568c->enter($__internal_0955cece68206629f1addaeca1ad6d6627f014ae33b0cf7497b2e1c82b95568c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1>Error</h1>

            <div class=\"error-message\">
                <p>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "safeMessage", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </section>
";
        
        $__internal_0955cece68206629f1addaeca1ad6d6627f014ae33b0cf7497b2e1c82b95568c->leave($__internal_0955cece68206629f1addaeca1ad6d6627f014ae33b0cf7497b2e1c82b95568c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  68 => 12,  62 => 11,  50 => 9,  38 => 8,  31 => 3,  29 => 1,  20 => 3,);
    }
}
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% extends [*/
/*     _entity_config.templates.layout|default(''),*/
/*     easyadmin_config('design.templates.layout'),*/
/*     '@EasyAdmin/default/layout.html.twig'*/
/* ] %}*/
/* */
/* {% block body_class 'error' %}*/
/* {% block page_title 'ERROR' %}*/
/* */
/* {% block content %}*/
/*     <section id="main" class="content">*/
/*         <div class="error-description">*/
/*             <h1>Error</h1>*/
/* */
/*             <div class="error-message">*/
/*                 <p>{{ exception.safeMessage }}</p>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */

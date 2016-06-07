<?php

/* @EasyAdmin/default/exception.html.twig */
class __TwigTemplate_218c9e34188308702a214d7e801277054f89d8ab979dccf9f535670a258ac288 extends Twig_Template
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
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "@EasyAdmin/default/exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b935c7924a7775c3a56faa2abc4fbfc65ae1b42d1e4f79959a2506d6e25c5c9 = $this->env->getExtension("native_profiler");
        $__internal_2b935c7924a7775c3a56faa2abc4fbfc65ae1b42d1e4f79959a2506d6e25c5c9->enter($__internal_2b935c7924a7775c3a56faa2abc4fbfc65ae1b42d1e4f79959a2506d6e25c5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/exception.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b935c7924a7775c3a56faa2abc4fbfc65ae1b42d1e4f79959a2506d6e25c5c9->leave($__internal_2b935c7924a7775c3a56faa2abc4fbfc65ae1b42d1e4f79959a2506d6e25c5c9_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_db863eefd074b723d25a9b13b1286b139580cdf508af0b10833585327464cb0b = $this->env->getExtension("native_profiler");
        $__internal_db863eefd074b723d25a9b13b1286b139580cdf508af0b10833585327464cb0b->enter($__internal_db863eefd074b723d25a9b13b1286b139580cdf508af0b10833585327464cb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_db863eefd074b723d25a9b13b1286b139580cdf508af0b10833585327464cb0b->leave($__internal_db863eefd074b723d25a9b13b1286b139580cdf508af0b10833585327464cb0b_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_04f05188baa702b6e74af865806870db898555f346c5cbcf091cb324091aed02 = $this->env->getExtension("native_profiler");
        $__internal_04f05188baa702b6e74af865806870db898555f346c5cbcf091cb324091aed02->enter($__internal_04f05188baa702b6e74af865806870db898555f346c5cbcf091cb324091aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "ERROR";
        
        $__internal_04f05188baa702b6e74af865806870db898555f346c5cbcf091cb324091aed02->leave($__internal_04f05188baa702b6e74af865806870db898555f346c5cbcf091cb324091aed02_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_9c64ce3acb094c2a76239942f38e78311501fe94d0b57138bb79ba92f4bb6008 = $this->env->getExtension("native_profiler");
        $__internal_9c64ce3acb094c2a76239942f38e78311501fe94d0b57138bb79ba92f4bb6008->enter($__internal_9c64ce3acb094c2a76239942f38e78311501fe94d0b57138bb79ba92f4bb6008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9c64ce3acb094c2a76239942f38e78311501fe94d0b57138bb79ba92f4bb6008->leave($__internal_9c64ce3acb094c2a76239942f38e78311501fe94d0b57138bb79ba92f4bb6008_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/exception.html.twig";
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

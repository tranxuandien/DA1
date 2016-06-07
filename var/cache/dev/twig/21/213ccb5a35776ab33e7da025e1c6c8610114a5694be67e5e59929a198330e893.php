<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_b9749d2fb3ce9199087e8d6787547591803ecb590b8b715dd7c7b1715ed42633 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58c05ac375c6f1195a83a516da4332fd7523e6078075da6373e418fd9c940482 = $this->env->getExtension("native_profiler");
        $__internal_58c05ac375c6f1195a83a516da4332fd7523e6078075da6373e418fd9c940482->enter($__internal_58c05ac375c6f1195a83a516da4332fd7523e6078075da6373e418fd9c940482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())));
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58c05ac375c6f1195a83a516da4332fd7523e6078075da6373e418fd9c940482->leave($__internal_58c05ac375c6f1195a83a516da4332fd7523e6078075da6373e418fd9c940482_prof);

    }

    // line 8
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_6e0ecf9301cb0c06a6c40658e6b0706be9b2649523aa95d60d367fbbe0c1539d = $this->env->getExtension("native_profiler");
        $__internal_6e0ecf9301cb0c06a6c40658e6b0706be9b2649523aa95d60d367fbbe0c1539d->enter($__internal_6e0ecf9301cb0c06a6c40658e6b0706be9b2649523aa95d60d367fbbe0c1539d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_6e0ecf9301cb0c06a6c40658e6b0706be9b2649523aa95d60d367fbbe0c1539d->leave($__internal_6e0ecf9301cb0c06a6c40658e6b0706be9b2649523aa95d60d367fbbe0c1539d_prof);

    }

    // line 9
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_526bbef442e3cb8824ea30822eb9f5d8ad3924d8745c8324006c1b076ab3d654 = $this->env->getExtension("native_profiler");
        $__internal_526bbef442e3cb8824ea30822eb9f5d8ad3924d8745c8324006c1b076ab3d654->enter($__internal_526bbef442e3cb8824ea30822eb9f5d8ad3924d8745c8324006c1b076ab3d654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_526bbef442e3cb8824ea30822eb9f5d8ad3924d8745c8324006c1b076ab3d654->leave($__internal_526bbef442e3cb8824ea30822eb9f5d8ad3924d8745c8324006c1b076ab3d654_prof);

    }

    // line 11
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_4d01535fdd810abc30c1a1cf2c5c40bb903cc699d4a71e30516633fa01d0692d = $this->env->getExtension("native_profiler");
        $__internal_4d01535fdd810abc30c1a1cf2c5c40bb903cc699d4a71e30516633fa01d0692d->enter($__internal_4d01535fdd810abc30c1a1cf2c5c40bb903cc699d4a71e30516633fa01d0692d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 12
        ob_start();
        // line 13
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("new.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 14
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "new", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4d01535fdd810abc30c1a1cf2c5c40bb903cc699d4a71e30516633fa01d0692d->leave($__internal_4d01535fdd810abc30c1a1cf2c5c40bb903cc699d4a71e30516633fa01d0692d_prof);

    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        $__internal_7dcea9e7de55bb3ed54eeeb7af790ddb6193ec2f4b226b311645039eb137301a = $this->env->getExtension("native_profiler");
        $__internal_7dcea9e7de55bb3ed54eeeb7af790ddb6193ec2f4b226b311645039eb137301a->enter($__internal_7dcea9e7de55bb3ed54eeeb7af790ddb6193ec2f4b226b311645039eb137301a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 19
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_7dcea9e7de55bb3ed54eeeb7af790ddb6193ec2f4b226b311645039eb137301a->leave($__internal_7dcea9e7de55bb3ed54eeeb7af790ddb6193ec2f4b226b311645039eb137301a_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_2e4052c44ba67a5be6f022d90e19c1499d638042aaa3c8c8e13150577c462da1 = $this->env->getExtension("native_profiler");
        $__internal_2e4052c44ba67a5be6f022d90e19c1499d638042aaa3c8c8e13150577c462da1->enter($__internal_2e4052c44ba67a5be6f022d90e19c1499d638042aaa3c8c8e13150577c462da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 20
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_2e4052c44ba67a5be6f022d90e19c1499d638042aaa3c8c8e13150577c462da1->leave($__internal_2e4052c44ba67a5be6f022d90e19c1499d638042aaa3c8c8e13150577c462da1_prof);

    }

    // line 24
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_b0fb43d9ccdd65b0ee46fe5859fb07f000aee7883008c593509f7103a27aa90a = $this->env->getExtension("native_profiler");
        $__internal_b0fb43d9ccdd65b0ee46fe5859fb07f000aee7883008c593509f7103a27aa90a->enter($__internal_b0fb43d9ccdd65b0ee46fe5859fb07f000aee7883008c593509f7103a27aa90a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 25
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 29
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            // Select2 widget is only enabled for the <select> elements which explicitly ask for it
            \$('#main').find('form select[data-widget=\"select2\"]').select2({
                theme: 'bootstrap'
            });
        });
    </script>
";
        
        $__internal_b0fb43d9ccdd65b0ee46fe5859fb07f000aee7883008c593509f7103a27aa90a->leave($__internal_b0fb43d9ccdd65b0ee46fe5859fb07f000aee7883008c593509f7103a27aa90a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 29,  126 => 25,  120 => 24,  110 => 20,  97 => 19,  91 => 18,  80 => 14,  77 => 13,  75 => 12,  69 => 11,  57 => 9,  45 => 8,  38 => 6,  36 => 4,  34 => 3,  32 => 1,  23 => 6,);
    }
}
/* {% form_theme form with easyadmin_config('design.form_theme') %}*/
/* */
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-new-' ~ _entity_config.name %}*/
/* {% block body_class 'new new-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/* {% spaceless %}*/
/*     {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {% block entity_form %}*/
/*         {{ form(form) }}*/
/*     {% endblock entity_form %}*/
/* {% endblock %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });*/
/* */
/*             $('.form-actions').easyAdminSticky();*/
/* */
/*             // Select2 widget is only enabled for the <select> elements which explicitly ask for it*/
/*             $('#main').find('form select[data-widget="select2"]').select2({*/
/*                 theme: 'bootstrap'*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */

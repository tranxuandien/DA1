<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_db3dd13f8ebdc06eefeff61a9fd150228d2bb36a07a87984b986c256a29c8979 extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4dbab76746c42da0196ab8a51b9bae2c5f26612865b030862b3bbd019ababbfe = $this->env->getExtension("native_profiler");
        $__internal_4dbab76746c42da0196ab8a51b9bae2c5f26612865b030862b3bbd019ababbfe->enter($__internal_4dbab76746c42da0196ab8a51b9bae2c5f26612865b030862b3bbd019ababbfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())), "%entity_id%" => (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dbab76746c42da0196ab8a51b9bae2c5f26612865b030862b3bbd019ababbfe->leave($__internal_4dbab76746c42da0196ab8a51b9bae2c5f26612865b030862b3bbd019ababbfe_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_50c46fd4830447c4df90a7aacd25aa3352f7e07c0e16b000fbd4bbd27c2b39b7 = $this->env->getExtension("native_profiler");
        $__internal_50c46fd4830447c4df90a7aacd25aa3352f7e07c0e16b000fbd4bbd27c2b39b7->enter($__internal_50c46fd4830447c4df90a7aacd25aa3352f7e07c0e16b000fbd4bbd27c2b39b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_50c46fd4830447c4df90a7aacd25aa3352f7e07c0e16b000fbd4bbd27c2b39b7->leave($__internal_50c46fd4830447c4df90a7aacd25aa3352f7e07c0e16b000fbd4bbd27c2b39b7_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_b5807b6e6ee38b4849e585548dabfa83b3732e6090ab3d740554c5dc90a3e8cb = $this->env->getExtension("native_profiler");
        $__internal_b5807b6e6ee38b4849e585548dabfa83b3732e6090ab3d740554c5dc90a3e8cb->enter($__internal_b5807b6e6ee38b4849e585548dabfa83b3732e6090ab3d740554c5dc90a3e8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_b5807b6e6ee38b4849e585548dabfa83b3732e6090ab3d740554c5dc90a3e8cb->leave($__internal_b5807b6e6ee38b4849e585548dabfa83b3732e6090ab3d740554c5dc90a3e8cb_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_8122db651636f8901655d2104fcc9b2b8058430f626a63272dc9be3aef15a8d9 = $this->env->getExtension("native_profiler");
        $__internal_8122db651636f8901655d2104fcc9b2b8058430f626a63272dc9be3aef15a8d9->enter($__internal_8122db651636f8901655d2104fcc9b2b8058430f626a63272dc9be3aef15a8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("edit.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8122db651636f8901655d2104fcc9b2b8058430f626a63272dc9be3aef15a8d9->leave($__internal_8122db651636f8901655d2104fcc9b2b8058430f626a63272dc9be3aef15a8d9_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_42ef1819357bf9be60574ab452c33699679ab8df4331bdadd003c68506d4d237 = $this->env->getExtension("native_profiler");
        $__internal_42ef1819357bf9be60574ab452c33699679ab8df4331bdadd003c68506d4d237->enter($__internal_42ef1819357bf9be60574ab452c33699679ab8df4331bdadd003c68506d4d237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 23
        echo "
    ";
        // line 24
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_42ef1819357bf9be60574ab452c33699679ab8df4331bdadd003c68506d4d237->leave($__internal_42ef1819357bf9be60574ab452c33699679ab8df4331bdadd003c68506d4d237_prof);

    }

    // line 20
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_dd8f86495d07778bc1f31c045983de5fedb1affb23687792d19490775181b6ce = $this->env->getExtension("native_profiler");
        $__internal_dd8f86495d07778bc1f31c045983de5fedb1affb23687792d19490775181b6ce->enter($__internal_dd8f86495d07778bc1f31c045983de5fedb1affb23687792d19490775181b6ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_dd8f86495d07778bc1f31c045983de5fedb1affb23687792d19490775181b6ce->leave($__internal_dd8f86495d07778bc1f31c045983de5fedb1affb23687792d19490775181b6ce_prof);

    }

    // line 24
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_35406e8e9a599fd5b1f57d7707b56ade2f2e71051222efccc822524773578ba7 = $this->env->getExtension("native_profiler");
        $__internal_35406e8e9a599fd5b1f57d7707b56ade2f2e71051222efccc822524773578ba7->enter($__internal_35406e8e9a599fd5b1f57d7707b56ade2f2e71051222efccc822524773578ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 25
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 28
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_trans_parameters" =>         // line 29
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 30
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 31
        echo "
    ";
        
        $__internal_35406e8e9a599fd5b1f57d7707b56ade2f2e71051222efccc822524773578ba7->leave($__internal_35406e8e9a599fd5b1f57d7707b56ade2f2e71051222efccc822524773578ba7_prof);

    }

    // line 35
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_714bd1c490e7a632e0f3796ad0a9dc4862f683cf2ab408329c4f174a0966bfb0 = $this->env->getExtension("native_profiler");
        $__internal_714bd1c490e7a632e0f3796ad0a9dc4862f683cf2ab408329c4f174a0966bfb0->enter($__internal_714bd1c490e7a632e0f3796ad0a9dc4862f683cf2ab408329c4f174a0966bfb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 36
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 40
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });

            // Select2 widget is only enabled for the <select> elements which explicitly ask for it
            \$('#main').find('form select[data-widget=\"select2\"]').select2({
                theme: 'bootstrap'
            });
        });
    </script>
";
        
        $__internal_714bd1c490e7a632e0f3796ad0a9dc4862f683cf2ab408329c4f174a0966bfb0->leave($__internal_714bd1c490e7a632e0f3796ad0a9dc4862f683cf2ab408329c4f174a0966bfb0_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 40,  156 => 36,  150 => 35,  142 => 31,  140 => 30,  139 => 29,  138 => 28,  137 => 27,  135 => 25,  129 => 24,  119 => 21,  113 => 20,  106 => 24,  103 => 23,  100 => 20,  94 => 19,  83 => 15,  80 => 14,  78 => 13,  72 => 12,  60 => 10,  48 => 9,  41 => 7,  39 => 5,  37 => 4,  35 => 3,  33 => 1,  24 => 7,);
    }
}
/* {% form_theme form with easyadmin_config('design.form_theme') %}*/
/* */
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}*/
/* {% block body_class 'edit edit-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/* {% spaceless %}*/
/*     {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     {% block entity_form %}*/
/*         {{ form(form) }}*/
/*     {% endblock entity_form %}*/
/* */
/*     {% block delete_form %}*/
/*         {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {*/
/*             view: 'edit',*/
/*             referer: app.request.query.get('referer', ''),*/
/*             delete_form: delete_form,*/
/*             _trans_parameters: _trans_parameters,*/
/*             _entity_config: _entity_config,*/
/*         }, with_context = false) }}*/
/*     {% endblock delete_form %}*/
/* {% endblock %}*/
/* */
/* {% block body_javascript %}*/
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/*         $(function() {*/
/*             $('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });*/
/* */
/*             $('.form-actions').easyAdminSticky();*/
/* */
/*             $('a.action-delete').on('click', function(e) {*/
/*                 e.preventDefault();*/
/* */
/*                 $('#modal-delete').modal({ backdrop: true, keyboard: true })*/
/*                     .off('click', '#modal-delete-button')*/
/*                     .on('click', '#modal-delete-button', function () {*/
/*                         $('#delete-form').trigger('submit');*/
/*                     });*/
/*             });*/
/* */
/*             // Select2 widget is only enabled for the <select> elements which explicitly ask for it*/
/*             $('#main').find('form select[data-widget="select2"]').select2({*/
/*                 theme: 'bootstrap'*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */

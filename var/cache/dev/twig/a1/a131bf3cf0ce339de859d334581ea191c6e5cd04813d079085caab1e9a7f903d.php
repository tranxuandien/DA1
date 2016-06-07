<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_792ae2313d0c8347ddf687da14fecb3b6a7a2aab67bb376b4e133bb4f2b83860 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 6);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76df103a5392df7d3f27878ce37c9e46c6523ee0343a5a03ba35099677a0bfb2 = $this->env->getExtension("native_profiler");
        $__internal_76df103a5392df7d3f27878ce37c9e46c6523ee0343a5a03ba35099677a0bfb2->enter($__internal_76df103a5392df7d3f27878ce37c9e46c6523ee0343a5a03ba35099677a0bfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())));
        // line 6
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76df103a5392df7d3f27878ce37c9e46c6523ee0343a5a03ba35099677a0bfb2->leave($__internal_76df103a5392df7d3f27878ce37c9e46c6523ee0343a5a03ba35099677a0bfb2_prof);

    }

    // line 8
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_c90634e490b842d0013cbd5f6eef21e07b9a4518578b00726dcbb24da8629f99 = $this->env->getExtension("native_profiler");
        $__internal_c90634e490b842d0013cbd5f6eef21e07b9a4518578b00726dcbb24da8629f99->enter($__internal_c90634e490b842d0013cbd5f6eef21e07b9a4518578b00726dcbb24da8629f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_c90634e490b842d0013cbd5f6eef21e07b9a4518578b00726dcbb24da8629f99->leave($__internal_c90634e490b842d0013cbd5f6eef21e07b9a4518578b00726dcbb24da8629f99_prof);

    }

    // line 9
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_58bb130edcc0697c653d5b328efd5afee878933389422d4e90cf78bcc70896b1 = $this->env->getExtension("native_profiler");
        $__internal_58bb130edcc0697c653d5b328efd5afee878933389422d4e90cf78bcc70896b1->enter($__internal_58bb130edcc0697c653d5b328efd5afee878933389422d4e90cf78bcc70896b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_58bb130edcc0697c653d5b328efd5afee878933389422d4e90cf78bcc70896b1->leave($__internal_58bb130edcc0697c653d5b328efd5afee878933389422d4e90cf78bcc70896b1_prof);

    }

    // line 11
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_ebd0e3bbd80527531dffa2b1b061b5b8eceb262132bcc465a6dff3796ac3b679 = $this->env->getExtension("native_profiler");
        $__internal_ebd0e3bbd80527531dffa2b1b061b5b8eceb262132bcc465a6dff3796ac3b679->enter($__internal_ebd0e3bbd80527531dffa2b1b061b5b8eceb262132bcc465a6dff3796ac3b679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

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
        
        $__internal_ebd0e3bbd80527531dffa2b1b061b5b8eceb262132bcc465a6dff3796ac3b679->leave($__internal_ebd0e3bbd80527531dffa2b1b061b5b8eceb262132bcc465a6dff3796ac3b679_prof);

    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        $__internal_39e263c11e656a74a7266f8783cdd2ace297556422f44b602b97e14deadaa557 = $this->env->getExtension("native_profiler");
        $__internal_39e263c11e656a74a7266f8783cdd2ace297556422f44b602b97e14deadaa557->enter($__internal_39e263c11e656a74a7266f8783cdd2ace297556422f44b602b97e14deadaa557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 19
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_39e263c11e656a74a7266f8783cdd2ace297556422f44b602b97e14deadaa557->leave($__internal_39e263c11e656a74a7266f8783cdd2ace297556422f44b602b97e14deadaa557_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_61c561e0e13db2c21487f9979810c73bf3e68fb357e25a91f7a4829c17d424b6 = $this->env->getExtension("native_profiler");
        $__internal_61c561e0e13db2c21487f9979810c73bf3e68fb357e25a91f7a4829c17d424b6->enter($__internal_61c561e0e13db2c21487f9979810c73bf3e68fb357e25a91f7a4829c17d424b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 20
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_61c561e0e13db2c21487f9979810c73bf3e68fb357e25a91f7a4829c17d424b6->leave($__internal_61c561e0e13db2c21487f9979810c73bf3e68fb357e25a91f7a4829c17d424b6_prof);

    }

    // line 24
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_27f129507960cb3d6d1ec9bcaf1886c15a1b176d09446b806bca639beccec2d3 = $this->env->getExtension("native_profiler");
        $__internal_27f129507960cb3d6d1ec9bcaf1886c15a1b176d09446b806bca639beccec2d3->enter($__internal_27f129507960cb3d6d1ec9bcaf1886c15a1b176d09446b806bca639beccec2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_27f129507960cb3d6d1ec9bcaf1886c15a1b176d09446b806bca639beccec2d3->leave($__internal_27f129507960cb3d6d1ec9bcaf1886c15a1b176d09446b806bca639beccec2d3_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
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

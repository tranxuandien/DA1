<?php

/* EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_a6ae4fe3ac9df11192259527ad9a44369feb83ead03ddaa6e58e7ee41616ac63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig", 1);
        $this->blocks = array(
            'form_start' => array($this, 'block_form_start'),
            'form_label' => array($this, 'block_form_label'),
            'form_label_class' => array($this, 'block_form_label_class'),
            'form_row' => array($this, 'block_form_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
            'submit_row' => array($this, 'block_submit_row'),
            'reset_row' => array($this, 'block_reset_row'),
            'form_group_class' => array($this, 'block_form_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_662b7b00413072e5d9e78c49fac2b9d56691b6c5cdb998cf95abbc7356dda646 = $this->env->getExtension("native_profiler");
        $__internal_662b7b00413072e5d9e78c49fac2b9d56691b6c5cdb998cf95abbc7356dda646->enter($__internal_662b7b00413072e5d9e78c49fac2b9d56691b6c5cdb998cf95abbc7356dda646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_662b7b00413072e5d9e78c49fac2b9d56691b6c5cdb998cf95abbc7356dda646->leave($__internal_662b7b00413072e5d9e78c49fac2b9d56691b6c5cdb998cf95abbc7356dda646_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_65264e2bb605eafbed444615e62361b34702231837a2660001b2ea4ef0c9d905 = $this->env->getExtension("native_profiler");
        $__internal_65264e2bb605eafbed444615e62361b34702231837a2660001b2ea4ef0c9d905->enter($__internal_65264e2bb605eafbed444615e62361b34702231837a2660001b2ea4ef0c9d905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_65264e2bb605eafbed444615e62361b34702231837a2660001b2ea4ef0c9d905->leave($__internal_65264e2bb605eafbed444615e62361b34702231837a2660001b2ea4ef0c9d905_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_56f6166d8f39af42e2991596aff6e8da02b2cde53f8f5902d92a506d3919a13c = $this->env->getExtension("native_profiler");
        $__internal_56f6166d8f39af42e2991596aff6e8da02b2cde53f8f5902d92a506d3919a13c->enter($__internal_56f6166d8f39af42e2991596aff6e8da02b2cde53f8f5902d92a506d3919a13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_56f6166d8f39af42e2991596aff6e8da02b2cde53f8f5902d92a506d3919a13c->leave($__internal_56f6166d8f39af42e2991596aff6e8da02b2cde53f8f5902d92a506d3919a13c_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_583aa0e5384141cc1d44a6523a41ae4bb375f4f0300e30cefa72dcae55e8a80f = $this->env->getExtension("native_profiler");
        $__internal_583aa0e5384141cc1d44a6523a41ae4bb375f4f0300e30cefa72dcae55e8a80f->enter($__internal_583aa0e5384141cc1d44a6523a41ae4bb375f4f0300e30cefa72dcae55e8a80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_583aa0e5384141cc1d44a6523a41ae4bb375f4f0300e30cefa72dcae55e8a80f->leave($__internal_583aa0e5384141cc1d44a6523a41ae4bb375f4f0300e30cefa72dcae55e8a80f_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_37577c890b09f6b1e1c6275eea7890b488e38e4ff1a31854fa8783f5d8aae9ce = $this->env->getExtension("native_profiler");
        $__internal_37577c890b09f6b1e1c6275eea7890b488e38e4ff1a31854fa8783f5d8aae9ce->enter($__internal_37577c890b09f6b1e1c6275eea7890b488e38e4ff1a31854fa8783f5d8aae9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        $context["_field_label"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 30
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("translation_domain" => "messages") + (twig_test_empty($_label_ = (isset($context["_field_label"]) ? $context["_field_label"] : $this->getContext($context, "_field_label"))) ? array() : array("label" => $_label_)));
        echo "
        <div class=\"";
        // line 31
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            ";
        // line 34
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "datetimetz", 2 => "date", 3 => "time")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 35
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 37
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 42
        echo "
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 45
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 46
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()));
            echo "</span>
            ";
        }
        // line 48
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_37577c890b09f6b1e1c6275eea7890b488e38e4ff1a31854fa8783f5d8aae9ce->leave($__internal_37577c890b09f6b1e1c6275eea7890b488e38e4ff1a31854fa8783f5d8aae9ce_prof);

    }

    // line 53
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_12450ce330c4af66473f18c01ca98127b3346590cf5f76dd89ea1a26d7d9ff9b = $this->env->getExtension("native_profiler");
        $__internal_12450ce330c4af66473f18c01ca98127b3346590cf5f76dd89ea1a26d7d9ff9b->enter($__internal_12450ce330c4af66473f18c01ca98127b3346590cf5f76dd89ea1a26d7d9ff9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 54
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_12450ce330c4af66473f18c01ca98127b3346590cf5f76dd89ea1a26d7d9ff9b->leave($__internal_12450ce330c4af66473f18c01ca98127b3346590cf5f76dd89ea1a26d7d9ff9b_prof);

    }

    // line 57
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_0e6c7aa4fa4d64c7b77a7329ee99e400c1f77ba2702d9924b4f8c65b5edd10dc = $this->env->getExtension("native_profiler");
        $__internal_0e6c7aa4fa4d64c7b77a7329ee99e400c1f77ba2702d9924b4f8c65b5edd10dc->enter($__internal_0e6c7aa4fa4d64c7b77a7329ee99e400c1f77ba2702d9924b4f8c65b5edd10dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 58
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_0e6c7aa4fa4d64c7b77a7329ee99e400c1f77ba2702d9924b4f8c65b5edd10dc->leave($__internal_0e6c7aa4fa4d64c7b77a7329ee99e400c1f77ba2702d9924b4f8c65b5edd10dc_prof);

    }

    // line 61
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_f011ab71045756efa83723b04e6bc72b3aa3113affd6de84697dd8ababfa9dc7 = $this->env->getExtension("native_profiler");
        $__internal_f011ab71045756efa83723b04e6bc72b3aa3113affd6de84697dd8ababfa9dc7->enter($__internal_f011ab71045756efa83723b04e6bc72b3aa3113affd6de84697dd8ababfa9dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 62
        ob_start();
        // line 63
        echo "    <div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 64
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 65
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f011ab71045756efa83723b04e6bc72b3aa3113affd6de84697dd8ababfa9dc7->leave($__internal_f011ab71045756efa83723b04e6bc72b3aa3113affd6de84697dd8ababfa9dc7_prof);

    }

    // line 73
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_f0f70742ce0e6940d0ab14ec422122798ee19349d4aec3e641427b1fdb03b2b1 = $this->env->getExtension("native_profiler");
        $__internal_f0f70742ce0e6940d0ab14ec422122798ee19349d4aec3e641427b1fdb03b2b1->enter($__internal_f0f70742ce0e6940d0ab14ec422122798ee19349d4aec3e641427b1fdb03b2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 74
        ob_start();
        // line 75
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 76
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 77
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f0f70742ce0e6940d0ab14ec422122798ee19349d4aec3e641427b1fdb03b2b1->leave($__internal_f0f70742ce0e6940d0ab14ec422122798ee19349d4aec3e641427b1fdb03b2b1_prof);

    }

    // line 84
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_f0178110f29c1db160c96143cab304191b3d8163c47cb8319372117fb791ec47 = $this->env->getExtension("native_profiler");
        $__internal_f0178110f29c1db160c96143cab304191b3d8163c47cb8319372117fb791ec47->enter($__internal_f0178110f29c1db160c96143cab304191b3d8163c47cb8319372117fb791ec47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 85
        ob_start();
        // line 86
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 87
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 88
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f0178110f29c1db160c96143cab304191b3d8163c47cb8319372117fb791ec47->leave($__internal_f0178110f29c1db160c96143cab304191b3d8163c47cb8319372117fb791ec47_prof);

    }

    // line 95
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_452ce61bb6c83cf8d379cb6b9cfe605c1344306c670f6fa92d71e863d4958353 = $this->env->getExtension("native_profiler");
        $__internal_452ce61bb6c83cf8d379cb6b9cfe605c1344306c670f6fa92d71e863d4958353->enter($__internal_452ce61bb6c83cf8d379cb6b9cfe605c1344306c670f6fa92d71e863d4958353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_452ce61bb6c83cf8d379cb6b9cfe605c1344306c670f6fa92d71e863d4958353->leave($__internal_452ce61bb6c83cf8d379cb6b9cfe605c1344306c670f6fa92d71e863d4958353_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:form:bootstrap_3_horizontal_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 95,  299 => 89,  295 => 88,  291 => 87,  288 => 86,  286 => 85,  280 => 84,  268 => 78,  264 => 77,  260 => 76,  255 => 75,  253 => 74,  247 => 73,  235 => 67,  231 => 66,  227 => 65,  223 => 64,  214 => 63,  212 => 62,  206 => 61,  199 => 58,  193 => 57,  186 => 54,  180 => 53,  170 => 48,  164 => 46,  162 => 45,  157 => 43,  154 => 42,  147 => 38,  141 => 37,  137 => 35,  135 => 34,  130 => 32,  126 => 31,  121 => 30,  119 => 29,  110 => 28,  107 => 27,  105 => 26,  99 => 25,  87 => 21,  78 => 16,  75 => 15,  69 => 13,  66 => 12,  64 => 11,  58 => 10,  51 => 5,  49 => 4,  43 => 3,  11 => 1,);
    }
}
/* {% extends "@EasyAdmin/form/bootstrap_3_layout.html.twig" %}*/
/* */
/* {% block form_start -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/* {% spaceless %}*/
/*     {% if label is same as(false) %}*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*     {% else %}*/
/*         {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}*/
/*         {{- parent() -}}*/
/*     {% endif %}*/
/* {% endspaceless %}*/
/* {%- endblock form_label %}*/
/* */
/* {% block form_label_class 'col-sm-2' %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/* {% spaceless %}*/
/*     {% set _field_type = easyadmin.field.fieldType|default('default') %}*/
/*     <div class="form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {% set _field_label = easyadmin.field['label']|default(null) %}*/
/*         {{ form_label(form, _field_label, { translation_domain: 'messages' }) }}*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/* */
/*             {% if _field_type in ['datetime', 'datetimetz', 'date', 'time'] and easyadmin.field.nullable|default(false) %}*/
/*                 <div class="nullable-control">*/
/*                     <label>*/
/*                         <input type="checkbox" {% if data is null %}checked="checked"{% endif %}>*/
/*                         {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}*/
/*                     </label>*/
/*                 </div>*/
/*             {% endif %}*/
/* */
/*             {{ form_errors(form) }}*/
/* */
/*             {% if easyadmin.field.help|default('') != '' %}*/
/*                 <span class="help-block"><i class="fa fa-info-circle"></i> {{ easyadmin.field.help|trans|raw }}</span>*/
/*             {% endif %}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock form_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     {{- block('checkbox_radio_row') -}}*/
/* {%- endblock radio_row %}*/
/* */
/* {% block checkbox_radio_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*             {{ form_errors(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {%- endblock checkbox_radio_row %}*/
/* */
/* {% block submit_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group field-{{ block_prefixes|slice(-2)|first }}">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock submit_row %}*/
/* */
/* {% block reset_row -%}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         <div class="{{ block('form_label_class') }}"></div>*/
/*         <div class="{{ block('form_group_class') }}">*/
/*             {{ form_widget(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock reset_row %}*/
/* */
/* {% block form_group_class 'col-sm-10' %}*/
/* */

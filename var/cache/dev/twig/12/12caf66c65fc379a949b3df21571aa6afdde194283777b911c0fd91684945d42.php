<?php

/* @EasyAdmin/default/show.html.twig */
class __TwigTemplate_2652395afae0170dde1e626a329e57ab4987ba6ab8515e7166898692ecfec472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/show.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_001badd68a2221596adf02454e1c1f27ba91883420f9b8d28e2fd3d84b8141ba = $this->env->getExtension("native_profiler");
        $__internal_001badd68a2221596adf02454e1c1f27ba91883420f9b8d28e2fd3d84b8141ba->enter($__internal_001badd68a2221596adf02454e1c1f27ba91883420f9b8d28e2fd3d84b8141ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('easyadmin_extension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["_entity_id"] = $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "label", array())), "%entity_id%" => (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id")));
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_001badd68a2221596adf02454e1c1f27ba91883420f9b8d28e2fd3d84b8141ba->leave($__internal_001badd68a2221596adf02454e1c1f27ba91883420f9b8d28e2fd3d84b8141ba_prof);

    }

    // line 7
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_476b144d1bec8789054f941460139e1944af449f42635b9c5c264b305d125432 = $this->env->getExtension("native_profiler");
        $__internal_476b144d1bec8789054f941460139e1944af449f42635b9c5c264b305d125432->enter($__internal_476b144d1bec8789054f941460139e1944af449f42635b9c5c264b305d125432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array())) . "-") . (isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_476b144d1bec8789054f941460139e1944af449f42635b9c5c264b305d125432->leave($__internal_476b144d1bec8789054f941460139e1944af449f42635b9c5c264b305d125432_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_ac29f53bb0130a91154ee59399f02dd31535e6df366be07d076a11e47942d67c = $this->env->getExtension("native_profiler");
        $__internal_ac29f53bb0130a91154ee59399f02dd31535e6df366be07d076a11e47942d67c->enter($__internal_ac29f53bb0130a91154ee59399f02dd31535e6df366be07d076a11e47942d67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_ac29f53bb0130a91154ee59399f02dd31535e6df366be07d076a11e47942d67c->leave($__internal_ac29f53bb0130a91154ee59399f02dd31535e6df366be07d076a11e47942d67c_prof);

    }

    // line 10
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_751de8a89eb907ce6065b840f6bd6dd1895734b0b24eacd6fd2cd457699028ac = $this->env->getExtension("native_profiler");
        $__internal_751de8a89eb907ce6065b840f6bd6dd1895734b0b24eacd6fd2cd457699028ac->enter($__internal_751de8a89eb907ce6065b840f6bd6dd1895734b0b24eacd6fd2cd457699028ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('translator')->trans("show.page_title", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "show", array()), "title", array()), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")))) : ((isset($context["_default_title"]) ? $context["_default_title"] : $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_751de8a89eb907ce6065b840f6bd6dd1895734b0b24eacd6fd2cd457699028ac->leave($__internal_751de8a89eb907ce6065b840f6bd6dd1895734b0b24eacd6fd2cd457699028ac_prof);

    }

    // line 17
    public function block_main($context, array $blocks = array())
    {
        $__internal_add52d3aaad090be43674122bdfed6555fe21f8aa90dc2aba48cef4638b7576b = $this->env->getExtension("native_profiler");
        $__internal_add52d3aaad090be43674122bdfed6555fe21f8aa90dc2aba48cef4638b7576b->enter($__internal_add52d3aaad090be43674122bdfed6555fe21f8aa90dc2aba48cef4638b7576b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 18
        echo "    <div class=\"form-horizontal\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 20
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute($context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getExtension('form')->humanize($context["field"]))), (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters"))), "html", null, true);
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 26
            echo $this->env->getExtension('easyadmin_extension')->renderEntityField($this->env, "show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 29
            if (((($this->getAttribute($context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 30
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('translator')->trans($this->getAttribute($context["metadata"], "help", array()));
                echo "</span>
                    ";
            }
            // line 32
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 38
        $this->displayBlock('item_actions', $context, $blocks);
        // line 49
        echo "            </div>
        </div>
    </div>

    ";
        // line 53
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_add52d3aaad090be43674122bdfed6555fe21f8aa90dc2aba48cef4638b7576b->leave($__internal_add52d3aaad090be43674122bdfed6555fe21f8aa90dc2aba48cef4638b7576b_prof);

    }

    // line 38
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_cba5c2e86adafdb1159a8842066a39af406fdd400a1e0bab87a4209836118991 = $this->env->getExtension("native_profiler");
        $__internal_cba5c2e86adafdb1159a8842066a39af406fdd400a1e0bab87a4209836118991->enter($__internal_cba5c2e86adafdb1159a8842066a39af406fdd400a1e0bab87a4209836118991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 39
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('easyadmin_extension')->getActionsForItem("show", $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()));
        // line 40
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 41
        echo "
                ";
        // line 42
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 43
(isset($context["_show_actions"]) ? $context["_show_actions"] : $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 44
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "trans_parameters" =>         // line 45
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 46
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 47
        echo "
            ";
        
        $__internal_cba5c2e86adafdb1159a8842066a39af406fdd400a1e0bab87a4209836118991->leave($__internal_cba5c2e86adafdb1159a8842066a39af406fdd400a1e0bab87a4209836118991_prof);

    }

    // line 53
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_847d69e4f5014b1e7c97006f4e956153f5f2e3196a2f8747b6e1c0d2e31f131c = $this->env->getExtension("native_profiler");
        $__internal_847d69e4f5014b1e7c97006f4e956153f5f2e3196a2f8747b6e1c0d2e31f131c->enter($__internal_847d69e4f5014b1e7c97006f4e956153f5f2e3196a2f8747b6e1c0d2e31f131c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 54
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 56
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 57
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "_trans_parameters" =>         // line 58
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 59
(isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config"))), false);
        // line 60
        echo "
    ";
        
        $__internal_847d69e4f5014b1e7c97006f4e956153f5f2e3196a2f8747b6e1c0d2e31f131c->leave($__internal_847d69e4f5014b1e7c97006f4e956153f5f2e3196a2f8747b6e1c0d2e31f131c_prof);

    }

    // line 64
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_2e75f07c9159a4fae84dee9cf57510ae26e5429ce3c44d59f983855d924a3c3e = $this->env->getExtension("native_profiler");
        $__internal_2e75f07c9159a4fae84dee9cf57510ae26e5429ce3c44d59f983855d924a3c3e->enter($__internal_2e75f07c9159a4fae84dee9cf57510ae26e5429ce3c44d59f983855d924a3c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 65
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_2e75f07c9159a4fae84dee9cf57510ae26e5429ce3c44d59f983855d924a3c3e->leave($__internal_2e75f07c9159a4fae84dee9cf57510ae26e5429ce3c44d59f983855d924a3c3e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 65,  212 => 64,  204 => 60,  202 => 59,  201 => 58,  200 => 57,  199 => 56,  197 => 54,  191 => 53,  183 => 47,  181 => 46,  180 => 45,  179 => 44,  178 => 43,  177 => 42,  174 => 41,  171 => 40,  168 => 39,  162 => 38,  155 => 53,  149 => 49,  147 => 38,  142 => 35,  134 => 32,  128 => 30,  126 => 29,  120 => 26,  113 => 22,  105 => 20,  101 => 19,  98 => 18,  92 => 17,  81 => 13,  78 => 12,  76 => 11,  70 => 10,  58 => 8,  46 => 7,  39 => 5,  37 => 3,  35 => 2,  33 => 1,  24 => 5,);
    }
}
/* {% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}*/
/* {% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}*/
/* {% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}*/
/* */
/* {% extends _entity_config.templates.layout %}*/
/* */
/* {% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}*/
/* {% block body_class 'show show-' ~ _entity_config.name|lower %}*/
/* */
/* {% block content_title %}*/
/* {% spaceless %}*/
/*     {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}*/
/*     {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block main %}*/
/*     <div class="form-horizontal">*/
/*         {% for field, metadata in fields %}*/
/*             <div class="form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}">*/
/*                 <label class="col-sm-2 control-label">*/
/*                     {{ (metadata.label ?: field|humanize)|trans(_trans_parameters) }}*/
/*                 </label>*/
/*                 <div class="col-sm-10">*/
/*                     <div class="form-control">*/
/*                         {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}*/
/*                     </div>*/
/* */
/*                     {% if metadata.help|default('') != '' %}*/
/*                         <span class="help-block"><i class="fa fa-info-circle"></i> {{ metadata.help|trans|raw }}</span>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="form-group form-actions">*/
/*             <div class="col-sm-10 col-sm-offset-2">*/
/*             {% block item_actions %}*/
/*                 {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}*/
/*                 {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}*/
/* */
/*                 {{ include('@EasyAdmin/default/includes/_actions.html.twig', {*/
/*                     actions: _show_actions,*/
/*                     request_parameters: _request_parameters,*/
/*                     trans_parameters: _trans_parameters,*/
/*                     item_id: _entity_id*/
/*                 }, with_context = false) }}*/
/*             {% endblock item_actions %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% block delete_form %}*/
/*         {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {*/
/*             view: 'show',*/
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
/*             $('a.action-delete').on('click', function(e) {*/
/*                 e.preventDefault();*/
/* */
/*                 $('#modal-delete').modal({ backdrop: true, keyboard: true })*/
/*                     .off('click', '#modal-delete-button')*/
/*                     .on('click', '#modal-delete-button', function () {*/
/*                         $('#delete-form').trigger('submit');*/
/*                     });*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */

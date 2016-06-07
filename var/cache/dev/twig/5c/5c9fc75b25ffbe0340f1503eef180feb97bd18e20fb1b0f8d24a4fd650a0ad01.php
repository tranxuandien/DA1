<?php

/* EasyAdminBundle:form:bootstrap_3_layout.html.twig */
class __TwigTemplate_06638615bd1f6af83efd37912d4de2bb22cfee8eb038023d25cbbedb687b9f42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "EasyAdminBundle:form:bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_autocomplete_row' => array($this, 'block_easyadmin_autocomplete_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64e5f5c3f15e5872b9ee5ba7833aee395d18e2b2a494130af4cb782f1ced617c = $this->env->getExtension("native_profiler");
        $__internal_64e5f5c3f15e5872b9ee5ba7833aee395d18e2b2a494130af4cb782f1ced617c->enter($__internal_64e5f5c3f15e5872b9ee5ba7833aee395d18e2b2a494130af4cb782f1ced617c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 15
        echo "
";
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('form_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('button_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('money_widget', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 96
        echo "
";
        // line 97
        $this->displayBlock('date_widget', $context, $blocks);
        // line 115
        echo "
";
        // line 116
        $this->displayBlock('time_widget', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 155
        echo "
";
        // line 156
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 166
        echo "
";
        // line 167
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 177
        echo "
";
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('form_label', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('choice_label', $context, $blocks);
        // line 190
        echo "
";
        // line 191
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 194
        echo "
";
        // line 195
        $this->displayBlock('radio_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 217
        echo "
";
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('form_row', $context, $blocks);
        // line 243
        echo "
";
        // line 244
        $this->displayBlock('collection_row', $context, $blocks);
        // line 275
        echo "
";
        // line 276
        $this->displayBlock('button_row', $context, $blocks);
        // line 281
        echo "
";
        // line 282
        $this->displayBlock('choice_row', $context, $blocks);
        // line 286
        echo "
";
        // line 287
        $this->displayBlock('date_row', $context, $blocks);
        // line 291
        echo "
";
        // line 292
        $this->displayBlock('time_row', $context, $blocks);
        // line 296
        echo "
";
        // line 297
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 301
        echo "
";
        // line 302
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 308
        echo "
";
        // line 309
        $this->displayBlock('radio_row', $context, $blocks);
        // line 315
        echo "
";
        // line 317
        $this->displayBlock('form_errors', $context, $blocks);
        // line 335
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 346
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 351
        echo "
";
        // line 352
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 356
        echo "
";
        // line 357
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 378
        echo "
";
        // line 379
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 383
        echo "
";
        // line 384
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 406
        echo "
";
        // line 408
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 455
        echo "
";
        // line 457
        $this->displayBlock('easyadmin_autocomplete_row', $context, $blocks);
        
        $__internal_64e5f5c3f15e5872b9ee5ba7833aee395d18e2b2a494130af4cb782f1ced617c->leave($__internal_64e5f5c3f15e5872b9ee5ba7833aee395d18e2b2a494130af4cb782f1ced617c_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_b5e7601e2dc21944b684d2899bbcaafb15b5f4182f430526ca10cb50db4b7f3a = $this->env->getExtension("native_profiler");
        $__internal_b5e7601e2dc21944b684d2899bbcaafb15b5f4182f430526ca10cb50db4b7f3a->enter($__internal_b5e7601e2dc21944b684d2899bbcaafb15b5f4182f430526ca10cb50db4b7f3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((((($this->getAttribute(            // line 6
(isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " ") . $this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array())) . "-form"), "data-view" => $this->getAttribute(            // line 7
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 8
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 9
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 11
            echo "    ";
        }
        // line 13
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_b5e7601e2dc21944b684d2899bbcaafb15b5f4182f430526ca10cb50db4b7f3a->leave($__internal_b5e7601e2dc21944b684d2899bbcaafb15b5f4182f430526ca10cb50db4b7f3a_prof);

    }

    // line 18
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_20aa68321142d82cceb92bc8b8e292b56c6763bdd849357ab357cead509492bc = $this->env->getExtension("native_profiler");
        $__internal_20aa68321142d82cceb92bc8b8e292b56c6763bdd849357ab357cead509492bc->enter($__internal_20aa68321142d82cceb92bc8b8e292b56c6763bdd849357ab357cead509492bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 19
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 21
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 22
            echo "        ";
            ob_start();
            // line 23
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 36
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 38
            echo (isset($context["remove_item_javascript"]) ? $context["remove_item_javascript"] : $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_20aa68321142d82cceb92bc8b8e292b56c6763bdd849357ab357cead509492bc->leave($__internal_20aa68321142d82cceb92bc8b8e292b56c6763bdd849357ab357cead509492bc_prof);

    }

    // line 46
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_9b90f13011ab17a1a094e7d59e7822b375eaef189dc7d7220de49ecbd64e18fc = $this->env->getExtension("native_profiler");
        $__internal_9b90f13011ab17a1a094e7d59e7822b375eaef189dc7d7220de49ecbd64e18fc->enter($__internal_9b90f13011ab17a1a094e7d59e7822b375eaef189dc7d7220de49ecbd64e18fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 47
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 48
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 50
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9b90f13011ab17a1a094e7d59e7822b375eaef189dc7d7220de49ecbd64e18fc->leave($__internal_9b90f13011ab17a1a094e7d59e7822b375eaef189dc7d7220de49ecbd64e18fc_prof);

    }

    // line 53
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_e8ad4a34b68c73267b7f3f89b3845b345f8f04a8f7f13b5e976450fe3e099029 = $this->env->getExtension("native_profiler");
        $__internal_e8ad4a34b68c73267b7f3f89b3845b345f8f04a8f7f13b5e976450fe3e099029->enter($__internal_e8ad4a34b68c73267b7f3f89b3845b345f8f04a8f7f13b5e976450fe3e099029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 54
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 55
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_e8ad4a34b68c73267b7f3f89b3845b345f8f04a8f7f13b5e976450fe3e099029->leave($__internal_e8ad4a34b68c73267b7f3f89b3845b345f8f04a8f7f13b5e976450fe3e099029_prof);

    }

    // line 58
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2c39d11e58117bcfa402de4f418ed9cc7dd2e7a1e295f5a5cbca1ce5f7d6094b = $this->env->getExtension("native_profiler");
        $__internal_2c39d11e58117bcfa402de4f418ed9cc7dd2e7a1e295f5a5cbca1ce5f7d6094b->enter($__internal_2c39d11e58117bcfa402de4f418ed9cc7dd2e7a1e295f5a5cbca1ce5f7d6094b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 59
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 60
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_2c39d11e58117bcfa402de4f418ed9cc7dd2e7a1e295f5a5cbca1ce5f7d6094b->leave($__internal_2c39d11e58117bcfa402de4f418ed9cc7dd2e7a1e295f5a5cbca1ce5f7d6094b_prof);

    }

    // line 63
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_86fb7d542383f9b160e57cdcf58c583f882d62d49e7c168200b8a146f977180f = $this->env->getExtension("native_profiler");
        $__internal_86fb7d542383f9b160e57cdcf58c583f882d62d49e7c168200b8a146f977180f->enter($__internal_86fb7d542383f9b160e57cdcf58c583f882d62d49e7c168200b8a146f977180f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 64
        echo "<div class=\"input-group\">
        ";
        // line 65
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), 0, 2));
        // line 66
        echo "        ";
        if ( !(isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 67
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 69
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 70
        if ((isset($context["prepend"]) ? $context["prepend"] : $this->getContext($context, "prepend"))) {
            // line 71
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 73
        echo "    </div>";
        
        $__internal_86fb7d542383f9b160e57cdcf58c583f882d62d49e7c168200b8a146f977180f->leave($__internal_86fb7d542383f9b160e57cdcf58c583f882d62d49e7c168200b8a146f977180f_prof);

    }

    // line 76
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_55c5f8cf6848f8cca900f271c9a6782bdb4701868f1469b9f38919f7f4d8f0ba = $this->env->getExtension("native_profiler");
        $__internal_55c5f8cf6848f8cca900f271c9a6782bdb4701868f1469b9f38919f7f4d8f0ba->enter($__internal_55c5f8cf6848f8cca900f271c9a6782bdb4701868f1469b9f38919f7f4d8f0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 77
        echo "<div class=\"input-group\">";
        // line 78
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 79
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_55c5f8cf6848f8cca900f271c9a6782bdb4701868f1469b9f38919f7f4d8f0ba->leave($__internal_55c5f8cf6848f8cca900f271c9a6782bdb4701868f1469b9f38919f7f4d8f0ba_prof);

    }

    // line 83
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_94c4c0473d969770339f0787611d10ba68edc5227e65e196c2b31d1a9019a817 = $this->env->getExtension("native_profiler");
        $__internal_94c4c0473d969770339f0787611d10ba68edc5227e65e196c2b31d1a9019a817->enter($__internal_94c4c0473d969770339f0787611d10ba68edc5227e65e196c2b31d1a9019a817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 84
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 85
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 87
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 88
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 89
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 90
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 92
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 93
            echo "</div>";
        }
        
        $__internal_94c4c0473d969770339f0787611d10ba68edc5227e65e196c2b31d1a9019a817->leave($__internal_94c4c0473d969770339f0787611d10ba68edc5227e65e196c2b31d1a9019a817_prof);

    }

    // line 97
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_9776ead63fad7616b74f4f776a788e947c1867c357f107574097f5f11c47652b = $this->env->getExtension("native_profiler");
        $__internal_9776ead63fad7616b74f4f776a788e947c1867c357f107574097f5f11c47652b->enter($__internal_9776ead63fad7616b74f4f776a788e947c1867c357f107574097f5f11c47652b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 98
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 99
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 101
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 102
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 103
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 105
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 106
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 107
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 108
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 110
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 111
                echo "</div>";
            }
        }
        
        $__internal_9776ead63fad7616b74f4f776a788e947c1867c357f107574097f5f11c47652b->leave($__internal_9776ead63fad7616b74f4f776a788e947c1867c357f107574097f5f11c47652b_prof);

    }

    // line 116
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_9867b218d3af8d80c2a6c94660fe55346f5a1fe5939804cab5c71db99822772c = $this->env->getExtension("native_profiler");
        $__internal_9867b218d3af8d80c2a6c94660fe55346f5a1fe5939804cab5c71db99822772c->enter($__internal_9867b218d3af8d80c2a6c94660fe55346f5a1fe5939804cab5c71db99822772c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 117
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 118
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 120
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 121
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 122
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 124
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 125
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 126
                echo "</div>";
            }
        }
        
        $__internal_9867b218d3af8d80c2a6c94660fe55346f5a1fe5939804cab5c71db99822772c->leave($__internal_9867b218d3af8d80c2a6c94660fe55346f5a1fe5939804cab5c71db99822772c_prof);

    }

    // line 131
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_ddec04c8a5684d475f6ae721affec0d3c73c7a28b1f5835ea9bf1be795d63ea4 = $this->env->getExtension("native_profiler");
        $__internal_ddec04c8a5684d475f6ae721affec0d3c73c7a28b1f5835ea9bf1be795d63ea4->enter($__internal_ddec04c8a5684d475f6ae721affec0d3c73c7a28b1f5835ea9bf1be795d63ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 132
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 133
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_ddec04c8a5684d475f6ae721affec0d3c73c7a28b1f5835ea9bf1be795d63ea4->leave($__internal_ddec04c8a5684d475f6ae721affec0d3c73c7a28b1f5835ea9bf1be795d63ea4_prof);

    }

    // line 136
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e1b115df9b51c380f6231da7a2b6df92af206d60d2c506cd0e8401b699ba7175 = $this->env->getExtension("native_profiler");
        $__internal_e1b115df9b51c380f6231da7a2b6df92af206d60d2c506cd0e8401b699ba7175->enter($__internal_e1b115df9b51c380f6231da7a2b6df92af206d60d2c506cd0e8401b699ba7175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 137
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 138
            echo "<div class=\"control-group\">";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 140
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 141
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "</div>";
        } else {
            // line 146
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 148
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 149
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            echo "</div>";
        }
        
        $__internal_e1b115df9b51c380f6231da7a2b6df92af206d60d2c506cd0e8401b699ba7175->leave($__internal_e1b115df9b51c380f6231da7a2b6df92af206d60d2c506cd0e8401b699ba7175_prof);

    }

    // line 156
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_61591f62a76c2907fd8b6690d92898ce1386f58d8c11b7bf6f30dcb11964fef2 = $this->env->getExtension("native_profiler");
        $__internal_61591f62a76c2907fd8b6690d92898ce1386f58d8c11b7bf6f30dcb11964fef2->enter($__internal_61591f62a76c2907fd8b6690d92898ce1386f58d8c11b7bf6f30dcb11964fef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 157
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 158
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 159
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 161
            echo "<div class=\"checkbox\">";
            // line 162
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 163
            echo "</div>";
        }
        
        $__internal_61591f62a76c2907fd8b6690d92898ce1386f58d8c11b7bf6f30dcb11964fef2->leave($__internal_61591f62a76c2907fd8b6690d92898ce1386f58d8c11b7bf6f30dcb11964fef2_prof);

    }

    // line 167
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_f8b1e5aa48a85c91d6f3e74396938e4236bcbd1373a038a1c47fe3bb85648f14 = $this->env->getExtension("native_profiler");
        $__internal_f8b1e5aa48a85c91d6f3e74396938e4236bcbd1373a038a1c47fe3bb85648f14->enter($__internal_f8b1e5aa48a85c91d6f3e74396938e4236bcbd1373a038a1c47fe3bb85648f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 168
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 169
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 170
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 172
            echo "<div class=\"radio\">";
            // line 173
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 174
            echo "</div>";
        }
        
        $__internal_f8b1e5aa48a85c91d6f3e74396938e4236bcbd1373a038a1c47fe3bb85648f14->leave($__internal_f8b1e5aa48a85c91d6f3e74396938e4236bcbd1373a038a1c47fe3bb85648f14_prof);

    }

    // line 180
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4e851fd4bfce0f7f9811423b1653b748542fb167812a3dff1298fe5eef09cfd3 = $this->env->getExtension("native_profiler");
        $__internal_4e851fd4bfce0f7f9811423b1653b748542fb167812a3dff1298fe5eef09cfd3->enter($__internal_4e851fd4bfce0f7f9811423b1653b748542fb167812a3dff1298fe5eef09cfd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 181
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 182
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_4e851fd4bfce0f7f9811423b1653b748542fb167812a3dff1298fe5eef09cfd3->leave($__internal_4e851fd4bfce0f7f9811423b1653b748542fb167812a3dff1298fe5eef09cfd3_prof);

    }

    // line 185
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_80e383f72153145c1b94d7ebb3700a81a3d48593b4395be4310b94fb0ee05f2f = $this->env->getExtension("native_profiler");
        $__internal_80e383f72153145c1b94d7ebb3700a81a3d48593b4395be4310b94fb0ee05f2f->enter($__internal_80e383f72153145c1b94d7ebb3700a81a3d48593b4395be4310b94fb0ee05f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 187
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 188
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_80e383f72153145c1b94d7ebb3700a81a3d48593b4395be4310b94fb0ee05f2f->leave($__internal_80e383f72153145c1b94d7ebb3700a81a3d48593b4395be4310b94fb0ee05f2f_prof);

    }

    // line 191
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_6ac92738f8fe3acd3078ab71118ac3fa960b4815ab5398a695a12910691a607d = $this->env->getExtension("native_profiler");
        $__internal_6ac92738f8fe3acd3078ab71118ac3fa960b4815ab5398a695a12910691a607d->enter($__internal_6ac92738f8fe3acd3078ab71118ac3fa960b4815ab5398a695a12910691a607d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 192
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6ac92738f8fe3acd3078ab71118ac3fa960b4815ab5398a695a12910691a607d->leave($__internal_6ac92738f8fe3acd3078ab71118ac3fa960b4815ab5398a695a12910691a607d_prof);

    }

    // line 195
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_7490a88bdb59e79ad450174b8b5dc0657cfc3c1feffa0df80ffde261656bdeac = $this->env->getExtension("native_profiler");
        $__internal_7490a88bdb59e79ad450174b8b5dc0657cfc3c1feffa0df80ffde261656bdeac->enter($__internal_7490a88bdb59e79ad450174b8b5dc0657cfc3c1feffa0df80ffde261656bdeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 196
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7490a88bdb59e79ad450174b8b5dc0657cfc3c1feffa0df80ffde261656bdeac->leave($__internal_7490a88bdb59e79ad450174b8b5dc0657cfc3c1feffa0df80ffde261656bdeac_prof);

    }

    // line 199
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_d5a68f8df42412caecedcaf2e59f850cb474a43fd966bf7e448d2033680bd407 = $this->env->getExtension("native_profiler");
        $__internal_d5a68f8df42412caecedcaf2e59f850cb474a43fd966bf7e448d2033680bd407->enter($__internal_d5a68f8df42412caecedcaf2e59f850cb474a43fd966bf7e448d2033680bd407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 200
        echo "    ";
        // line 201
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 202
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 206
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 207
                echo "        ";
            }
            // line 208
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 209
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 210
                echo "        ";
            }
            // line 211
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 212
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            // line 213
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), "messages")) : ("")), "html", null, true);
            // line 214
            echo "</label>
    ";
        }
        
        $__internal_d5a68f8df42412caecedcaf2e59f850cb474a43fd966bf7e448d2033680bd407->leave($__internal_d5a68f8df42412caecedcaf2e59f850cb474a43fd966bf7e448d2033680bd407_prof);

    }

    // line 220
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_12f47e4b94a4cd59592860442bb859e1c25d682e81fed06d81d8006ddb65a717 = $this->env->getExtension("native_profiler");
        $__internal_12f47e4b94a4cd59592860442bb859e1c25d682e81fed06d81d8006ddb65a717->enter($__internal_12f47e4b94a4cd59592860442bb859e1c25d682e81fed06d81d8006ddb65a717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 221
        $context["_field_type"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 222
        echo "    <div class=\"form-group ";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 223
        $context["_field_label"] = (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("translation_domain" => "messages") + (twig_test_empty($_label_ = (isset($context["_field_label"]) ? $context["_field_label"] : $this->getContext($context, "_field_label"))) ? array() : array("label" => $_label_)));
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 227
        if ((twig_in_filter((isset($context["_field_type"]) ? $context["_field_type"] : $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "datetimetz", 2 => "date", 3 => "time")) && (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 228
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 230
            if ((null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 238
        if (((($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 239
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "help", array()));
            echo "</span>
        ";
        }
        // line 241
        echo "    </div>";
        
        $__internal_12f47e4b94a4cd59592860442bb859e1c25d682e81fed06d81d8006ddb65a717->leave($__internal_12f47e4b94a4cd59592860442bb859e1c25d682e81fed06d81d8006ddb65a717_prof);

    }

    // line 244
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_2b4ed2fca78c9a89f6698f221c8c7378d96537b2a489f924a320ccae85571f41 = $this->env->getExtension("native_profiler");
        $__internal_2b4ed2fca78c9a89f6698f221c8c7378d96537b2a489f924a320ccae85571f41->enter($__internal_2b4ed2fca78c9a89f6698f221c8c7378d96537b2a489f924a320ccae85571f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 245
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 247
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 248
            echo "        ";
            ob_start();
            // line 249
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 252
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
                var numItems = collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 259
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 260
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 266
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 268
            echo (isset($context["js_add_item"]) ? $context["js_add_item"] : $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 270
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((((twig_length_filter($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_2b4ed2fca78c9a89f6698f221c8c7378d96537b2a489f924a320ccae85571f41->leave($__internal_2b4ed2fca78c9a89f6698f221c8c7378d96537b2a489f924a320ccae85571f41_prof);

    }

    // line 276
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_fdb70922899ff640587aa83b5a4640ff40b3354a40a827d2896734d90a1f9364 = $this->env->getExtension("native_profiler");
        $__internal_fdb70922899ff640587aa83b5a4640ff40b3354a40a827d2896734d90a1f9364->enter($__internal_fdb70922899ff640587aa83b5a4640ff40b3354a40a827d2896734d90a1f9364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 277
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 278
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 279
        echo "</div>";
        
        $__internal_fdb70922899ff640587aa83b5a4640ff40b3354a40a827d2896734d90a1f9364->leave($__internal_fdb70922899ff640587aa83b5a4640ff40b3354a40a827d2896734d90a1f9364_prof);

    }

    // line 282
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_e3d9fefe800c215d968634ee6be49a2b7a858b415f8da729e8dce2284c43b4f8 = $this->env->getExtension("native_profiler");
        $__internal_e3d9fefe800c215d968634ee6be49a2b7a858b415f8da729e8dce2284c43b4f8->enter($__internal_e3d9fefe800c215d968634ee6be49a2b7a858b415f8da729e8dce2284c43b4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 283
        $context["force_error"] = true;
        // line 284
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e3d9fefe800c215d968634ee6be49a2b7a858b415f8da729e8dce2284c43b4f8->leave($__internal_e3d9fefe800c215d968634ee6be49a2b7a858b415f8da729e8dce2284c43b4f8_prof);

    }

    // line 287
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_d382de44a3df75142ee24ae8506eefb208c1bd117fc7a1c4002f3bc21760a334 = $this->env->getExtension("native_profiler");
        $__internal_d382de44a3df75142ee24ae8506eefb208c1bd117fc7a1c4002f3bc21760a334->enter($__internal_d382de44a3df75142ee24ae8506eefb208c1bd117fc7a1c4002f3bc21760a334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 288
        $context["force_error"] = true;
        // line 289
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d382de44a3df75142ee24ae8506eefb208c1bd117fc7a1c4002f3bc21760a334->leave($__internal_d382de44a3df75142ee24ae8506eefb208c1bd117fc7a1c4002f3bc21760a334_prof);

    }

    // line 292
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_789bd790d0b71407c60f2160a7555b874df03b3b7dbbc3a6ada91188e0ef2caf = $this->env->getExtension("native_profiler");
        $__internal_789bd790d0b71407c60f2160a7555b874df03b3b7dbbc3a6ada91188e0ef2caf->enter($__internal_789bd790d0b71407c60f2160a7555b874df03b3b7dbbc3a6ada91188e0ef2caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 293
        $context["force_error"] = true;
        // line 294
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_789bd790d0b71407c60f2160a7555b874df03b3b7dbbc3a6ada91188e0ef2caf->leave($__internal_789bd790d0b71407c60f2160a7555b874df03b3b7dbbc3a6ada91188e0ef2caf_prof);

    }

    // line 297
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d7fdf22e273190b5df2e584c1b33edcc57c6504b22df7a503616014b92967179 = $this->env->getExtension("native_profiler");
        $__internal_d7fdf22e273190b5df2e584c1b33edcc57c6504b22df7a503616014b92967179->enter($__internal_d7fdf22e273190b5df2e584c1b33edcc57c6504b22df7a503616014b92967179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 298
        $context["force_error"] = true;
        // line 299
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d7fdf22e273190b5df2e584c1b33edcc57c6504b22df7a503616014b92967179->leave($__internal_d7fdf22e273190b5df2e584c1b33edcc57c6504b22df7a503616014b92967179_prof);

    }

    // line 302
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7c2b5950bcefb763ad0567a6784df77e99db6e7b329a713cb4eb28cbff90299b = $this->env->getExtension("native_profiler");
        $__internal_7c2b5950bcefb763ad0567a6784df77e99db6e7b329a713cb4eb28cbff90299b->enter($__internal_7c2b5950bcefb763ad0567a6784df77e99db6e7b329a713cb4eb28cbff90299b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 303
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 304
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 305
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 306
        echo "</div>";
        
        $__internal_7c2b5950bcefb763ad0567a6784df77e99db6e7b329a713cb4eb28cbff90299b->leave($__internal_7c2b5950bcefb763ad0567a6784df77e99db6e7b329a713cb4eb28cbff90299b_prof);

    }

    // line 309
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_716b042ac7231233a18d5b19034ff17eb3ee7dfc79b2e30dd77dc50154aa27ae = $this->env->getExtension("native_profiler");
        $__internal_716b042ac7231233a18d5b19034ff17eb3ee7dfc79b2e30dd77dc50154aa27ae->enter($__internal_716b042ac7231233a18d5b19034ff17eb3ee7dfc79b2e30dd77dc50154aa27ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 310
        echo "<div class=\"form-group ";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, (isset($context["block_prefixes"]) ? $context["block_prefixes"] : $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 311
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 312
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 313
        echo "</div>";
        
        $__internal_716b042ac7231233a18d5b19034ff17eb3ee7dfc79b2e30dd77dc50154aa27ae->leave($__internal_716b042ac7231233a18d5b19034ff17eb3ee7dfc79b2e30dd77dc50154aa27ae_prof);

    }

    // line 317
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_e82287a0a1a3751fff17f501a99cd2e2179a5cd44f688108718c6aef958f36c6 = $this->env->getExtension("native_profiler");
        $__internal_e82287a0a1a3751fff17f501a99cd2e2179a5cd44f688108718c6aef958f36c6->enter($__internal_e82287a0a1a3751fff17f501a99cd2e2179a5cd44f688108718c6aef958f36c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 318
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
        // line 319
        echo "    ";
        if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) >= 1)) {
            // line 320
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 321
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("errors", (isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 322
            if (((isset($context["error_count"]) ? $context["error_count"] : $this->getContext($context, "error_count")) == 1)) {
                // line 323
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 325
                echo "                <ul>
                    ";
                // line 326
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 327
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 329
                echo "                </ul>
            ";
            }
            // line 331
            echo "        </div>
    ";
        }
        
        $__internal_e82287a0a1a3751fff17f501a99cd2e2179a5cd44f688108718c6aef958f36c6->leave($__internal_e82287a0a1a3751fff17f501a99cd2e2179a5cd44f688108718c6aef958f36c6_prof);

    }

    // line 335
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_527df2b58d15cb83e7ed1cab91f6f7ea6f0dc4c73f518cf2a885bd28f61f6a71 = $this->env->getExtension("native_profiler");
        $__internal_527df2b58d15cb83e7ed1cab91f6f7ea6f0dc4c73f518cf2a885bd28f61f6a71->enter($__internal_527df2b58d15cb83e7ed1cab91f6f7ea6f0dc4c73f518cf2a885bd28f61f6a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 336
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 337
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 339
        echo "    ";
        if ((twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) || $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 340
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-empty-collection" => $this->renderBlock("empty_collection", $context, $blocks)));
            // line 341
            echo "    ";
        }
        // line 342
        echo "
    ";
        // line 343
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_527df2b58d15cb83e7ed1cab91f6f7ea6f0dc4c73f518cf2a885bd28f61f6a71->leave($__internal_527df2b58d15cb83e7ed1cab91f6f7ea6f0dc4c73f518cf2a885bd28f61f6a71_prof);

    }

    // line 346
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_c914a0793002fa288d68d0430e11dce375999ae9abcc58aea7526a0d5c9843df = $this->env->getExtension("native_profiler");
        $__internal_c914a0793002fa288d68d0430e11dce375999ae9abcc58aea7526a0d5c9843df->enter($__internal_c914a0793002fa288d68d0430e11dce375999ae9abcc58aea7526a0d5c9843df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 347
        echo "    <div class=\"empty collection-empty\">
        <span class=\"label label-empty\">";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
    </div>
";
        
        $__internal_c914a0793002fa288d68d0430e11dce375999ae9abcc58aea7526a0d5c9843df->leave($__internal_c914a0793002fa288d68d0430e11dce375999ae9abcc58aea7526a0d5c9843df_prof);

    }

    // line 352
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_37f0a28c5f60398b6771e268fb58bcf87ab70d68d9a75994e1eb864f1f53ba98 = $this->env->getExtension("native_profiler");
        $__internal_37f0a28c5f60398b6771e268fb58bcf87ab70d68d9a75994e1eb864f1f53ba98->enter($__internal_37f0a28c5f60398b6771e268fb58bcf87ab70d68d9a75994e1eb864f1f53ba98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 353
        echo "    ";
        $context["force_error"] = true;
        // line 354
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_37f0a28c5f60398b6771e268fb58bcf87ab70d68d9a75994e1eb864f1f53ba98->leave($__internal_37f0a28c5f60398b6771e268fb58bcf87ab70d68d9a75994e1eb864f1f53ba98_prof);

    }

    // line 357
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_30386d8a83125a0ceeb32c78dacbd915e0778330b4f3e71438ba9621f670351d = $this->env->getExtension("native_profiler");
        $__internal_30386d8a83125a0ceeb32c78dacbd915e0778330b4f3e71438ba9621f670351d->enter($__internal_30386d8a83125a0ceeb32c78dacbd915e0778330b4f3e71438ba9621f670351d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 358
        ob_start();
        // line 359
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 360
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 361
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('translator')->trans("download", array(), "VichUploaderBundle")));
            // line 362
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["download_title"]) ? $context["download_title"] : $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 364
        echo "
        <div class=\"row\">
            ";
        // line 366
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 367
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 368
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 371
        echo "            <div class=\"";
        echo (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 372
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_30386d8a83125a0ceeb32c78dacbd915e0778330b4f3e71438ba9621f670351d->leave($__internal_30386d8a83125a0ceeb32c78dacbd915e0778330b4f3e71438ba9621f670351d_prof);

    }

    // line 379
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_6b3cb22d9c86224f3eeb986d6ef3eef61342c80894413f000f3c20d65f56796b = $this->env->getExtension("native_profiler");
        $__internal_6b3cb22d9c86224f3eeb986d6ef3eef61342c80894413f000f3c20d65f56796b->enter($__internal_6b3cb22d9c86224f3eeb986d6ef3eef61342c80894413f000f3c20d65f56796b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 380
        echo "    ";
        $context["force_error"] = true;
        // line 381
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_6b3cb22d9c86224f3eeb986d6ef3eef61342c80894413f000f3c20d65f56796b->leave($__internal_6b3cb22d9c86224f3eeb986d6ef3eef61342c80894413f000f3c20d65f56796b_prof);

    }

    // line 384
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_3fe61d8de01223e0975f5d905145ceedd9892423084e22ee21acd15f1f1e8e53 = $this->env->getExtension("native_profiler");
        $__internal_3fe61d8de01223e0975f5d905145ceedd9892423084e22ee21acd15f1f1e8e53->enter($__internal_3fe61d8de01223e0975f5d905145ceedd9892423084e22ee21acd15f1f1e8e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 385
        ob_start();
        // line 386
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 387
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 388
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "delete", array(), "any", true, true)) {
            // line 389
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 391
        echo "
        ";
        // line 392
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter((isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 393
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 394
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 395
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 396
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 399
            echo twig_escape_filter($this->env, (isset($context["_lightbox_id"]) ? $context["_lightbox_id"] : $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 400
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) ? $context["download_uri"] : $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 403
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3fe61d8de01223e0975f5d905145ceedd9892423084e22ee21acd15f1f1e8e53->leave($__internal_3fe61d8de01223e0975f5d905145ceedd9892423084e22ee21acd15f1f1e8e53_prof);

    }

    // line 408
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_cae331176b0dc186bf81fa3193a9c4a461f9b1bd38751c07cd18c22b837dc018 = $this->env->getExtension("native_profiler");
        $__internal_cae331176b0dc186bf81fa3193a9c4a461f9b1bd38751c07cd18c22b837dc018->enter($__internal_cae331176b0dc186bf81fa3193a9c4a461f9b1bd38751c07cd18c22b837dc018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 409
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 410
        echo "
    ";
        // line 411
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 412
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 414
        echo "
    <div class=\"row\">
        <input type=\"hidden\" name=\"referer\" value=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>

        ";
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array()))) {
                // line 419
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "col-xs-12")) : ("col-xs-12")), "html", null, true);
                echo "\">
                ";
                // line 420
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'row');
                echo "
            </div>
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 423
        echo "
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    ";
        // line 427
        $this->displayBlock('item_actions', $context, $blocks);
        // line 450
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_cae331176b0dc186bf81fa3193a9c4a461f9b1bd38751c07cd18c22b837dc018->leave($__internal_cae331176b0dc186bf81fa3193a9c4a461f9b1bd38751c07cd18c22b837dc018_prof);

    }

    // line 427
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_9bf996f183cdc6ff6703e5245fc2809df07acc950baaa4298d9b3139f3bf00d3 = $this->env->getExtension("native_profiler");
        $__internal_9bf996f183cdc6ff6703e5245fc2809df07acc950baaa4298d9b3139f3bf00d3->enter($__internal_9bf996f183cdc6ff6703e5245fc2809df07acc950baaa4298d9b3139f3bf00d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 428
        echo "                        ";
        // line 429
        echo "                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fa fa-save\"></i> ";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.save", (isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "messages"), "html", null, true);
        echo "
                        </button>

                        ";
        // line 433
        $context["_entity_actions"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('easyadmin_extension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 434
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('easyadmin_extension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 435
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 436
        echo "
                        ";
        // line 437
        $context["_entity_id"] = ((($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 439
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 440
        echo "
                        ";
        // line 441
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute((isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 442
        echo "
                        ";
        // line 443
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 444
(isset($context["_entity_actions"]) ? $context["_entity_actions"] : $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 445
(isset($context["_request_parameters"]) ? $context["_request_parameters"] : $this->getContext($context, "_request_parameters")), "trans_parameters" =>         // line 446
(isset($context["_trans_parameters"]) ? $context["_trans_parameters"] : $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 447
(isset($context["_entity_id"]) ? $context["_entity_id"] : $this->getContext($context, "_entity_id"))), false);
        // line 448
        echo "
                    ";
        
        $__internal_9bf996f183cdc6ff6703e5245fc2809df07acc950baaa4298d9b3139f3bf00d3->leave($__internal_9bf996f183cdc6ff6703e5245fc2809df07acc950baaa4298d9b3139f3bf00d3_prof);

    }

    // line 457
    public function block_easyadmin_autocomplete_row($context, array $blocks = array())
    {
        $__internal_102a32858861e3a8acdf1360e5ab5d5e6d6e296c7003588875c4ffcb71828206 = $this->env->getExtension("native_profiler");
        $__internal_102a32858861e3a8acdf1360e5ab5d5e6d6e296c7003588875c4ffcb71828206->enter($__internal_102a32858861e3a8acdf1360e5ab5d5e6d6e296c7003588875c4ffcb71828206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_row"));

        // line 458
        echo "    ";
        // line 459
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-url" => $this->env->getExtension('routing')->getPath("easyadmin", array("action" => "autocomplete", "entity" => $this->getAttribute($this->getAttribute(        // line 461
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "property" => $this->getAttribute($this->getAttribute(        // line 462
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "field", array()), "fieldName", array()), "view" => $this->getAttribute(        // line 463
(isset($context["easyadmin"]) ? $context["easyadmin"] : $this->getContext($context, "easyadmin")), "view", array())))))));
        // line 464
        echo "

    ";
        // line 466
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "autocomplete", array()), 'errors');
        echo "
";
        
        $__internal_102a32858861e3a8acdf1360e5ab5d5e6d6e296c7003588875c4ffcb71828206->leave($__internal_102a32858861e3a8acdf1360e5ab5d5e6d6e296c7003588875c4ffcb71828206_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:form:bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1449 => 466,  1445 => 464,  1443 => 463,  1442 => 462,  1441 => 461,  1439 => 459,  1437 => 458,  1431 => 457,  1423 => 448,  1421 => 447,  1420 => 446,  1419 => 445,  1418 => 444,  1417 => 443,  1414 => 442,  1412 => 441,  1409 => 440,  1407 => 439,  1406 => 437,  1403 => 436,  1401 => 435,  1400 => 434,  1399 => 433,  1393 => 430,  1390 => 429,  1388 => 428,  1382 => 427,  1371 => 450,  1369 => 427,  1363 => 423,  1353 => 420,  1348 => 419,  1343 => 418,  1338 => 416,  1334 => 414,  1328 => 412,  1326 => 411,  1323 => 410,  1320 => 409,  1314 => 408,  1305 => 403,  1299 => 400,  1295 => 399,  1289 => 396,  1285 => 395,  1282 => 394,  1279 => 393,  1277 => 392,  1274 => 391,  1268 => 389,  1266 => 388,  1262 => 387,  1259 => 386,  1257 => 385,  1251 => 384,  1241 => 381,  1238 => 380,  1232 => 379,  1219 => 372,  1214 => 371,  1208 => 368,  1205 => 367,  1203 => 366,  1199 => 364,  1191 => 362,  1188 => 361,  1186 => 360,  1183 => 359,  1181 => 358,  1175 => 357,  1165 => 354,  1162 => 353,  1156 => 352,  1146 => 348,  1143 => 347,  1137 => 346,  1130 => 343,  1127 => 342,  1124 => 341,  1121 => 340,  1118 => 339,  1112 => 337,  1110 => 336,  1104 => 335,  1095 => 331,  1091 => 329,  1082 => 327,  1078 => 326,  1075 => 325,  1069 => 323,  1067 => 322,  1063 => 321,  1060 => 320,  1057 => 319,  1054 => 318,  1048 => 317,  1041 => 313,  1039 => 312,  1037 => 311,  1029 => 310,  1023 => 309,  1016 => 306,  1014 => 305,  1012 => 304,  1004 => 303,  998 => 302,  991 => 299,  989 => 298,  983 => 297,  976 => 294,  974 => 293,  968 => 292,  961 => 289,  959 => 288,  953 => 287,  946 => 284,  944 => 283,  938 => 282,  931 => 279,  929 => 278,  923 => 277,  917 => 276,  905 => 270,  900 => 268,  896 => 266,  885 => 260,  879 => 259,  869 => 252,  864 => 249,  861 => 248,  859 => 247,  853 => 245,  847 => 244,  840 => 241,  834 => 239,  832 => 238,  830 => 236,  823 => 231,  817 => 230,  813 => 228,  811 => 227,  809 => 225,  807 => 224,  805 => 223,  796 => 222,  794 => 221,  788 => 220,  779 => 214,  777 => 213,  775 => 212,  760 => 211,  757 => 210,  754 => 209,  751 => 208,  748 => 207,  745 => 206,  742 => 205,  739 => 204,  736 => 203,  733 => 202,  730 => 201,  728 => 200,  722 => 199,  715 => 196,  709 => 195,  702 => 192,  696 => 191,  689 => 188,  687 => 187,  681 => 185,  674 => 182,  672 => 181,  666 => 180,  658 => 174,  656 => 173,  654 => 172,  651 => 170,  649 => 169,  647 => 168,  641 => 167,  633 => 163,  631 => 162,  629 => 161,  626 => 159,  624 => 158,  622 => 157,  616 => 156,  608 => 152,  602 => 149,  601 => 148,  597 => 147,  593 => 146,  590 => 144,  584 => 141,  583 => 140,  579 => 139,  577 => 138,  575 => 137,  569 => 136,  562 => 133,  560 => 132,  554 => 131,  545 => 126,  542 => 125,  534 => 124,  529 => 122,  527 => 121,  525 => 120,  522 => 118,  520 => 117,  514 => 116,  505 => 111,  503 => 110,  501 => 108,  500 => 107,  499 => 106,  498 => 105,  493 => 103,  491 => 102,  489 => 101,  486 => 99,  484 => 98,  478 => 97,  470 => 93,  468 => 92,  466 => 91,  464 => 90,  462 => 89,  458 => 88,  456 => 87,  453 => 85,  451 => 84,  445 => 83,  437 => 79,  435 => 78,  433 => 77,  427 => 76,  420 => 73,  414 => 71,  412 => 70,  410 => 69,  404 => 67,  401 => 66,  399 => 65,  396 => 64,  390 => 63,  383 => 60,  381 => 59,  375 => 58,  368 => 55,  366 => 54,  360 => 53,  353 => 50,  350 => 48,  348 => 47,  342 => 46,  330 => 40,  325 => 38,  321 => 36,  308 => 26,  303 => 23,  300 => 22,  298 => 21,  296 => 19,  290 => 18,  283 => 13,  280 => 11,  278 => 9,  277 => 8,  276 => 7,  275 => 6,  273 => 5,  271 => 4,  265 => 3,  258 => 457,  255 => 455,  253 => 408,  250 => 406,  248 => 384,  245 => 383,  243 => 379,  240 => 378,  238 => 357,  235 => 356,  233 => 352,  230 => 351,  228 => 346,  226 => 335,  224 => 317,  221 => 315,  219 => 309,  216 => 308,  214 => 302,  211 => 301,  209 => 297,  206 => 296,  204 => 292,  201 => 291,  199 => 287,  196 => 286,  194 => 282,  191 => 281,  189 => 276,  186 => 275,  184 => 244,  181 => 243,  179 => 220,  176 => 219,  173 => 217,  171 => 199,  168 => 198,  166 => 195,  163 => 194,  161 => 191,  158 => 190,  156 => 185,  153 => 184,  151 => 180,  148 => 179,  145 => 177,  143 => 167,  140 => 166,  138 => 156,  135 => 155,  133 => 136,  130 => 135,  128 => 131,  125 => 130,  123 => 116,  120 => 115,  118 => 97,  115 => 96,  113 => 83,  110 => 82,  108 => 76,  105 => 75,  103 => 63,  100 => 62,  98 => 58,  95 => 57,  93 => 53,  90 => 52,  88 => 46,  85 => 45,  83 => 18,  80 => 17,  77 => 15,  75 => 3,  72 => 2,  14 => 1,);
    }
}
/* {% use 'form_div_layout.html.twig' %}*/
/* */
/* {% block form_start -%}*/
/*     {% if 'easyadmin' == block_prefixes|slice(-2)|first %}*/
/*         {% set attr = attr|merge({*/
/*             'class': attr.class|default('') ~ ' ' ~ easyadmin.view ~ '-form',*/
/*             'data-view': easyadmin.view,*/
/*             'data-entity': easyadmin.entity.name,*/
/*             'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),*/
/*         }) %}*/
/*     {% endif %}*/
/* */
/*     {{- parent() -}}*/
/* {%- endblock form_start %}*/
/* */
/* {# Widgets #}*/
/* */
/* {% block form_widget %}*/
/*     {{- parent() -}}*/
/* */
/*     {% if form.parent.vars.allow_delete|default(false) %}*/
/*         {% set remove_item_javascript %}*/
/*             $(function() {*/
/*             if (event.preventDefault) event.preventDefault(); else event.returnValue = false;*/
/* */
/*             var containerDiv = $('#{{ id }}').parents('.form-group:first');*/
/*             var parentDiv = containerDiv.parents('[data-prototype]:first');*/
/*             containerDiv.remove();*/
/*             parentDiv.trigger('easyadmin.collection.item-deleted');*/
/* */
/*             if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {*/
/*                 $(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);*/
/*             }*/
/*             });*/
/*         {% endset %}*/
/* */
/*         <div class="text-right field-collection-item-action">*/
/*             <a href="#" onclick="{{ remove_item_javascript|raw }}" class="text-danger">*/
/*                 <i class="fa fa-remove"></i>*/
/*                 {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}*/
/*             </a>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock form_widget %}*/
/* */
/* {% block form_widget_simple -%}*/
/*     {% if type is not defined or type not in ['file', 'hidden'] %}*/
/*         {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}*/
/*     {% endif %}*/
/*     {{- parent() -}}*/
/* {%- endblock form_widget_simple %}*/
/* */
/* {% block textarea_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock textarea_widget %}*/
/* */
/* {% block button_widget -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block money_widget -%}*/
/*     <div class="input-group">*/
/*         {% set prepend = '{{' == money_pattern[0:2] %}*/
/*         {% if not prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*         {{- block('form_widget_simple') -}}*/
/*         {% if prepend %}*/
/*             <span class="input-group-addon">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* {%- endblock money_widget %}*/
/* */
/* {% block percent_widget -%}*/
/*     <div class="input-group">*/
/*         {{- block('form_widget_simple') -}}*/
/*         <span class="input-group-addon">%</span>*/
/*     </div>*/
/* {%- endblock percent_widget %}*/
/* */
/* {% block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date, { datetime: true } ) -}}*/
/*             {{- form_widget(form.time, { datetime: true } ) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock datetime_widget %}*/
/* */
/* {% block date_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif %}*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}': form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}': form_widget(form.day),*/
/*             })|raw -}}*/
/*         {% if datetime is not defined or not datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock date_widget %}*/
/* */
/* {% block time_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% else -%}*/
/*         {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             <div {{ block('widget_container_attributes') -}}>*/
/*         {%- endif -%}*/
/*         {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}*/
/*         {% if datetime is not defined or false == datetime -%}*/
/*             </div>*/
/*         {%- endif -%}*/
/*     {% endif %}*/
/* {%- endblock time_widget %}*/
/* */
/* {% block choice_widget_collapsed -%}*/
/*     {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}*/
/*     {{- parent() -}}*/
/* {%- endblock %}*/
/* */
/* {% block choice_widget_expanded -%}*/
/*     {% if '-inline' in label_attr.class|default('') -%}*/
/*         <div class="control-group">*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {%- for child in form %}*/
/*                 {{- form_widget(child, {*/
/*                     parent_label_class: label_attr.class|default(''),*/
/*                 }) -}}*/
/*             {% endfor -%}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock choice_widget_expanded %}*/
/* */
/* {% block checkbox_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}*/
/*     {% if 'checkbox-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="checkbox">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock checkbox_widget %}*/
/* */
/* {% block radio_widget -%}*/
/*     {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}*/
/*     {% if 'radio-inline' in parent_label_class %}*/
/*         {{- form_label(form, null, { widget: parent() }) -}}*/
/*     {% else -%}*/
/*         <div class="radio">*/
/*             {{- form_label(form, null, { widget: parent() }) -}}*/
/*         </div>*/
/*     {%- endif %}*/
/* {%- endblock radio_widget %}*/
/* */
/* {# Labels #}*/
/* */
/* {% block form_label -%}*/
/*     {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}*/
/*     {{- parent() -}}*/
/* {%- endblock form_label %}*/
/* */
/* {% block choice_label -%}*/
/*     {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}*/
/*     {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}*/
/*     {{- block('form_label') -}}*/
/* {% endblock %}*/
/* */
/* {% block checkbox_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock checkbox_label %}*/
/* */
/* {% block radio_label -%}*/
/*     {{- block('checkbox_radio_label') -}}*/
/* {%- endblock radio_label %}*/
/* */
/* {% block checkbox_radio_label %}*/
/*     {# Do no display the label if widget is not defined in order to prevent double label rendering #}*/
/*     {% if widget is defined %}*/
/*         {% if required %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {% endif %}*/
/*         {% if parent_label_class is defined %}*/
/*             {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}*/
/*         {% endif %}*/
/*         {% if label is not same as(false) and label is empty %}*/
/*             {% set label = name|humanize %}*/
/*         {% endif %}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>*/
/*             {{- widget|raw -}}*/
/*             {{- label is not same as(false) ? label|trans({}, 'messages') -}}*/
/*         </label>*/
/*     {% endif %}*/
/* {% endblock checkbox_radio_label %}*/
/* */
/* {# Rows #}*/
/* */
/* {% block form_row -%}*/
/*     {% set _field_type = easyadmin.field.fieldType|default('default') %}*/
/*     <div class="form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {% set _field_label = easyadmin.field['label']|default(null) %}*/
/*         {{- form_label(form, _field_label, { translation_domain: 'messages' }) -}}*/
/*         {{- form_widget(form) -}}*/
/* */
/*         {% if _field_type in ['datetime', 'datetimetz', 'date', 'time'] and easyadmin.field.nullable|default(false) %}*/
/*             <div class="nullable-control">*/
/*                 <label>*/
/*                     <input type="checkbox" {% if data is null %}checked="checked"{% endif %}>*/
/*                     {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}*/
/*                 </label>*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {{- form_errors(form) -}}*/
/* */
/*         {% if easyadmin.field.help|default('') != '' %}*/
/*             <span class="help-block"><i class="fa fa-info-circle"></i> {{ easyadmin.field.help|trans|raw }}</span>*/
/*         {% endif %}*/
/*     </div>*/
/* {%- endblock form_row %}*/
/* */
/* {% block collection_row %}*/
/*     {{ block('form_row') }}*/
/* */
/*     {% if allow_add|default(false) %}*/
/*         {% set js_add_item %}*/
/*             $(function() {*/
/*                 if (event.preventDefault) event.preventDefault(); else event.returnValue = false;*/
/* */
/*                 var collection = $('#{{ id }}');*/
/*                 var numItems = collection.children('div.form-group').length;*/
/* */
/*                 collection.prev('.collection-empty').remove();*/
/* */
/*                 var newItem = collection.attr('data-prototype')*/
/*                     .replace(/\>__name__label__\</g, '>' + numItems + '<')*/
/*                     .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)*/
/*                     .replace(/{{ name }}\]\[__name__\]/g, '{{ name }}][' + numItems + ']')*/
/*                 ;*/
/* */
/*                 collection.append(newItem).trigger('easyadmin.collection.item-added');*/
/*             });*/
/*         {% endset %}*/
/* */
/*         <div class="text-right field-collection-action">*/
/*             <a href="#" onclick="{{ js_add_item|raw }}" class="text-primary">*/
/*                 <i class="fa fa-plus-square"></i>*/
/*                 {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}*/
/*             </a>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock collection_row %}*/
/* */
/* {% block button_row -%}*/
/*     <div class="form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}">*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row %}*/
/* */
/* {% block choice_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock choice_row %}*/
/* */
/* {% block date_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock date_row %}*/
/* */
/* {% block time_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock time_row %}*/
/* */
/* {% block datetime_row -%}*/
/*     {% set force_error = true %}*/
/*     {{- block('form_row') }}*/
/* {%- endblock datetime_row %}*/
/* */
/* {% block checkbox_row -%}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock checkbox_row %}*/
/* */
/* {% block radio_row -%}*/
/*     <div class="form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}">*/
/*         {{- form_widget(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*     </div>*/
/* {%- endblock radio_row %}*/
/* */
/* {# Errors #}*/
/* {% block form_errors %}*/
/*     {% set error_count = errors|length %}*/
/*     {% if error_count >= 1 %}*/
/*         <div class="error-block">*/
/*             <span class="label label-danger">{{ 'errors'|transchoice(count = error_count, domain = 'EasyAdminBundle') }}</span>*/
/*             {% if error_count == 1 %}*/
/*                 {{ errors|first.message }}*/
/*             {% else %}*/
/*                 <ul>*/
/*                     {% for error in errors %}*/
/*                         <li>{{ error.message }}</li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% endif %}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock form_errors %}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     {% if value is empty %}*/
/*         {{ block('empty_collection') }}*/
/*     {% endif %}*/
/*     {% if value is empty or form.vars.prototype is defined %}*/
/*         {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}*/
/*     {% endif %}*/
/* */
/*     {{ parent() }}*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {% block empty_collection %}*/
/*     <div class="empty collection-empty">*/
/*         <span class="label label-empty">{{ 'label.empty'|trans({}, 'EasyAdminBundle') }}</span>*/
/*     </div>*/
/* {% endblock empty_collection %}*/
/* */
/* {% block vich_file_row %}*/
/*     {% set force_error = true %}*/
/*     {{ block('form_row') }}*/
/* {% endblock %}*/
/* */
/* {% block vich_file_widget %}*/
/* {% spaceless %}*/
/*     <div class="easyadmin-vich-file">*/
/*         {% if download_uri|default('') is not empty %}*/
/*             {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}*/
/*             <a href="{{ download_uri }}">{{ download_title }}</a>*/
/*         {% endif %}*/
/* */
/*         <div class="row">*/
/*             {% if form.delete is defined %}*/
/*             <div class="col-sm-3 col-md-2">*/
/*                 {{ form_row(form.delete, { label: 'action.delete' }) }}*/
/*             </div>*/
/*             {% endif %}*/
/*             <div class="{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}">*/
/*                 {{ form_widget(form.file) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block vich_image_row %}*/
/*     {% set force_error = true %}*/
/*     {{ block('form_row') }}*/
/* {% endblock %}*/
/* */
/* {% block vich_image_widget %}*/
/* {% spaceless %}*/
/*     <div class="easyadmin-vich-image">*/
/*         {{ form_widget(form.file) }}*/
/*         {% if form.delete is defined %}*/
/*             {{ form_row(form.delete, { label: 'action.delete' }) }}*/
/*         {% endif %}*/
/* */
/*         {% if download_uri|default('') is not empty %}*/
/*             {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}*/
/* */
/*             <a href="#" class="easyadmin-thumbnail" data-featherlight="#{{ _lightbox_id }}" data-featherlight-close-on-click="anywhere">*/
/*                 <img src="{{ download_uri }}">*/
/*             </a>*/
/* */
/*             <div id="{{ _lightbox_id }}" class="easyadmin-lightbox">*/
/*                 <img src="{{ download_uri }}">*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {# EasyAdmin form type #}*/
/* {% block easyadmin_widget %}*/
/*     {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}*/
/* */
/*     {% if form.vars.errors|length > 0 %}*/
/*         {{ form_errors(form) }}*/
/*     {% endif %}*/
/* */
/*     <div class="row">*/
/*         <input type="hidden" name="referer" value="{{ app.request.query.get('referer', '') }}"/>*/
/* */
/*         {% for field in form.children if 'hidden' not in field.vars.block_prefixes %}*/
/*             <div class="{{ field.vars.easyadmin.field.css_class|default('col-xs-12') }}">*/
/*                 {{ form_row(field) }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="col-xs-12 form-actions">*/
/*             <div class="form-group">*/
/*                 <div id="form-actions-row">*/
/*                     {% block item_actions %}*/
/*                         {# the 'save' action is hardcoded for the 'edit' and 'new' views #}*/
/*                         <button type="submit" class="btn btn-primary">*/
/*                             <i class="fa fa-save"></i> {{ 'action.save'|trans(_trans_parameters, 'messages') }}*/
/*                         </button>*/
/* */
/*                         {% set _entity_actions = (easyadmin.view == 'new')*/
/*                             ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)*/
/*                             : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}*/
/* */
/*                         {% set _entity_id = (easyadmin.view == 'new')*/
/*                             ? null*/
/*                             : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}*/
/* */
/*                         {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}*/
/* */
/*                         {{ include('@EasyAdmin/default/includes/_actions.html.twig', {*/
/*                             actions: _entity_actions,*/
/*                             request_parameters: _request_parameters,*/
/*                             trans_parameters: _trans_parameters,*/
/*                             item_id: _entity_id*/
/*                         }, with_context = false) }}*/
/*                     {% endblock item_actions %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock easyadmin_widget %}*/
/* */
/* {# EasyAdminAutocomplete form type #}*/
/* {% block easyadmin_autocomplete_row %}*/
/*     {# display the form widget, but don't display its label #}*/
/*     {{ form_widget(form.autocomplete, { attr: attr|merge({ 'data-easyadmin-autocomplete-url' : path('easyadmin', {*/
/*         action: 'autocomplete',*/
/*         entity: easyadmin.entity.name,*/
/*         property: easyadmin.field.fieldName,*/
/*         view: easyadmin.view*/
/*     })|raw })}) }}*/
/* */
/*     {{ form_errors(form.autocomplete) }}*/
/* {% endblock easyadmin_autocomplete_row %}*/
/* */

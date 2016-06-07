<?php

/* @EasyAdmin/default/menu.html.twig */
class __TwigTemplate_b1ef37bdb5e3f695206dcb71fd137fe8dd513d363538271db813dfd824c18b90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_menu' => array($this, 'block_main_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b37e35c22222b2d76d226ac6b9b6bd4686126469d96daeefe8e974622c86bb64 = $this->env->getExtension("native_profiler");
        $__internal_b37e35c22222b2d76d226ac6b9b6bd4686126469d96daeefe8e974622c86bb64->enter($__internal_b37e35c22222b2d76d226ac6b9b6bd4686126469d96daeefe8e974622c86bb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/menu.html.twig"));

        // line 28
        echo "
";
        // line 29
        $context["helper"] = $this;
        // line 30
        echo "
<ul class=\"sidebar-menu\">
    ";
        // line 32
        $this->displayBlock('main_menu', $context, $blocks);
        // line 49
        echo "</ul>
";
        
        $__internal_b37e35c22222b2d76d226ac6b9b6bd4686126469d96daeefe8e974622c86bb64->leave($__internal_b37e35c22222b2d76d226ac6b9b6bd4686126469d96daeefe8e974622c86bb64_prof);

    }

    // line 32
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_654df35f733ecb25a04b5a0ee941053c51ffc96bf5e4a71f78bd02b7edf4668e = $this->env->getExtension("native_profiler");
        $__internal_654df35f733ecb25a04b5a0ee941053c51ffc96bf5e4a71f78bd02b7edf4668e->enter($__internal_654df35f733ecb25a04b5a0ee941053c51ffc96bf5e4a71f78bd02b7edf4668e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 33
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.menu"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "            <li class=\"";
            echo ((($this->getAttribute($context["item"], "type", array()) == "divider")) ? ("header") : (""));
            echo " ";
            echo (( !twig_test_empty($this->getAttribute($context["item"], "children", array()))) ? ("treeview") : (""));
            echo " ";
            echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", array()))) ? ("active") : (""));
            echo " ";
            echo ((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
            echo "\">
                ";
            // line 35
            echo $context["helper"]->getrender_menu_item($context["item"]);
            echo "

                ";
            // line 37
            if ( !twig_test_empty((($this->getAttribute($context["item"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "children", array()), array())) : (array())))) {
                // line 38
                echo "                    <ul class=\"treeview-menu\">
                        ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "children", array()));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 40
                    echo "                            <li class=\"";
                    echo ((($this->getAttribute($context["subitem"], "type", array()) == "divider")) ? ("header") : (""));
                    echo " ";
                    echo (((((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index0", array())) && ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", array())))) ? ("active") : (""));
                    echo "\">
                                ";
                    // line 41
                    echo $context["helper"]->getrender_menu_item($context["subitem"]);
                    echo "
                            </li>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                    </ul>
                ";
            }
            // line 46
            echo "            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "    ";
        
        $__internal_654df35f733ecb25a04b5a0ee941053c51ffc96bf5e4a71f78bd02b7edf4668e->leave($__internal_654df35f733ecb25a04b5a0ee941053c51ffc96bf5e4a71f78bd02b7edf4668e_prof);

    }

    // line 1
    public function getrender_menu_item($__item__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_89bfb0a7ebe97e179dfb5f1cf280501d6802baac1c1dc1f2ba2f69cb142b164c = $this->env->getExtension("native_profiler");
            $__internal_89bfb0a7ebe97e179dfb5f1cf280501d6802baac1c1dc1f2ba2f69cb142b164c->enter($__internal_89bfb0a7ebe97e179dfb5f1cf280501d6802baac1c1dc1f2ba2f69cb142b164c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 2
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array())), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = array("menuIndex" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "menu_index", array()), "submenuIndex" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "submenu_index", array()));
                // line 6
                echo "        ";
                $context["path"] = ((($this->getAttribute(                // line 7
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "link")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "url", array())) : (((($this->getAttribute(                // line 8
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "route")) ? ($this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array()))) : (((($this->getAttribute(                // line 9
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "entity")) ? ($this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge(twig_array_merge(array("entity" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "entity", array()), "action" => "list"), (isset($context["menu_params"]) ? $context["menu_params"] : $this->getContext($context, "menu_params"))), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array())))) : (((($this->getAttribute(                // line 10
(isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "type", array()) == "route") && (is_string($__internal_d0ec39badddf567b21fc28bf4e5a4bdc486ce00d53cebf958d6ffa8db55a2fda = (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path"))) && is_string($__internal_6ea60420eae0051d89de2fe386ac1a41c73e232114f5fbcf9b1b5a915e9cf05c = $this->env->getExtension('routing')->getPath("easyadmin")) && ('' === $__internal_6ea60420eae0051d89de2fe386ac1a41c73e232114f5fbcf9b1b5a915e9cf05c || 0 === strpos($__internal_d0ec39badddf567b21fc28bf4e5a4bdc486ce00d53cebf958d6ffa8db55a2fda, $__internal_6ea60420eae0051d89de2fe386ac1a41c73e232114f5fbcf9b1b5a915e9cf05c))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "route", array()), twig_array_merge((isset($context["menu_params"]) ? $context["menu_params"] : $this->getContext($context, "menu_params")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "params", array())));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
                echo "\" ";
                if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "target", array()), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "target", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 22
                if ( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 23
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array())), "html", null, true);
                echo "</span>
            ";
                // line 24
                if ( !twig_test_empty((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "children", array()), array())) : (array())))) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 25
                echo "        </a>
    ";
            }
            
            $__internal_89bfb0a7ebe97e179dfb5f1cf280501d6802baac1c1dc1f2ba2f69cb142b164c->leave($__internal_89bfb0a7ebe97e179dfb5f1cf280501d6802baac1c1dc1f2ba2f69cb142b164c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 25,  224 => 24,  219 => 23,  213 => 22,  203 => 21,  200 => 20,  197 => 19,  194 => 18,  191 => 17,  188 => 12,  186 => 10,  185 => 9,  184 => 8,  183 => 7,  181 => 6,  178 => 5,  172 => 3,  169 => 2,  154 => 1,  147 => 48,  132 => 46,  128 => 44,  111 => 41,  104 => 40,  87 => 39,  84 => 38,  82 => 37,  77 => 35,  66 => 34,  48 => 33,  42 => 32,  34 => 49,  32 => 32,  28 => 30,  26 => 29,  23 => 28,);
    }
}
/* {% macro render_menu_item(item) %}*/
/*     {% if item.type == 'divider' %}*/
/*         {{ item.label|trans }}*/
/*     {% else %}*/
/*         {% set menu_params = { menuIndex: item.menu_index, submenuIndex: item.submenu_index } %}*/
/*         {% set path =*/
/*             item.type == 'link' ? item.url :*/
/*             item.type == 'route' ? path(item.route, item.params) :*/
/*             item.type == 'entity' ? path('easyadmin', { entity: item.entity, action: 'list' }|merge(menu_params)|merge(item.params)) :*/
/*             item.type == 'empty' ? '#' : ''*/
/*         %}*/
/* */
/*         {# if the URL generated for the route belongs to the backend, regenerate*/
/*            the URL to include the menu_params to display the selected menu item*/
/*            (this is checked comparing the beginning of the route URL with the backend homepage URL)*/
/*         #}*/
/*         {% if item.type == 'route' and (path starts with path('easyadmin')) %}*/
/*             {% set path = path(item.route, menu_params|merge(item.params)) %}*/
/*         {% endif %}*/
/* */
/*         <a href="{{ path }}" {% if item.target|default(false) %}target="{{ item.target }}"{% endif %}>*/
/*             {% if item.icon is not empty %}<i class="fa {{ item.icon }}"></i>{% endif %}*/
/*             <span>{{ item.label|trans }}</span>*/
/*             {% if item.children|default([]) is not empty %}<i class="fa fa-angle-left pull-right"></i>{% endif %}*/
/*         </a>*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
/* {% import _self as helper %}*/
/* */
/* <ul class="sidebar-menu">*/
/*     {% block main_menu %}*/
/*         {% for item in easyadmin_config('design.menu') %}*/
/*             <li class="{{ item.type == 'divider' ? 'header' }} {{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}">*/
/*                 {{ helper.render_menu_item(item) }}*/
/* */
/*                 {% if item.children|default([]) is not empty %}*/
/*                     <ul class="treeview-menu">*/
/*                         {% for subitem in item.children %}*/
/*                             <li class="{{ subitem.type == 'divider' ? 'header' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.parent.loop.index0 and app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}">*/
/*                                 {{ helper.render_menu_item(subitem) }}*/
/*                             </li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 {% endif %}*/
/*             </li>*/
/*         {% endfor %}*/
/*     {% endblock main_menu %}*/
/* </ul>*/
/* */

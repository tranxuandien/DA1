<?php

/* EasyAdminBundle:default:field_association.html.twig */
class __TwigTemplate_ecacb286192ff34a443a9bafff57247dabb0b3eebb724dd60476997869e3af8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96e2407c2f21c11564c744e68281fd6f43e9bfc07bffee25967983324512289e = $this->env->getExtension("native_profiler");
        $__internal_96e2407c2f21c11564c744e68281fd6f43e9bfc07bffee25967983324512289e->enter($__internal_96e2407c2f21c11564c744e68281fd6f43e9bfc07bffee25967983324512289e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_association.html.twig"));

        // line 2
        if (twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 3
            echo "    ";
            if (("show" == (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")))) {
                // line 4
                echo "        ";
                if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) > 0)) {
                    // line 5
                    echo "            ";
                    if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) < 15)) {
                        // line 6
                        echo "                <ul class=\"";
                        echo (((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) < 2)) ? ("inline") : (""));
                        echo "\">
                    ";
                        // line 7
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 8
                            echo "                        <li>
                            ";
                            // line 9
                            if (array_key_exists("link_parameters", $context)) {
                                // line 10
                                echo "                                ";
                                $context["primary_key_value"] = $this->getAttribute($context["item"], $this->getAttribute((isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters")), "primary_key_name", array()));
                                // line 11
                                echo "                                <a href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters")), array("id" => (isset($context["primary_key_value"]) ? $context["primary_key_value"] : $this->getContext($context, "primary_key_value")), "referer" => ""))), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                                echo "</a>
                            ";
                            } else {
                                // line 13
                                echo "                                ";
                                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                                echo "
                            ";
                            }
                            // line 15
                            echo "                        </li>
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 17
                        echo "                </ul>
            ";
                    } else {
                        // line 19
                        echo "                ";
                        // line 20
                        echo "                <span class=\"badge\">";
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
                        echo "</span>
            ";
                    }
                    // line 22
                    echo "        ";
                } else {
                    // line 23
                    echo "            <div class=\"empty collection-empty\">
                <span class=\"label label-empty\">";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
                    echo "</span>
            </div>
        ";
                }
                // line 27
                echo "    ";
            } elseif (("list" == (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")))) {
                // line 28
                echo "        <span class=\"badge\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
                echo "</span>
    ";
            }
        } elseif (        // line 31
array_key_exists("link_parameters", $context)) {
            // line 32
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("easyadmin", twig_array_merge((isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters")), array("referer" => ""))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        } else {
            // line 34
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('easyadmin_extension')->truncateText($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_96e2407c2f21c11564c744e68281fd6f43e9bfc07bffee25967983324512289e->leave($__internal_96e2407c2f21c11564c744e68281fd6f43e9bfc07bffee25967983324512289e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_association.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  106 => 32,  104 => 31,  98 => 28,  95 => 27,  89 => 24,  86 => 23,  83 => 22,  77 => 20,  75 => 19,  71 => 17,  64 => 15,  58 => 13,  50 => 11,  47 => 10,  45 => 9,  42 => 8,  38 => 7,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  22 => 2,);
    }
}
/* {# a *-to-many collection of values #}*/
/* {% if value is iterable %}*/
/*     {% if 'show' == view %}*/
/*         {% if value|length > 0 %}*/
/*             {% if value | length < 15 %}*/
/*                 <ul class="{{ value|length < 2 ? 'inline' }}">*/
/*                     {% for item in value %}*/
/*                         <li>*/
/*                             {% if link_parameters is defined %}*/
/*                                 {% set primary_key_value = attribute(item, link_parameters.primary_key_name) %}*/
/*                                 <a href="{{ path('easyadmin', link_parameters|merge({ id: primary_key_value, referer: '' })) }}">{{ item }}</a>*/
/*                             {% else %}*/
/*                                 {{ item }}*/
/*                             {% endif %}*/
/*                         </li>*/
/*                     {% endfor %}*/
/*                 </ul>*/
/*             {% else %}*/
/*                 {# Don't use list for large assoc. #}*/
/*                 <span class="badge">{{ value|length }}</span>*/
/*             {% endif %}*/
/*         {% else %}*/
/*             <div class="empty collection-empty">*/
/*                 <span class="label label-empty">{{ 'label.empty'|trans({}, 'EasyAdminBundle') }}</span>*/
/*             </div>*/
/*         {% endif %}*/
/*     {% elseif 'list' == view %}*/
/*         <span class="badge">{{ value|length }}</span>*/
/*     {% endif %}*/
/* {# a simple *-to-one value associated with an entity managed by this backend #}*/
/* {% elseif link_parameters is defined %}*/
/*     <a href="{{ path('easyadmin', link_parameters|merge({ referer: '' })) }}">{{ value|easyadmin_truncate }}</a>*/
/* {% else %}*/
/*     {{ value|easyadmin_truncate }}*/
/* {% endif %}*/
/* */

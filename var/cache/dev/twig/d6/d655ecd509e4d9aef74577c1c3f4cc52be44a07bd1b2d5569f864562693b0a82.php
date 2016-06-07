<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_8ee083f1c85dc61aa5a0934f426552edebe24ab10ac00001f54f4eb2b2918c95 extends Twig_Template
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
        $__internal_e0039ad42c50a54f1e691bdeffdbc95476d4ad3772833518e260c35b690f1dc5 = $this->env->getExtension("native_profiler");
        $__internal_e0039ad42c50a54f1e691bdeffdbc95476d4ad3772833518e260c35b690f1dc5->enter($__internal_e0039ad42c50a54f1e691bdeffdbc95476d4ad3772833518e260c35b690f1dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_e0039ad42c50a54f1e691bdeffdbc95476d4ad3772833518e260c35b690f1dc5->leave($__internal_e0039ad42c50a54f1e691bdeffdbc95476d4ad3772833518e260c35b690f1dc5_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,);
    }
}
/* {# this field template is used to avoid formatting the special ID attribute as a number #}*/
/* {{ value }}*/
/* */

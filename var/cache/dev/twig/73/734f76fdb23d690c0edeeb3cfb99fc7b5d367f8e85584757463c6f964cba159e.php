<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_aff801398e39b8252568d3e956b1aeaefeed9a6ce14b0a0ef7c50c35eefa97a1 extends Twig_Template
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
        $__internal_1681df3da31388b3e33d4230a15d6e76d9060b29811b3fa411c1e223e8cd517d = $this->env->getExtension("native_profiler");
        $__internal_1681df3da31388b3e33d4230a15d6e76d9060b29811b3fa411c1e223e8cd517d->enter($__internal_1681df3da31388b3e33d4230a15d6e76d9060b29811b3fa411c1e223e8cd517d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_1681df3da31388b3e33d4230a15d6e76d9060b29811b3fa411c1e223e8cd517d->leave($__internal_1681df3da31388b3e33d4230a15d6e76d9060b29811b3fa411c1e223e8cd517d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <span class="label">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>*/
/* */

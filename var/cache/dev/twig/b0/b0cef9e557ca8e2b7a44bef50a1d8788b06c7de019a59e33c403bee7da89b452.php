<?php

/* EasyAdminBundle:default:field_image.html.twig */
class __TwigTemplate_32626f961b86ed714dbe2500fbc15f502d012293396223614867474df2c6d4d8 extends Twig_Template
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
        $__internal_4c260f3d4c4107ef4e143c4d133ee77b2a970439b94c84d46397b4ab6c29e6a2 = $this->env->getExtension("native_profiler");
        $__internal_4c260f3d4c4107ef4e143c4d133ee77b2a970439b94c84d46397b4ab6c29e6a2->enter($__internal_4c260f3d4c4107ef4e143c4d133ee77b2a970439b94c84d46397b4ab6c29e6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_image.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid")), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">
</a>

<div id=\"easyadmin-lightbox-";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["uuid"]) ? $context["uuid"] : $this->getContext($context, "uuid")), "html", null, true);
        echo "\" class=\"easyadmin-lightbox\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\">
</div>
";
        
        $__internal_4c260f3d4c4107ef4e143c4d133ee77b2a970439b94c84d46397b4ab6c29e6a2->leave($__internal_4c260f3d4c4107ef4e143c4d133ee77b2a970439b94c84d46397b4ab6c29e6a2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  33 => 5,  27 => 2,  22 => 1,);
    }
}
/* <a href="#" class="easyadmin-thumbnail" data-featherlight="#easyadmin-lightbox-{{ uuid }}" data-featherlight-close-on-click="anywhere">*/
/*     <img src="{{ value }}">*/
/* </a>*/
/* */
/* <div id="easyadmin-lightbox-{{ uuid }}" class="easyadmin-lightbox">*/
/*     <img src="{{ value }}">*/
/* </div>*/
/* */

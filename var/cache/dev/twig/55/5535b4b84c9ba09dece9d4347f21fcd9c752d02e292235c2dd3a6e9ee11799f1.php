<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7acc28c3d58c9b3380fdded1ea3207489aa58a050e0b1f355b5522285bfa4863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c02d0860e1100b89bf0aef804d75a61ff977e30d591b1e1bdae2c98736062bcc = $this->env->getExtension("native_profiler");
        $__internal_c02d0860e1100b89bf0aef804d75a61ff977e30d591b1e1bdae2c98736062bcc->enter($__internal_c02d0860e1100b89bf0aef804d75a61ff977e30d591b1e1bdae2c98736062bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c02d0860e1100b89bf0aef804d75a61ff977e30d591b1e1bdae2c98736062bcc->leave($__internal_c02d0860e1100b89bf0aef804d75a61ff977e30d591b1e1bdae2c98736062bcc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_431d8a34cd39f47ce806afe50f010a9bc4548e9b5cd56eccbc12b5ab43c0de75 = $this->env->getExtension("native_profiler");
        $__internal_431d8a34cd39f47ce806afe50f010a9bc4548e9b5cd56eccbc12b5ab43c0de75->enter($__internal_431d8a34cd39f47ce806afe50f010a9bc4548e9b5cd56eccbc12b5ab43c0de75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_431d8a34cd39f47ce806afe50f010a9bc4548e9b5cd56eccbc12b5ab43c0de75->leave($__internal_431d8a34cd39f47ce806afe50f010a9bc4548e9b5cd56eccbc12b5ab43c0de75_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddf1a7e2e35ca4841fc170ea58b8afab02bea78509eea0884dc4226d1d860a0c = $this->env->getExtension("native_profiler");
        $__internal_ddf1a7e2e35ca4841fc170ea58b8afab02bea78509eea0884dc4226d1d860a0c->enter($__internal_ddf1a7e2e35ca4841fc170ea58b8afab02bea78509eea0884dc4226d1d860a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ddf1a7e2e35ca4841fc170ea58b8afab02bea78509eea0884dc4226d1d860a0c->leave($__internal_ddf1a7e2e35ca4841fc170ea58b8afab02bea78509eea0884dc4226d1d860a0c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_01bb217bf8b27bae09acb2a4ed811ed8c768726c7babb71371d282624c25fd7b = $this->env->getExtension("native_profiler");
        $__internal_01bb217bf8b27bae09acb2a4ed811ed8c768726c7babb71371d282624c25fd7b->enter($__internal_01bb217bf8b27bae09acb2a4ed811ed8c768726c7babb71371d282624c25fd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_01bb217bf8b27bae09acb2a4ed811ed8c768726c7babb71371d282624c25fd7b->leave($__internal_01bb217bf8b27bae09acb2a4ed811ed8c768726c7babb71371d282624c25fd7b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

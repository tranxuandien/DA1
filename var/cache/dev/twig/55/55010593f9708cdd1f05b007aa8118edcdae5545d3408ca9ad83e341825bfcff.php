<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_68b44ce0d2e75d882f34886da8e1fbb3ef4350f1ec6fd1cb618378114dd45d67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7a32ad66103c243ec22cd18d259fc817606704da66d5e5734a9975bb1a2a641 = $this->env->getExtension("native_profiler");
        $__internal_d7a32ad66103c243ec22cd18d259fc817606704da66d5e5734a9975bb1a2a641->enter($__internal_d7a32ad66103c243ec22cd18d259fc817606704da66d5e5734a9975bb1a2a641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7a32ad66103c243ec22cd18d259fc817606704da66d5e5734a9975bb1a2a641->leave($__internal_d7a32ad66103c243ec22cd18d259fc817606704da66d5e5734a9975bb1a2a641_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea7a8493434a03ebc29d8f50077f3e5585b22d6af7a3257593de036e28136935 = $this->env->getExtension("native_profiler");
        $__internal_ea7a8493434a03ebc29d8f50077f3e5585b22d6af7a3257593de036e28136935->enter($__internal_ea7a8493434a03ebc29d8f50077f3e5585b22d6af7a3257593de036e28136935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_ea7a8493434a03ebc29d8f50077f3e5585b22d6af7a3257593de036e28136935->leave($__internal_ea7a8493434a03ebc29d8f50077f3e5585b22d6af7a3257593de036e28136935_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */

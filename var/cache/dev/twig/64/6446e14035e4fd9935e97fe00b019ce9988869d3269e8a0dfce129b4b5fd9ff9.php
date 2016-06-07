<?php

/* base.html.twig */
class __TwigTemplate_9e987f46f0c2d8741637543fe52d75eb1af979cac32f0d2b441819a9277c4e46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'left' => array($this, 'block_left'),
            'right' => array($this, 'block_right'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb87254844ca57daaa67ced3c9ce152ac6631b61b8c714759d6ba30082a3422f = $this->env->getExtension("native_profiler");
        $__internal_bb87254844ca57daaa67ced3c9ce152ac6631b61b8c714759d6ba30082a3422f->enter($__internal_bb87254844ca57daaa67ced3c9ce152ac6631b61b8c714759d6ba30082a3422f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('left', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('right', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_bb87254844ca57daaa67ced3c9ce152ac6631b61b8c714759d6ba30082a3422f->leave($__internal_bb87254844ca57daaa67ced3c9ce152ac6631b61b8c714759d6ba30082a3422f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_42dcf40d26270506408c91b72bb83589741c63c78eb1c4d2dd95fdb101d8c275 = $this->env->getExtension("native_profiler");
        $__internal_42dcf40d26270506408c91b72bb83589741c63c78eb1c4d2dd95fdb101d8c275->enter($__internal_42dcf40d26270506408c91b72bb83589741c63c78eb1c4d2dd95fdb101d8c275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcomeee!";
        
        $__internal_42dcf40d26270506408c91b72bb83589741c63c78eb1c4d2dd95fdb101d8c275->leave($__internal_42dcf40d26270506408c91b72bb83589741c63c78eb1c4d2dd95fdb101d8c275_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_885a992424729d929afb34caa2c59fe6ecd28ec5d71e77050762cd2e59a58b80 = $this->env->getExtension("native_profiler");
        $__internal_885a992424729d929afb34caa2c59fe6ecd28ec5d71e77050762cd2e59a58b80->enter($__internal_885a992424729d929afb34caa2c59fe6ecd28ec5d71e77050762cd2e59a58b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        ";
        
        $__internal_885a992424729d929afb34caa2c59fe6ecd28ec5d71e77050762cd2e59a58b80->leave($__internal_885a992424729d929afb34caa2c59fe6ecd28ec5d71e77050762cd2e59a58b80_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f20fed029cbe657d2a90b1a60b7bd290e23ac77612ac82ad3b70bd0b960ddbc = $this->env->getExtension("native_profiler");
        $__internal_6f20fed029cbe657d2a90b1a60b7bd290e23ac77612ac82ad3b70bd0b960ddbc->enter($__internal_6f20fed029cbe657d2a90b1a60b7bd290e23ac77612ac82ad3b70bd0b960ddbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f20fed029cbe657d2a90b1a60b7bd290e23ac77612ac82ad3b70bd0b960ddbc->leave($__internal_6f20fed029cbe657d2a90b1a60b7bd290e23ac77612ac82ad3b70bd0b960ddbc_prof);

    }

    // line 13
    public function block_left($context, array $blocks = array())
    {
        $__internal_0bcddc3b3db5bdb0f765f75d900096f76ec2c8bb65e43d1712ecfbfa84d9195a = $this->env->getExtension("native_profiler");
        $__internal_0bcddc3b3db5bdb0f765f75d900096f76ec2c8bb65e43d1712ecfbfa84d9195a->enter($__internal_0bcddc3b3db5bdb0f765f75d900096f76ec2c8bb65e43d1712ecfbfa84d9195a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        
        $__internal_0bcddc3b3db5bdb0f765f75d900096f76ec2c8bb65e43d1712ecfbfa84d9195a->leave($__internal_0bcddc3b3db5bdb0f765f75d900096f76ec2c8bb65e43d1712ecfbfa84d9195a_prof);

    }

    // line 14
    public function block_right($context, array $blocks = array())
    {
        $__internal_1dcf0e1bf3ce8a629aba4f7f321ecf7121e9734b2dd9bb5b75e5d7c88e9ba471 = $this->env->getExtension("native_profiler");
        $__internal_1dcf0e1bf3ce8a629aba4f7f321ecf7121e9734b2dd9bb5b75e5d7c88e9ba471->enter($__internal_1dcf0e1bf3ce8a629aba4f7f321ecf7121e9734b2dd9bb5b75e5d7c88e9ba471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        
        $__internal_1dcf0e1bf3ce8a629aba4f7f321ecf7121e9734b2dd9bb5b75e5d7c88e9ba471->leave($__internal_1dcf0e1bf3ce8a629aba4f7f321ecf7121e9734b2dd9bb5b75e5d7c88e9ba471_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f209d90b89168c7a0900428700f65a39e5082aa05f0eaac48a369d533412c27 = $this->env->getExtension("native_profiler");
        $__internal_7f209d90b89168c7a0900428700f65a39e5082aa05f0eaac48a369d533412c27->enter($__internal_7f209d90b89168c7a0900428700f65a39e5082aa05f0eaac48a369d533412c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
            <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_7f209d90b89168c7a0900428700f65a39e5082aa05f0eaac48a369d533412c27->leave($__internal_7f209d90b89168c7a0900428700f65a39e5082aa05f0eaac48a369d533412c27_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 16,  126 => 15,  115 => 14,  104 => 13,  93 => 12,  85 => 7,  79 => 6,  67 => 5,  58 => 19,  55 => 15,  52 => 14,  49 => 13,  47 => 12,  40 => 9,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcomeee!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block left %}{% endblock %}*/
/*         {% block right %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*             <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

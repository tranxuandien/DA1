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
        $__internal_6a41bf1ff07cbfde75b5a9c7e94889cbbaa81815a31acdbc8608c33e1c3723de = $this->env->getExtension("native_profiler");
        $__internal_6a41bf1ff07cbfde75b5a9c7e94889cbbaa81815a31acdbc8608c33e1c3723de->enter($__internal_6a41bf1ff07cbfde75b5a9c7e94889cbbaa81815a31acdbc8608c33e1c3723de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('left', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('right', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_6a41bf1ff07cbfde75b5a9c7e94889cbbaa81815a31acdbc8608c33e1c3723de->leave($__internal_6a41bf1ff07cbfde75b5a9c7e94889cbbaa81815a31acdbc8608c33e1c3723de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f54c8ebc9634c9d59cc5d84ffa3a57e1745562bda4c7e1115b4e60514f09b756 = $this->env->getExtension("native_profiler");
        $__internal_f54c8ebc9634c9d59cc5d84ffa3a57e1745562bda4c7e1115b4e60514f09b756->enter($__internal_f54c8ebc9634c9d59cc5d84ffa3a57e1745562bda4c7e1115b4e60514f09b756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcomeee!";
        
        $__internal_f54c8ebc9634c9d59cc5d84ffa3a57e1745562bda4c7e1115b4e60514f09b756->leave($__internal_f54c8ebc9634c9d59cc5d84ffa3a57e1745562bda4c7e1115b4e60514f09b756_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6661fac6c63f2601e579a5216797f06777a25731c944470248e3a06cbbfb658b = $this->env->getExtension("native_profiler");
        $__internal_6661fac6c63f2601e579a5216797f06777a25731c944470248e3a06cbbfb658b->enter($__internal_6661fac6c63f2601e579a5216797f06777a25731c944470248e3a06cbbfb658b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"../bootstrap-3.3.6-dist/css/bootstrap.min.css\">
        ";
        
        $__internal_6661fac6c63f2601e579a5216797f06777a25731c944470248e3a06cbbfb658b->leave($__internal_6661fac6c63f2601e579a5216797f06777a25731c944470248e3a06cbbfb658b_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_de0c689cfc3861a4a72ed84850a9be07bf2d303b41854378a75a55bee9d56a9b = $this->env->getExtension("native_profiler");
        $__internal_de0c689cfc3861a4a72ed84850a9be07bf2d303b41854378a75a55bee9d56a9b->enter($__internal_de0c689cfc3861a4a72ed84850a9be07bf2d303b41854378a75a55bee9d56a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_de0c689cfc3861a4a72ed84850a9be07bf2d303b41854378a75a55bee9d56a9b->leave($__internal_de0c689cfc3861a4a72ed84850a9be07bf2d303b41854378a75a55bee9d56a9b_prof);

    }

    // line 14
    public function block_left($context, array $blocks = array())
    {
        $__internal_68c6f18a46a7cf4a10a6bd20c3def5a73795d495e25742d95d070a142dc2e55d = $this->env->getExtension("native_profiler");
        $__internal_68c6f18a46a7cf4a10a6bd20c3def5a73795d495e25742d95d070a142dc2e55d->enter($__internal_68c6f18a46a7cf4a10a6bd20c3def5a73795d495e25742d95d070a142dc2e55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        
        $__internal_68c6f18a46a7cf4a10a6bd20c3def5a73795d495e25742d95d070a142dc2e55d->leave($__internal_68c6f18a46a7cf4a10a6bd20c3def5a73795d495e25742d95d070a142dc2e55d_prof);

    }

    // line 15
    public function block_right($context, array $blocks = array())
    {
        $__internal_eedf6f9061b63ce063e294642b79fe312ff24cc0062c01a3e2fb6b24f291800c = $this->env->getExtension("native_profiler");
        $__internal_eedf6f9061b63ce063e294642b79fe312ff24cc0062c01a3e2fb6b24f291800c->enter($__internal_eedf6f9061b63ce063e294642b79fe312ff24cc0062c01a3e2fb6b24f291800c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        
        $__internal_eedf6f9061b63ce063e294642b79fe312ff24cc0062c01a3e2fb6b24f291800c->leave($__internal_eedf6f9061b63ce063e294642b79fe312ff24cc0062c01a3e2fb6b24f291800c_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9b2e8d4a48c39d63b1181be60a38804d9e8d37a8bcd61e11549b5d58c16652d = $this->env->getExtension("native_profiler");
        $__internal_b9b2e8d4a48c39d63b1181be60a38804d9e8d37a8bcd61e11549b5d58c16652d->enter($__internal_b9b2e8d4a48c39d63b1181be60a38804d9e8d37a8bcd61e11549b5d58c16652d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
            <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
            <script src=\"../jquery/jquery-1.12.4.min.js\"></script>
            <script src=\"../bootstrap-3.3.6-dist/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_b9b2e8d4a48c39d63b1181be60a38804d9e8d37a8bcd61e11549b5d58c16652d->leave($__internal_b9b2e8d4a48c39d63b1181be60a38804d9e8d37a8bcd61e11549b5d58c16652d_prof);

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
        return array (  133 => 17,  127 => 16,  116 => 15,  105 => 14,  94 => 13,  85 => 7,  79 => 6,  67 => 5,  58 => 22,  55 => 16,  52 => 15,  49 => 14,  47 => 13,  40 => 10,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcomeee!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/*         <link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css">*/
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
/*             <script src="../jquery/jquery-1.12.4.min.js"></script>*/
/*             <script src="../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

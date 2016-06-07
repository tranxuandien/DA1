<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_7ca8f15760b0a139bcc2d9c3a48c74b37a2dc28670875cd2571a8c9af93874a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header_logo' => array($this, 'block_header_logo'),
            'user_menu' => array($this, 'block_user_menu'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00105cc9b094176153946c1f9b622004da026153801ad4562d365495fe920ddd = $this->env->getExtension("native_profiler");
        $__internal_00105cc9b094176153946c1f9b622004da026153801ad4562d365495fe920ddd->enter($__internal_00105cc9b094176153946c1f9b622004da026153801ad4562d365495fe920ddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 9
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 11
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 19
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 44
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    </head>

    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 128
        echo "</html>
";
        
        $__internal_00105cc9b094176153946c1f9b622004da026153801ad4562d365495fe920ddd->leave($__internal_00105cc9b094176153946c1f9b622004da026153801ad4562d365495fe920ddd_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c30669a6db3c8b00bce049c8fd2408cb3c9c02fa020b898799ba005602ba583b = $this->env->getExtension("native_profiler");
        $__internal_c30669a6db3c8b00bce049c8fd2408cb3c9c02fa020b898799ba005602ba583b->enter($__internal_c30669a6db3c8b00bce049c8fd2408cb3c9c02fa020b898799ba005602ba583b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags($this->renderBlock("content_title", $context, $blocks));
        
        $__internal_c30669a6db3c8b00bce049c8fd2408cb3c9c02fa020b898799ba005602ba583b->leave($__internal_c30669a6db3c8b00bce049c8fd2408cb3c9c02fa020b898799ba005602ba583b_prof);

    }

    // line 11
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_f1c3b80e522d1ca15870ef263072ea6066fca22274867ed82153ac74d48b0965 = $this->env->getExtension("native_profiler");
        $__internal_f1c3b80e522d1ca15870ef263072ea6066fca22274867ed82153ac74d48b0965->enter($__internal_f1c3b80e522d1ca15870ef263072ea6066fca22274867ed82153ac74d48b0965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 14
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_f1c3b80e522d1ca15870ef263072ea6066fca22274867ed82153ac74d48b0965->leave($__internal_f1c3b80e522d1ca15870ef263072ea6066fca22274867ed82153ac74d48b0965_prof);

    }

    // line 22
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_41abed1f5c14d0a43cd82aac5417c0cb738aadbd6b0a436b04a98c2ec14149b7 = $this->env->getExtension("native_profiler");
        $__internal_41abed1f5c14d0a43cd82aac5417c0cb738aadbd6b0a436b04a98c2ec14149b7->enter($__internal_41abed1f5c14d0a43cd82aac5417c0cb738aadbd6b0a436b04a98c2ec14149b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 23
        echo "            ";
        $context["favicon"] = $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.favicon");
        // line 24
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_41abed1f5c14d0a43cd82aac5417c0cb738aadbd6b0a436b04a98c2ec14149b7->leave($__internal_41abed1f5c14d0a43cd82aac5417c0cb738aadbd6b0a436b04a98c2ec14149b7_prof);

    }

    // line 27
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_deb7f560c71402f4c85f8c9711e610cb68e09be6714f06f9babf9424a86cf7f1 = $this->env->getExtension("native_profiler");
        $__internal_deb7f560c71402f4c85f8c9711e610cb68e09be6714f06f9babf9424a86cf7f1->enter($__internal_deb7f560c71402f4c85f8c9711e610cb68e09be6714f06f9babf9424a86cf7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 28
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 41
        echo "
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_deb7f560c71402f4c85f8c9711e610cb68e09be6714f06f9babf9424a86cf7f1->leave($__internal_deb7f560c71402f4c85f8c9711e610cb68e09be6714f06f9babf9424a86cf7f1_prof);

    }

    // line 28
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_3a58ec30cc245b5deecaae4d6523a356dd7e3f6bf2c8dc5a123d497428f27697 = $this->env->getExtension("native_profiler");
        $__internal_3a58ec30cc245b5deecaae4d6523a356dd7e3f6bf2c8dc5a123d497428f27697->enter($__internal_3a58ec30cc245b5deecaae4d6523a356dd7e3f6bf2c8dc5a123d497428f27697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 29
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_3a58ec30cc245b5deecaae4d6523a356dd7e3f6bf2c8dc5a123d497428f27697->leave($__internal_3a58ec30cc245b5deecaae4d6523a356dd7e3f6bf2c8dc5a123d497428f27697_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_f98c5a7485e7749e7dfe81c1b2171cd9557f86335cb111302c3842047ef48f87 = $this->env->getExtension("native_profiler");
        $__internal_f98c5a7485e7749e7dfe81c1b2171cd9557f86335cb111302c3842047ef48f87->enter($__internal_f98c5a7485e7749e7dfe81c1b2171cd9557f86335cb111302c3842047ef48f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 54
        $this->displayBlock('wrapper', $context, $blocks);
        // line 119
        echo "        </div>

        ";
        // line 121
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 122
        echo "
        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 124
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "    </body>
    ";
        
        $__internal_f98c5a7485e7749e7dfe81c1b2171cd9557f86335cb111302c3842047ef48f87->leave($__internal_f98c5a7485e7749e7dfe81c1b2171cd9557f86335cb111302c3842047ef48f87_prof);

    }

    // line 52
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8186af0fa4a1b28dfd4de02c05102cdf098993cab5cba317a870414dff07b0ae = $this->env->getExtension("native_profiler");
        $__internal_8186af0fa4a1b28dfd4de02c05102cdf098993cab5cba317a870414dff07b0ae->enter($__internal_8186af0fa4a1b28dfd4de02c05102cdf098993cab5cba317a870414dff07b0ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_8186af0fa4a1b28dfd4de02c05102cdf098993cab5cba317a870414dff07b0ae->leave($__internal_8186af0fa4a1b28dfd4de02c05102cdf098993cab5cba317a870414dff07b0ae_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_4b02feac621c7aa38e4ad462964149cd6e361df72acfa27f9ea513af88841399 = $this->env->getExtension("native_profiler");
        $__internal_4b02feac621c7aa38e4ad462964149cd6e361df72acfa27f9ea513af88841399->enter($__internal_4b02feac621c7aa38e4ad462964149cd6e361df72acfa27f9ea513af88841399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_4b02feac621c7aa38e4ad462964149cd6e361df72acfa27f9ea513af88841399->leave($__internal_4b02feac621c7aa38e4ad462964149cd6e361df72acfa27f9ea513af88841399_prof);

    }

    // line 54
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_075bbad72eda6fff8eade58bcf2031afbfc723326495611dcaab4a15c9947fcf = $this->env->getExtension("native_profiler");
        $__internal_075bbad72eda6fff8eade58bcf2031afbfc723326495611dcaab4a15c9947fcf->enter($__internal_075bbad72eda6fff8eade58bcf2031afbfc723326495611dcaab4a15c9947fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 55
        echo "            <header class=\"main-header\">
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 62
        $this->displayBlock('header_logo', $context, $blocks);
        // line 67
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"user user-menu\">
                                ";
        // line 72
        $this->displayBlock('user_menu', $context, $blocks);
        // line 81
        echo "                            </li>
                        </ul>
                    </div>
                </nav>
            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 88
        $this->displayBlock('sidebar', $context, $blocks);
        // line 99
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 102
        $this->displayBlock('content', $context, $blocks);
        // line 117
        echo "            </div>
        ";
        
        $__internal_075bbad72eda6fff8eade58bcf2031afbfc723326495611dcaab4a15c9947fcf->leave($__internal_075bbad72eda6fff8eade58bcf2031afbfc723326495611dcaab4a15c9947fcf_prof);

    }

    // line 62
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_d610ac538e5c9b47144074b2f6014dd3687a1eff47c5c7b761ee38870ecacbc1 = $this->env->getExtension("native_profiler");
        $__internal_d610ac538e5c9b47144074b2f6014dd3687a1eff47c5c7b761ee38870ecacbc1->enter($__internal_d610ac538e5c9b47144074b2f6014dd3687a1eff47c5c7b761ee38870ecacbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 63
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("easyadmin");
        echo "\">
                                ";
        // line 64
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_d610ac538e5c9b47144074b2f6014dd3687a1eff47c5c7b761ee38870ecacbc1->leave($__internal_d610ac538e5c9b47144074b2f6014dd3687a1eff47c5c7b761ee38870ecacbc1_prof);

    }

    // line 72
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_fd279a081bb75aa84eb32929a069c16ea02ab73d987ea04bcebc9e7b3a12c964 = $this->env->getExtension("native_profiler");
        $__internal_fd279a081bb75aa84eb32929a069c16ea02ab73d987ea04bcebc9e7b3a12c964->enter($__internal_fd279a081bb75aa84eb32929a069c16ea02ab73d987ea04bcebc9e7b3a12c964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 73
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                                    <i class=\"hidden-xs fa fa-user\"></i>
                                    ";
        // line 75
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 76
            echo "                                        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 78
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        }
        // line 80
        echo "                                ";
        
        $__internal_fd279a081bb75aa84eb32929a069c16ea02ab73d987ea04bcebc9e7b3a12c964->leave($__internal_fd279a081bb75aa84eb32929a069c16ea02ab73d987ea04bcebc9e7b3a12c964_prof);

    }

    // line 88
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c0fdd7f6dc553e04c887c6f165dc16d846a97c78eb554004c1aee5a9c59bb589 = $this->env->getExtension("native_profiler");
        $__internal_c0fdd7f6dc553e04c887c6f165dc16d846a97c78eb554004c1aee5a9c59bb589->enter($__internal_c0fdd7f6dc553e04c887c6f165dc16d846a97c78eb554004c1aee5a9c59bb589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 89
        echo "                <section class=\"sidebar\">
                    ";
        // line 90
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 97
        echo "                </section>
            ";
        
        $__internal_c0fdd7f6dc553e04c887c6f165dc16d846a97c78eb554004c1aee5a9c59bb589->leave($__internal_c0fdd7f6dc553e04c887c6f165dc16d846a97c78eb554004c1aee5a9c59bb589_prof);

    }

    // line 90
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_1dc41de2ee4249a66dca627d33879b528074ad420bb6e26d3efc490ffe12946c = $this->env->getExtension("native_profiler");
        $__internal_1dc41de2ee4249a66dca627d33879b528074ad420bb6e26d3efc490ffe12946c->enter($__internal_1dc41de2ee4249a66dca627d33879b528074ad420bb6e26d3efc490ffe12946c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 91
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 92
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 95
        echo "
                    ";
        
        $__internal_1dc41de2ee4249a66dca627d33879b528074ad420bb6e26d3efc490ffe12946c->leave($__internal_1dc41de2ee4249a66dca627d33879b528074ad420bb6e26d3efc490ffe12946c_prof);

    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
        $__internal_46930ac512fd7412a5bdda6af4ed4f7e6fd1416beec266ae504733f8a259e9a4 = $this->env->getExtension("native_profiler");
        $__internal_46930ac512fd7412a5bdda6af4ed4f7e6fd1416beec266ae504733f8a259e9a4->enter($__internal_46930ac512fd7412a5bdda6af4ed4f7e6fd1416beec266ae504733f8a259e9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 103
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 106
        echo "
                <section class=\"content-header\">
                ";
        // line 108
        $this->displayBlock('content_header', $context, $blocks);
        // line 111
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 114
        $this->displayBlock('main', $context, $blocks);
        // line 115
        echo "                </section>
            ";
        
        $__internal_46930ac512fd7412a5bdda6af4ed4f7e6fd1416beec266ae504733f8a259e9a4->leave($__internal_46930ac512fd7412a5bdda6af4ed4f7e6fd1416beec266ae504733f8a259e9a4_prof);

    }

    // line 103
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_0d3ae5d228e82d7f3eefa8c3e177c8f5e2e1fd6017ab4dfefb5da124720f44bb = $this->env->getExtension("native_profiler");
        $__internal_0d3ae5d228e82d7f3eefa8c3e177c8f5e2e1fd6017ab4dfefb5da124720f44bb->enter($__internal_0d3ae5d228e82d7f3eefa8c3e177c8f5e2e1fd6017ab4dfefb5da124720f44bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 104
        echo "                    ";
        echo ((array_key_exists("_entity_config", $context)) ? (twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array()))) : (""));
        echo "
                ";
        
        $__internal_0d3ae5d228e82d7f3eefa8c3e177c8f5e2e1fd6017ab4dfefb5da124720f44bb->leave($__internal_0d3ae5d228e82d7f3eefa8c3e177c8f5e2e1fd6017ab4dfefb5da124720f44bb_prof);

    }

    // line 108
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_1d2dc64f07f70c53d96529cc98155b1d45561e6f5c12c48a4850b2908876c359 = $this->env->getExtension("native_profiler");
        $__internal_1d2dc64f07f70c53d96529cc98155b1d45561e6f5c12c48a4850b2908876c359->enter($__internal_1d2dc64f07f70c53d96529cc98155b1d45561e6f5c12c48a4850b2908876c359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 109
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_1d2dc64f07f70c53d96529cc98155b1d45561e6f5c12c48a4850b2908876c359->leave($__internal_1d2dc64f07f70c53d96529cc98155b1d45561e6f5c12c48a4850b2908876c359_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_5d49e5f2b1dff79530e4544fe419e65f1833785d1ad1a88fcabedd802fdf8845 = $this->env->getExtension("native_profiler");
        $__internal_5d49e5f2b1dff79530e4544fe419e65f1833785d1ad1a88fcabedd802fdf8845->enter($__internal_5d49e5f2b1dff79530e4544fe419e65f1833785d1ad1a88fcabedd802fdf8845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_5d49e5f2b1dff79530e4544fe419e65f1833785d1ad1a88fcabedd802fdf8845->leave($__internal_5d49e5f2b1dff79530e4544fe419e65f1833785d1ad1a88fcabedd802fdf8845_prof);

    }

    // line 114
    public function block_main($context, array $blocks = array())
    {
        $__internal_697191fd7e977faf405ec6b0f3530129cb40c625a5adf8c764edb2e3d65e653e = $this->env->getExtension("native_profiler");
        $__internal_697191fd7e977faf405ec6b0f3530129cb40c625a5adf8c764edb2e3d65e653e->enter($__internal_697191fd7e977faf405ec6b0f3530129cb40c625a5adf8c764edb2e3d65e653e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_697191fd7e977faf405ec6b0f3530129cb40c625a5adf8c764edb2e3d65e653e->leave($__internal_697191fd7e977faf405ec6b0f3530129cb40c625a5adf8c764edb2e3d65e653e_prof);

    }

    // line 121
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_aabc5daa154c74da63ed2129349f02564a4881685f48a2dbb3bac010256cb5b0 = $this->env->getExtension("native_profiler");
        $__internal_aabc5daa154c74da63ed2129349f02564a4881685f48a2dbb3bac010256cb5b0->enter($__internal_aabc5daa154c74da63ed2129349f02564a4881685f48a2dbb3bac010256cb5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_aabc5daa154c74da63ed2129349f02564a4881685f48a2dbb3bac010256cb5b0->leave($__internal_aabc5daa154c74da63ed2129349f02564a4881685f48a2dbb3bac010256cb5b0_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  514 => 121,  503 => 114,  483 => 109,  477 => 108,  467 => 104,  461 => 103,  453 => 115,  451 => 114,  446 => 111,  444 => 108,  440 => 106,  437 => 103,  431 => 102,  423 => 95,  421 => 92,  419 => 91,  413 => 90,  405 => 97,  403 => 90,  400 => 89,  394 => 88,  387 => 80,  381 => 78,  375 => 76,  373 => 75,  367 => 73,  361 => 72,  351 => 64,  342 => 63,  336 => 62,  328 => 117,  326 => 102,  321 => 99,  319 => 88,  310 => 81,  308 => 72,  301 => 67,  299 => 62,  292 => 58,  287 => 55,  281 => 54,  260 => 52,  252 => 126,  243 => 124,  239 => 123,  236 => 122,  234 => 121,  230 => 119,  228 => 54,  218 => 52,  212 => 51,  194 => 29,  188 => 28,  179 => 42,  176 => 41,  173 => 28,  167 => 27,  155 => 24,  152 => 23,  146 => 22,  136 => 14,  130 => 12,  124 => 11,  112 => 9,  104 => 128,  102 => 51,  95 => 47,  91 => 46,  87 => 44,  85 => 27,  82 => 26,  80 => 22,  77 => 21,  68 => 19,  64 => 18,  61 => 17,  59 => 11,  54 => 9,  44 => 2,  41 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="{{ app.request.locale|split('_')|first|default('en') }}">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*         <meta name="generator" content="EasyAdmin" />*/
/* */
/*         <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>*/
/* */
/*         {% block head_stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}">*/
/*             <style>*/
/*                 {{ easyadmin_config('_internal.custom_css')|raw }}*/
/*             </style>*/
/*         {% endblock %}*/
/* */
/*         {% for css_asset in easyadmin_config('design.assets.css') %}*/
/*             <link rel="stylesheet" href="{{ asset(css_asset) }}">*/
/*         {% endfor %}*/
/* */
/*         {% block head_favicon %}*/
/*             {% set favicon = easyadmin_config('design.assets.favicon') %}*/
/*             <link rel="icon" type="{{ favicon.mime_type }}" href="{{ asset(favicon.path) }}" />*/
/*         {% endblock %}*/
/* */
/*         {% block head_javascript %}*/
/*             {% block adminlte_options %}*/
/*                 <script type="text/javascript">*/
/*                     var AdminLTEOptions = {*/
/*                         animationSpeed: 'normal',*/
/*                         sidebarExpandOnHover: false,*/
/*                         enableBoxRefresh: false,*/
/*                         enableBSToppltip: false,*/
/*                         enableFastclick: false,*/
/*                         enableControlSidebar: false,*/
/*                         enableBoxWidget: false*/
/*                     };*/
/*                 </script>*/
/*             {% endblock %}*/
/* */
/*             <script src="{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}"></script>*/
/*         {% endblock head_javascript %}*/
/* */
/*         <!--[if lt IE 9]>*/
/*             <script src="{{ asset('bundles/easyadmin/stylesheet/html5shiv.min.css') }}"></script>*/
/*             <script src="{{ asset('bundles/easyadmin/stylesheet/respond.min.css') }}"></script>*/
/*         <![endif]-->*/
/*     </head>*/
/* */
/*     {% block body %}*/
/*     <body id="{% block body_id %}{% endblock %}" class="easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}">*/
/*         <div class="wrapper">*/
/*         {% block wrapper %}*/
/*             <header class="main-header">*/
/*                 <nav class="navbar" role="navigation">*/
/*                     <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">*/
/*                         <span class="sr-only">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>*/
/*                     </a>*/
/* */
/*                     <div id="header-logo">*/
/*                         {% block header_logo %}*/
/*                             <a class="logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}" title="{{ easyadmin_config('site_name')|striptags }}" href="{{ path('easyadmin') }}">*/
/*                                 {{ easyadmin_config('site_name')|raw }}*/
/*                             </a>*/
/*                         {% endblock header_logo %}*/
/*                     </div>*/
/* */
/*                     <div class="navbar-custom-menu">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="user user-menu">*/
/*                                 {% block user_menu %}*/
/*                                     <span class="sr-only">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>*/
/*                                     <i class="hidden-xs fa fa-user"></i>*/
/*                                     {% if app.user %}*/
/*                                         {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}*/
/*                                     {% else %}*/
/*                                         {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}*/
/*                                     {% endif %}*/
/*                                 {% endblock user_menu %}*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </nav>*/
/*             </header>*/
/* */
/*             <aside class="main-sidebar">*/
/*             {% block sidebar %}*/
/*                 <section class="sidebar">*/
/*                     {% block main_menu_wrapper %}*/
/*                         {{ include([*/
/*                             _entity_config is defined ? _entity_config.templates.menu,*/
/*                             easyadmin_config('design.templates.menu'),*/
/*                             '@EasyAdmin/default/menu.html.twig'*/
/*                         ]) }}*/
/*                     {% endblock main_menu_wrapper %}*/
/*                 </section>*/
/*             {% endblock sidebar %}*/
/*             </aside>*/
/* */
/*             <div class="content-wrapper">*/
/*             {% block content %}*/
/*                 {% block flash_messages %}*/
/*                     {{ _entity_config is defined ? include(_entity_config.templates.flash_messages) }}*/
/*                 {% endblock flash_messages %}*/
/* */
/*                 <section class="content-header">*/
/*                 {% block content_header %}*/
/*                     <h1 class="title">{% block content_title %}{% endblock %}</h1>*/
/*                 {% endblock content_header %}*/
/*                 </section>*/
/* */
/*                 <section id="main" class="content">*/
/*                     {% block main %}{% endblock %}*/
/*                 </section>*/
/*             {% endblock content %}*/
/*             </div>*/
/*         {% endblock wrapper %}*/
/*         </div>*/
/* */
/*         {% block body_javascript %}{% endblock body_javascript %}*/
/* */
/*         {% for js_asset in easyadmin_config('design.assets.js') %}*/
/*             <script src="{{ asset(js_asset) }}"></script>*/
/*         {% endfor %}*/
/*     </body>*/
/*     {% endblock body %}*/
/* </html>*/
/* */

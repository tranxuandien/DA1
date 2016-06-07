<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_a8a4142020760591a6700c405071ae77f3c0388e2026f6972a396a958774a3a8 extends Twig_Template
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
        $__internal_da7d6d63e04c49ed790bb59eab61865f782713706517689367b4d743f4826b4d = $this->env->getExtension("native_profiler");
        $__internal_da7d6d63e04c49ed790bb59eab61865f782713706517689367b4d743f4826b4d->enter($__internal_da7d6d63e04c49ed790bb59eab61865f782713706517689367b4d743f4826b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

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
        
        $__internal_da7d6d63e04c49ed790bb59eab61865f782713706517689367b4d743f4826b4d->leave($__internal_da7d6d63e04c49ed790bb59eab61865f782713706517689367b4d743f4826b4d_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2cef7a7e35e2f23c1bff544521ef0496a81183c1fa4cd858eb0da6a5f9dc3049 = $this->env->getExtension("native_profiler");
        $__internal_2cef7a7e35e2f23c1bff544521ef0496a81183c1fa4cd858eb0da6a5f9dc3049->enter($__internal_2cef7a7e35e2f23c1bff544521ef0496a81183c1fa4cd858eb0da6a5f9dc3049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags($this->renderBlock("content_title", $context, $blocks));
        
        $__internal_2cef7a7e35e2f23c1bff544521ef0496a81183c1fa4cd858eb0da6a5f9dc3049->leave($__internal_2cef7a7e35e2f23c1bff544521ef0496a81183c1fa4cd858eb0da6a5f9dc3049_prof);

    }

    // line 11
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_bc1f383a9c2ab1aeffe11aa3b38708945ca5a34d3b135e0d98d77c18137812e5 = $this->env->getExtension("native_profiler");
        $__internal_bc1f383a9c2ab1aeffe11aa3b38708945ca5a34d3b135e0d98d77c18137812e5->enter($__internal_bc1f383a9c2ab1aeffe11aa3b38708945ca5a34d3b135e0d98d77c18137812e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_bc1f383a9c2ab1aeffe11aa3b38708945ca5a34d3b135e0d98d77c18137812e5->leave($__internal_bc1f383a9c2ab1aeffe11aa3b38708945ca5a34d3b135e0d98d77c18137812e5_prof);

    }

    // line 22
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_4746a97b1ab9fa896208f9773b5795fc49ac30600e48ed5c7f8b0d02fc0b4183 = $this->env->getExtension("native_profiler");
        $__internal_4746a97b1ab9fa896208f9773b5795fc49ac30600e48ed5c7f8b0d02fc0b4183->enter($__internal_4746a97b1ab9fa896208f9773b5795fc49ac30600e48ed5c7f8b0d02fc0b4183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_4746a97b1ab9fa896208f9773b5795fc49ac30600e48ed5c7f8b0d02fc0b4183->leave($__internal_4746a97b1ab9fa896208f9773b5795fc49ac30600e48ed5c7f8b0d02fc0b4183_prof);

    }

    // line 27
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_e02a5783be98300d1cb1a4c7df40222d1bdde4890468740e3a5b094cbbbd1d1e = $this->env->getExtension("native_profiler");
        $__internal_e02a5783be98300d1cb1a4c7df40222d1bdde4890468740e3a5b094cbbbd1d1e->enter($__internal_e02a5783be98300d1cb1a4c7df40222d1bdde4890468740e3a5b094cbbbd1d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_e02a5783be98300d1cb1a4c7df40222d1bdde4890468740e3a5b094cbbbd1d1e->leave($__internal_e02a5783be98300d1cb1a4c7df40222d1bdde4890468740e3a5b094cbbbd1d1e_prof);

    }

    // line 28
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_73c75d5fbd9904b092800c0c3c3b50be2f774238b46415c759268e0c5c1f575f = $this->env->getExtension("native_profiler");
        $__internal_73c75d5fbd9904b092800c0c3c3b50be2f774238b46415c759268e0c5c1f575f->enter($__internal_73c75d5fbd9904b092800c0c3c3b50be2f774238b46415c759268e0c5c1f575f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_73c75d5fbd9904b092800c0c3c3b50be2f774238b46415c759268e0c5c1f575f->leave($__internal_73c75d5fbd9904b092800c0c3c3b50be2f774238b46415c759268e0c5c1f575f_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_842339bab8b45bbfcb4d6500c605ae0dd798ee812cc525fede7f8f4ef4ae0a80 = $this->env->getExtension("native_profiler");
        $__internal_842339bab8b45bbfcb4d6500c605ae0dd798ee812cc525fede7f8f4ef4ae0a80->enter($__internal_842339bab8b45bbfcb4d6500c605ae0dd798ee812cc525fede7f8f4ef4ae0a80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_842339bab8b45bbfcb4d6500c605ae0dd798ee812cc525fede7f8f4ef4ae0a80->leave($__internal_842339bab8b45bbfcb4d6500c605ae0dd798ee812cc525fede7f8f4ef4ae0a80_prof);

    }

    // line 52
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_84f069d1acc26b122a9cdf5f14b303a38fa91b78281586aa0e7df12d4858fa42 = $this->env->getExtension("native_profiler");
        $__internal_84f069d1acc26b122a9cdf5f14b303a38fa91b78281586aa0e7df12d4858fa42->enter($__internal_84f069d1acc26b122a9cdf5f14b303a38fa91b78281586aa0e7df12d4858fa42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_84f069d1acc26b122a9cdf5f14b303a38fa91b78281586aa0e7df12d4858fa42->leave($__internal_84f069d1acc26b122a9cdf5f14b303a38fa91b78281586aa0e7df12d4858fa42_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_1671d2bef48ccc59ad9405952ce7cff624c6bcd3e76129510dd10221c31fa28e = $this->env->getExtension("native_profiler");
        $__internal_1671d2bef48ccc59ad9405952ce7cff624c6bcd3e76129510dd10221c31fa28e->enter($__internal_1671d2bef48ccc59ad9405952ce7cff624c6bcd3e76129510dd10221c31fa28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_1671d2bef48ccc59ad9405952ce7cff624c6bcd3e76129510dd10221c31fa28e->leave($__internal_1671d2bef48ccc59ad9405952ce7cff624c6bcd3e76129510dd10221c31fa28e_prof);

    }

    // line 54
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_f712e5e7e923cc9ffcd67dcff936ef93538f457365a24a86a58eb431f830f159 = $this->env->getExtension("native_profiler");
        $__internal_f712e5e7e923cc9ffcd67dcff936ef93538f457365a24a86a58eb431f830f159->enter($__internal_f712e5e7e923cc9ffcd67dcff936ef93538f457365a24a86a58eb431f830f159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_f712e5e7e923cc9ffcd67dcff936ef93538f457365a24a86a58eb431f830f159->leave($__internal_f712e5e7e923cc9ffcd67dcff936ef93538f457365a24a86a58eb431f830f159_prof);

    }

    // line 62
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_7b9ed87932770029855e0bb269e24976994f54edc067217671d85ec18b9184bf = $this->env->getExtension("native_profiler");
        $__internal_7b9ed87932770029855e0bb269e24976994f54edc067217671d85ec18b9184bf->enter($__internal_7b9ed87932770029855e0bb269e24976994f54edc067217671d85ec18b9184bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_7b9ed87932770029855e0bb269e24976994f54edc067217671d85ec18b9184bf->leave($__internal_7b9ed87932770029855e0bb269e24976994f54edc067217671d85ec18b9184bf_prof);

    }

    // line 72
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_673faa18b84492a3d348c39e25f2db55e5140dcc7302a60fcfb0543454b48e4d = $this->env->getExtension("native_profiler");
        $__internal_673faa18b84492a3d348c39e25f2db55e5140dcc7302a60fcfb0543454b48e4d->enter($__internal_673faa18b84492a3d348c39e25f2db55e5140dcc7302a60fcfb0543454b48e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_673faa18b84492a3d348c39e25f2db55e5140dcc7302a60fcfb0543454b48e4d->leave($__internal_673faa18b84492a3d348c39e25f2db55e5140dcc7302a60fcfb0543454b48e4d_prof);

    }

    // line 88
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ee01250e32d666c93f4c3a7041ca29f42c4424a1f7e72c34dcfff1c672623f71 = $this->env->getExtension("native_profiler");
        $__internal_ee01250e32d666c93f4c3a7041ca29f42c4424a1f7e72c34dcfff1c672623f71->enter($__internal_ee01250e32d666c93f4c3a7041ca29f42c4424a1f7e72c34dcfff1c672623f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 89
        echo "                <section class=\"sidebar\">
                    ";
        // line 90
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 97
        echo "                </section>
            ";
        
        $__internal_ee01250e32d666c93f4c3a7041ca29f42c4424a1f7e72c34dcfff1c672623f71->leave($__internal_ee01250e32d666c93f4c3a7041ca29f42c4424a1f7e72c34dcfff1c672623f71_prof);

    }

    // line 90
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_a692dbf9ef585bf545d195834622bfbfeae77c1897747262eb3d338a1dc4f154 = $this->env->getExtension("native_profiler");
        $__internal_a692dbf9ef585bf545d195834622bfbfeae77c1897747262eb3d338a1dc4f154->enter($__internal_a692dbf9ef585bf545d195834622bfbfeae77c1897747262eb3d338a1dc4f154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 91
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 92
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 95
        echo "
                    ";
        
        $__internal_a692dbf9ef585bf545d195834622bfbfeae77c1897747262eb3d338a1dc4f154->leave($__internal_a692dbf9ef585bf545d195834622bfbfeae77c1897747262eb3d338a1dc4f154_prof);

    }

    // line 102
    public function block_content($context, array $blocks = array())
    {
        $__internal_e424e53d131ebd693c136cc6324772ab79c71df83ae05c4112f8947eacdf4214 = $this->env->getExtension("native_profiler");
        $__internal_e424e53d131ebd693c136cc6324772ab79c71df83ae05c4112f8947eacdf4214->enter($__internal_e424e53d131ebd693c136cc6324772ab79c71df83ae05c4112f8947eacdf4214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e424e53d131ebd693c136cc6324772ab79c71df83ae05c4112f8947eacdf4214->leave($__internal_e424e53d131ebd693c136cc6324772ab79c71df83ae05c4112f8947eacdf4214_prof);

    }

    // line 103
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_c2e5858ad9c7ee8de85d98e4734fecb554e3bf1606a4ec849f74ef384d9062c4 = $this->env->getExtension("native_profiler");
        $__internal_c2e5858ad9c7ee8de85d98e4734fecb554e3bf1606a4ec849f74ef384d9062c4->enter($__internal_c2e5858ad9c7ee8de85d98e4734fecb554e3bf1606a4ec849f74ef384d9062c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 104
        echo "                    ";
        echo ((array_key_exists("_entity_config", $context)) ? (twig_include($this->env, $context, $this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array()))) : (""));
        echo "
                ";
        
        $__internal_c2e5858ad9c7ee8de85d98e4734fecb554e3bf1606a4ec849f74ef384d9062c4->leave($__internal_c2e5858ad9c7ee8de85d98e4734fecb554e3bf1606a4ec849f74ef384d9062c4_prof);

    }

    // line 108
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_d8493b65551806f843727ec21d0d8b7a24ffbcb5f98765a818b08f4b10dd1a25 = $this->env->getExtension("native_profiler");
        $__internal_d8493b65551806f843727ec21d0d8b7a24ffbcb5f98765a818b08f4b10dd1a25->enter($__internal_d8493b65551806f843727ec21d0d8b7a24ffbcb5f98765a818b08f4b10dd1a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 109
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_d8493b65551806f843727ec21d0d8b7a24ffbcb5f98765a818b08f4b10dd1a25->leave($__internal_d8493b65551806f843727ec21d0d8b7a24ffbcb5f98765a818b08f4b10dd1a25_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_8a849c9760acc5be8028564c4d8eb90065554d54979cc13e1bd3739892c288d7 = $this->env->getExtension("native_profiler");
        $__internal_8a849c9760acc5be8028564c4d8eb90065554d54979cc13e1bd3739892c288d7->enter($__internal_8a849c9760acc5be8028564c4d8eb90065554d54979cc13e1bd3739892c288d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_8a849c9760acc5be8028564c4d8eb90065554d54979cc13e1bd3739892c288d7->leave($__internal_8a849c9760acc5be8028564c4d8eb90065554d54979cc13e1bd3739892c288d7_prof);

    }

    // line 114
    public function block_main($context, array $blocks = array())
    {
        $__internal_739d7d07609f0b51d7765cd90648c32bd2fd3999482ff1972f5c5948feed3c31 = $this->env->getExtension("native_profiler");
        $__internal_739d7d07609f0b51d7765cd90648c32bd2fd3999482ff1972f5c5948feed3c31->enter($__internal_739d7d07609f0b51d7765cd90648c32bd2fd3999482ff1972f5c5948feed3c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_739d7d07609f0b51d7765cd90648c32bd2fd3999482ff1972f5c5948feed3c31->leave($__internal_739d7d07609f0b51d7765cd90648c32bd2fd3999482ff1972f5c5948feed3c31_prof);

    }

    // line 121
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_40a029668dbf8c479ab6813653149d228c0a6f68f4a1bf5e6592fcbe5bd03a22 = $this->env->getExtension("native_profiler");
        $__internal_40a029668dbf8c479ab6813653149d228c0a6f68f4a1bf5e6592fcbe5bd03a22->enter($__internal_40a029668dbf8c479ab6813653149d228c0a6f68f4a1bf5e6592fcbe5bd03a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_40a029668dbf8c479ab6813653149d228c0a6f68f4a1bf5e6592fcbe5bd03a22->leave($__internal_40a029668dbf8c479ab6813653149d228c0a6f68f4a1bf5e6592fcbe5bd03a22_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
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

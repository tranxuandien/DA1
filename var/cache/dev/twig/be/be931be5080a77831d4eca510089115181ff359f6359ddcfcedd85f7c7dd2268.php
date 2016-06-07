<?php

/* ::base.html.twig */
class __TwigTemplate_ffab256edad502a7995db563c44d8de9a999983a0b858124ca5f72eff087bcd0 extends Twig_Template
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
        $__internal_22cddc87085e8bcd5a3f955395072ae43bd4f69a14100125cb9fa874f015b31a = $this->env->getExtension("native_profiler");
        $__internal_22cddc87085e8bcd5a3f955395072ae43bd4f69a14100125cb9fa874f015b31a->enter($__internal_22cddc87085e8bcd5a3f955395072ae43bd4f69a14100125cb9fa874f015b31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_22cddc87085e8bcd5a3f955395072ae43bd4f69a14100125cb9fa874f015b31a->leave($__internal_22cddc87085e8bcd5a3f955395072ae43bd4f69a14100125cb9fa874f015b31a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9dafe34decf93a99ef3cd45fffb2adf7e662145bc5684507ae030e1a53c6dc6 = $this->env->getExtension("native_profiler");
        $__internal_e9dafe34decf93a99ef3cd45fffb2adf7e662145bc5684507ae030e1a53c6dc6->enter($__internal_e9dafe34decf93a99ef3cd45fffb2adf7e662145bc5684507ae030e1a53c6dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcomeee!";
        
        $__internal_e9dafe34decf93a99ef3cd45fffb2adf7e662145bc5684507ae030e1a53c6dc6->leave($__internal_e9dafe34decf93a99ef3cd45fffb2adf7e662145bc5684507ae030e1a53c6dc6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d24ab1b276ce5399883f9a80c673527ed693ea6b73856a8a5aa6530ad6d006b1 = $this->env->getExtension("native_profiler");
        $__internal_d24ab1b276ce5399883f9a80c673527ed693ea6b73856a8a5aa6530ad6d006b1->enter($__internal_d24ab1b276ce5399883f9a80c673527ed693ea6b73856a8a5aa6530ad6d006b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
        ";
        
        $__internal_d24ab1b276ce5399883f9a80c673527ed693ea6b73856a8a5aa6530ad6d006b1->leave($__internal_d24ab1b276ce5399883f9a80c673527ed693ea6b73856a8a5aa6530ad6d006b1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_74d789b6a4cb0ae7fc78d9c520faca58b30b4f8c03d380ec6b3c2a9a85a38db1 = $this->env->getExtension("native_profiler");
        $__internal_74d789b6a4cb0ae7fc78d9c520faca58b30b4f8c03d380ec6b3c2a9a85a38db1->enter($__internal_74d789b6a4cb0ae7fc78d9c520faca58b30b4f8c03d380ec6b3c2a9a85a38db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_74d789b6a4cb0ae7fc78d9c520faca58b30b4f8c03d380ec6b3c2a9a85a38db1->leave($__internal_74d789b6a4cb0ae7fc78d9c520faca58b30b4f8c03d380ec6b3c2a9a85a38db1_prof);

    }

    // line 13
    public function block_left($context, array $blocks = array())
    {
        $__internal_ab72deae356b73e93735f52cb6ab667ede50e6dfb6027c897b7eb8dac7c7bff4 = $this->env->getExtension("native_profiler");
        $__internal_ab72deae356b73e93735f52cb6ab667ede50e6dfb6027c897b7eb8dac7c7bff4->enter($__internal_ab72deae356b73e93735f52cb6ab667ede50e6dfb6027c897b7eb8dac7c7bff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left"));

        
        $__internal_ab72deae356b73e93735f52cb6ab667ede50e6dfb6027c897b7eb8dac7c7bff4->leave($__internal_ab72deae356b73e93735f52cb6ab667ede50e6dfb6027c897b7eb8dac7c7bff4_prof);

    }

    // line 14
    public function block_right($context, array $blocks = array())
    {
        $__internal_dd2f1956e222515fb04452c66a698520dc12fd018f30cad0e25c266136256afa = $this->env->getExtension("native_profiler");
        $__internal_dd2f1956e222515fb04452c66a698520dc12fd018f30cad0e25c266136256afa->enter($__internal_dd2f1956e222515fb04452c66a698520dc12fd018f30cad0e25c266136256afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right"));

        
        $__internal_dd2f1956e222515fb04452c66a698520dc12fd018f30cad0e25c266136256afa->leave($__internal_dd2f1956e222515fb04452c66a698520dc12fd018f30cad0e25c266136256afa_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_044f1006181938f58752b70b2cfb597edc9e6f79ecf7a687d295f73f769a7c62 = $this->env->getExtension("native_profiler");
        $__internal_044f1006181938f58752b70b2cfb597edc9e6f79ecf7a687d295f73f769a7c62->enter($__internal_044f1006181938f58752b70b2cfb597edc9e6f79ecf7a687d295f73f769a7c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
            <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_044f1006181938f58752b70b2cfb597edc9e6f79ecf7a687d295f73f769a7c62->leave($__internal_044f1006181938f58752b70b2cfb597edc9e6f79ecf7a687d295f73f769a7c62_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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

<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_fa4936d01b9a3302d3885657346e50c04173b807ea9c28285e78f45ae6a02e52 extends Twig_Template
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
        $__internal_8d50f69c1859a94f436e6911739f234a28146e1f34ef1262c3bba9c73eb66863 = $this->env->getExtension("native_profiler");
        $__internal_8d50f69c1859a94f436e6911739f234a28146e1f34ef1262c3bba9c73eb66863->enter($__internal_8d50f69c1859a94f436e6911739f234a28146e1f34ef1262c3bba9c73eb66863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8d50f69c1859a94f436e6911739f234a28146e1f34ef1262c3bba9c73eb66863->leave($__internal_8d50f69c1859a94f436e6911739f234a28146e1f34ef1262c3bba9c73eb66863_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */

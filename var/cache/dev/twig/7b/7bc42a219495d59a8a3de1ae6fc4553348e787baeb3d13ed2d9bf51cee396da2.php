<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2cc0b6c56b96ab2b325a0f6b0a603c3a83bf8ace62f79883132885c7f3e5a872 extends Twig_Template
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
        $__internal_62814b3be3720a2bb9e196788dbaaddd102d385860ed92a625b168a080cb2004 = $this->env->getExtension("native_profiler");
        $__internal_62814b3be3720a2bb9e196788dbaaddd102d385860ed92a625b168a080cb2004->enter($__internal_62814b3be3720a2bb9e196788dbaaddd102d385860ed92a625b168a080cb2004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_62814b3be3720a2bb9e196788dbaaddd102d385860ed92a625b168a080cb2004->leave($__internal_62814b3be3720a2bb9e196788dbaaddd102d385860ed92a625b168a080cb2004_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */

<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_09c6ca3774c59d25ddee7ac3d749b8f9b3cde1abbd2cb1a15620d3dc2651491a extends Twig_Template
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
        $__internal_b3bc769fa2b51ac6507be42a6826366201bced6aea5e6cd2fe65f475edb3ba72 = $this->env->getExtension("native_profiler");
        $__internal_b3bc769fa2b51ac6507be42a6826366201bced6aea5e6cd2fe65f475edb3ba72->enter($__internal_b3bc769fa2b51ac6507be42a6826366201bced6aea5e6cd2fe65f475edb3ba72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b3bc769fa2b51ac6507be42a6826366201bced6aea5e6cd2fe65f475edb3ba72->leave($__internal_b3bc769fa2b51ac6507be42a6826366201bced6aea5e6cd2fe65f475edb3ba72_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

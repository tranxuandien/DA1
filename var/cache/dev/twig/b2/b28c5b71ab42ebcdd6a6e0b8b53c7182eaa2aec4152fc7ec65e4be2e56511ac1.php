<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8c766a9e1c2478e3628222e399111376b243ee3dc7fa0ae54c6082c11b6210b9 extends Twig_Template
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
        $__internal_33d24df878e750eb7610444ecc804b24f25f3994f404d4327f32f2ae6759e600 = $this->env->getExtension("native_profiler");
        $__internal_33d24df878e750eb7610444ecc804b24f25f3994f404d4327f32f2ae6759e600->enter($__internal_33d24df878e750eb7610444ecc804b24f25f3994f404d4327f32f2ae6759e600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_33d24df878e750eb7610444ecc804b24f25f3994f404d4327f32f2ae6759e600->leave($__internal_33d24df878e750eb7610444ecc804b24f25f3994f404d4327f32f2ae6759e600_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

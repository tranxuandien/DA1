<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_dda99ac992b09bb2b319eacf63c2588b7f9358fe2a061780ff3be667d7aec97e extends Twig_Template
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
        $__internal_25d42bb1fe9914c4d54a33ae0e344612d17458b9eab341498f7bb7ae95c36ee7 = $this->env->getExtension("native_profiler");
        $__internal_25d42bb1fe9914c4d54a33ae0e344612d17458b9eab341498f7bb7ae95c36ee7->enter($__internal_25d42bb1fe9914c4d54a33ae0e344612d17458b9eab341498f7bb7ae95c36ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_25d42bb1fe9914c4d54a33ae0e344612d17458b9eab341498f7bb7ae95c36ee7->leave($__internal_25d42bb1fe9914c4d54a33ae0e344612d17458b9eab341498f7bb7ae95c36ee7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */

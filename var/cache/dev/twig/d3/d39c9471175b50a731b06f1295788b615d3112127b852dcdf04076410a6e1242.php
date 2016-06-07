<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d008e39e65726b2f9aaeaae88494920423ded79886498cd48f673bc117c9d56a extends Twig_Template
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
        $__internal_c50b82c3aea6ffe1c8e50567f79591c7038ddc5c83a9ba7edc876cd4c84ba3c5 = $this->env->getExtension("native_profiler");
        $__internal_c50b82c3aea6ffe1c8e50567f79591c7038ddc5c83a9ba7edc876cd4c84ba3c5->enter($__internal_c50b82c3aea6ffe1c8e50567f79591c7038ddc5c83a9ba7edc876cd4c84ba3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c50b82c3aea6ffe1c8e50567f79591c7038ddc5c83a9ba7edc876cd4c84ba3c5->leave($__internal_c50b82c3aea6ffe1c8e50567f79591c7038ddc5c83a9ba7edc876cd4c84ba3c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */

<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e05c2dba89fc1377cacc8b85263ab06195352208ed6750a4b036deb1e5b4e6be extends Twig_Template
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
        $__internal_0bc1f118e22c7cc4ec7ec8ba23bbf4752e3b01d1c3444bfc7368a9f6c50464e0 = $this->env->getExtension("native_profiler");
        $__internal_0bc1f118e22c7cc4ec7ec8ba23bbf4752e3b01d1c3444bfc7368a9f6c50464e0->enter($__internal_0bc1f118e22c7cc4ec7ec8ba23bbf4752e3b01d1c3444bfc7368a9f6c50464e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0bc1f118e22c7cc4ec7ec8ba23bbf4752e3b01d1c3444bfc7368a9f6c50464e0->leave($__internal_0bc1f118e22c7cc4ec7ec8ba23bbf4752e3b01d1c3444bfc7368a9f6c50464e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */

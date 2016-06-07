<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_efe0f45858f3344782be531d90ede0b0a798002ed8f3474e33b290e8012a2d96 extends Twig_Template
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
        $__internal_eb02d72666173a4b7a590cb199a03eabc8278687111e91f8b9a217b61686c765 = $this->env->getExtension("native_profiler");
        $__internal_eb02d72666173a4b7a590cb199a03eabc8278687111e91f8b9a217b61686c765->enter($__internal_eb02d72666173a4b7a590cb199a03eabc8278687111e91f8b9a217b61686c765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_eb02d72666173a4b7a590cb199a03eabc8278687111e91f8b9a217b61686c765->leave($__internal_eb02d72666173a4b7a590cb199a03eabc8278687111e91f8b9a217b61686c765_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */

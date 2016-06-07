<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_368bb5746f7f4a2303d57c72bb6f800f77bf5d60a6fbf57b7438d67ad210367b extends Twig_Template
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
        $__internal_1daf0469ca9c141a46d35092c38aebeace1b4bfbdba09a907add17ff9bcd5979 = $this->env->getExtension("native_profiler");
        $__internal_1daf0469ca9c141a46d35092c38aebeace1b4bfbdba09a907add17ff9bcd5979->enter($__internal_1daf0469ca9c141a46d35092c38aebeace1b4bfbdba09a907add17ff9bcd5979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1daf0469ca9c141a46d35092c38aebeace1b4bfbdba09a907add17ff9bcd5979->leave($__internal_1daf0469ca9c141a46d35092c38aebeace1b4bfbdba09a907add17ff9bcd5979_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */

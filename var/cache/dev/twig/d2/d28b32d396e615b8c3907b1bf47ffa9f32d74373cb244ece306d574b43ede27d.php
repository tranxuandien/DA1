<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_589c53a7aa47b3bb9e34cca79e2cb34865f8a5234227974f9eff5230ac113fff extends Twig_Template
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
        $__internal_0e91b41be56f947345bcc5f20cdf0bea56b93fdc4d5f52ce689621522d560c7f = $this->env->getExtension("native_profiler");
        $__internal_0e91b41be56f947345bcc5f20cdf0bea56b93fdc4d5f52ce689621522d560c7f->enter($__internal_0e91b41be56f947345bcc5f20cdf0bea56b93fdc4d5f52ce689621522d560c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0e91b41be56f947345bcc5f20cdf0bea56b93fdc4d5f52ce689621522d560c7f->leave($__internal_0e91b41be56f947345bcc5f20cdf0bea56b93fdc4d5f52ce689621522d560c7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */

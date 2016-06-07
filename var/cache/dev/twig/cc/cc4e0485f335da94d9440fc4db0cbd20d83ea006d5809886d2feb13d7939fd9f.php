<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_5299c144c73d11a1d5ae3597403a1ee04963547043dc00509c43430d1584ead4 extends Twig_Template
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
        $__internal_1f9e194eb732896e3fc116e6f3e3ee06b9d022102e7a0586b74d618164085944 = $this->env->getExtension("native_profiler");
        $__internal_1f9e194eb732896e3fc116e6f3e3ee06b9d022102e7a0586b74d618164085944->enter($__internal_1f9e194eb732896e3fc116e6f3e3ee06b9d022102e7a0586b74d618164085944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1f9e194eb732896e3fc116e6f3e3ee06b9d022102e7a0586b74d618164085944->leave($__internal_1f9e194eb732896e3fc116e6f3e3ee06b9d022102e7a0586b74d618164085944_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */

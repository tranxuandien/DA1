<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_cf696ff2065870123a1e3ce1d13626f4269416945007bb3b0e3f5fb4e404d923 extends Twig_Template
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
        $__internal_23a3135413de344e2ed360028efd3342ba244f7cb079543e89dcbe19d5217a52 = $this->env->getExtension("native_profiler");
        $__internal_23a3135413de344e2ed360028efd3342ba244f7cb079543e89dcbe19d5217a52->enter($__internal_23a3135413de344e2ed360028efd3342ba244f7cb079543e89dcbe19d5217a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_23a3135413de344e2ed360028efd3342ba244f7cb079543e89dcbe19d5217a52->leave($__internal_23a3135413de344e2ed360028efd3342ba244f7cb079543e89dcbe19d5217a52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */

<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_04b2c72c012d24c5f643d4527a1f636fd985e606df78107f09518e32e0b5a051 extends Twig_Template
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
        $__internal_a77ab9f1c71c7223dd3355bd27e3b6d2fc7b0cdaac6171d924333ccf67d41a71 = $this->env->getExtension("native_profiler");
        $__internal_a77ab9f1c71c7223dd3355bd27e3b6d2fc7b0cdaac6171d924333ccf67d41a71->enter($__internal_a77ab9f1c71c7223dd3355bd27e3b6d2fc7b0cdaac6171d924333ccf67d41a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a77ab9f1c71c7223dd3355bd27e3b6d2fc7b0cdaac6171d924333ccf67d41a71->leave($__internal_a77ab9f1c71c7223dd3355bd27e3b6d2fc7b0cdaac6171d924333ccf67d41a71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */

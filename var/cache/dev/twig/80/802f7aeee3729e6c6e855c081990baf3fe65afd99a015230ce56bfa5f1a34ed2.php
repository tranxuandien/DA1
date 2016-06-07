<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1c14c491cab20326d3cc7c7b5d4b146922981a9deeef7e45952e300edfe55c71 extends Twig_Template
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
        $__internal_b28d33d8c9166c97bd965afb399ed990a1626cc62b69c33d103ab6c1a524b925 = $this->env->getExtension("native_profiler");
        $__internal_b28d33d8c9166c97bd965afb399ed990a1626cc62b69c33d103ab6c1a524b925->enter($__internal_b28d33d8c9166c97bd965afb399ed990a1626cc62b69c33d103ab6c1a524b925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_b28d33d8c9166c97bd965afb399ed990a1626cc62b69c33d103ab6c1a524b925->leave($__internal_b28d33d8c9166c97bd965afb399ed990a1626cc62b69c33d103ab6c1a524b925_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */

<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_fb05a2c8a4ea910143d7cdca813acd4753d7699aaa64be1f4b9934cb0c72da7d extends Twig_Template
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
        $__internal_df16e25b1306b794c7097b24aac23d4bb06b5cb5c8c98caed1e124b7ef579b89 = $this->env->getExtension("native_profiler");
        $__internal_df16e25b1306b794c7097b24aac23d4bb06b5cb5c8c98caed1e124b7ef579b89->enter($__internal_df16e25b1306b794c7097b24aac23d4bb06b5cb5c8c98caed1e124b7ef579b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_df16e25b1306b794c7097b24aac23d4bb06b5cb5c8c98caed1e124b7ef579b89->leave($__internal_df16e25b1306b794c7097b24aac23d4bb06b5cb5c8c98caed1e124b7ef579b89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

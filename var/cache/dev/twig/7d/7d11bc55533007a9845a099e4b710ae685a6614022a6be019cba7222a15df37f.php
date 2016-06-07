<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0703592667464bec0914b1b4ce181a8f32c3fc1c5c9696fad3971b230d6680bf extends Twig_Template
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
        $__internal_53d90306078226151b4956ca59f232ecc6a336cc65b30d2e0af517982ab2b28b = $this->env->getExtension("native_profiler");
        $__internal_53d90306078226151b4956ca59f232ecc6a336cc65b30d2e0af517982ab2b28b->enter($__internal_53d90306078226151b4956ca59f232ecc6a336cc65b30d2e0af517982ab2b28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_53d90306078226151b4956ca59f232ecc6a336cc65b30d2e0af517982ab2b28b->leave($__internal_53d90306078226151b4956ca59f232ecc6a336cc65b30d2e0af517982ab2b28b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

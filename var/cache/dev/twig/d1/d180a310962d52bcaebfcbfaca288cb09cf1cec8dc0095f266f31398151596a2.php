<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b64fc389e2b1bdff9bac965cbf3a5ce04c3d17884cd2f99f20e289cd84258735 extends Twig_Template
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
        $__internal_0b74900b9b1c5a16f68a2974340fbb8c9d826a30ff62498651e7c4dcd3a8d61d = $this->env->getExtension("native_profiler");
        $__internal_0b74900b9b1c5a16f68a2974340fbb8c9d826a30ff62498651e7c4dcd3a8d61d->enter($__internal_0b74900b9b1c5a16f68a2974340fbb8c9d826a30ff62498651e7c4dcd3a8d61d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0b74900b9b1c5a16f68a2974340fbb8c9d826a30ff62498651e7c4dcd3a8d61d->leave($__internal_0b74900b9b1c5a16f68a2974340fbb8c9d826a30ff62498651e7c4dcd3a8d61d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */

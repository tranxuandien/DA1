<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_44fa49f7305b197031f36d7eea51282a166d4fd1c07ddd85051ece6b72aa4189 extends Twig_Template
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
        $__internal_d2875cc19c1af310e48d4a13d576819813b8ae7591849b29f7c24479e464b8d2 = $this->env->getExtension("native_profiler");
        $__internal_d2875cc19c1af310e48d4a13d576819813b8ae7591849b29f7c24479e464b8d2->enter($__internal_d2875cc19c1af310e48d4a13d576819813b8ae7591849b29f7c24479e464b8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d2875cc19c1af310e48d4a13d576819813b8ae7591849b29f7c24479e464b8d2->leave($__internal_d2875cc19c1af310e48d4a13d576819813b8ae7591849b29f7c24479e464b8d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */

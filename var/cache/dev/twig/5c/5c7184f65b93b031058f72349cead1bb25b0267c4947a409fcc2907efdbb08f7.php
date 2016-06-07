<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ca9d98782cd4129dda4dc3dd51b4806c02af73a913e1490bd4553ee40613a867 extends Twig_Template
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
        $__internal_b651eb82fc1b3f044b52617f9300367b6902e8e804d6ac1227ffea510d3ed6bd = $this->env->getExtension("native_profiler");
        $__internal_b651eb82fc1b3f044b52617f9300367b6902e8e804d6ac1227ffea510d3ed6bd->enter($__internal_b651eb82fc1b3f044b52617f9300367b6902e8e804d6ac1227ffea510d3ed6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b651eb82fc1b3f044b52617f9300367b6902e8e804d6ac1227ffea510d3ed6bd->leave($__internal_b651eb82fc1b3f044b52617f9300367b6902e8e804d6ac1227ffea510d3ed6bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */

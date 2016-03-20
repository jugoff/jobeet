<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_8eed5a8e85d1c977dcb538192b3282cf2ebdf41dd7dfb6f6eddb34846667d50d extends Twig_Template
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
        $__internal_4274439ba3096e04d783f97cda5d3ebe7a9337074954b8628fa224e843d8b311 = $this->env->getExtension("native_profiler");
        $__internal_4274439ba3096e04d783f97cda5d3ebe7a9337074954b8628fa224e843d8b311->enter($__internal_4274439ba3096e04d783f97cda5d3ebe7a9337074954b8628fa224e843d8b311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_4274439ba3096e04d783f97cda5d3ebe7a9337074954b8628fa224e843d8b311->leave($__internal_4274439ba3096e04d783f97cda5d3ebe7a9337074954b8628fa224e843d8b311_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */

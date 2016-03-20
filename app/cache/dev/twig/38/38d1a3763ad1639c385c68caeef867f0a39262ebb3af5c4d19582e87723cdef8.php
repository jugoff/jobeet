<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0c648c9c58d3ee8139227fe707bf15f8bce9095998ecb7c9eb9f67fcf99c0a8c extends Twig_Template
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
        $__internal_2a431aad6b898561fb49f9b0e3a1d1655bed71452d1e716ec433448d8b5faf4b = $this->env->getExtension("native_profiler");
        $__internal_2a431aad6b898561fb49f9b0e3a1d1655bed71452d1e716ec433448d8b5faf4b->enter($__internal_2a431aad6b898561fb49f9b0e3a1d1655bed71452d1e716ec433448d8b5faf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2a431aad6b898561fb49f9b0e3a1d1655bed71452d1e716ec433448d8b5faf4b->leave($__internal_2a431aad6b898561fb49f9b0e3a1d1655bed71452d1e716ec433448d8b5faf4b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */

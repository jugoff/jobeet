<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_1f2881aa749115d2f5b654fe1eb6a2ce3226fdf872109d515b7fb3f10cc3fa22 extends Twig_Template
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
        $__internal_492dcfaef9b7cfeb5299d268264b3273f10b14cbaec5d3dc230364e04de68102 = $this->env->getExtension("native_profiler");
        $__internal_492dcfaef9b7cfeb5299d268264b3273f10b14cbaec5d3dc230364e04de68102->enter($__internal_492dcfaef9b7cfeb5299d268264b3273f10b14cbaec5d3dc230364e04de68102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_492dcfaef9b7cfeb5299d268264b3273f10b14cbaec5d3dc230364e04de68102->leave($__internal_492dcfaef9b7cfeb5299d268264b3273f10b14cbaec5d3dc230364e04de68102_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */

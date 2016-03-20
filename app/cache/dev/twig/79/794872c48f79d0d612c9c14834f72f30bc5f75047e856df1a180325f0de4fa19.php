<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_fc547e5951fa8f12c0ea0326c4c77410674f4738233b2e91a3441e97aecb9e93 extends Twig_Template
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
        $__internal_3ebe6dc46008668bf70090ec47329a9e2406fe1c075456f06a01d51399a996fe = $this->env->getExtension("native_profiler");
        $__internal_3ebe6dc46008668bf70090ec47329a9e2406fe1c075456f06a01d51399a996fe->enter($__internal_3ebe6dc46008668bf70090ec47329a9e2406fe1c075456f06a01d51399a996fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_3ebe6dc46008668bf70090ec47329a9e2406fe1c075456f06a01d51399a996fe->leave($__internal_3ebe6dc46008668bf70090ec47329a9e2406fe1c075456f06a01d51399a996fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */

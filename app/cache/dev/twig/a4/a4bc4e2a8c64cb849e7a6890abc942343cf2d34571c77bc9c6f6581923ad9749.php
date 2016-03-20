<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1d3e1f009a3d86e5e9a66fa9d45b6a3e4b4ebaba0f3349ec1e30abb2afb3a433 extends Twig_Template
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
        $__internal_e72b6c0979af379ba07240b06fe5cbd1cc3e3af87ffb1a2bce53b346ffdbde94 = $this->env->getExtension("native_profiler");
        $__internal_e72b6c0979af379ba07240b06fe5cbd1cc3e3af87ffb1a2bce53b346ffdbde94->enter($__internal_e72b6c0979af379ba07240b06fe5cbd1cc3e3af87ffb1a2bce53b346ffdbde94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e72b6c0979af379ba07240b06fe5cbd1cc3e3af87ffb1a2bce53b346ffdbde94->leave($__internal_e72b6c0979af379ba07240b06fe5cbd1cc3e3af87ffb1a2bce53b346ffdbde94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */

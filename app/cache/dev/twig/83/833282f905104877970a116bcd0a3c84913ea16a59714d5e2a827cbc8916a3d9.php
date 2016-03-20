<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4de5184020c69040787b509d6cd9ed5b4c9a65e7c9000f389a54cbe9e75c0732 extends Twig_Template
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
        $__internal_35aaf685aa9541464b47e9d7ce83f03f0fe0d752cae46791c86b07a0976fb1e7 = $this->env->getExtension("native_profiler");
        $__internal_35aaf685aa9541464b47e9d7ce83f03f0fe0d752cae46791c86b07a0976fb1e7->enter($__internal_35aaf685aa9541464b47e9d7ce83f03f0fe0d752cae46791c86b07a0976fb1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_35aaf685aa9541464b47e9d7ce83f03f0fe0d752cae46791c86b07a0976fb1e7->leave($__internal_35aaf685aa9541464b47e9d7ce83f03f0fe0d752cae46791c86b07a0976fb1e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

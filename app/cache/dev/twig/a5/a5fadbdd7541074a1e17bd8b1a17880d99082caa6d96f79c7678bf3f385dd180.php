<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_0ad77f616a92a13636b4fa7bbe8ac8bc19bcfd37297de6333ca9a201310a63b1 extends Twig_Template
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
        $__internal_e550c22889215fb7d01538d0546685e84ef16ccb0cc9d047b6b839bf07997e11 = $this->env->getExtension("native_profiler");
        $__internal_e550c22889215fb7d01538d0546685e84ef16ccb0cc9d047b6b839bf07997e11->enter($__internal_e550c22889215fb7d01538d0546685e84ef16ccb0cc9d047b6b839bf07997e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e550c22889215fb7d01538d0546685e84ef16ccb0cc9d047b6b839bf07997e11->leave($__internal_e550c22889215fb7d01538d0546685e84ef16ccb0cc9d047b6b839bf07997e11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */

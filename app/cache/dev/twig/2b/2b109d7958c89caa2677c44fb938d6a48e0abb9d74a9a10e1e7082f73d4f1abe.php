<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4d248ee71349daa2c397fcdc545542ccbc1de836cb40187c7f45655cf176dc55 extends Twig_Template
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
        $__internal_0767b77dc7de6a57e142a84fbf4ca5ad78daaa78f6c036b5a3f2dbf8e4df2e44 = $this->env->getExtension("native_profiler");
        $__internal_0767b77dc7de6a57e142a84fbf4ca5ad78daaa78f6c036b5a3f2dbf8e4df2e44->enter($__internal_0767b77dc7de6a57e142a84fbf4ca5ad78daaa78f6c036b5a3f2dbf8e4df2e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0767b77dc7de6a57e142a84fbf4ca5ad78daaa78f6c036b5a3f2dbf8e4df2e44->leave($__internal_0767b77dc7de6a57e142a84fbf4ca5ad78daaa78f6c036b5a3f2dbf8e4df2e44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */

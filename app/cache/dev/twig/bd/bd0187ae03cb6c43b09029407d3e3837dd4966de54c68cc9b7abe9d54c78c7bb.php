<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_5b765f397469ceefa1a1a4e25ca935e084a06ad630aa6d2377a7f1ebb2c735d8 extends Twig_Template
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
        $__internal_99a1c9cce8480fcdff13388e7ef06bb7987515d4d877126fb646711cb3ccd7f1 = $this->env->getExtension("native_profiler");
        $__internal_99a1c9cce8480fcdff13388e7ef06bb7987515d4d877126fb646711cb3ccd7f1->enter($__internal_99a1c9cce8480fcdff13388e7ef06bb7987515d4d877126fb646711cb3ccd7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_99a1c9cce8480fcdff13388e7ef06bb7987515d4d877126fb646711cb3ccd7f1->leave($__internal_99a1c9cce8480fcdff13388e7ef06bb7987515d4d877126fb646711cb3ccd7f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */

<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b69d6614e0e9f2903cf82304c6aaa0d6fbbff5d437b11b0f15c093a874da4974 extends Twig_Template
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
        $__internal_c7df49951f61e945868fe49098b6d4d6c585092c71e15459dfea8a6aa98f3c58 = $this->env->getExtension("native_profiler");
        $__internal_c7df49951f61e945868fe49098b6d4d6c585092c71e15459dfea8a6aa98f3c58->enter($__internal_c7df49951f61e945868fe49098b6d4d6c585092c71e15459dfea8a6aa98f3c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_c7df49951f61e945868fe49098b6d4d6c585092c71e15459dfea8a6aa98f3c58->leave($__internal_c7df49951f61e945868fe49098b6d4d6c585092c71e15459dfea8a6aa98f3c58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */

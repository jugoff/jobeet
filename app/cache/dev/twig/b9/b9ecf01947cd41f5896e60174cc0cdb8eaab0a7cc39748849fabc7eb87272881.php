<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_25f532e78d1e5ea167ee5a5f2e5b9133deeb8732b33af1a2028e861ab1839c1f extends Twig_Template
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
        $__internal_c1b8ac30dce9b30a5a23246ce74f0378aa82ed9338f29af780787524c2ad4be9 = $this->env->getExtension("native_profiler");
        $__internal_c1b8ac30dce9b30a5a23246ce74f0378aa82ed9338f29af780787524c2ad4be9->enter($__internal_c1b8ac30dce9b30a5a23246ce74f0378aa82ed9338f29af780787524c2ad4be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c1b8ac30dce9b30a5a23246ce74f0378aa82ed9338f29af780787524c2ad4be9->leave($__internal_c1b8ac30dce9b30a5a23246ce74f0378aa82ed9338f29af780787524c2ad4be9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */

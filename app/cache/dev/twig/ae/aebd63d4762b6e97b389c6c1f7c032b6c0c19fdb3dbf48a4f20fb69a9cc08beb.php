<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b9d5fcd0c3888eee895990851ed2dbc7b19712a2c0bbfab56581574670c7365a extends Twig_Template
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
        $__internal_8d4b3e1236c4a3e72da6d11c750ff261b28f66038c33593bcafed4a313e1253b = $this->env->getExtension("native_profiler");
        $__internal_8d4b3e1236c4a3e72da6d11c750ff261b28f66038c33593bcafed4a313e1253b->enter($__internal_8d4b3e1236c4a3e72da6d11c750ff261b28f66038c33593bcafed4a313e1253b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8d4b3e1236c4a3e72da6d11c750ff261b28f66038c33593bcafed4a313e1253b->leave($__internal_8d4b3e1236c4a3e72da6d11c750ff261b28f66038c33593bcafed4a313e1253b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */

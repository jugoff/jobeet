<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8e99edc931649d13bd774e3a27e14f615870fc6b91a54e17c8f6fbd3b777c562 extends Twig_Template
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
        $__internal_df7a51dd3a2fdf90e1a0704283c081fb6514c0dfcb87853d97ab82748af0d78c = $this->env->getExtension("native_profiler");
        $__internal_df7a51dd3a2fdf90e1a0704283c081fb6514c0dfcb87853d97ab82748af0d78c->enter($__internal_df7a51dd3a2fdf90e1a0704283c081fb6514c0dfcb87853d97ab82748af0d78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_df7a51dd3a2fdf90e1a0704283c081fb6514c0dfcb87853d97ab82748af0d78c->leave($__internal_df7a51dd3a2fdf90e1a0704283c081fb6514c0dfcb87853d97ab82748af0d78c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

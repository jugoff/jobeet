<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_07bda4da815f2d0b566163dab4492ac983959cc2275d74bce2bc463bafb8d089 extends Twig_Template
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
        $__internal_1826e19f9dd7ded0c9c2d2ee1c72820e9705af1d9ff3eec6342718e5aee42738 = $this->env->getExtension("native_profiler");
        $__internal_1826e19f9dd7ded0c9c2d2ee1c72820e9705af1d9ff3eec6342718e5aee42738->enter($__internal_1826e19f9dd7ded0c9c2d2ee1c72820e9705af1d9ff3eec6342718e5aee42738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1826e19f9dd7ded0c9c2d2ee1c72820e9705af1d9ff3eec6342718e5aee42738->leave($__internal_1826e19f9dd7ded0c9c2d2ee1c72820e9705af1d9ff3eec6342718e5aee42738_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */

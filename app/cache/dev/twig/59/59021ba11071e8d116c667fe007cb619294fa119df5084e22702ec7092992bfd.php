<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_aa150e2a3a4c22c76bc0191b6ca333bdebd3bb9aaf42e1051cd1637068feb264 extends Twig_Template
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
        $__internal_3f94cc1b178910341d38a2eb4fd70adaa4d7706a39cef52b32e674d455c6377c = $this->env->getExtension("native_profiler");
        $__internal_3f94cc1b178910341d38a2eb4fd70adaa4d7706a39cef52b32e674d455c6377c->enter($__internal_3f94cc1b178910341d38a2eb4fd70adaa4d7706a39cef52b32e674d455c6377c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3f94cc1b178910341d38a2eb4fd70adaa4d7706a39cef52b32e674d455c6377c->leave($__internal_3f94cc1b178910341d38a2eb4fd70adaa4d7706a39cef52b32e674d455c6377c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */

<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_198e3ca43cf0164ceba9f5907aec88d0f34424fbd60bec01388fcd4e79276199 extends Twig_Template
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
        $__internal_4e4a7f02b531ba06c9843dd946f094db84f4c75d335967966dfdccbada35758b = $this->env->getExtension("native_profiler");
        $__internal_4e4a7f02b531ba06c9843dd946f094db84f4c75d335967966dfdccbada35758b->enter($__internal_4e4a7f02b531ba06c9843dd946f094db84f4c75d335967966dfdccbada35758b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4e4a7f02b531ba06c9843dd946f094db84f4c75d335967966dfdccbada35758b->leave($__internal_4e4a7f02b531ba06c9843dd946f094db84f4c75d335967966dfdccbada35758b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */

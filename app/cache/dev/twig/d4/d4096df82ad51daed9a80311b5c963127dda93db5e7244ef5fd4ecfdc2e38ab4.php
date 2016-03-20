<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f62565a07595fc5c1571c4b3892747d99ead3b80a3ec66ef67fc5cc1f9ccab0c extends Twig_Template
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
        $__internal_3a5c50e7f6ce9edaa4e45199ffc880cab3626c5268d1de7dffd5aa2d0c4f4198 = $this->env->getExtension("native_profiler");
        $__internal_3a5c50e7f6ce9edaa4e45199ffc880cab3626c5268d1de7dffd5aa2d0c4f4198->enter($__internal_3a5c50e7f6ce9edaa4e45199ffc880cab3626c5268d1de7dffd5aa2d0c4f4198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3a5c50e7f6ce9edaa4e45199ffc880cab3626c5268d1de7dffd5aa2d0c4f4198->leave($__internal_3a5c50e7f6ce9edaa4e45199ffc880cab3626c5268d1de7dffd5aa2d0c4f4198_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */

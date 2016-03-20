<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a7a63697afdcc58620f1dc3dfd90f5bc9ed073b3d5f04601389539c085a3e94e extends Twig_Template
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
        $__internal_752f23d06f4a4d4442d93260fdf6dc114bb5bc02e1caa5d2364d36b4d87143f9 = $this->env->getExtension("native_profiler");
        $__internal_752f23d06f4a4d4442d93260fdf6dc114bb5bc02e1caa5d2364d36b4d87143f9->enter($__internal_752f23d06f4a4d4442d93260fdf6dc114bb5bc02e1caa5d2364d36b4d87143f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_752f23d06f4a4d4442d93260fdf6dc114bb5bc02e1caa5d2364d36b4d87143f9->leave($__internal_752f23d06f4a4d4442d93260fdf6dc114bb5bc02e1caa5d2364d36b4d87143f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */

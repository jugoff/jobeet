<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b99e1ed44fb9ff0433d7370a1471c8c4306df63c4d67251778f843828d72133f extends Twig_Template
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
        $__internal_93c86acd14e5a5e0a799bd8be4f12a3dce3196683ac526eb78db1c79439b93c5 = $this->env->getExtension("native_profiler");
        $__internal_93c86acd14e5a5e0a799bd8be4f12a3dce3196683ac526eb78db1c79439b93c5->enter($__internal_93c86acd14e5a5e0a799bd8be4f12a3dce3196683ac526eb78db1c79439b93c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_93c86acd14e5a5e0a799bd8be4f12a3dce3196683ac526eb78db1c79439b93c5->leave($__internal_93c86acd14e5a5e0a799bd8be4f12a3dce3196683ac526eb78db1c79439b93c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */

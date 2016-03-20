<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_09e1fd47579eb236d34e55628c38f764bd4ed52b7b60382e303e4b83a3612f4e extends Twig_Template
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
        $__internal_6a878453c136ad3a979921e452c84e80825ffcb085157309aef48af1ec318e25 = $this->env->getExtension("native_profiler");
        $__internal_6a878453c136ad3a979921e452c84e80825ffcb085157309aef48af1ec318e25->enter($__internal_6a878453c136ad3a979921e452c84e80825ffcb085157309aef48af1ec318e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_6a878453c136ad3a979921e452c84e80825ffcb085157309aef48af1ec318e25->leave($__internal_6a878453c136ad3a979921e452c84e80825ffcb085157309aef48af1ec318e25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */

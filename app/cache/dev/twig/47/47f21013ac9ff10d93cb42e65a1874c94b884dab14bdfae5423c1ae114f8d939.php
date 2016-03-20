<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7b79471fd4e54c99b5993ccc9ab028a47d82bf165575ada90b6a86fe3b4b3a36 extends Twig_Template
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
        $__internal_8f0f97353800fe066d5b98e9a88e45d9c621851b21ce88d047690bdede2eade5 = $this->env->getExtension("native_profiler");
        $__internal_8f0f97353800fe066d5b98e9a88e45d9c621851b21ce88d047690bdede2eade5->enter($__internal_8f0f97353800fe066d5b98e9a88e45d9c621851b21ce88d047690bdede2eade5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8f0f97353800fe066d5b98e9a88e45d9c621851b21ce88d047690bdede2eade5->leave($__internal_8f0f97353800fe066d5b98e9a88e45d9c621851b21ce88d047690bdede2eade5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */

<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_001c62b911b537fed19156ff39e145bd42b1732e66f33812f15d3855129bdc70 extends Twig_Template
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
        $__internal_9b5fbad460ca547c3a3b46a19c4e3cbec68843d5cb6be11e4715c84cf1b2bf00 = $this->env->getExtension("native_profiler");
        $__internal_9b5fbad460ca547c3a3b46a19c4e3cbec68843d5cb6be11e4715c84cf1b2bf00->enter($__internal_9b5fbad460ca547c3a3b46a19c4e3cbec68843d5cb6be11e4715c84cf1b2bf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9b5fbad460ca547c3a3b46a19c4e3cbec68843d5cb6be11e4715c84cf1b2bf00->leave($__internal_9b5fbad460ca547c3a3b46a19c4e3cbec68843d5cb6be11e4715c84cf1b2bf00_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */

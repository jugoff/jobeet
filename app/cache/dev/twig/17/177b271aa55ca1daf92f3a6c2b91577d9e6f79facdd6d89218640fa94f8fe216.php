<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_42593b27047bbc79efee62fc6ae95e801b4f56cb814422a45e0e3f5123c3bb62 extends Twig_Template
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
        $__internal_1ec1e1ab4a7e479d8a2a3e10f6ca442804aa109a7dc7754e5f50c07b14aa86e9 = $this->env->getExtension("native_profiler");
        $__internal_1ec1e1ab4a7e479d8a2a3e10f6ca442804aa109a7dc7754e5f50c07b14aa86e9->enter($__internal_1ec1e1ab4a7e479d8a2a3e10f6ca442804aa109a7dc7754e5f50c07b14aa86e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_1ec1e1ab4a7e479d8a2a3e10f6ca442804aa109a7dc7754e5f50c07b14aa86e9->leave($__internal_1ec1e1ab4a7e479d8a2a3e10f6ca442804aa109a7dc7754e5f50c07b14aa86e9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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

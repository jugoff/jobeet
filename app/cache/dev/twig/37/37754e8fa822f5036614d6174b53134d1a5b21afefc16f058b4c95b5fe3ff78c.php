<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ae1a5d74777097b92747b344540d5485cfd19da000e83fa3dc504028f0cbc896 extends Twig_Template
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
        $__internal_e6c6dd248976a83f7eac81cbb0d28f91ef53c0e551ef149cd314f0518dce316c = $this->env->getExtension("native_profiler");
        $__internal_e6c6dd248976a83f7eac81cbb0d28f91ef53c0e551ef149cd314f0518dce316c->enter($__internal_e6c6dd248976a83f7eac81cbb0d28f91ef53c0e551ef149cd314f0518dce316c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e6c6dd248976a83f7eac81cbb0d28f91ef53c0e551ef149cd314f0518dce316c->leave($__internal_e6c6dd248976a83f7eac81cbb0d28f91ef53c0e551ef149cd314f0518dce316c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */

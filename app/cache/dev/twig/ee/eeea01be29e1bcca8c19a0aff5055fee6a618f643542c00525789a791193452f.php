<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_890a0e495170a71c4213cec8036699ed324b96c2f11cebf8d7a7db3983491c9d extends Twig_Template
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
        $__internal_3eb5c4b4c0bf10851eb0544bb628b3d1267c15e3ec38d5d5a99e4f15e354b406 = $this->env->getExtension("native_profiler");
        $__internal_3eb5c4b4c0bf10851eb0544bb628b3d1267c15e3ec38d5d5a99e4f15e354b406->enter($__internal_3eb5c4b4c0bf10851eb0544bb628b3d1267c15e3ec38d5d5a99e4f15e354b406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3eb5c4b4c0bf10851eb0544bb628b3d1267c15e3ec38d5d5a99e4f15e354b406->leave($__internal_3eb5c4b4c0bf10851eb0544bb628b3d1267c15e3ec38d5d5a99e4f15e354b406_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */

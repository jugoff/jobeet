<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_522bca7ccd308bc87c975044781343380682674fb45d971ee2e760a0fa796e00 extends Twig_Template
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
        $__internal_f0b6fb5179cedb5a0db445430aa73fb47bb132769ee1d1aeb46922ff434f1e22 = $this->env->getExtension("native_profiler");
        $__internal_f0b6fb5179cedb5a0db445430aa73fb47bb132769ee1d1aeb46922ff434f1e22->enter($__internal_f0b6fb5179cedb5a0db445430aa73fb47bb132769ee1d1aeb46922ff434f1e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f0b6fb5179cedb5a0db445430aa73fb47bb132769ee1d1aeb46922ff434f1e22->leave($__internal_f0b6fb5179cedb5a0db445430aa73fb47bb132769ee1d1aeb46922ff434f1e22_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

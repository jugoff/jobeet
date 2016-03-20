<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_d422d4532a49f34c428a4c3200706d3b6a83b717bc55204bb6e081c9d6e4a134 extends Twig_Template
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
        $__internal_dcb27876811e619e40f83f7771933f97cc53e34f958a7a9a889d53131ffd0af3 = $this->env->getExtension("native_profiler");
        $__internal_dcb27876811e619e40f83f7771933f97cc53e34f958a7a9a889d53131ffd0af3->enter($__internal_dcb27876811e619e40f83f7771933f97cc53e34f958a7a9a889d53131ffd0af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_dcb27876811e619e40f83f7771933f97cc53e34f958a7a9a889d53131ffd0af3->leave($__internal_dcb27876811e619e40f83f7771933f97cc53e34f958a7a9a889d53131ffd0af3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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

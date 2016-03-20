<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_506464520b545909141cf296f59191f721f3adb94c8b6ea71c90de6568ea8951 extends Twig_Template
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
        $__internal_0a78c518a7a0fb9afd71963ea8fbb5dcf63ffe9486f371d7364979531b659857 = $this->env->getExtension("native_profiler");
        $__internal_0a78c518a7a0fb9afd71963ea8fbb5dcf63ffe9486f371d7364979531b659857->enter($__internal_0a78c518a7a0fb9afd71963ea8fbb5dcf63ffe9486f371d7364979531b659857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0a78c518a7a0fb9afd71963ea8fbb5dcf63ffe9486f371d7364979531b659857->leave($__internal_0a78c518a7a0fb9afd71963ea8fbb5dcf63ffe9486f371d7364979531b659857_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */

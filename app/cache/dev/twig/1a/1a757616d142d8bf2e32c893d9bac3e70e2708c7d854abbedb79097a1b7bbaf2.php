<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_6f395c02eb34eb989b078ae74427eb077dd0353b6f06da480e0279d7d9042669 extends Twig_Template
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
        $__internal_0f5890f9ce104e29011830c25cf639867170587cbc68f8ff3869537710b09c5c = $this->env->getExtension("native_profiler");
        $__internal_0f5890f9ce104e29011830c25cf639867170587cbc68f8ff3869537710b09c5c->enter($__internal_0f5890f9ce104e29011830c25cf639867170587cbc68f8ff3869537710b09c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0f5890f9ce104e29011830c25cf639867170587cbc68f8ff3869537710b09c5c->leave($__internal_0f5890f9ce104e29011830c25cf639867170587cbc68f8ff3869537710b09c5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */

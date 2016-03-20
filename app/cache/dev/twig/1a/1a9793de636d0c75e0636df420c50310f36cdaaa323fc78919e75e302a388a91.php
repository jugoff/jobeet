<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ae6ed16e5b53a7258b120897c8b04e247e86c4029a0cd839993aeb063006b92c extends Twig_Template
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
        $__internal_b859ac160de223288a1624a2210b6f6a405086506ce3651dcf4d32c2301d5590 = $this->env->getExtension("native_profiler");
        $__internal_b859ac160de223288a1624a2210b6f6a405086506ce3651dcf4d32c2301d5590->enter($__internal_b859ac160de223288a1624a2210b6f6a405086506ce3651dcf4d32c2301d5590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b859ac160de223288a1624a2210b6f6a405086506ce3651dcf4d32c2301d5590->leave($__internal_b859ac160de223288a1624a2210b6f6a405086506ce3651dcf4d32c2301d5590_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */

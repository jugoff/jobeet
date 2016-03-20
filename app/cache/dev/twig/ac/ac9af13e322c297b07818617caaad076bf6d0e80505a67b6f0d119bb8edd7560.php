<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_780ecb9ecbeaa9ab12bd7ec019a2732b56fcbd2a323e6826cd483935bf1e5b38 extends Twig_Template
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
        $__internal_869c37dd3ca579c7d15f985be8ccd3bfee36f618f0fb9bfe54b845d8f234e076 = $this->env->getExtension("native_profiler");
        $__internal_869c37dd3ca579c7d15f985be8ccd3bfee36f618f0fb9bfe54b845d8f234e076->enter($__internal_869c37dd3ca579c7d15f985be8ccd3bfee36f618f0fb9bfe54b845d8f234e076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_869c37dd3ca579c7d15f985be8ccd3bfee36f618f0fb9bfe54b845d8f234e076->leave($__internal_869c37dd3ca579c7d15f985be8ccd3bfee36f618f0fb9bfe54b845d8f234e076_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */

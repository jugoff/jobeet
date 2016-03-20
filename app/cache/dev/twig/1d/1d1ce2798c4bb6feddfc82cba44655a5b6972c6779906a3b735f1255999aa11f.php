<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_557758f57bea4f6417a611d406e1888be54400cf1213c0d5c9d0e6453d26c9f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fa283a21676389e48e6a104216a850ea204f0faa77c48bfc1e3f27481877e9b = $this->env->getExtension("native_profiler");
        $__internal_3fa283a21676389e48e6a104216a850ea204f0faa77c48bfc1e3f27481877e9b->enter($__internal_3fa283a21676389e48e6a104216a850ea204f0faa77c48bfc1e3f27481877e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_3fa283a21676389e48e6a104216a850ea204f0faa77c48bfc1e3f27481877e9b->leave($__internal_3fa283a21676389e48e6a104216a850ea204f0faa77c48bfc1e3f27481877e9b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_686f3df527720e46de7fcf6ecac978db574121b83640a5c2721f08997c5e50f3 = $this->env->getExtension("native_profiler");
        $__internal_686f3df527720e46de7fcf6ecac978db574121b83640a5c2721f08997c5e50f3->enter($__internal_686f3df527720e46de7fcf6ecac978db574121b83640a5c2721f08997c5e50f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_686f3df527720e46de7fcf6ecac978db574121b83640a5c2721f08997c5e50f3->leave($__internal_686f3df527720e46de7fcf6ecac978db574121b83640a5c2721f08997c5e50f3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */

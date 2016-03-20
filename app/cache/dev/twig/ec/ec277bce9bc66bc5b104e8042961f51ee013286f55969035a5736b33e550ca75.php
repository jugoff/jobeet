<?php

/* ImieTotoBundle:Job:index.html.twig */
class __TwigTemplate_b9cde8a06dc391145cc7777081f41f1246737b536e26703b0d3c886ba0d5a183 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ImieTotoBundle::layout.html.twig", "ImieTotoBundle:Job:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ImieTotoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed6ca2ca1773c69c2066a62600c15fccf265eeb1926915a5c5a734631c5f9953 = $this->env->getExtension("native_profiler");
        $__internal_ed6ca2ca1773c69c2066a62600c15fccf265eeb1926915a5c5a734631c5f9953->enter($__internal_ed6ca2ca1773c69c2066a62600c15fccf265eeb1926915a5c5a734631c5f9953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ImieTotoBundle:Job:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed6ca2ca1773c69c2066a62600c15fccf265eeb1926915a5c5a734631c5f9953->leave($__internal_ed6ca2ca1773c69c2066a62600c15fccf265eeb1926915a5c5a734631c5f9953_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6ae1e8a1ca0e349a2763bb9466fb39611d49c3302de463aa3cadde8f8f953de = $this->env->getExtension("native_profiler");
        $__internal_b6ae1e8a1ca0e349a2763bb9466fb39611d49c3302de463aa3cadde8f8f953de->enter($__internal_b6ae1e8a1ca0e349a2763bb9466fb39611d49c3302de463aa3cadde8f8f953de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/imietoto/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b6ae1e8a1ca0e349a2763bb9466fb39611d49c3302de463aa3cadde8f8f953de->leave($__internal_b6ae1e8a1ca0e349a2763bb9466fb39611d49c3302de463aa3cadde8f8f953de_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_7ba36777a56929fc42936468f06c2f0f2292544ec65c050ad95b6fd37b9953f9 = $this->env->getExtension("native_profiler");
        $__internal_7ba36777a56929fc42936468f06c2f0f2292544ec65c050ad95b6fd37b9953f9->enter($__internal_7ba36777a56929fc42936468f06c2f0f2292544ec65c050ad95b6fd37b9953f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "<div id=\"jobs\">
    <table class=\"jobs\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 13
            echo "        <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
            <td class=\"location\"> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "location", array()), "html", null, true);
            echo "</td>
            <td class=\"position\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imie_job_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "position", array()), "html", null, true);
            echo "</a></td>
            <td class=\"company\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "company", array()), "html", null, true);
            echo "</td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </table>
 </div>
";
        
        $__internal_7ba36777a56929fc42936468f06c2f0f2292544ec65c050ad95b6fd37b9953f9->leave($__internal_7ba36777a56929fc42936468f06c2f0f2292544ec65c050ad95b6fd37b9953f9_prof);

    }

    public function getTemplateName()
    {
        return "ImieTotoBundle:Job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 19,  96 => 16,  90 => 15,  86 => 14,  81 => 13,  64 => 12,  60 => 10,  54 => 9,  45 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'ImieTotoBundle::layout.html.twig' %}*/
/* 			*/
/* */
/* {% block stylesheets %}*/
/* {{ parent() }}*/
/* <link rel="stylesheet" href="{{ asset('bundles/imietoto/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* <div id="jobs">*/
/*     <table class="jobs">*/
/*     {% for entity in entities %}*/
/*         <tr class="{{  cycle(['even', 'odd'], loop.index) }}">*/
/*             <td class="location"> {{ entity.location }}</td>*/
/*             <td class="position"><a href="{{ path('imie_job_show', {'id': entity.id}) }}">{{ entity.position }}</a></td>*/
/*             <td class="company">{{ entity.company }}</td>*/
/*         </tr>*/
/*     {%  endfor %}*/
/*     </table>*/
/*  </div>*/
/* {% endblock %}*/

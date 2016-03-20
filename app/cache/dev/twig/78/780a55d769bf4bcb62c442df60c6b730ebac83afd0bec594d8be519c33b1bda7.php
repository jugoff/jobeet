<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_72bec8822885312fdccad1ec4ef6ce7a632e02c3baf418adba3a3d8fc68cd420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45b5968f3cd30eab8fad89c5bff801cd65cef05bcf14648ed63fd54cf1293443 = $this->env->getExtension("native_profiler");
        $__internal_45b5968f3cd30eab8fad89c5bff801cd65cef05bcf14648ed63fd54cf1293443->enter($__internal_45b5968f3cd30eab8fad89c5bff801cd65cef05bcf14648ed63fd54cf1293443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45b5968f3cd30eab8fad89c5bff801cd65cef05bcf14648ed63fd54cf1293443->leave($__internal_45b5968f3cd30eab8fad89c5bff801cd65cef05bcf14648ed63fd54cf1293443_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a041ae489bd483aa3088bb5dde43c898e10a031267a028d6ac7d4b8bca17f223 = $this->env->getExtension("native_profiler");
        $__internal_a041ae489bd483aa3088bb5dde43c898e10a031267a028d6ac7d4b8bca17f223->enter($__internal_a041ae489bd483aa3088bb5dde43c898e10a031267a028d6ac7d4b8bca17f223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a041ae489bd483aa3088bb5dde43c898e10a031267a028d6ac7d4b8bca17f223->leave($__internal_a041ae489bd483aa3088bb5dde43c898e10a031267a028d6ac7d4b8bca17f223_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_72ab2830068311eefc53e8e85e6252adb04037b73b765f54f573bb4dfbba48bf = $this->env->getExtension("native_profiler");
        $__internal_72ab2830068311eefc53e8e85e6252adb04037b73b765f54f573bb4dfbba48bf->enter($__internal_72ab2830068311eefc53e8e85e6252adb04037b73b765f54f573bb4dfbba48bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_72ab2830068311eefc53e8e85e6252adb04037b73b765f54f573bb4dfbba48bf->leave($__internal_72ab2830068311eefc53e8e85e6252adb04037b73b765f54f573bb4dfbba48bf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */

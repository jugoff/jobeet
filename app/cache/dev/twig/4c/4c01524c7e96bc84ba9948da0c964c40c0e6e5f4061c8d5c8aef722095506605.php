<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e945aeeac65689e9ec3b5cfaaf4445ed633b831e78375abc89731a728264245a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_285e8cecad79611cd65225a8d7c20b1794b2f43e084a1e34ffb9838f177fec05 = $this->env->getExtension("native_profiler");
        $__internal_285e8cecad79611cd65225a8d7c20b1794b2f43e084a1e34ffb9838f177fec05->enter($__internal_285e8cecad79611cd65225a8d7c20b1794b2f43e084a1e34ffb9838f177fec05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_285e8cecad79611cd65225a8d7c20b1794b2f43e084a1e34ffb9838f177fec05->leave($__internal_285e8cecad79611cd65225a8d7c20b1794b2f43e084a1e34ffb9838f177fec05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_faaa4c4c39458db803faa041411c8148617e91ecf74fcc3d04e2968a4abfcbd5 = $this->env->getExtension("native_profiler");
        $__internal_faaa4c4c39458db803faa041411c8148617e91ecf74fcc3d04e2968a4abfcbd5->enter($__internal_faaa4c4c39458db803faa041411c8148617e91ecf74fcc3d04e2968a4abfcbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_faaa4c4c39458db803faa041411c8148617e91ecf74fcc3d04e2968a4abfcbd5->leave($__internal_faaa4c4c39458db803faa041411c8148617e91ecf74fcc3d04e2968a4abfcbd5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b8b0fc6ad8097e5aca85c31a8eda76d2b5c780c9da35ea7415d6ef0f6e6ef99 = $this->env->getExtension("native_profiler");
        $__internal_9b8b0fc6ad8097e5aca85c31a8eda76d2b5c780c9da35ea7415d6ef0f6e6ef99->enter($__internal_9b8b0fc6ad8097e5aca85c31a8eda76d2b5c780c9da35ea7415d6ef0f6e6ef99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9b8b0fc6ad8097e5aca85c31a8eda76d2b5c780c9da35ea7415d6ef0f6e6ef99->leave($__internal_9b8b0fc6ad8097e5aca85c31a8eda76d2b5c780c9da35ea7415d6ef0f6e6ef99_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6c7f676f5c8ef283484e0a04e08eb6f174e8d85ee2b72e0240919361e92ebc3 = $this->env->getExtension("native_profiler");
        $__internal_a6c7f676f5c8ef283484e0a04e08eb6f174e8d85ee2b72e0240919361e92ebc3->enter($__internal_a6c7f676f5c8ef283484e0a04e08eb6f174e8d85ee2b72e0240919361e92ebc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a6c7f676f5c8ef283484e0a04e08eb6f174e8d85ee2b72e0240919361e92ebc3->leave($__internal_a6c7f676f5c8ef283484e0a04e08eb6f174e8d85ee2b72e0240919361e92ebc3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4dab4ff3859c6dd30c9719884bbb275ddf84dbc95fabf22d682b7e1d32c6b10b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_423a45e422b3b959fd037dfdd3f689cde36d4a76718ae2523d30df0b725e8073 = $this->env->getExtension("native_profiler");
        $__internal_423a45e422b3b959fd037dfdd3f689cde36d4a76718ae2523d30df0b725e8073->enter($__internal_423a45e422b3b959fd037dfdd3f689cde36d4a76718ae2523d30df0b725e8073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_423a45e422b3b959fd037dfdd3f689cde36d4a76718ae2523d30df0b725e8073->leave($__internal_423a45e422b3b959fd037dfdd3f689cde36d4a76718ae2523d30df0b725e8073_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1463a47628a7f2b929e842215b165e5a3109b38d4a59f289fafa0e10db45cc29 = $this->env->getExtension("native_profiler");
        $__internal_1463a47628a7f2b929e842215b165e5a3109b38d4a59f289fafa0e10db45cc29->enter($__internal_1463a47628a7f2b929e842215b165e5a3109b38d4a59f289fafa0e10db45cc29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1463a47628a7f2b929e842215b165e5a3109b38d4a59f289fafa0e10db45cc29->leave($__internal_1463a47628a7f2b929e842215b165e5a3109b38d4a59f289fafa0e10db45cc29_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1355fb4f58d2685e3060d900a473f286cada388fdaa246e97cb92dd7f96d742b = $this->env->getExtension("native_profiler");
        $__internal_1355fb4f58d2685e3060d900a473f286cada388fdaa246e97cb92dd7f96d742b->enter($__internal_1355fb4f58d2685e3060d900a473f286cada388fdaa246e97cb92dd7f96d742b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1355fb4f58d2685e3060d900a473f286cada388fdaa246e97cb92dd7f96d742b->leave($__internal_1355fb4f58d2685e3060d900a473f286cada388fdaa246e97cb92dd7f96d742b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b4770ce6b2c50dea634131df45298708f487e2af90b7417e5462f8f052e8ab6 = $this->env->getExtension("native_profiler");
        $__internal_5b4770ce6b2c50dea634131df45298708f487e2af90b7417e5462f8f052e8ab6->enter($__internal_5b4770ce6b2c50dea634131df45298708f487e2af90b7417e5462f8f052e8ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5b4770ce6b2c50dea634131df45298708f487e2af90b7417e5462f8f052e8ab6->leave($__internal_5b4770ce6b2c50dea634131df45298708f487e2af90b7417e5462f8f052e8ab6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

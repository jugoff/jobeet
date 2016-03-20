<?php

/* job/edit.html.twig */
class __TwigTemplate_3606bbe8e63527faa2290772dd972b7cec7477bd282e2b9a410f81364e08ec9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ImieTotoBundle::layout.html.twig", "job/edit.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ImieTotoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ded08df0454424ddf5f06f8a39bc1c21463f47567fc4a9a9d52d47996bbb755 = $this->env->getExtension("native_profiler");
        $__internal_1ded08df0454424ddf5f06f8a39bc1c21463f47567fc4a9a9d52d47996bbb755->enter($__internal_1ded08df0454424ddf5f06f8a39bc1c21463f47567fc4a9a9d52d47996bbb755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ded08df0454424ddf5f06f8a39bc1c21463f47567fc4a9a9d52d47996bbb755->leave($__internal_1ded08df0454424ddf5f06f8a39bc1c21463f47567fc4a9a9d52d47996bbb755_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ef4684bc2b6ffaff214f553a9cef6edbfdc43c0d5c351bc7d8ed39b826eb5d79 = $this->env->getExtension("native_profiler");
        $__internal_ef4684bc2b6ffaff214f553a9cef6edbfdc43c0d5c351bc7d8ed39b826eb5d79->enter($__internal_ef4684bc2b6ffaff214f553a9cef6edbfdc43c0d5c351bc7d8ed39b826eb5d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ImieTotoBundle/Resources/public/css/jobs.css"), "html", null, true);
        echo " type=\"text/css\" media=\"all\" />
";
        
        $__internal_ef4684bc2b6ffaff214f553a9cef6edbfdc43c0d5c351bc7d8ed39b826eb5d79->leave($__internal_ef4684bc2b6ffaff214f553a9cef6edbfdc43c0d5c351bc7d8ed39b826eb5d79_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_463f442fcf2c528f881e48742d7cd5cbf9484a1207d3343bec68b42a99de068a = $this->env->getExtension("native_profiler");
        $__internal_463f442fcf2c528f881e48742d7cd5cbf9484a1207d3343bec68b42a99de068a->enter($__internal_463f442fcf2c528f881e48742d7cd5cbf9484a1207d3343bec68b42a99de068a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1>job edit</h1>

    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("Imie_job_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_463f442fcf2c528f881e48742d7cd5cbf9484a1207d3343bec68b42a99de068a->leave($__internal_463f442fcf2c528f881e48742d7cd5cbf9484a1207d3343bec68b42a99de068a_prof);

    }

    public function getTemplateName()
    {
        return "job/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  87 => 21,  81 => 18,  74 => 14,  69 => 12,  65 => 11,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'ImieTotoBundle::layout.html.twig' %}*/
/*  */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href={{ asset('bundles/ImieTotoBundle/Resources/public/css/jobs.css') }} type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h1>job edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('Imie_job_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

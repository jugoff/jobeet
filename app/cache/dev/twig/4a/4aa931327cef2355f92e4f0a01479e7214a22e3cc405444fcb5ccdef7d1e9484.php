<?php

/* job/new.html.twig */
class __TwigTemplate_65d35429f7f717f16bd2b7731d2aa07fcbc3d4c2d50ca4e4015cf4f77c2e65fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ImieTotoBundle::layout.html.twig", "job/new.html.twig", 1);
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
        $__internal_853eb82d6f1c9ae28b46edda53d3e8b64c0510d663e4262aa445fb37d0fc44ec = $this->env->getExtension("native_profiler");
        $__internal_853eb82d6f1c9ae28b46edda53d3e8b64c0510d663e4262aa445fb37d0fc44ec->enter($__internal_853eb82d6f1c9ae28b46edda53d3e8b64c0510d663e4262aa445fb37d0fc44ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_853eb82d6f1c9ae28b46edda53d3e8b64c0510d663e4262aa445fb37d0fc44ec->leave($__internal_853eb82d6f1c9ae28b46edda53d3e8b64c0510d663e4262aa445fb37d0fc44ec_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5eec78eabb786cf5dc00554054a2f104ad99adf08cc1a4475126d5760eaec8f = $this->env->getExtension("native_profiler");
        $__internal_b5eec78eabb786cf5dc00554054a2f104ad99adf08cc1a4475126d5760eaec8f->enter($__internal_b5eec78eabb786cf5dc00554054a2f104ad99adf08cc1a4475126d5760eaec8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ImieTotoBundle/Resources/public/css/new.css"), "html", null, true);
        echo " type=\"text/css\" media=\"all\" />
";
        
        $__internal_b5eec78eabb786cf5dc00554054a2f104ad99adf08cc1a4475126d5760eaec8f->leave($__internal_b5eec78eabb786cf5dc00554054a2f104ad99adf08cc1a4475126d5760eaec8f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2475e6ff9cc74b696ae7c840bc76ff1ad81f6de70c6a5dd69e16b12257dfab28 = $this->env->getExtension("native_profiler");
        $__internal_2475e6ff9cc74b696ae7c840bc76ff1ad81f6de70c6a5dd69e16b12257dfab28->enter($__internal_2475e6ff9cc74b696ae7c840bc76ff1ad81f6de70c6a5dd69e16b12257dfab28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <h1>job creation</h1>

    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("Imie_job_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_2475e6ff9cc74b696ae7c840bc76ff1ad81f6de70c6a5dd69e16b12257dfab28->leave($__internal_2475e6ff9cc74b696ae7c840bc76ff1ad81f6de70c6a5dd69e16b12257dfab28_prof);

    }

    public function getTemplateName()
    {
        return "job/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  74 => 15,  69 => 13,  65 => 12,  61 => 10,  55 => 9,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'ImieTotoBundle::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href={{ asset('bundles/ImieTotoBundle/Resources/public/css/new.css') }} type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>job creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('Imie_job_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

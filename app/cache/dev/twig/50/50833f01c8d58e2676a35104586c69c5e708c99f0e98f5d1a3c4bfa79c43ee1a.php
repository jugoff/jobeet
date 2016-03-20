<?php

/* ImieTotoBundle:job:show.html.twig */
class __TwigTemplate_59a62f5d2bc7ee23208d5b41e1c6cbf203452bf5f27298109ff6beb925e8ce40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ImieTotoBundle::layout.html.twig", "ImieTotoBundle:job:show.html.twig", 1);
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
        $__internal_e4e38935cde092ea48b17d3409b02b47ee4064e73863f00a4c5e4fdad25a0c4b = $this->env->getExtension("native_profiler");
        $__internal_e4e38935cde092ea48b17d3409b02b47ee4064e73863f00a4c5e4fdad25a0c4b->enter($__internal_e4e38935cde092ea48b17d3409b02b47ee4064e73863f00a4c5e4fdad25a0c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ImieTotoBundle:job:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4e38935cde092ea48b17d3409b02b47ee4064e73863f00a4c5e4fdad25a0c4b->leave($__internal_e4e38935cde092ea48b17d3409b02b47ee4064e73863f00a4c5e4fdad25a0c4b_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_829ea919167ed86ec00b9d643b02f10ee41c3be5a6e395f83f44945e34931d92 = $this->env->getExtension("native_profiler");
        $__internal_829ea919167ed86ec00b9d643b02f10ee41c3be5a6e395f83f44945e34931d92->enter($__internal_829ea919167ed86ec00b9d643b02f10ee41c3be5a6e395f83f44945e34931d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/imietoto/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_829ea919167ed86ec00b9d643b02f10ee41c3be5a6e395f83f44945e34931d92->leave($__internal_829ea919167ed86ec00b9d643b02f10ee41c3be5a6e395f83f44945e34931d92_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_e7ad609a26592b0beb5523ca8ca93a21d857c59161aef670aa99eab1174cc32f = $this->env->getExtension("native_profiler");
        $__internal_e7ad609a26592b0beb5523ca8ca93a21d857c59161aef670aa99eab1174cc32f->enter($__internal_e7ad609a26592b0beb5523ca8ca93a21d857c59161aef670aa99eab1174cc32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "
<div id=\"job\">
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company", array()), "html", null, true);
        echo "</h1>
    <h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "location", array()), "html", null, true);
        echo "</h2>
    <h3>
        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "position", array()), "html", null, true);
        echo "
        <small> - ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "type", array()), "html", null, true);
        echo "</small>
    </h3>

    ";
        // line 19
        if ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array())) {
            // line 20
            echo "    <div class=\"logo\">
        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "url", array()), "html", null, true);
            echo "\">
            <img src=\"/uploads/jobs/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "logo", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "company", array()), "html", null, true);
            echo " logo\" />
        </a>
    </div>
    ";
        }
        // line 26
        echo "
    <div class=\"description\">
        ";
        // line 28
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description", array()), "html", null, true));
        echo "
    </div>

    <h4>How to apply?</h4>

    <p class=\"how_to_apply\">";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "howtoapply", array()), "html", null, true);
        echo "</p>

    <div class=\"meta\">
        <small>posted on ";
        // line 36
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "createdat", array()), "m/d/Y"), "html", null, true);
        echo "</small>
    </div>

    <div style=\"padding: 20px 0\">
        <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imie_job_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
            Edit
        </a>
    </div>
</div>
";
        
        $__internal_e7ad609a26592b0beb5523ca8ca93a21d857c59161aef670aa99eab1174cc32f->leave($__internal_e7ad609a26592b0beb5523ca8ca93a21d857c59161aef670aa99eab1174cc32f_prof);

    }

    public function getTemplateName()
    {
        return "ImieTotoBundle:job:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 40,  119 => 36,  113 => 33,  105 => 28,  101 => 26,  92 => 22,  88 => 21,  85 => 20,  83 => 19,  77 => 16,  73 => 15,  68 => 13,  64 => 12,  60 => 10,  54 => 9,  45 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'ImieTotoBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block stylesheets %}*/
/* {{ parent() }}*/
/* <link rel="stylesheet" href="{{ asset('bundles/imietoto/css/job.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* <div id="job">*/
/*     <h1>{{ entity.company }}</h1>*/
/*     <h2>{{ entity.location }}</h2>*/
/*     <h3>*/
/*         {{ entity.position }}*/
/*         <small> - {{ entity.type }}</small>*/
/*     </h3>*/
/* */
/*     {% if entity.logo %}*/
/*     <div class="logo">*/
/*         <a href="{{ entity.url }}">*/
/*             <img src="/uploads/jobs/{{ entity.logo }}" alt="{{ entity.company }} logo" />*/
/*         </a>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     <div class="description">*/
/*         {{ entity.description|nl2br }}*/
/*     </div>*/
/* */
/*     <h4>How to apply?</h4>*/
/* */
/*     <p class="how_to_apply">{{ entity.howtoapply }}</p>*/
/* */
/*     <div class="meta">*/
/*         <small>posted on {{ entity.createdat|date('m/d/Y') }}</small>*/
/*     </div>*/
/* */
/*     <div style="padding: 20px 0">*/
/*         <a href="{{ path('imie_job_edit', { 'id': entity.id }) }}">*/
/*             Edit*/
/*         </a>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/

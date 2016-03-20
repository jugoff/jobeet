<?php

/* ImieTotoBundle:job:edit.html.twig */
class __TwigTemplate_1a1fc48de347cbc68179b9a2677f5a8677479e0190157d50b953c22a5742206e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ImieTotoBundle::layout.html.twig", "ImieTotoBundle:job:edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ImieTotoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_475348b87ed96ceca49f34c61cf454f13584db835ea7d8fdc64d4ac6abcad4e5 = $this->env->getExtension("native_profiler");
        $__internal_475348b87ed96ceca49f34c61cf454f13584db835ea7d8fdc64d4ac6abcad4e5->enter($__internal_475348b87ed96ceca49f34c61cf454f13584db835ea7d8fdc64d4ac6abcad4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ImieTotoBundle:job:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_475348b87ed96ceca49f34c61cf454f13584db835ea7d8fdc64d4ac6abcad4e5->leave($__internal_475348b87ed96ceca49f34c61cf454f13584db835ea7d8fdc64d4ac6abcad4e5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5cf2b4c3a30463186450775c17b0cd4e75b4198c89a80aadbc168f3c67d4b866 = $this->env->getExtension("native_profiler");
        $__internal_5cf2b4c3a30463186450775c17b0cd4e75b4198c89a80aadbc168f3c67d4b866->enter($__internal_5cf2b4c3a30463186450775c17b0cd4e75b4198c89a80aadbc168f3c67d4b866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_5cf2b4c3a30463186450775c17b0cd4e75b4198c89a80aadbc168f3c67d4b866->leave($__internal_5cf2b4c3a30463186450775c17b0cd4e75b4198c89a80aadbc168f3c67d4b866_prof);

    }

    public function getTemplateName()
    {
        return "ImieTotoBundle:job:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'ImieTotoBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/* */
/* {% endblock %}*/

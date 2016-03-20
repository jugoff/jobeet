<?php

/* ImieTotoBundle:job:new.html.twig */
class __TwigTemplate_8f2a53ec60e140f0a3b3018671f5a8545be68d70a361188e3f4a7aa23ec0ee91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ImieTotoBundle::layout.html.twig", "ImieTotoBundle:job:new.html.twig", 1);
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
        $__internal_3890cdf0f750b8c71f437958f10d9dbf765c9e4b5367c6cd0e78b970cccda10d = $this->env->getExtension("native_profiler");
        $__internal_3890cdf0f750b8c71f437958f10d9dbf765c9e4b5367c6cd0e78b970cccda10d->enter($__internal_3890cdf0f750b8c71f437958f10d9dbf765c9e4b5367c6cd0e78b970cccda10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ImieTotoBundle:job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3890cdf0f750b8c71f437958f10d9dbf765c9e4b5367c6cd0e78b970cccda10d->leave($__internal_3890cdf0f750b8c71f437958f10d9dbf765c9e4b5367c6cd0e78b970cccda10d_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_407883e1e268289febd833a01085e41922305282abc8638a5a0dd50475f550c3 = $this->env->getExtension("native_profiler");
        $__internal_407883e1e268289febd833a01085e41922305282abc8638a5a0dd50475f550c3->enter($__internal_407883e1e268289febd833a01085e41922305282abc8638a5a0dd50475f550c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
";
        
        $__internal_407883e1e268289febd833a01085e41922305282abc8638a5a0dd50475f550c3->leave($__internal_407883e1e268289febd833a01085e41922305282abc8638a5a0dd50475f550c3_prof);

    }

    public function getTemplateName()
    {
        return "ImieTotoBundle:job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'ImieTotoBundle::layout.html.twig' %}*/
/* */
/* */
/* {% block content %}*/
/* */
/* {% endblock %}*/

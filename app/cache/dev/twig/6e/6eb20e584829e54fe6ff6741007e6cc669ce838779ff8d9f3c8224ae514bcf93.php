<?php

/* ::base.html.twig */
class __TwigTemplate_ae27d56b6f8dc576855846d138f94ce77a2a39355e0b4dc029462d67635bfeba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_acf1476ddf5cb9d4cd6dc58f58bae69f70738f2b15fb3a184f0a8f7974103118 = $this->env->getExtension("native_profiler");
        $__internal_acf1476ddf5cb9d4cd6dc58f58bae69f70738f2b15fb3a184f0a8f7974103118->enter($__internal_acf1476ddf5cb9d4cd6dc58f58bae69f70738f2b15fb3a184f0a8f7974103118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>
        ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/imietoto/images/favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
<div id=\"container\">
    <div id=\"header\">
        <div class=\"content\">
            <h1><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("job_index");
        echo "\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/imietoto/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
                </a></h1>

            <div id=\"sub_header\">
                <div class=\"post\">
                    <h2>Ask for people</h2>
                    <div>
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("job_new");
        echo "\">Post a Job</a>
                    </div>
                </div>

                <div class=\"search\">
                    <h2>Ask for a job</h2>
                    <form action=\"\" method=\"get\">
                        <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                        <input type=\"submit\" value=\"search\" />
                        <div class=\"help\">
                            Enter some keywords (city, country, position, ...)
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id=\"content\">
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 49
            echo "            <div class=\"flash_notice\">
                ";
            // line 50
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 55
            echo "            <div class=\"flash_error\">
                ";
            // line 56
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
        <div class=\"content\">
            ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "        </div>
    </div>

    <div id=\"footer\">
        <div class=\"content\">
                   <span class=\"symfony\">
                       <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/imietoto/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
                           powered by <a href=\"http://www.symfony.com/\">
                           <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/imietoto/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
                       </a>
                   </span>
            <ul>
                <li><a href=\"\">About Jobeet</a></li>
                <li class=\"feed\"><a href=\"\">Full feed</a></li>
                <li><a href=\"\">Jobeet API</a></li>
                <li class=\"last\"><a href=\"\">Affiliates</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_acf1476ddf5cb9d4cd6dc58f58bae69f70738f2b15fb3a184f0a8f7974103118->leave($__internal_acf1476ddf5cb9d4cd6dc58f58bae69f70738f2b15fb3a184f0a8f7974103118_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dcc7a2e6b58e937458f45be86efe3e6b270ed9d58e1d1f924a38699b40f8529 = $this->env->getExtension("native_profiler");
        $__internal_0dcc7a2e6b58e937458f45be86efe3e6b270ed9d58e1d1f924a38699b40f8529->enter($__internal_0dcc7a2e6b58e937458f45be86efe3e6b270ed9d58e1d1f924a38699b40f8529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "            Jobeet - Your best job board
        ";
        
        $__internal_0dcc7a2e6b58e937458f45be86efe3e6b270ed9d58e1d1f924a38699b40f8529->leave($__internal_0dcc7a2e6b58e937458f45be86efe3e6b270ed9d58e1d1f924a38699b40f8529_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_13be5c58fe94ae4ceefb4a02b454cede3f91ca7ad654a6475c5e308341003112 = $this->env->getExtension("native_profiler");
        $__internal_13be5c58fe94ae4ceefb4a02b454cede3f91ca7ad654a6475c5e308341003112->enter($__internal_13be5c58fe94ae4ceefb4a02b454cede3f91ca7ad654a6475c5e308341003112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/imietoto/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        
        $__internal_13be5c58fe94ae4ceefb4a02b454cede3f91ca7ad654a6475c5e308341003112->leave($__internal_13be5c58fe94ae4ceefb4a02b454cede3f91ca7ad654a6475c5e308341003112_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6ce004fa3e6ab853e3fc688cfe90a2b83e00af3fce6748f8c8f02b6c38340d3a = $this->env->getExtension("native_profiler");
        $__internal_6ce004fa3e6ab853e3fc688cfe90a2b83e00af3fce6748f8c8f02b6c38340d3a->enter($__internal_6ce004fa3e6ab853e3fc688cfe90a2b83e00af3fce6748f8c8f02b6c38340d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        
        $__internal_6ce004fa3e6ab853e3fc688cfe90a2b83e00af3fce6748f8c8f02b6c38340d3a->leave($__internal_6ce004fa3e6ab853e3fc688cfe90a2b83e00af3fce6748f8c8f02b6c38340d3a_prof);

    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        $__internal_674d0b614e29f2000e805dc8be432699d279bc36c910b0dbbf1e9ad553c4c435 = $this->env->getExtension("native_profiler");
        $__internal_674d0b614e29f2000e805dc8be432699d279bc36c910b0dbbf1e9ad553c4c435->enter($__internal_674d0b614e29f2000e805dc8be432699d279bc36c910b0dbbf1e9ad553c4c435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 62
        echo "            ";
        
        $__internal_674d0b614e29f2000e805dc8be432699d279bc36c910b0dbbf1e9ad553c4c435->leave($__internal_674d0b614e29f2000e805dc8be432699d279bc36c910b0dbbf1e9ad553c4c435_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 62,  207 => 61,  200 => 14,  194 => 13,  184 => 11,  178 => 10,  170 => 6,  164 => 5,  143 => 71,  138 => 69,  130 => 63,  128 => 61,  124 => 59,  115 => 56,  112 => 55,  108 => 54,  105 => 53,  96 => 50,  93 => 49,  89 => 48,  67 => 29,  57 => 22,  53 => 21,  43 => 15,  40 => 13,  38 => 10,  34 => 8,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>*/
/*         {% block title %}*/
/*             Jobeet - Your best job board*/
/*         {% endblock %}*/
/*     </title>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/imietoto/css/main.css') }}" type="text/css" media="all" />*/
/*     {% endblock %}*/
/*     {% block javascripts %}*/
/*     {% endblock %}*/
/*     <link rel="shortcut icon" href="{{ asset('bundles/imietoto/images/favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* <div id="container">*/
/*     <div id="header">*/
/*         <div class="content">*/
/*             <h1><a href="{{ path('job_index') }}">*/
/*                     <img src="{{ asset('bundles/imietoto/images/logo.jpg') }}" alt="Jobeet Job Board" />*/
/*                 </a></h1>*/
/* */
/*             <div id="sub_header">*/
/*                 <div class="post">*/
/*                     <h2>Ask for people</h2>*/
/*                     <div>*/
/*                         <a href="{{ path('job_new') }}">Post a Job</a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="search">*/
/*                     <h2>Ask for a job</h2>*/
/*                     <form action="" method="get">*/
/*                         <input type="text" name="keywords" id="search_keywords" />*/
/*                         <input type="submit" value="search" />*/
/*                         <div class="help">*/
/*                             Enter some keywords (city, country, position, ...)*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="content">*/
/*         {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*             <div class="flash_notice">*/
/*                 {{ flashMessage }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         {% for flashMessage in app.session.flashbag.get('error') %}*/
/*             <div class="flash_error">*/
/*                 {{ flashMessage }}*/
/*             </div>*/
/*         {% endfor %}*/
/* */
/*         <div class="content">*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="footer">*/
/*         <div class="content">*/
/*                    <span class="symfony">*/
/*                        <img src="{{ asset('bundles/imietoto/images/jobeet-mini.png') }}" />*/
/*                            powered by <a href="http://www.symfony.com/">*/
/*                            <img src="{{ asset('bundles/imietoto/images/symfony.gif') }}" alt="symfony framework" />*/
/*                        </a>*/
/*                    </span>*/
/*             <ul>*/
/*                 <li><a href="">About Jobeet</a></li>*/
/*                 <li class="feed"><a href="">Full feed</a></li>*/
/*                 <li><a href="">Jobeet API</a></li>*/
/*                 <li class="last"><a href="">Affiliates</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/

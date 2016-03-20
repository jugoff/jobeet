<?php

/* :job:index.html.twig */
class __TwigTemplate_3e2924088ea3eb6cb3dc5aa14b824b6ead60365d3253142fa3e3c476674a02d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc964723fb3a46d500082a5f393bef00a5a441682a138f4602b71e858823a379 = $this->env->getExtension("native_profiler");
        $__internal_dc964723fb3a46d500082a5f393bef00a5a441682a138f4602b71e858823a379->enter($__internal_dc964723fb3a46d500082a5f393bef00a5a441682a138f4602b71e858823a379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc964723fb3a46d500082a5f393bef00a5a441682a138f4602b71e858823a379->leave($__internal_dc964723fb3a46d500082a5f393bef00a5a441682a138f4602b71e858823a379_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b7e1567465e33c4078f2ace52c49eb8a0f0f1cc3b23ce8282a9d2ad3a0975963 = $this->env->getExtension("native_profiler");
        $__internal_b7e1567465e33c4078f2ace52c49eb8a0f0f1cc3b23ce8282a9d2ad3a0975963->enter($__internal_b7e1567465e33c4078f2ace52c49eb8a0f0f1cc3b23ce8282a9d2ad3a0975963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/imietoto/css/jobs.css"), "html", null, true);
        echo " type=\"text/css\" media=\"all\" />

";
        
        $__internal_b7e1567465e33c4078f2ace52c49eb8a0f0f1cc3b23ce8282a9d2ad3a0975963->leave($__internal_b7e1567465e33c4078f2ace52c49eb8a0f0f1cc3b23ce8282a9d2ad3a0975963_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_93139b0554146fffb219c3b11c605473b75cdc9a603ae1621e5b08c910ced227 = $this->env->getExtension("native_profiler");
        $__internal_93139b0554146fffb219c3b11c605473b75cdc9a603ae1621e5b08c910ced227->enter($__internal_93139b0554146fffb219c3b11c605473b75cdc9a603ae1621e5b08c910ced227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1>job list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Company</th>
                <th>Logo</th>
                <th>Url</th>
                <th>Position</th>
                <th>Location</th>
                <th>Description</th>
                <th>Howtoapply</th>
                <th>Topken</th>
                <th>Ispublic</th>
                <th>Isactivated</th>
                <th>Email</th>
                <th>Expiresat</th>
                <th>Createdat</th>
                <th>Updatedat</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 35
            echo "            <tr>
                <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Imie_job_show", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "logo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "url", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "howToApply", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "topken", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            if ($this->getAttribute($context["job"], "isPublic", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 47
            if ($this->getAttribute($context["job"], "isActivated", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 49
            if ($this->getAttribute($context["job"], "expiresAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "expiresAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 50
            if ($this->getAttribute($context["job"], "createdAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "createdAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 51
            if ($this->getAttribute($context["job"], "updatedAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "updatedAt", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Imie_job_show", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Imie_job_edit", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("job_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_93139b0554146fffb219c3b11c605473b75cdc9a603ae1621e5b08c910ced227->leave($__internal_93139b0554146fffb219c3b11c605473b75cdc9a603ae1621e5b08c910ced227_prof);

    }

    public function getTemplateName()
    {
        return ":job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 69,  193 => 64,  181 => 58,  175 => 55,  166 => 51,  160 => 50,  154 => 49,  150 => 48,  142 => 47,  134 => 46,  130 => 45,  126 => 44,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  106 => 39,  102 => 38,  98 => 37,  92 => 36,  89 => 35,  85 => 34,  58 => 9,  52 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href={{ asset('bundles/imietoto/css/jobs.css') }} type="text/css" media="all" />*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <h1>job list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Type</th>*/
/*                 <th>Company</th>*/
/*                 <th>Logo</th>*/
/*                 <th>Url</th>*/
/*                 <th>Position</th>*/
/*                 <th>Location</th>*/
/*                 <th>Description</th>*/
/*                 <th>Howtoapply</th>*/
/*                 <th>Topken</th>*/
/*                 <th>Ispublic</th>*/
/*                 <th>Isactivated</th>*/
/*                 <th>Email</th>*/
/*                 <th>Expiresat</th>*/
/*                 <th>Createdat</th>*/
/*                 <th>Updatedat</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for job in jobs %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('Imie_job_show', { 'id': job.id }) }}">{{ job.id }}</a></td>*/
/*                 <td>{{ job.type }}</td>*/
/*                 <td>{{ job.company }}</td>*/
/*                 <td>{{ job.logo }}</td>*/
/*                 <td>{{ job.url }}</td>*/
/*                 <td>{{ job.position }}</td>*/
/*                 <td>{{ job.location }}</td>*/
/*                 <td>{{ job.description }}</td>*/
/*                 <td>{{ job.howToApply }}</td>*/
/*                 <td>{{ job.topken }}</td>*/
/*                 <td>{% if job.isPublic %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{% if job.isActivated %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{{ job.email }}</td>*/
/*                 <td>{% if job.expiresAt %}{{ job.expiresAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if job.createdAt %}{{ job.createdAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if job.updatedAt %}{{ job.updatedAt|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('Imie_job_show', { 'id': job.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('Imie_job_edit', { 'id': job.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('job_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

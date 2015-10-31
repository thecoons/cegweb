<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_67a93d9d3a1eb6e9ccf466f709f83f9c4e9066b97828a739ce4cfb8b1841916d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0674b4c958d216b5ab51fbe3645bd358d61942e9e5eb4228f91d83e5f339eb7b = $this->env->getExtension("native_profiler");
        $__internal_0674b4c958d216b5ab51fbe3645bd358d61942e9e5eb4228f91d83e5f339eb7b->enter($__internal_0674b4c958d216b5ab51fbe3645bd358d61942e9e5eb4228f91d83e5f339eb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0674b4c958d216b5ab51fbe3645bd358d61942e9e5eb4228f91d83e5f339eb7b->leave($__internal_0674b4c958d216b5ab51fbe3645bd358d61942e9e5eb4228f91d83e5f339eb7b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_be8bc9bfd8c2de810ff9cfd4041d3a359ad6a4a22becd3fb2acd299d9737bab6 = $this->env->getExtension("native_profiler");
        $__internal_be8bc9bfd8c2de810ff9cfd4041d3a359ad6a4a22becd3fb2acd299d9737bab6->enter($__internal_be8bc9bfd8c2de810ff9cfd4041d3a359ad6a4a22becd3fb2acd299d9737bab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_be8bc9bfd8c2de810ff9cfd4041d3a359ad6a4a22becd3fb2acd299d9737bab6->leave($__internal_be8bc9bfd8c2de810ff9cfd4041d3a359ad6a4a22becd3fb2acd299d9737bab6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_35bf8eaf2f2d0ceb99de99f72fa4805fadaceabd328f25ac933029bcc18d676b = $this->env->getExtension("native_profiler");
        $__internal_35bf8eaf2f2d0ceb99de99f72fa4805fadaceabd328f25ac933029bcc18d676b->enter($__internal_35bf8eaf2f2d0ceb99de99f72fa4805fadaceabd328f25ac933029bcc18d676b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_35bf8eaf2f2d0ceb99de99f72fa4805fadaceabd328f25ac933029bcc18d676b->leave($__internal_35bf8eaf2f2d0ceb99de99f72fa4805fadaceabd328f25ac933029bcc18d676b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_08863f737d535d280976d386f5c8f975b1a434b7afb26c7c954d2bba6e15fa65 = $this->env->getExtension("native_profiler");
        $__internal_08863f737d535d280976d386f5c8f975b1a434b7afb26c7c954d2bba6e15fa65->enter($__internal_08863f737d535d280976d386f5c8f975b1a434b7afb26c7c954d2bba6e15fa65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_08863f737d535d280976d386f5c8f975b1a434b7afb26c7c954d2bba6e15fa65->leave($__internal_08863f737d535d280976d386f5c8f975b1a434b7afb26c7c954d2bba6e15fa65_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
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
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */

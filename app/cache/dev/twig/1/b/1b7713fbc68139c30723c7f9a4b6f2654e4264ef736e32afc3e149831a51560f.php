<?php

/* CEGArticleBundle:Default:checkArticle.html.twig */
class __TwigTemplate_5bb4b253213c3022b4d3814a07f7b602868ea171bec4dc47430a76041f1cdbd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CEGApplicationBundle::baseLayout.html.twig", "CEGArticleBundle:Default:checkArticle.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CEGApplicationBundle::baseLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7db49e2511ac71228e6f7a53dcef2c024a37b6bea084c80fb3793e7047f1826a = $this->env->getExtension("native_profiler");
        $__internal_7db49e2511ac71228e6f7a53dcef2c024a37b6bea084c80fb3793e7047f1826a->enter($__internal_7db49e2511ac71228e6f7a53dcef2c024a37b6bea084c80fb3793e7047f1826a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGArticleBundle:Default:checkArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7db49e2511ac71228e6f7a53dcef2c024a37b6bea084c80fb3793e7047f1826a->leave($__internal_7db49e2511ac71228e6f7a53dcef2c024a37b6bea084c80fb3793e7047f1826a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_763bb92e0df60a89fd8de4773b86c7764317779210d38178c8014cfd1e49dabe = $this->env->getExtension("native_profiler");
        $__internal_763bb92e0df60a89fd8de4773b86c7764317779210d38178c8014cfd1e49dabe->enter($__internal_763bb92e0df60a89fd8de4773b86c7764317779210d38178c8014cfd1e49dabe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
  <div class=\"section\">
<div class=\"row\">
  <div class=\"col s12 center\">
    <h3 classe=\"header\">Votre fichier a bien été enregistré.</h3>
  </div>
</div>
<hr class=\"light\">
<div class=\"row\">
  <div class=\"col s12\">
<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ceg_article_list", array("page" => 1));
        echo "\" class=\"btn blue left\">Index Article</a>
<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_update", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" class=\"btn orange right\">Continuer</a>
  </div>
</div>
</div>
</div>
";
        
        $__internal_763bb92e0df60a89fd8de4773b86c7764317779210d38178c8014cfd1e49dabe->leave($__internal_763bb92e0df60a89fd8de4773b86c7764317779210d38178c8014cfd1e49dabe_prof);

    }

    public function getTemplateName()
    {
        return "CEGArticleBundle:Default:checkArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CEGApplicationBundle::baseLayout.html.twig" %}*/
/* {% block body %}*/
/* <div class="container">*/
/*   <div class="section">*/
/* <div class="row">*/
/*   <div class="col s12 center">*/
/*     <h3 classe="header">Votre fichier a bien été enregistré.</h3>*/
/*   </div>*/
/* </div>*/
/* <hr class="light">*/
/* <div class="row">*/
/*   <div class="col s12">*/
/* <a href="{{ path('ceg_article_list',{'page':1})}}" class="btn blue left">Index Article</a>*/
/* <a href="{{ path('ceg_article_update',{'id':id})}}" class="btn orange right">Continuer</a>*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* {% endblock body %}*/
/* */

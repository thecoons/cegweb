<?php

/* CEGArticleBundle:Default:indexArticle.html.twig */
class __TwigTemplate_ad3513d2d1b6480c3913433cb5c6c156ff32d30aecf895e2a773d3525792587b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CEGApplicationBundle::baseLayout.html.twig", "CEGArticleBundle:Default:indexArticle.html.twig", 1);
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
        $__internal_d9eb4cf1d729eb6d8ce30d4b81f758ece2ec180d3b83a66257540c6cb8ff5777 = $this->env->getExtension("native_profiler");
        $__internal_d9eb4cf1d729eb6d8ce30d4b81f758ece2ec180d3b83a66257540c6cb8ff5777->enter($__internal_d9eb4cf1d729eb6d8ce30d4b81f758ece2ec180d3b83a66257540c6cb8ff5777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGArticleBundle:Default:indexArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9eb4cf1d729eb6d8ce30d4b81f758ece2ec180d3b83a66257540c6cb8ff5777->leave($__internal_d9eb4cf1d729eb6d8ce30d4b81f758ece2ec180d3b83a66257540c6cb8ff5777_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_619291aca3937bc52f4b705923de94ef9685e6bb00e2499bfe01678069ff62ac = $this->env->getExtension("native_profiler");
        $__internal_619291aca3937bc52f4b705923de94ef9685e6bb00e2499bfe01678069ff62ac->enter($__internal_619291aca3937bc52f4b705923de94ef9685e6bb00e2499bfe01678069ff62ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section class=\"bg-primary\">
  <div class=\"container\">


    <div class=\"row\">
      <div class=\"col-lg-8  col-lg-offset-2 text-center\">
        <h2 class=\"section-heading\">\"Aux Dernières Nouvelles\"</h2>
        <hr class=\"light\">
        <p class=\"text-faded\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.!</p>
        <hr class=\"light\">
      </div>
    </div>
      </div>
</section>
<section>
<div class=\"container\">
  <div class=\"row\">
    <div class=\"col-lg-8 col-lg-offset-2 text-center\">
      <h2 class=\"section-heading\">Index des Articles</h2>
      <br>
      <hr class=\"primary\">
      <br>
    </div>
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 27
            echo "  <div class=\"row\">
    <div class=\"col-lg-offset-2 col-lg-8\">
      <div class=\"media\">
  <div class=\"media-left\">
    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\">
      <img class=\"media-object\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["article"], "getHeaderArticle", array(), "method", false, true), "getUrlWay", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["article"], "getHeaderArticle", array(), "method", false, true), "getUrlWay", array(), "method"), "/bundles/cegapplication/img/portfolio/2.jpg")) : ("/bundles/cegapplication/img/portfolio/2.jpg")), "html", null, true);
            echo "\" alt=\"...\">
    </a>
    <br>
      <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\">Supprimer</a>
      <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_update", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning btn-xs pull-right\">Mise à jour</a>
  </div>
  <div class=\"media-body\">
    <h3 class=\"media-heading\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "artclTitle", array()), "html", null, true);
            echo "</h3>
    <p class=\"text-right\"><small>Posté le ";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "artclDate", array()), "m/d/y"), "html", null, true);
            echo "</small></p>
    ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "artclContent", array()), "html", null, true);
            echo "
    <br>
    <p class=\"text-right\"><small>Publier par TheCoon</small></p>
  </div>
</div>
    </div>
  </div>
  ";
            // line 48
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 49
                echo "  <br>
  <hr class=\"primary\">
  <br>
  ";
            }
            // line 53
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
</div>


</section>
<section class=\"bg-primary\">
  <div class=\"container\">

    <div class=\"navigation text-center\">
        ";
        // line 63
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>


</section>
";
        
        $__internal_619291aca3937bc52f4b705923de94ef9685e6bb00e2499bfe01678069ff62ac->leave($__internal_619291aca3937bc52f4b705923de94ef9685e6bb00e2499bfe01678069ff62ac_prof);

    }

    public function getTemplateName()
    {
        return "CEGArticleBundle:Default:indexArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 63,  150 => 54,  136 => 53,  130 => 49,  128 => 48,  118 => 41,  114 => 40,  110 => 39,  104 => 36,  100 => 35,  92 => 32,  88 => 31,  82 => 27,  65 => 26,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CEGApplicationBundle::baseLayout.html.twig" %}*/
/* {% block body %}*/
/* <section class="bg-primary">*/
/*   <div class="container">*/
/* */
/* */
/*     <div class="row">*/
/*       <div class="col-lg-8  col-lg-offset-2 text-center">*/
/*         <h2 class="section-heading">"Aux Dernières Nouvelles"</h2>*/
/*         <hr class="light">*/
/*         <p class="text-faded">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.!</p>*/
/*         <hr class="light">*/
/*       </div>*/
/*     </div>*/
/*       </div>*/
/* </section>*/
/* <section>*/
/* <div class="container">*/
/*   <div class="row">*/
/*     <div class="col-lg-8 col-lg-offset-2 text-center">*/
/*       <h2 class="section-heading">Index des Articles</h2>*/
/*       <br>*/
/*       <hr class="primary">*/
/*       <br>*/
/*     </div>*/
/*   {% for article in pagination %}*/
/*   <div class="row">*/
/*     <div class="col-lg-offset-2 col-lg-8">*/
/*       <div class="media">*/
/*   <div class="media-left">*/
/*     <a href="{{ path('ceg_article_show',{'id':article.id})}}">*/
/*       <img class="media-object" src="{{web_path}}/{{article.getHeaderArticle().getUrlWay() | default('/bundles/cegapplication/img/portfolio/2.jpg')}}" alt="...">*/
/*     </a>*/
/*     <br>*/
/*       <a href="{{ path('ceg_article_delete',{'id':article.id})}}" class="btn btn-danger btn-xs">Supprimer</a>*/
/*       <a href="{{ path('ceg_article_update',{'id':article.id})}}" class="btn btn-warning btn-xs pull-right">Mise à jour</a>*/
/*   </div>*/
/*   <div class="media-body">*/
/*     <h3 class="media-heading">{{article.artclTitle}}</h3>*/
/*     <p class="text-right"><small>Posté le {{article.artclDate|date("m/d/y")}}</small></p>*/
/*     {{article.artclContent}}*/
/*     <br>*/
/*     <p class="text-right"><small>Publier par TheCoon</small></p>*/
/*   </div>*/
/* </div>*/
/*     </div>*/
/*   </div>*/
/*   {% if not loop.last %}*/
/*   <br>*/
/*   <hr class="primary">*/
/*   <br>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/* */
/* </div>*/
/* */
/* */
/* </section>*/
/* <section class="bg-primary">*/
/*   <div class="container">*/
/* */
/*     <div class="navigation text-center">*/
/*         {{ knp_pagination_render(pagination) }}*/
/*     </div>*/
/* */
/* */
/* </section>*/
/* {% endblock body %}*/
/* */

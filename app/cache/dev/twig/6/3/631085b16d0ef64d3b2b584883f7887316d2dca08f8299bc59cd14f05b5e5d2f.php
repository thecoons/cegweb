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
        $__internal_0462a54ef78f9bd4ff414573e786c93aebe204d16a21fff59bc39005431c22c5 = $this->env->getExtension("native_profiler");
        $__internal_0462a54ef78f9bd4ff414573e786c93aebe204d16a21fff59bc39005431c22c5->enter($__internal_0462a54ef78f9bd4ff414573e786c93aebe204d16a21fff59bc39005431c22c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGArticleBundle:Default:indexArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0462a54ef78f9bd4ff414573e786c93aebe204d16a21fff59bc39005431c22c5->leave($__internal_0462a54ef78f9bd4ff414573e786c93aebe204d16a21fff59bc39005431c22c5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_379cc1a37b822605e3ba7f7eb9d70e918c369af54ccc049c60740fe250f41bd5 = $this->env->getExtension("native_profiler");
        $__internal_379cc1a37b822605e3ba7f7eb9d70e918c369af54ccc049c60740fe250f41bd5->enter($__internal_379cc1a37b822605e3ba7f7eb9d70e918c369af54ccc049c60740fe250f41bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section class=\"bg-primary\">
  <div class=\"container\">

    <div class=\"row\">


      <div class=\"col s12 center\">
        <h2 class=\"header blue-text\">\"Aux Dernières Nouvelles\"</h2>
        <div class=\"divider blue\"></div>
        <p class=\"grey-text text-darken-1\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.!</p>
      </div>
    </div>
  </div>
</section>
<section class=\"blue\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col s12 center\">
        <h2 class=\"header white-text\">Index des Articles</h2>
        <div class=\"divider\"></div>
        <br>
      </div>
      <div class=\"row\">

        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 28
            echo "        <div class=\"col s12 l6\">

          <div class=\"card medium z-depth-3\">
            <div class=\"card-image valign-wrapper waves-effect waves-block waves-light\">
              <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" clas=\"valign\">
                <img  class=\"responsive-img \" src=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["article"], "getHeaderArticle", array(), "method", false, true), "getUrlWay", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["article"], "getHeaderArticle", array(), "method", false, true), "getUrlWay", array(), "method"), "/bundles/cegapplication/img/portfolio/2.jpg")) : ("/bundles/cegapplication/img/portfolio/2.jpg")), "html", null, true);
            echo "\" alt=\"\">
              </a>
            </div>
            <div class=\"card-content\">
              <span class=\"card-title grey-text text-darken-4 left truncate\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "artclTitle", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"card-action\">
              <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_update", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"btn orange white-text left\">Mise à jour</a>
              <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"btn red right white-text\">Supprimer</a>
            </div>

          </div>

        </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "      </div>

    </div>

  </div>
</div>
</section>
<section >
  <div class=\"container\">


    ";
        // line 60
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "



  </section>
  ";
        
        $__internal_379cc1a37b822605e3ba7f7eb9d70e918c369af54ccc049c60740fe250f41bd5->leave($__internal_379cc1a37b822605e3ba7f7eb9d70e918c369af54ccc049c60740fe250f41bd5_prof);

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
        return array (  126 => 60,  113 => 49,  99 => 41,  95 => 40,  89 => 37,  80 => 33,  76 => 32,  70 => 28,  66 => 27,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CEGApplicationBundle::baseLayout.html.twig" %}*/
/* {% block body %}*/
/* <section class="bg-primary">*/
/*   <div class="container">*/
/* */
/*     <div class="row">*/
/* */
/* */
/*       <div class="col s12 center">*/
/*         <h2 class="header blue-text">"Aux Dernières Nouvelles"</h2>*/
/*         <div class="divider blue"></div>*/
/*         <p class="grey-text text-darken-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.!</p>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* <section class="blue">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col s12 center">*/
/*         <h2 class="header white-text">Index des Articles</h2>*/
/*         <div class="divider"></div>*/
/*         <br>*/
/*       </div>*/
/*       <div class="row">*/
/* */
/*         {% for article in pagination %}*/
/*         <div class="col s12 l6">*/
/* */
/*           <div class="card medium z-depth-3">*/
/*             <div class="card-image valign-wrapper waves-effect waves-block waves-light">*/
/*               <a href="{{ path('ceg_article_show',{'id':article.id})}}" clas="valign">*/
/*                 <img  class="responsive-img " src="{{web_path}}/{{article.getHeaderArticle().getUrlWay() | default('/bundles/cegapplication/img/portfolio/2.jpg')}}" alt="">*/
/*               </a>*/
/*             </div>*/
/*             <div class="card-content">*/
/*               <span class="card-title grey-text text-darken-4 left truncate">{{article.artclTitle}}</span>*/
/*             </div>*/
/*             <div class="card-action">*/
/*               <a href="{{ path('ceg_article_update',{'id':article.id})}}" class="btn orange white-text left">Mise à jour</a>*/
/*               <a href="{{ path('ceg_article_delete',{'id':article.id})}}" class="btn red right white-text">Supprimer</a>*/
/*             </div>*/
/* */
/*           </div>*/
/* */
/*         </div>*/
/* */
/*         {% endfor %}*/
/*       </div>*/
/* */
/*     </div>*/
/* */
/*   </div>*/
/* </div>*/
/* </section>*/
/* <section >*/
/*   <div class="container">*/
/* */
/* */
/*     {{ knp_pagination_render(pagination) }}*/
/* */
/* */
/* */
/*   </section>*/
/*   {% endblock body %}*/
/* */

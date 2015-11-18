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
        $__internal_53eeee2efcbbfd845683df0ab7a017ac3266d3963ab00f8b2e5a37031e994a1f = $this->env->getExtension("native_profiler");
        $__internal_53eeee2efcbbfd845683df0ab7a017ac3266d3963ab00f8b2e5a37031e994a1f->enter($__internal_53eeee2efcbbfd845683df0ab7a017ac3266d3963ab00f8b2e5a37031e994a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGArticleBundle:Default:indexArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53eeee2efcbbfd845683df0ab7a017ac3266d3963ab00f8b2e5a37031e994a1f->leave($__internal_53eeee2efcbbfd845683df0ab7a017ac3266d3963ab00f8b2e5a37031e994a1f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_78abbd0ae4432e2197cacab16f3502e1a391ca262934e6ffc6c73182fc894623 = $this->env->getExtension("native_profiler");
        $__internal_78abbd0ae4432e2197cacab16f3502e1a391ca262934e6ffc6c73182fc894623->enter($__internal_78abbd0ae4432e2197cacab16f3502e1a391ca262934e6ffc6c73182fc894623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 26
            echo "        <div class=\"col s12 l6\">

          <div class=\"card medium z-depth-3\">
            <div class=\"card-image valign-wrapper waves-effect waves-block waves-light\">
              <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" clas=\"valign\">
                <img  class=\"responsive-img \" src=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["article"], "getHeaderArticle", array(), "method", false, true), "getUrlWay", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["article"], "getHeaderArticle", array(), "method", false, true), "getUrlWay", array(), "method"), "/bundles/cegapplication/img/portfolio/2.jpg")) : ("/bundles/cegapplication/img/portfolio/2.jpg")), "html", null, true);
            echo "\" alt=\"\">
              </a>
            </div>
            <div class=\"card-content\">
              <span class=\"card-title blue-text text-darken-4 left truncate\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "artclTitle", array()), "html", null, true);
            echo "</span>
              <br>
              <div class=\"row\">

                <p class=\"small right blue-text\">
                  posté le ";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "artclDate", array()), "m/d/Y"), "html", null, true);
            echo "
                </p>
              </div>
              ";
            // line 43
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "roles", array(), "any", true, true)) {
                // line 44
                echo "              <div class=\"row\">
                <p class=\"truncate\">";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "artclContent", array()), "html", null, true);
                echo "</p>
              </div>
              ";
            }
            // line 48
            echo "            </div>
            ";
            // line 49
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "roles", array(), "any", true, true) && twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())))) {
                // line 50
                echo "              ";
                if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                    // line 51
                    echo "            <div class=\"card-action\">
            <a href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_update", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn orange white-text left\">Mise à jour</a>
            <a href=\"";
                    // line 53
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn red right white-text\">Supprimer</a>
            </div>
          ";
                }
                // line 56
                echo "        ";
            }
            // line 57
            echo "
        </div>
        </div>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "      </div>

      </div>

      </div>
      </div>
      </section>
      <section >
      <div class=\"container\">


      ";
        // line 73
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "



      </section>
    ";
        
        $__internal_78abbd0ae4432e2197cacab16f3502e1a391ca262934e6ffc6c73182fc894623->leave($__internal_78abbd0ae4432e2197cacab16f3502e1a391ca262934e6ffc6c73182fc894623_prof);

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
        return array (  159 => 73,  146 => 62,  136 => 57,  133 => 56,  127 => 53,  123 => 52,  120 => 51,  117 => 50,  115 => 49,  112 => 48,  106 => 45,  103 => 44,  101 => 43,  95 => 40,  87 => 35,  78 => 31,  74 => 30,  68 => 26,  64 => 25,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CEGApplicationBundle::baseLayout.html.twig" %}*/
/* {% block body %}*/
/* <section class="bg-primary">*/
/*   <div class="container">*/
/* */
/*     <div class="row">*/
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
/*               <span class="card-title blue-text text-darken-4 left truncate">{{article.artclTitle}}</span>*/
/*               <br>*/
/*               <div class="row">*/
/* */
/*                 <p class="small right blue-text">*/
/*                   posté le {{ article.artclDate|date("m/d/Y") }}*/
/*                 </p>*/
/*               </div>*/
/*               {% if app.user.roles is not defined %}*/
/*               <div class="row">*/
/*                 <p class="truncate">{{ article.artclContent }}</p>*/
/*               </div>*/
/*               {% endif %}*/
/*             </div>*/
/*             {% if app.user.roles is defined and 'ROLE_ADMIN' in app.user.roles %}*/
/*               {% if 'ROLE_ADMIN' in app.user.roles  %}*/
/*             <div class="card-action">*/
/*             <a href="{{ path('ceg_article_update',{'id':article.id})}}" class="btn orange white-text left">Mise à jour</a>*/
/*             <a href="{{ path('ceg_article_delete',{'id':article.id})}}" class="btn red right white-text">Supprimer</a>*/
/*             </div>*/
/*           {% endif %}*/
/*         {% endif %}*/
/* */
/*         </div>*/
/*         </div>*/
/* */
/*       {% endfor %}*/
/*       </div>*/
/* */
/*       </div>*/
/* */
/*       </div>*/
/*       </div>*/
/*       </section>*/
/*       <section >*/
/*       <div class="container">*/
/* */
/* */
/*       {{ knp_pagination_render(pagination) }}*/
/* */
/* */
/* */
/*       </section>*/
/*     {% endblock body %}*/
/* */

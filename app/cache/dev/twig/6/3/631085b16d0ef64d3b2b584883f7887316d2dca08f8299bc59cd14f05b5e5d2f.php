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
        $__internal_e8a216e84ea1314b54f178552549d1e3e2f58f15587eb39b78b81c431b9467f9 = $this->env->getExtension("native_profiler");
        $__internal_e8a216e84ea1314b54f178552549d1e3e2f58f15587eb39b78b81c431b9467f9->enter($__internal_e8a216e84ea1314b54f178552549d1e3e2f58f15587eb39b78b81c431b9467f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGArticleBundle:Default:indexArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8a216e84ea1314b54f178552549d1e3e2f58f15587eb39b78b81c431b9467f9->leave($__internal_e8a216e84ea1314b54f178552549d1e3e2f58f15587eb39b78b81c431b9467f9_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe3e49f2ebdcec5f971778fe10d33af393d8a5e6a8a7a2225ee45f8f3396e74c = $this->env->getExtension("native_profiler");
        $__internal_fe3e49f2ebdcec5f971778fe10d33af393d8a5e6a8a7a2225ee45f8f3396e74c->enter($__internal_fe3e49f2ebdcec5f971778fe10d33af393d8a5e6a8a7a2225ee45f8f3396e74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section class=\"bg-primary\">
  <div class=\"container\">

    <div class=\"row\">
      <div class=\"col s12 center\">
        <h2 class=\"header blue-text\">\"Aux Dernières Nouvelles\"</h2>
        <div class=\"divider blue\"></div>
        <!-- <p class=\"grey-text text-darken-1\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.!</p> -->
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
        <div class=\"row \">
          <div class=\"col s3 \">
          <a class=\"waves-effect waves-light btn blue darken-2\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_list", array("page" => 1, "type" => "Information")), "html", null, true);
        echo "\">Information</a>
          </div>
          <div class=\"col s3 \">
          <a class=\"waves-effect waves-light btn blue darken-2\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_list", array("page" => 1, "type" => "Stage")), "html", null, true);
        echo "\">Stage</a>
          </div>
          <div class=\"col s3 \">
          <a class=\"waves-effect waves-light btn blue darken-2\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_list", array("page" => 1, "type" => "Compétition")), "html", null, true);
        echo "\">Compétition</a>
          </div>
          <div class=\"col s3 \">
          <a class=\"waves-effect waves-light btn blue darken-2\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_list", array("page" => 1, "type" => "Résultat")), "html", null, true);
        echo "\">Résultat</a>
          </div>
        </div>
        <br>
        <div class=\"divider\">

        </div>
      </div>
      <div class=\"row\">

        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 44
            echo "        <div class=\"col s12 l6\">

          <div class=\"card medium z-depth-3\">
            <div class=\"card-image valign-wrapper waves-effect waves-block waves-light\">
              <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" clas=\"valign\">
                <img  class=\"responsive-img \" src=\"";
            // line 49
            echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($context["article"], "getHeaderArticle", array(), "method", false, true), "getUrlWay", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["article"], "getHeaderArticle", array(), "method", false, true), "getUrlWay", array(), "method"), "/bundles/cegapplication/img/portfolio/2.jpg")) : ("/bundles/cegapplication/img/portfolio/2.jpg")), "html", null, true);
            echo "\" alt=\"\">
              </a>
            </div>
            <div class=\"card-content\">
              <div class=\"row\">

              <span class=\"card-title blue-text text-darken-4 left truncate\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "artclTitle", array()), "html", null, true);
            echo "</span>
              </div>

              <br>
              <div class=\"row\">

                <p class=\"small left blue-text\">
                  ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "artclType", array()), "html", null, true);
            echo "
                </p>
                <p class=\"small right blue-text\">
                  posté le ";
            // line 65
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "artclDate", array()), "m/d/Y"), "html", null, true);
            echo "
                </p>
              </div>

              ";
            // line 69
            if ( !$this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "roles", array(), "any", true, true)) {
                // line 70
                echo "              <div class=\"row\">
                <p class=\"truncate\"></p>
              </div>
              ";
            }
            // line 74
            echo "            </div>
            ";
            // line 75
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "roles", array(), "any", true, true) && twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array())))) {
                // line 76
                echo "            ";
                if (twig_in_filter("ROLE_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                    // line 77
                    echo "
            <div class=\"card-action\">
            <div class=\"row\">
              <a href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_update", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn orange white-text left\">Mise à jour</a>
              <a href=\"";
                    // line 81
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_delete", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn red right white-text\">Supprimer</a>
            </div>
            </div>
            ";
                }
                // line 85
                echo "            ";
            }
            // line 86
            echo "
          </div>
        </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "      </div>

    </div>

  </div>
</div>
</section>
<section >
  <div class=\"container\">


    ";
        // line 102
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "



  </section>
  ";
        
        $__internal_fe3e49f2ebdcec5f971778fe10d33af393d8a5e6a8a7a2225ee45f8f3396e74c->leave($__internal_fe3e49f2ebdcec5f971778fe10d33af393d8a5e6a8a7a2225ee45f8f3396e74c_prof);

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
        return array (  200 => 102,  187 => 91,  177 => 86,  174 => 85,  167 => 81,  163 => 80,  158 => 77,  155 => 76,  153 => 75,  150 => 74,  144 => 70,  142 => 69,  135 => 65,  129 => 62,  119 => 55,  108 => 49,  104 => 48,  98 => 44,  94 => 43,  81 => 33,  75 => 30,  69 => 27,  63 => 24,  40 => 3,  34 => 2,  11 => 1,);
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
/*         <!-- <p class="grey-text text-darken-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.!</p> -->*/
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
/*         <div class="row ">*/
/*           <div class="col s3 ">*/
/*           <a class="waves-effect waves-light btn blue darken-2" href="{{path('ceg_article_list',{'page':1,'type':'Information'})}}">Information</a>*/
/*           </div>*/
/*           <div class="col s3 ">*/
/*           <a class="waves-effect waves-light btn blue darken-2" href="{{path('ceg_article_list',{'page':1,'type':'Stage'})}}">Stage</a>*/
/*           </div>*/
/*           <div class="col s3 ">*/
/*           <a class="waves-effect waves-light btn blue darken-2" href="{{path('ceg_article_list',{'page':1,'type':'Compétition'})}}">Compétition</a>*/
/*           </div>*/
/*           <div class="col s3 ">*/
/*           <a class="waves-effect waves-light btn blue darken-2" href="{{path('ceg_article_list',{'page':1,'type':'Résultat'})}}">Résultat</a>*/
/*           </div>*/
/*         </div>*/
/*         <br>*/
/*         <div class="divider">*/
/* */
/*         </div>*/
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
/*               <div class="row">*/
/* */
/*               <span class="card-title blue-text text-darken-4 left truncate">{{article.artclTitle}}</span>*/
/*               </div>*/
/* */
/*               <br>*/
/*               <div class="row">*/
/* */
/*                 <p class="small left blue-text">*/
/*                   {{article.artclType}}*/
/*                 </p>*/
/*                 <p class="small right blue-text">*/
/*                   posté le {{ article.artclDate|date("m/d/Y") }}*/
/*                 </p>*/
/*               </div>*/
/* */
/*               {% if app.user.roles is not defined %}*/
/*               <div class="row">*/
/*                 <p class="truncate"></p>*/
/*               </div>*/
/*               {% endif %}*/
/*             </div>*/
/*             {% if app.user.roles is defined and 'ROLE_ADMIN' in app.user.roles %}*/
/*             {% if 'ROLE_ADMIN' in app.user.roles  %}*/
/* */
/*             <div class="card-action">*/
/*             <div class="row">*/
/*               <a href="{{ path('ceg_article_update',{'id':article.id})}}" class="btn orange white-text left">Mise à jour</a>*/
/*               <a href="{{ path('ceg_article_delete',{'id':article.id})}}" class="btn red right white-text">Supprimer</a>*/
/*             </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endif %}*/
/* */
/*           </div>*/
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

<?php

/* CEGApplicationBundle:Default:index.html.twig */
class __TwigTemplate_48171406ae0d261626a529414ffd726fca86901fdd8b6a62c0756f94f7eb05e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CEGApplicationBundle::baseLayout.html.twig", "CEGApplicationBundle:Default:index.html.twig", 1);
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
        $__internal_6997a891a542b182fb2ced6421442562c1e0d1e147c2f0ba86dbf15c468a7a28 = $this->env->getExtension("native_profiler");
        $__internal_6997a891a542b182fb2ced6421442562c1e0d1e147c2f0ba86dbf15c468a7a28->enter($__internal_6997a891a542b182fb2ced6421442562c1e0d1e147c2f0ba86dbf15c468a7a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGApplicationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6997a891a542b182fb2ced6421442562c1e0d1e147c2f0ba86dbf15c468a7a28->leave($__internal_6997a891a542b182fb2ced6421442562c1e0d1e147c2f0ba86dbf15c468a7a28_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e32c391de9276cedaea5fd864f26fec169c677667773cabced1a70114844781 = $this->env->getExtension("native_profiler");
        $__internal_3e32c391de9276cedaea5fd864f26fec169c677667773cabced1a70114844781->enter($__internal_3e32c391de9276cedaea5fd864f26fec169c677667773cabced1a70114844781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "  <div id=\"index-banner\" class=\"parallax-container\">
    <div class=\"section no-pad-bot\">
      <div class=\"container\">
        <br><br>
        <h1 class=\"header center white-text text-accent-2\">Cercle d'Escrime du Pays de Grasse</h1>
        <div class=\"row center\">
          <h5 class=\"header col s12 light\">Bienvenue sur le site du CEPG.</h5>
        </div>

        <br><br>

      </div>
    </div>
    <div class=\"parallax\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/img/backFencing.jpg\" alt=\"Unsplashed background img 1\"></div>
  </div>


  <div class=\"container\">
    <div class=\"section\">
      <!--   Icon Section   -->
      <div class=\"row\">
        <div class=\"col s12 m3\">
          <div class=\"icon-block\">
            <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ceg_article_list", array("page" => "1", "type" => "tous")), "html", null, true);
        echo "\">
            <h2 class=\"center blue-text\"><i class=\"material-icons\">library_books</i></h2>
            <h5 class=\"center\">Actualités</h5>
            </a>

            <p class=\"light\">Suivez au fil du temps les résultats,les articles, et la vie du club.</p>
          </div>
        </div>

        <div class=\"col s12 m3\">
          <div class=\"icon-block\">
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ceg_application_club");
        echo "\">
            <h2 class=\"center blue-text\"><i class=\"material-icons\">store</i></h2>
            <h5 class=\"center\">Club</h5>
            </a>

            <p class=\"light\">Trouvez tous les renseignements, le calendrier, les classements, nos horaires.</p>
          </div>
        </div>

        <div class=\"col s12 m3\">
          <div class=\"icon-block\">
            <h2 class=\"center blue-text\"><i class=\"material-icons\">language</i></h2>
            <h5 class=\"center\">Liens</h5>

            <p class=\"light\">Accédez aux sites des institutions et référents de l'escrime.</p>
          </div>
        </div>

        <div class=\"col s12 m3\">
          <div class=\"icon-block\">
            <h2 class=\"center blue-text\"><i class=\"material-icons\">stars</i></h2>
            <h5 class=\"center\">Sponsors</h5>

            <p class=\"light\">Découvrez les partenaires qui nous soutiennent.</p>
          </div>
        </div>

      </div>

    </div>
  </div>


  <div class=\"parallax-container valign-wrapper\">
    <div class=\"section no-pad-bot\">
      <div class=\"containe\">
        <div class=\"row center\">
          <h5 class=\"header col s12 light\">Tout le secret des armes ne consiste qu'en deux choses : à donner et à ne pas recevoir.    - Molière -</h5>
        </div>
      </div>
    </div>
    <div class=\"parallax\"><img src=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/img/fencingHeader.jpg\" alt=\"Unsplashed background img 2\"></div>
  </div>


<div class=\"blue\">
  <div class=\"container\">
    <div class=\"section\">

      <div class=\"row\">
        <div class=\"col s12 center\">
          <h3><i class=\"mdi-content-send white-text\"></i></h3>
          <h4><p class=\"white-text\">Nous rencontrer</p></h4>
          <p class=\"left-align light white-text\">Le Cercle d'Escrime Pays de Grasse existe depuis 1970. Une convention est signée entre la Communauté d'agglomeration Pays de Grasse et cette association lois 1901, présidée par Monsieur André Astier. Nous enseignons le fleuret et l'épée dans deux salles. Ce site vous permettra de trouver des reponses à vos questions</p>
        </div>
      </div>

    </div>
  </div>

</div>


  ";
        
        $__internal_3e32c391de9276cedaea5fd864f26fec169c677667773cabced1a70114844781->leave($__internal_3e32c391de9276cedaea5fd864f26fec169c677667773cabced1a70114844781_prof);

    }

    public function getTemplateName()
    {
        return "CEGApplicationBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 78,  82 => 37,  68 => 26,  55 => 16,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CEGApplicationBundle::baseLayout.html.twig" %}*/
/* {% block body %}*/
/*   <div id="index-banner" class="parallax-container">*/
/*     <div class="section no-pad-bot">*/
/*       <div class="container">*/
/*         <br><br>*/
/*         <h1 class="header center white-text text-accent-2">Cercle d'Escrime du Pays de Grasse</h1>*/
/*         <div class="row center">*/
/*           <h5 class="header col s12 light">Bienvenue sur le site du CEPG.</h5>*/
/*         </div>*/
/* */
/*         <br><br>*/
/* */
/*       </div>*/
/*     </div>*/
/*     <div class="parallax"><img src="{{web_path}}/bundles/cegapplication/img/backFencing.jpg" alt="Unsplashed background img 1"></div>*/
/*   </div>*/
/* */
/* */
/*   <div class="container">*/
/*     <div class="section">*/
/*       <!--   Icon Section   -->*/
/*       <div class="row">*/
/*         <div class="col s12 m3">*/
/*           <div class="icon-block">*/
/*             <a href="{{path('ceg_article_list',{page:'1',type:'tous'})}}">*/
/*             <h2 class="center blue-text"><i class="material-icons">library_books</i></h2>*/
/*             <h5 class="center">Actualités</h5>*/
/*             </a>*/
/* */
/*             <p class="light">Suivez au fil du temps les résultats,les articles, et la vie du club.</p>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="col s12 m3">*/
/*           <div class="icon-block">*/
/*             <a href="{{ path('ceg_application_club') }}">*/
/*             <h2 class="center blue-text"><i class="material-icons">store</i></h2>*/
/*             <h5 class="center">Club</h5>*/
/*             </a>*/
/* */
/*             <p class="light">Trouvez tous les renseignements, le calendrier, les classements, nos horaires.</p>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="col s12 m3">*/
/*           <div class="icon-block">*/
/*             <h2 class="center blue-text"><i class="material-icons">language</i></h2>*/
/*             <h5 class="center">Liens</h5>*/
/* */
/*             <p class="light">Accédez aux sites des institutions et référents de l'escrime.</p>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="col s12 m3">*/
/*           <div class="icon-block">*/
/*             <h2 class="center blue-text"><i class="material-icons">stars</i></h2>*/
/*             <h5 class="center">Sponsors</h5>*/
/* */
/*             <p class="light">Découvrez les partenaires qui nous soutiennent.</p>*/
/*           </div>*/
/*         </div>*/
/* */
/*       </div>*/
/* */
/*     </div>*/
/*   </div>*/
/* */
/* */
/*   <div class="parallax-container valign-wrapper">*/
/*     <div class="section no-pad-bot">*/
/*       <div class="containe">*/
/*         <div class="row center">*/
/*           <h5 class="header col s12 light">Tout le secret des armes ne consiste qu'en deux choses : à donner et à ne pas recevoir.    - Molière -</h5>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="parallax"><img src="{{web_path}}/bundles/cegapplication/img/fencingHeader.jpg" alt="Unsplashed background img 2"></div>*/
/*   </div>*/
/* */
/* */
/* <div class="blue">*/
/*   <div class="container">*/
/*     <div class="section">*/
/* */
/*       <div class="row">*/
/*         <div class="col s12 center">*/
/*           <h3><i class="mdi-content-send white-text"></i></h3>*/
/*           <h4><p class="white-text">Nous rencontrer</p></h4>*/
/*           <p class="left-align light white-text">Le Cercle d'Escrime Pays de Grasse existe depuis 1970. Une convention est signée entre la Communauté d'agglomeration Pays de Grasse et cette association lois 1901, présidée par Monsieur André Astier. Nous enseignons le fleuret et l'épée dans deux salles. Ce site vous permettra de trouver des reponses à vos questions</p>*/
/*         </div>*/
/*       </div>*/
/* */
/*     </div>*/
/*   </div>*/
/* */
/* </div>*/
/* */
/* */
/*   {% endblock body %}*/
/* */

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
        $__internal_cf41a47b100864d7d510b6582d11762259bda25513a1a7cbca2728bd818a3295 = $this->env->getExtension("native_profiler");
        $__internal_cf41a47b100864d7d510b6582d11762259bda25513a1a7cbca2728bd818a3295->enter($__internal_cf41a47b100864d7d510b6582d11762259bda25513a1a7cbca2728bd818a3295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGApplicationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf41a47b100864d7d510b6582d11762259bda25513a1a7cbca2728bd818a3295->leave($__internal_cf41a47b100864d7d510b6582d11762259bda25513a1a7cbca2728bd818a3295_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e17b1e169a67e6b74046726b7986b58c89493a1c3f8d763c54519200ded785d = $this->env->getExtension("native_profiler");
        $__internal_8e17b1e169a67e6b74046726b7986b58c89493a1c3f8d763c54519200ded785d->enter($__internal_8e17b1e169a67e6b74046726b7986b58c89493a1c3f8d763c54519200ded785d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('routing')->getPath("ceg_article_list", array("page" => "1"));
        echo "\">
            <h2 class=\"center blue-text\"><i class=\"material-icons\">library_books</i></h2>
            <h5 class=\"center\">Actualités</h5>
            </a>

            <p class=\"light\">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
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

            <p class=\"light\">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class=\"col s12 m3\">
          <div class=\"icon-block\">
            <h2 class=\"center blue-text\"><i class=\"material-icons\">language</i></h2>
            <h5 class=\"center\">Liens</h5>

            <p class=\"light\">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>

        <div class=\"col s12 m3\">
          <div class=\"icon-block\">
            <h2 class=\"center blue-text\"><i class=\"material-icons\">stars</i></h2>
            <h5 class=\"center\">Sponsors</h5>

            <p class=\"light\">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

      </div>

    </div>
  </div>


  <div class=\"parallax-container valign-wrapper\">
    <div class=\"section no-pad-bot\">
      <div class=\"containe\">
        <div class=\"row center\">
          <h5 class=\"header col s12 light\">A modern responsive front-end framework based on Material Design</h5>
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
          <h4><p class=\"white-text\">Contact Us</p></h4>
          <p class=\"left-align light white-text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>

</div>


  ";
        
        $__internal_8e17b1e169a67e6b74046726b7986b58c89493a1c3f8d763c54519200ded785d->leave($__internal_8e17b1e169a67e6b74046726b7986b58c89493a1c3f8d763c54519200ded785d_prof);

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
/*       */
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
/*             <a href="{{path('ceg_article_list',{page:'1'})}}">*/
/*             <h2 class="center blue-text"><i class="material-icons">library_books</i></h2>*/
/*             <h5 class="center">Actualités</h5>*/
/*             </a>*/
/* */
/*             <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>*/
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
/*             <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="col s12 m3">*/
/*           <div class="icon-block">*/
/*             <h2 class="center blue-text"><i class="material-icons">language</i></h2>*/
/*             <h5 class="center">Liens</h5>*/
/* */
/*             <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="col s12 m3">*/
/*           <div class="icon-block">*/
/*             <h2 class="center blue-text"><i class="material-icons">stars</i></h2>*/
/*             <h5 class="center">Sponsors</h5>*/
/* */
/*             <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>*/
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
/*           <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>*/
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
/*           <h4><p class="white-text">Contact Us</p></h4>*/
/*           <p class="left-align light white-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>*/
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

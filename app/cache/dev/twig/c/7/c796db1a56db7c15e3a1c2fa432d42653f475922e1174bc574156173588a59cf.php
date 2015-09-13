<?php

/* CEGApplicationBundle:Default:index.html.twig */
class __TwigTemplate_c796db1a56db7c15e3a1c2fa432d42653f475922e1174bc574156173588a59cf extends Twig_Template
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
        $__internal_699d89b65af86a522275f2a24d6b24b8c9c161d951602ab56efe071c23fbf14c = $this->env->getExtension("native_profiler");
        $__internal_699d89b65af86a522275f2a24d6b24b8c9c161d951602ab56efe071c23fbf14c->enter($__internal_699d89b65af86a522275f2a24d6b24b8c9c161d951602ab56efe071c23fbf14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGApplicationBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_699d89b65af86a522275f2a24d6b24b8c9c161d951602ab56efe071c23fbf14c->leave($__internal_699d89b65af86a522275f2a24d6b24b8c9c161d951602ab56efe071c23fbf14c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0470e880168f6ace6c4c53cebb0b3377c55f66138dcba8c9289b5e71c7879d6 = $this->env->getExtension("native_profiler");
        $__internal_e0470e880168f6ace6c4c53cebb0b3377c55f66138dcba8c9289b5e71c7879d6->enter($__internal_e0470e880168f6ace6c4c53cebb0b3377c55f66138dcba8c9289b5e71c7879d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<header>
  <div class=\"header-content\">
    <div class=\"header-content-inner\">
      <h1>Cercle d'Escrime de Grasse</h1>
      <hr>
      <p>Bienvenue sur le site web du CEG, nous vous souhaitons une bonne navigation</p>
      <!-- <a href=\"#about\" class=\"btn btn-primary btn-xl page-scroll\">Find Out More</a> -->
    </div>
  </div>
</header>

<section id=\"services\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12 text-center\">
        <h2 class=\"section-heading\">Services du site</h2>
        <hr class=\"primary\">
      </div>
    </div>
  </div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-3 col-md-6 text-center\">
        <div class=\"service-box\">
          <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("ceg_article_index");
        echo "\">
            <i class=\"fa fa-4x fa-newspaper-o wow bounceIn text-primary\" data-wow-delay=\".2s\"></i>
          </a>
          <h3>Actualité</h3>
          <p class=\"text-muted\">Quoi de nouveau au club de Grasse.

          </div>
        </div>
        <div class=\"col-lg-3 col-md-6 text-center\">
          <div class=\"service-box\">
            <i class=\"fa fa-4x fa-diamond wow bounceIn text-primary\"></i>
            <h3>Le Club</h3>
            <p class=\"text-muted\">La vie au seins du club d'escrime.</p>

          </div>
        </div>
        <div class=\"col-lg-3 col-md-6 text-center\">
          <div class=\"service-box\">
            <i class=\"fa fa-4x fa-paper-plane wow bounceIn text-primary\" data-wow-delay=\".1s\"></i>
            <h3>Liens</h3>
            <p class=\"text-muted\">Référencement de tout les liens utiles.</p>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6 text-center\">
          <div class=\"service-box\">
            <i class=\"fa fa-4x fa-heart wow bounceIn text-primary\" data-wow-delay=\".3s\"></i>
            <h3>Nos Sponsors</h3>
            <p class=\"text-muted\">En hommage à tous ce qui nous supporte</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class=\"bg-primary\" id=\"about\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-8 col-lg-offset-2 text-center\">
          <h2 class=\"section-heading\">\"Au Dernière Nouvelles\"</h2>
          <hr class=\"light\">
          <p class=\"text-faded\">\"Aux Dernières Nouvelles\" est le prochain module du site du CEG. Il permettra au maître d'arme de diffuser en direct les évènement importante de la vie du club comme les compétitions, les stages, les moments de vie du club. Ainsi les parents et les amis des escrimeurs pourrons profiter des ces instants en images et en commentaires.</p>
          <a href=\"#\" class=\"btn btn-default btn-xl\">To be continue ...</a>
        </div>
      </div>
    </div>
  </section>

  <section class=\"no-padding\" id=\"portfolio\">
    <div class=\"container-fluid\">

      <div class=\"row no-gutter\">
        <div class=\"col-lg-12 col-sm-12\">
          <div id=\"indexPortfolio\">
            <a href=\"/CEGweb/web/bundles/cegapplication/img/portfolio/1.jpg\">
              <img alt=\"caption for image 1\" src=\"/CEGweb/web/bundles/cegapplication/img/portfolio/1.jpg\" class=\"img-rounded\"/>
            </a>
            <a href=\"/CEGweb/web/bundles/cegapplication/img/portfolio/2.jpg\">
              <img alt=\"caption for image 1\" src=\"/CEGweb/web/bundles/cegapplication/img/portfolio/2.jpg\" class=\"img-rounded\"/>
            </a>
            <a href=\"/CEGweb/web/bundles/cegapplication/img/portfolio/3.jpg\">
              <img alt=\"caption for image 1\" src=\"/CEGweb/web/bundles/cegapplication/img/portfolio/3.jpg\" class=\"img-rounded\"/>
            </a>
            <a href=\"/CEGweb/web/bundles/cegapplication/img/portfolio/4.jpg\">
              <img alt=\"caption for image 1\" src=\"/CEGweb/web/bundles/cegapplication/img/portfolio/4.jpg\" class=\"img-rounded\"/>
            </a>
            <a href=\"/CEGweb/web/bundles/cegapplication/img/portfolio/5.jpg\">
              <img alt=\"caption for image 1\" src=\"/CEGweb/web/bundles/cegapplication/img/portfolio/5.jpg\" class=\"img-rounded\"/>
            </a>
            <a href=\"/CEGweb/web/bundles/cegapplication/img/portfolio/6.jpg\">
              <img alt=\"caption for image 1\" src=\"/CEGweb/web/bundles/cegapplication/img/portfolio/6.jpg\" class=\"img-rounded\"/>
            </a>

          </div>
        </div>
      </div>
    </div>
    <!-- <div class=\"container-fluid\">
    <div class=\"row no-gutter\">
    <div class=\"col-lg-4 col-sm-6\">
    <a href=\"#\" class=\"portfolio-box\">
    <img src=\"/CEGweb/web/bundles/cegapplication/img/portfolio/1.jpg\" class=\"img-responsive\" alt=\"\">
    <div class=\"portfolio-box-caption\">
    <div class=\"portfolio-box-caption-content\">
    <div class=\"project-category text-faded\">
    Category
  </div>
  <div class=\"project-name\">
  Project Name
</div>
</div>
</div>
</a>
</div>
<div class=\"col-lg-4 col-sm-6\">
<a href=\"#\" class=\"portfolio-box\">
<img src=\"/CEGweb/web/bundles/cegapplication/img/portfolio/2.jpg\" class=\"img-responsive\" alt=\"\">
<div class=\"portfolio-box-caption\">
<div class=\"portfolio-box-caption-content\">
<div class=\"project-category text-faded\">
Category
</div>
<div class=\"project-name\">
Project Name
</div>
</div>
</div>
</a>
</div>
<div class=\"col-lg-4 col-sm-6\">
<a href=\"#\" class=\"portfolio-box\">
<img src=\"/CEGweb/web/bundles/cegapplication/img/portfolio/3.jpg\" class=\"img-responsive\" alt=\"\">
<div class=\"portfolio-box-caption\">
<div class=\"portfolio-box-caption-content\">
<div class=\"project-category text-faded\">
Category
</div>
<div class=\"project-name\">
Project Name
</div>
</div>
</div>
</a>
</div>
<div class=\"col-lg-4 col-sm-6\">
<a href=\"#\" class=\"portfolio-box\">
<img src=\"/CEGweb/web/bundles/cegapplication/img/portfolio/4.jpg\" class=\"img-responsive\" alt=\"\">
<div class=\"portfolio-box-caption\">
<div class=\"portfolio-box-caption-content\">
<div class=\"project-category text-faded\">
Category
</div>
<div class=\"project-name\">
Project Name
</div>
</div>
</div>
</a>
</div>
<div class=\"col-lg-4 col-sm-6\">
<a href=\"#\" class=\"portfolio-box\">
<img src=\"/CEGweb/web/bundles/cegapplication/img/portfolio/5.jpg\" class=\"img-responsive\" alt=\"\">
<div class=\"portfolio-box-caption\">
<div class=\"portfolio-box-caption-content\">
<div class=\"project-category text-faded\">
Category
</div>
<div class=\"project-name\">
Project Name
</div>
</div>
</div>
</a>
</div>
<div class=\"col-lg-4 col-sm-6\">
<a href=\"#\" class=\"portfolio-box\">
<img src=\"/CEGweb/web/bundles/cegapplication/img/portfolio/6.jpg\" class=\"img-responsive\" alt=\"\">
<div class=\"portfolio-box-caption\">
<div class=\"portfolio-box-caption-content\">
<div class=\"project-category text-faded\">
Category
</div>
<div class=\"project-name\">
Project Name
</div>
</div>
</div>
</a>
</div>
</div>
</div> -->
</section>

<!-- <aside class=\"bg-dark\">
<div class=\"container text-center\">
<div class=\"call-to-action\">
<h2>Free Download at Start Bootstrap!</h2>
<a href=\"#\" class=\"btn btn-default btn-xl wow tada\">Download Now!</a>
</div>
</div>
</aside> -->

<section id=\"contact\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8 col-lg-offset-2 text-center\">
        <h2 class=\"section-heading\">Restons en contact !</h2>
        <hr class=\"primary\">
        <p>Pour plus d'information nous vous prions de nous joindre et vous êtes les bienvenue pour nous rendre viste .      </div>
          <div class=\"col-lg-4 col-lg-offset-2 text-center\">
            <i class=\"fa fa-phone fa-3x wow bounceIn\"></i>
            <p>06.45.32.76.12</p>
          </div>
          <div class=\"col-lg-4 text-center\">
            <i class=\"fa fa-envelope-o fa-3x wow bounceIn\" data-wow-delay=\".1s\"></i>
            <p><a href=\"mailto:your-email@your-domain.com\">feedback@startbootstrap.com</a></p>
          </div>
        </div>
      </div>
    </section>


  ";
        
        $__internal_e0470e880168f6ace6c4c53cebb0b3377c55f66138dcba8c9289b5e71c7879d6->leave($__internal_e0470e880168f6ace6c4c53cebb0b3377c55f66138dcba8c9289b5e71c7879d6_prof);

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
        return array (  66 => 27,  40 => 3,  34 => 2,  11 => 1,);
    }
}

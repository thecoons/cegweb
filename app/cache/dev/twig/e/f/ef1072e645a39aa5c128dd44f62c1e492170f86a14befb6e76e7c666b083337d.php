<?php

/* CEGApplicationBundle::baseLayout.html.twig */
class __TwigTemplate_ef1072e645a39aa5c128dd44f62c1e492170f86a14befb6e76e7c666b083337d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fd3492d1fa3c0553e81cb536c7701881816f183f5182f1328db2b0cef0671bf = $this->env->getExtension("native_profiler");
        $__internal_3fd3492d1fa3c0553e81cb536c7701881816f183f5182f1328db2b0cef0671bf->enter($__internal_3fd3492d1fa3c0553e81cb536c7701881816f183f5182f1328db2b0cef0671bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGApplicationBundle::baseLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>

  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"description\" content=\"Site du Cercle d'Escrime de Grasse\">
  <meta name=\"author\" content=\"Antonin Barthélémy\">

  <title>CEG</title>

  <!-- Bootstrap Core CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/css/bootstrap.min.css\" type=\"text/css\">

  <!-- Custom Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/font-awesome/css/font-awesome.min.css\" type=\"text/css\">
  <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/css/justifiedGallery.css\" type=\"text/css\">

  <!-- Plugin CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/css/animate.min.css\" type=\"text/css\">

  <!-- Custom CSS -->
  <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/css/creative.css\" type=\"text/css\">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
  <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
  <![endif]-->

</head>

<body id=\"page-top\">

  <nav id=\"mainNav\" class=\"navbar navbar-default navbar-fixed-top\">
    <div class=\"container-fluid\">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand page-scroll\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("ceg_application_homepage");
        echo "\">CEG</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
        <ul class=\"nav navbar-nav navbar-right\">
          <li>
            <a class=\"page-scroll\" href=\"#services\">Services</a>
          </li>
          <li>
            <a class=\"page-scroll\" href=\"#about\">Actualité</a>
          </li>
          <li>
            <a class=\"page-scroll\" href=\"#portfolio\">Portfolio</a>
          </li>
          <li>
            <a class=\"page-scroll\" href=\"#contact\">Contact</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

  ";
        // line 75
        $this->displayBlock('body', $context, $blocks);
        // line 91
        echo "

  <!-- jQuery -->
  <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/js/jquery.js\"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/js/bootstrap.min.js\"></script>

  <!-- Plugin JavaScript -->
  <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/js/jquery.easing.min.js\"></script>
  <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/js/jquery.fittext.js\"></script>
  <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/js/wow.min.js\"></script>
  <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/js/jquery.justifiedGallery.js\"></script>

  <!-- Custom Theme JavaScript -->
  <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/js/creative.js\"></script>
  <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/js/galleryPerso.js\"></script>


</body>

</html>
";
        
        $__internal_3fd3492d1fa3c0553e81cb536c7701881816f183f5182f1328db2b0cef0671bf->leave($__internal_3fd3492d1fa3c0553e81cb536c7701881816f183f5182f1328db2b0cef0671bf_prof);

    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d4e8ec5e5d3833f7089721f292fe52cfbe30194e97cc29efa5526df1c2d95bb = $this->env->getExtension("native_profiler");
        $__internal_2d4e8ec5e5d3833f7089721f292fe52cfbe30194e97cc29efa5526df1c2d95bb->enter($__internal_2d4e8ec5e5d3833f7089721f292fe52cfbe30194e97cc29efa5526df1c2d95bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 76
        echo "  <section class=\"bg-primary\" id=\"about\">
      <div class=\"container\">
          <div class=\"row\">
              <div class=\"col-lg-8 col-lg-offset-2 text-center\">
                ";
        // line 80
        $this->displayBlock('content', $context, $blocks);
        // line 86
        echo "              </div>
          </div>
      </div>
  </section>
  ";
        
        $__internal_2d4e8ec5e5d3833f7089721f292fe52cfbe30194e97cc29efa5526df1c2d95bb->leave($__internal_2d4e8ec5e5d3833f7089721f292fe52cfbe30194e97cc29efa5526df1c2d95bb_prof);

    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
        $__internal_f40d7b9200093a4ebe7c603349ff172a614d5bfc869b254acb19a056e8558ea6 = $this->env->getExtension("native_profiler");
        $__internal_f40d7b9200093a4ebe7c603349ff172a614d5bfc869b254acb19a056e8558ea6->enter($__internal_f40d7b9200093a4ebe7c603349ff172a614d5bfc869b254acb19a056e8558ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 81
        echo "                  <h2 class=\"section-heading\">We've got what you need!</h2>
                  <hr class=\"light\">
                  <p class=\"text-faded\">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                  <a href=\"#\" class=\"btn btn-default btn-xl\">Get Started!</a>
                ";
        
        $__internal_f40d7b9200093a4ebe7c603349ff172a614d5bfc869b254acb19a056e8558ea6->leave($__internal_f40d7b9200093a4ebe7c603349ff172a614d5bfc869b254acb19a056e8558ea6_prof);

    }

    public function getTemplateName()
    {
        return "CEGApplicationBundle::baseLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 81,  198 => 80,  187 => 86,  185 => 80,  179 => 76,  173 => 75,  159 => 107,  155 => 106,  149 => 103,  145 => 102,  141 => 101,  137 => 100,  131 => 97,  125 => 94,  120 => 91,  118 => 75,  90 => 50,  64 => 27,  58 => 24,  52 => 21,  48 => 20,  40 => 15,  24 => 1,);
    }
}

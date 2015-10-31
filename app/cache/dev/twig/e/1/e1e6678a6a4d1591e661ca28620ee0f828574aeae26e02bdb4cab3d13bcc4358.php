<?php

/* CEGApplicationBundle::baseLayout.html.twig */
class __TwigTemplate_00dbcddf2110e1ce47c63a093230725d58ee46a4c8bfeba8182e78d7bd13fe96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dddc934edb32b0ed40ab11ad4bf1ced7a93f636bddbf4b60fd27987a13a3fe78 = $this->env->getExtension("native_profiler");
        $__internal_dddc934edb32b0ed40ab11ad4bf1ced7a93f636bddbf4b60fd27987a13a3fe78->enter($__internal_dddc934edb32b0ed40ab11ad4bf1ced7a93f636bddbf4b60fd27987a13a3fe78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGApplicationBundle::baseLayout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no\"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/css/materialize.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
  <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/css/style.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
</head>
<body>
  <nav class=\"white\" role=\"navigation\">
    <div class=\"nav-wrapper container\">
      <a id=\"logo-container\" href=\"#\" class=\"brand-logo\">Logo</a>
      <ul class=\"right hide-on-med-and-down\">
        <li><a href=\"#\">Navbar Link</a></li>
      </ul>

      <ul id=\"nav-mobile\" class=\"side-nav\">
        <li><a href=\"#\">Navbar Link</a></li>
      </ul>
      <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
    </div>
  </nav>

";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "
  <!--  Scripts-->
  <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
  <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/js/materialize.js\"></script>
  <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/js/init.js\"></script>

  </body>
</html>
";
        
        $__internal_dddc934edb32b0ed40ab11ad4bf1ced7a93f636bddbf4b60fd27987a13a3fe78->leave($__internal_dddc934edb32b0ed40ab11ad4bf1ced7a93f636bddbf4b60fd27987a13a3fe78_prof);

    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
        $__internal_50539c9ac28ebc5ce7acdcae99c1a49c7639c078304ea523813c6c936c06398a = $this->env->getExtension("native_profiler");
        $__internal_50539c9ac28ebc5ce7acdcae99c1a49c7639c078304ea523813c6c936c06398a->enter($__internal_50539c9ac28ebc5ce7acdcae99c1a49c7639c078304ea523813c6c936c06398a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50539c9ac28ebc5ce7acdcae99c1a49c7639c078304ea523813c6c936c06398a->leave($__internal_50539c9ac28ebc5ce7acdcae99c1a49c7639c078304ea523813c6c936c06398a_prof);

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
        return array (  81 => 28,  69 => 34,  65 => 33,  60 => 30,  58 => 28,  38 => 11,  34 => 10,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* <head>*/
/*   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>*/
/*   <title>Parallax Template - Materialize</title>*/
/* */
/*   <!-- CSS  -->*/
/*   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*   <link href="{{web_path}}/bundles/cegapplication/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>*/
/*   <link href="{{web_path}}/bundles/cegapplication/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>*/
/* </head>*/
/* <body>*/
/*   <nav class="white" role="navigation">*/
/*     <div class="nav-wrapper container">*/
/*       <a id="logo-container" href="#" class="brand-logo">Logo</a>*/
/*       <ul class="right hide-on-med-and-down">*/
/*         <li><a href="#">Navbar Link</a></li>*/
/*       </ul>*/
/* */
/*       <ul id="nav-mobile" class="side-nav">*/
/*         <li><a href="#">Navbar Link</a></li>*/
/*       </ul>*/
/*       <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>*/
/*     </div>*/
/*   </nav>*/
/* */
/* {% block body %}*/
/* {% endblock body %}*/
/* */
/*   <!--  Scripts-->*/
/*   <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>*/
/*   <script src="{{web_path}}/bundles/cegapplication/js/materialize.js"></script>*/
/*   <script src="{{web_path}}/bundles/cegapplication/js/init.js"></script>*/
/* */
/*   </body>*/
/* </html>*/
/* */

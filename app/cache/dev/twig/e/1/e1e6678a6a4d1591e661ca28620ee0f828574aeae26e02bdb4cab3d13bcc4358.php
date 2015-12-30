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
        $__internal_877c3ed5d93ae6bf9b610d016143b6c9980c2e3a2cb99a1ca7fa155aca85024a = $this->env->getExtension("native_profiler");
        $__internal_877c3ed5d93ae6bf9b610d016143b6c9980c2e3a2cb99a1ca7fa155aca85024a->enter($__internal_877c3ed5d93ae6bf9b610d016143b6c9980c2e3a2cb99a1ca7fa155aca85024a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGApplicationBundle::baseLayout.html.twig"));

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
  <nav class=\"blue\" role=\"navigation\">
    <div class=\"nav-wrapper container\">
      <a id=\"logo-container\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("ceg_application_homepage");
        echo "\" class=\"white-text brand-logo\">CEPG</a>
      <ul class=\"right hide-on-med-and-down\">
        ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) {
            // line 19
            echo "        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "<i class=\"material-icons right\">perm_identity</i></li>
        ";
        } else {
            // line 21
            echo "        <li><a class=\"white-text\"href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion<i class=\"material-icons right\">perm_identity</i></a></li>
        ";
        }
        // line 23
        echo "      </ul>

      <ul id=\"nav-mobile\" class=\"side-nav\">
        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Connexion </a></li>
      </ul>
      <a href=\"#\" data-activates=\"nav-mobile\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
    </div>
  </nav>

";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "
  <!--  Scripts-->
  <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
  <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/js/materialize.js\"></script>
  <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
        echo "/bundles/cegapplication/js/init.js\"></script>
  <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
  <script>
  tinymce.init({
    selector: 'textarea'
  });
  </script>

  </body>
</html>
";
        
        $__internal_877c3ed5d93ae6bf9b610d016143b6c9980c2e3a2cb99a1ca7fa155aca85024a->leave($__internal_877c3ed5d93ae6bf9b610d016143b6c9980c2e3a2cb99a1ca7fa155aca85024a_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_c53de10eaeaa5d8470bcc15ef1f71ce9768773a4d62cd107da71be2621a14904 = $this->env->getExtension("native_profiler");
        $__internal_c53de10eaeaa5d8470bcc15ef1f71ce9768773a4d62cd107da71be2621a14904->enter($__internal_c53de10eaeaa5d8470bcc15ef1f71ce9768773a4d62cd107da71be2621a14904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c53de10eaeaa5d8470bcc15ef1f71ce9768773a4d62cd107da71be2621a14904->leave($__internal_c53de10eaeaa5d8470bcc15ef1f71ce9768773a4d62cd107da71be2621a14904_prof);

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
        return array (  108 => 32,  90 => 38,  86 => 37,  81 => 34,  79 => 32,  70 => 26,  65 => 23,  59 => 21,  53 => 19,  51 => 18,  46 => 16,  38 => 11,  34 => 10,  23 => 1,);
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
/*   <nav class="blue" role="navigation">*/
/*     <div class="nav-wrapper container">*/
/*       <a id="logo-container" href="{{ path('ceg_application_homepage')}}" class="white-text brand-logo">CEPG</a>*/
/*       <ul class="right hide-on-med-and-down">*/
/*         {% if app.user.username is defined%}*/
/*         <li>{{app.user.username}}<i class="material-icons right">perm_identity</i></li>*/
/*         {% else %}*/
/*         <li><a class="white-text"href="{{ path('fos_user_security_login')}}">Connexion<i class="material-icons right">perm_identity</i></a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/* */
/*       <ul id="nav-mobile" class="side-nav">*/
/*         <li><a href="{{ path('fos_user_security_login')}}">Connexion </a></li>*/
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
/*   <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>*/
/*   <script>*/
/*   tinymce.init({*/
/*     selector: 'textarea'*/
/*   });*/
/*   </script>*/
/* */
/*   </body>*/
/* </html>*/
/* */

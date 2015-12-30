<?php

/* CEGArticleBundle:Default:showArticle.html.twig */
class __TwigTemplate_e32d6dc60ff9475e4288f10c756fd8baa40750c5de37c3a4b2b4315e9fcdc6b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CEGApplicationBundle::baseLayout.html.twig", "CEGArticleBundle:Default:showArticle.html.twig", 1);
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
        $__internal_24366d0913dc9da32d4e7841fdc33435262c28684e70eb8b3acda990464b2cc5 = $this->env->getExtension("native_profiler");
        $__internal_24366d0913dc9da32d4e7841fdc33435262c28684e70eb8b3acda990464b2cc5->enter($__internal_24366d0913dc9da32d4e7841fdc33435262c28684e70eb8b3acda990464b2cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGArticleBundle:Default:showArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24366d0913dc9da32d4e7841fdc33435262c28684e70eb8b3acda990464b2cc5->leave($__internal_24366d0913dc9da32d4e7841fdc33435262c28684e70eb8b3acda990464b2cc5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_77b98c41b511018ad5fd57cc03aa701bf12bb8f44ec7b7787ecc26868dac059c = $this->env->getExtension("native_profiler");
        $__internal_77b98c41b511018ad5fd57cc03aa701bf12bb8f44ec7b7787ecc26868dac059c->enter($__internal_77b98c41b511018ad5fd57cc03aa701bf12bb8f44ec7b7787ecc26868dac059c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
<section>
  <div class=\"row\">
    <div class=\"col s12 center\">
      <h2 class=\"section-heading blue-text text-darken-2\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "artclTitle", array()), "html", null, true);
        echo "</h2>
      <div class=\"divider\"></div>

    </div>
  </div>
</section>
<section>
</div>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col s12\">
        ";
        // line 18
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "artclContent", array());
        echo "
        <div class=\"divider\"></div>
        <br>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 22
            echo "          ";
            if (($this->getAttribute($context["image"], "url", array()) != "jpeg")) {
                // line 23
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "getUrlWay", array()), "html", null, true);
                echo "\" class=\"btn orange darken-3\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["image"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["image"], "description", array()), "Fichier")) : ("Fichier")), "html", null, true);
                echo "</a>
          ";
            }
            // line 25
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "      </div>
    </div>
  </div>
</section>
<section>
    <div class=\"container\">
      <br>
      <div class=\"row\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 35
            echo "              ";
            if (($this->getAttribute($context["image"], "url", array()) == "jpeg")) {
                // line 36
                echo "        <div class=\"col s12 l6\">
                  <img alt=\"";
                // line 37
                echo twig_escape_filter($this->env, (($this->getAttribute($context["image"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["image"], "description", array()), "")) : ("")), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "getUrlWay", array()), "html", null, true);
                echo "\"width=\"400\" class=\"materialboxed\" data-caption=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["image"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["image"], "description", array()), "")) : ("")), "html", null, true);
                echo "\">
            <br>
        </div>
              ";
            }
            // line 41
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "      </div>
    </div>
</section>
<<script type=\"text/javascript\">

\$(document).ready(function(){
    \$('.materialboxed').materialbox();
  });
</script>
";
        
        $__internal_77b98c41b511018ad5fd57cc03aa701bf12bb8f44ec7b7787ecc26868dac059c->leave($__internal_77b98c41b511018ad5fd57cc03aa701bf12bb8f44ec7b7787ecc26868dac059c_prof);

    }

    public function getTemplateName()
    {
        return "CEGArticleBundle:Default:showArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 42,  122 => 41,  109 => 37,  106 => 36,  103 => 35,  99 => 34,  89 => 26,  83 => 25,  73 => 23,  70 => 22,  66 => 21,  60 => 18,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CEGApplicationBundle::baseLayout.html.twig" %}*/
/* {% block body %}*/
/* <div class="container">*/
/* <section>*/
/*   <div class="row">*/
/*     <div class="col s12 center">*/
/*       <h2 class="section-heading blue-text text-darken-2">{{article.artclTitle}}</h2>*/
/*       <div class="divider"></div>*/
/* */
/*     </div>*/
/*   </div>*/
/* </section>*/
/* <section>*/
/* </div>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col s12">*/
/*         {{ article.artclContent | raw}}*/
/*         <div class="divider"></div>*/
/*         <br>*/
/*         {% for image in article.images %}*/
/*           {% if image.url != "jpeg" %}*/
/*             <a href="{{web_path}}/{{image.getUrlWay }}" class="btn orange darken-3">{{image.description | default('Fichier')}}</a>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* <section>*/
/*     <div class="container">*/
/*       <br>*/
/*       <div class="row">*/
/*             {% for image in article.images %}*/
/*               {% if image.url == "jpeg" %}*/
/*         <div class="col s12 l6">*/
/*                   <img alt="{{image.description | default('')}}" src="{{web_path}}/{{image.getUrlWay }}"width="400" class="materialboxed" data-caption="{{image.description | default('')}}">*/
/*             <br>*/
/*         </div>*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*       </div>*/
/*     </div>*/
/* </section>*/
/* <<script type="text/javascript">*/
/* */
/* $(document).ready(function(){*/
/*     $('.materialboxed').materialbox();*/
/*   });*/
/* </script>*/
/* {% endblock body %}*/
/* */

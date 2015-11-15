<?php

/* CEGArticleBundle:Default:createArticle.html.twig */
class __TwigTemplate_6cf4a7d09864b8951ed6086c8d7c712723bffbb4f76b050e7d5357d7046619dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CEGApplicationBundle::baseLayout.html.twig", "CEGArticleBundle:Default:createArticle.html.twig", 1);
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
        $__internal_8240511c6f30561ec065cd9e6e10d2c7026c0bdb054f130891609450fbd4b546 = $this->env->getExtension("native_profiler");
        $__internal_8240511c6f30561ec065cd9e6e10d2c7026c0bdb054f130891609450fbd4b546->enter($__internal_8240511c6f30561ec065cd9e6e10d2c7026c0bdb054f130891609450fbd4b546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGArticleBundle:Default:createArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8240511c6f30561ec065cd9e6e10d2c7026c0bdb054f130891609450fbd4b546->leave($__internal_8240511c6f30561ec065cd9e6e10d2c7026c0bdb054f130891609450fbd4b546_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cbe53b5242634b78e378f46d3d2c6a56f9fe952f96c9af9a931479a8c1a1836 = $this->env->getExtension("native_profiler");
        $__internal_9cbe53b5242634b78e378f46d3d2c6a56f9fe952f96c9af9a931479a8c1a1836->enter($__internal_9cbe53b5242634b78e378f46d3d2c6a56f9fe952f96c9af9a931479a8c1a1836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
  <div class=\"section\">


          ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "col s12")));
        echo "
          ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
          <div class=\"row\">
            <div class=\"col-md-10\">
              ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                <div class=\"input-field col s12\">
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclTitle", array()), 'label', array("label" => "Titre de l'article"));
        echo "
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclTitle", array()), 'errors');
        echo "
                  ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclTitle", array()), 'widget');
        echo "
                </div>
                  <div class=\"input-field col s12\">
                  ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclContent", array()), 'label', array("label" => "Texte de l'article"));
        echo "
                  ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclContent", array()), 'errors');
        echo "
                  ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclContent", array()), 'widget', array("attr" => array("class" => "materialize-textarea")));
        echo "
                  </div>




            </div>
            <div class=\"col-md-12\">
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclPost", array()), 'widget', array("attr" => array("class" => "btn right orange")));
        echo "
            </div>
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
          </div>
        </div>

";
        
        $__internal_9cbe53b5242634b78e378f46d3d2c6a56f9fe952f96c9af9a931479a8c1a1836->leave($__internal_9cbe53b5242634b78e378f46d3d2c6a56f9fe952f96c9af9a931479a8c1a1836_prof);

    }

    public function getTemplateName()
    {
        return "CEGArticleBundle:Default:createArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 33,  100 => 31,  95 => 29,  84 => 21,  80 => 20,  76 => 19,  70 => 16,  66 => 15,  62 => 14,  56 => 11,  50 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CEGApplicationBundle::baseLayout.html.twig" %}*/
/* {% block body %}*/
/* <div class="container">*/
/*   <div class="section">*/
/* */
/* */
/*           {{ form_start(form,{'attr':{'class':'col s12'}})}}*/
/*           {{ form_widget(form._token) }}*/
/*           <div class="row">*/
/*             <div class="col-md-10">*/
/*               {{ form_errors(form) }}*/
/* */
/*                 <div class="input-field col s12">*/
/*                 {{ form_label(form.artclTitle,"Titre de l'article")}}*/
/*                 {{ form_errors(form.artclTitle)}}*/
/*                   {{ form_widget(form.artclTitle)}}*/
/*                 </div>*/
/*                   <div class="input-field col s12">*/
/*                   {{ form_label(form.artclContent,"Texte de l'article")}}*/
/*                   {{ form_errors(form.artclContent)}}*/
/*                   {{ form_widget(form.artclContent,{'attr':{'class':'materialize-textarea'}})}}*/
/*                   </div>*/
/* */
/* */
/* */
/* */
/*             </div>*/
/*             <div class="col-md-12">*/
/*                 {{form_widget(form.artclPost,{'attr':{'class':'btn right orange'}})}}*/
/*             </div>*/
/*             {{ form_rest(form) }}*/
/* */
/*             {{ form_end(form)}}*/
/*           </div>*/
/*         </div>*/
/* */
/* {% endblock body %}*/
/* */

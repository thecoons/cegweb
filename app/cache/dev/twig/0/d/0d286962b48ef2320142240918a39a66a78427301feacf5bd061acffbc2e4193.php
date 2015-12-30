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
        $__internal_180a2c326e969b70cd8d7a2d5bbd8280259dcc1c7e9ac2af211a4afee668bfcf = $this->env->getExtension("native_profiler");
        $__internal_180a2c326e969b70cd8d7a2d5bbd8280259dcc1c7e9ac2af211a4afee668bfcf->enter($__internal_180a2c326e969b70cd8d7a2d5bbd8280259dcc1c7e9ac2af211a4afee668bfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGArticleBundle:Default:createArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_180a2c326e969b70cd8d7a2d5bbd8280259dcc1c7e9ac2af211a4afee668bfcf->leave($__internal_180a2c326e969b70cd8d7a2d5bbd8280259dcc1c7e9ac2af211a4afee668bfcf_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_51c279bab39c02986fdb16f3c7c30380f7e9601c42baef4ba04c3dae82723daa = $this->env->getExtension("native_profiler");
        $__internal_51c279bab39c02986fdb16f3c7c30380f7e9601c42baef4ba04c3dae82723daa->enter($__internal_51c279bab39c02986fdb16f3c7c30380f7e9601c42baef4ba04c3dae82723daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
  <div class=\"section\">


          ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "col s12", "novalidate" => "novalidate")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclContent", array()), 'widget');
        echo "
                  </div>
                  <div class=\"input-field col s12\">
                  ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclType", array()), 'errors');
        echo "
                  ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclType", array()), 'widget');
        echo "

                  ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclType", array()), 'label', array("label" => "Type de l'article"));
        echo "
                  </div>




            </div>
            <div class=\"col-md-12\">
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclPost", array()), 'widget', array("attr" => array("class" => "btn right orange")));
        echo "
            </div>
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            ";
        // line 39
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
          </div>
        </div>

";
        
        $__internal_51c279bab39c02986fdb16f3c7c30380f7e9601c42baef4ba04c3dae82723daa->leave($__internal_51c279bab39c02986fdb16f3c7c30380f7e9601c42baef4ba04c3dae82723daa_prof);

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
        return array (  120 => 39,  115 => 37,  110 => 35,  99 => 27,  94 => 25,  90 => 24,  84 => 21,  80 => 20,  76 => 19,  70 => 16,  66 => 15,  62 => 14,  56 => 11,  50 => 8,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CEGApplicationBundle::baseLayout.html.twig" %}*/
/* {% block body %}*/
/* <div class="container">*/
/*   <div class="section">*/
/* */
/* */
/*           {{ form_start(form,{'attr':{'class':'col s12',novalidate:'novalidate'}})}}*/
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
/*                   {{ form_widget(form.artclContent)}}*/
/*                   </div>*/
/*                   <div class="input-field col s12">*/
/*                   {{ form_errors(form.artclType)}}*/
/*                   {{ form_widget(form.artclType)}}*/
/* */
/*                   {{ form_label(form.artclType,"Type de l'article")}}*/
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

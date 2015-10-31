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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CEGApplicationBundle::baseLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afdcdeb0b0447e31f9d3381beb5efe3671706c63da90deb55bdc7f8f0ff4fb83 = $this->env->getExtension("native_profiler");
        $__internal_afdcdeb0b0447e31f9d3381beb5efe3671706c63da90deb55bdc7f8f0ff4fb83->enter($__internal_afdcdeb0b0447e31f9d3381beb5efe3671706c63da90deb55bdc7f8f0ff4fb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGArticleBundle:Default:createArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afdcdeb0b0447e31f9d3381beb5efe3671706c63da90deb55bdc7f8f0ff4fb83->leave($__internal_afdcdeb0b0447e31f9d3381beb5efe3671706c63da90deb55bdc7f8f0ff4fb83_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_3ead55e7c07d04d5101046293be32fd917101af9a6787e8a7d3cddd8b7b3c761 = $this->env->getExtension("native_profiler");
        $__internal_3ead55e7c07d04d5101046293be32fd917101af9a6787e8a7d3cddd8b7b3c761->enter($__internal_3ead55e7c07d04d5101046293be32fd917101af9a6787e8a7d3cddd8b7b3c761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
          ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "contact-form")));
        echo "
          ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
          <div class=\"row\">
            <div class=\"col-md-10\">
              ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
              <div class=\"form-group\">
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclTitle", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Titre de l'article"));
        echo "
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclTitle", array()), 'errors');
        echo "
                <div class=\"input-group\">
                  <span class=\"input-group-addon\">
                    <span class=\"glyphicon glyphicon-console\"></span>
                  </span>
                  ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclTitle", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
              </div>

                <div class=\"form-group\">
                  ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclContent", array()), 'label', array("label_attr" => array("class" => "control-label"), "label" => "Texte de l'article"));
        echo "
                  ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclContent", array()), 'errors');
        echo "
                  ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclContent", array()), 'widget', array("attr" => array("cols" => "70", "rows" => "6", "style" => "color:#555")));
        echo "

                </div>

              



            </div>
            <div class=\"col-md-12\">
              ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "artclPost", array()), 'widget', array("attr" => array("class" => "btn pull-right")));
        echo "
            </div>
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
          </div>
        </div>

";
        
        $__internal_3ead55e7c07d04d5101046293be32fd917101af9a6787e8a7d3cddd8b7b3c761->leave($__internal_3ead55e7c07d04d5101046293be32fd917101af9a6787e8a7d3cddd8b7b3c761_prof);

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
        return array (  109 => 37,  104 => 35,  99 => 33,  86 => 23,  82 => 22,  78 => 21,  70 => 16,  62 => 11,  58 => 10,  53 => 8,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CEGApplicationBundle::baseLayout.html.twig" %}*/
/* {% block content %}*/
/* */
/*           {{ form_start(form,{'attr':{'class':'form-horizontal','id':'contact-form'}})}}*/
/*           {{ form_widget(form._token) }}*/
/*           <div class="row">*/
/*             <div class="col-md-10">*/
/*               {{ form_errors(form) }}*/
/*               <div class="form-group">*/
/*                 {{ form_label(form.artclTitle,"Titre de l'article",{'label_attr':{'class':'control-label'}})}}*/
/*                 {{ form_errors(form.artclTitle)}}*/
/*                 <div class="input-group">*/
/*                   <span class="input-group-addon">*/
/*                     <span class="glyphicon glyphicon-console"></span>*/
/*                   </span>*/
/*                   {{ form_widget(form.artclTitle,{'attr':{'class':'form-control'}})}}*/
/*                 </div>*/
/*               </div>*/
/* */
/*                 <div class="form-group">*/
/*                   {{ form_label(form.artclContent,"Texte de l'article",{'label_attr':{'class':'control-label'}})}}*/
/*                   {{ form_errors(form.artclContent)}}*/
/*                   {{ form_widget(form.artclContent,{'attr':{'cols':'70','rows':'6','style':'color:#555'}})}}*/
/* */
/*                 </div>*/
/* */
/*               */
/* */
/* */
/* */
/*             </div>*/
/*             <div class="col-md-12">*/
/*               {{form_widget(form.artclPost,{'attr':{'class':'btn pull-right'}})}}*/
/*             </div>*/
/*             {{ form_rest(form) }}*/
/* */
/*             {{ form_end(form)}}*/
/*           </div>*/
/*         </div>*/
/* */
/* {% endblock content %}*/
/* */

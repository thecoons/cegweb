<?php

/* CEGArticleBundle:Default:updateArticle.html.twig */
class __TwigTemplate_5b739456fba22bfc1ed3f8ab6389731636634daf9474303ad87207fc331ee606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CEGApplicationBundle::baseLayout.html.twig", "CEGArticleBundle:Default:updateArticle.html.twig", 1);
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
        $__internal_4b443dc9629d910ccf4ccb934217640f6217150efd32c8f9c869c580a9286883 = $this->env->getExtension("native_profiler");
        $__internal_4b443dc9629d910ccf4ccb934217640f6217150efd32c8f9c869c580a9286883->enter($__internal_4b443dc9629d910ccf4ccb934217640f6217150efd32c8f9c869c580a9286883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGArticleBundle:Default:updateArticle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b443dc9629d910ccf4ccb934217640f6217150efd32c8f9c869c580a9286883->leave($__internal_4b443dc9629d910ccf4ccb934217640f6217150efd32c8f9c869c580a9286883_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_074b9510466480fa1f0527ac473f48709dcfcd46d1dba3bdea75e11c9e8b3e27 = $this->env->getExtension("native_profiler");
        $__internal_074b9510466480fa1f0527ac473f48709dcfcd46d1dba3bdea75e11c9e8b3e27->enter($__internal_074b9510466480fa1f0527ac473f48709dcfcd46d1dba3bdea75e11c9e8b3e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
  <div class=\"section\">

";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "col s12")));
        echo "
          ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
          <div class=\"row\">
            <div class=\"col-md-10\">
              ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
              <div class=\"file-field input-field col s12\">

                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo "
                <div class=\"btn\">
                  <span> Fichier </span>
                  ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
                </div>
                <div class=\"file-path-wrapper\">
                    <input class=\"file-path validate\" type=\"text\">
                </div>
                </div>
                <div class=\"input-field col s12\">
                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label" => "Description du fichier"));
        echo "
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                  ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
                </div>
                <div class=\"col-md-12\">
                ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "post", array()), 'widget', array("attr" => array("class" => "btn right orange")));
        echo "
              </div>
           ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

           ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
         </div>
         <br>
       </div>
     </div>
   </div>

";
        
        $__internal_074b9510466480fa1f0527ac473f48709dcfcd46d1dba3bdea75e11c9e8b3e27->leave($__internal_074b9510466480fa1f0527ac473f48709dcfcd46d1dba3bdea75e11c9e8b3e27_prof);

    }

    public function getTemplateName()
    {
        return "CEGArticleBundle:Default:updateArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 32,  96 => 30,  91 => 28,  85 => 25,  81 => 24,  77 => 23,  67 => 16,  61 => 13,  55 => 10,  49 => 7,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CEGApplicationBundle::baseLayout.html.twig" %}*/
/* {% block body %}*/
/* <div class="container">*/
/*   <div class="section">*/
/* */
/* {{ form_start(form,{'attr':{'class':'col s12'}})}}*/
/*           {{ form_widget(form._token) }}*/
/*           <div class="row">*/
/*             <div class="col-md-10">*/
/*               {{ form_errors(form) }}*/
/*               <div class="file-field input-field col s12">*/
/* */
/*                 {{ form_errors(form.file)}}*/
/*                 <div class="btn">*/
/*                   <span> Fichier </span>*/
/*                   {{ form_widget(form.file)}}*/
/*                 </div>*/
/*                 <div class="file-path-wrapper">*/
/*                     <input class="file-path validate" type="text">*/
/*                 </div>*/
/*                 </div>*/
/*                 <div class="input-field col s12">*/
/*                 {{ form_label(form.description,"Description du fichier")}}*/
/*                 {{ form_errors(form.description)}}*/
/*                   {{ form_widget(form.description)}}*/
/*                 </div>*/
/*                 <div class="col-md-12">*/
/*                 {{form_widget(form.post,{'attr':{'class':'btn right orange'}})}}*/
/*               </div>*/
/*            {{ form_rest(form) }}*/
/* */
/*            {{ form_end(form)}}*/
/*          </div>*/
/*          <br>*/
/*        </div>*/
/*      </div>*/
/*    </div>*/
/* */
/* {% endblock body %}*/
/* */

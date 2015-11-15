<?php

/* CEGApplicationBundle:User:getUser.html.twig */
class __TwigTemplate_1370459256efb61cbc373872388971584d8139fc27a6e515e3f91414455998ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CEGApplicationBundle:User:getUser.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d519eb13ba3bbd7354fe74222e02ccab5fb15d5155662f84f9935ce8772a22a = $this->env->getExtension("native_profiler");
        $__internal_8d519eb13ba3bbd7354fe74222e02ccab5fb15d5155662f84f9935ce8772a22a->enter($__internal_8d519eb13ba3bbd7354fe74222e02ccab5fb15d5155662f84f9935ce8772a22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CEGApplicationBundle:User:getUser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d519eb13ba3bbd7354fe74222e02ccab5fb15d5155662f84f9935ce8772a22a->leave($__internal_8d519eb13ba3bbd7354fe74222e02ccab5fb15d5155662f84f9935ce8772a22a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8025ab06f294d914af0484ec36c709df8facbb19d49517da972c488897f95ac = $this->env->getExtension("native_profiler");
        $__internal_c8025ab06f294d914af0484ec36c709df8facbb19d49517da972c488897f95ac->enter($__internal_c8025ab06f294d914af0484ec36c709df8facbb19d49517da972c488897f95ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CEGApplicationBundle:User:getUser";
        
        $__internal_c8025ab06f294d914af0484ec36c709df8facbb19d49517da972c488897f95ac->leave($__internal_c8025ab06f294d914af0484ec36c709df8facbb19d49517da972c488897f95ac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_95f05e97e593be9ccf92592653527649f254436c7476c7f55aa3d97f9d114b7e = $this->env->getExtension("native_profiler");
        $__internal_95f05e97e593be9ccf92592653527649f254436c7476c7f55aa3d97f9d114b7e->enter($__internal_95f05e97e593be9ccf92592653527649f254436c7476c7f55aa3d97f9d114b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the User:getUser page</h1>
";
        
        $__internal_95f05e97e593be9ccf92592653527649f254436c7476c7f55aa3d97f9d114b7e->leave($__internal_95f05e97e593be9ccf92592653527649f254436c7476c7f55aa3d97f9d114b7e_prof);

    }

    public function getTemplateName()
    {
        return "CEGApplicationBundle:User:getUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}CEGApplicationBundle:User:getUser{% endblock %}*/
/* */
/* {% block body %}*/
/* <h1>Welcome to the User:getUser page</h1>*/
/* {% endblock %}*/
/* */

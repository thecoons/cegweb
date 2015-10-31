<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_d8f7442dc2158347b177e525a2b69d9b77352000ecaac7d1e2b2ddc71213609d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CEGApplicationBundle::baseLayout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CEGApplicationBundle::baseLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99ac70dd244c9e9516194b6694828ae5be1a119df1950d06e5bb9e7a632bb3dd = $this->env->getExtension("native_profiler");
        $__internal_99ac70dd244c9e9516194b6694828ae5be1a119df1950d06e5bb9e7a632bb3dd->enter($__internal_99ac70dd244c9e9516194b6694828ae5be1a119df1950d06e5bb9e7a632bb3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99ac70dd244c9e9516194b6694828ae5be1a119df1950d06e5bb9e7a632bb3dd->leave($__internal_99ac70dd244c9e9516194b6694828ae5be1a119df1950d06e5bb9e7a632bb3dd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_37b8d3e58aedcf1e8a2bf4584b4478ca9b95febd9ed3c77b9fecdbbfc9d51ea7 = $this->env->getExtension("native_profiler");
        $__internal_37b8d3e58aedcf1e8a2bf4584b4478ca9b95febd9ed3c77b9fecdbbfc9d51ea7->enter($__internal_37b8d3e58aedcf1e8a2bf4584b4478ca9b95febd9ed3c77b9fecdbbfc9d51ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_37b8d3e58aedcf1e8a2bf4584b4478ca9b95febd9ed3c77b9fecdbbfc9d51ea7->leave($__internal_37b8d3e58aedcf1e8a2bf4584b4478ca9b95febd9ed3c77b9fecdbbfc9d51ea7_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d74ea50c22ad32b0dbf8786c770758aca488416424ba6da4d22f5760be1f21f4 = $this->env->getExtension("native_profiler");
        $__internal_d74ea50c22ad32b0dbf8786c770758aca488416424ba6da4d22f5760be1f21f4->enter($__internal_d74ea50c22ad32b0dbf8786c770758aca488416424ba6da4d22f5760be1f21f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 5
        echo "  
";
        
        $__internal_d74ea50c22ad32b0dbf8786c770758aca488416424ba6da4d22f5760be1f21f4->leave($__internal_d74ea50c22ad32b0dbf8786c770758aca488416424ba6da4d22f5760be1f21f4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "CEGApplicationBundle::baseLayout.html.twig" %}*/
/* */
/* {% block content %}*/
/* {% block fos_user_content %}*/
/*   */
/* {% endblock fos_user_content %}*/
/* {% endblock content %}*/
/* */

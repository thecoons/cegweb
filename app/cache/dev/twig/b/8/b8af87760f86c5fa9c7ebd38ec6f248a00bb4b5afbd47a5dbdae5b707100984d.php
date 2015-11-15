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
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CEGApplicationBundle::baseLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_326a741e9baa26ddd8342fc77077aa26e2183a5c4efe60ea5767eb2495aede04 = $this->env->getExtension("native_profiler");
        $__internal_326a741e9baa26ddd8342fc77077aa26e2183a5c4efe60ea5767eb2495aede04->enter($__internal_326a741e9baa26ddd8342fc77077aa26e2183a5c4efe60ea5767eb2495aede04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_326a741e9baa26ddd8342fc77077aa26e2183a5c4efe60ea5767eb2495aede04->leave($__internal_326a741e9baa26ddd8342fc77077aa26e2183a5c4efe60ea5767eb2495aede04_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7533c33fd074f8b34b3e19bb7fba5344def8f6265a6abe10dce066f67a31eafc = $this->env->getExtension("native_profiler");
        $__internal_7533c33fd074f8b34b3e19bb7fba5344def8f6265a6abe10dce066f67a31eafc->enter($__internal_7533c33fd074f8b34b3e19bb7fba5344def8f6265a6abe10dce066f67a31eafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_7533c33fd074f8b34b3e19bb7fba5344def8f6265a6abe10dce066f67a31eafc->leave($__internal_7533c33fd074f8b34b3e19bb7fba5344def8f6265a6abe10dce066f67a31eafc_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12834ad9b986356bf50c0aadb41c4c6b350acd3aaa40e7f7399f40f052244678 = $this->env->getExtension("native_profiler");
        $__internal_12834ad9b986356bf50c0aadb41c4c6b350acd3aaa40e7f7399f40f052244678->enter($__internal_12834ad9b986356bf50c0aadb41c4c6b350acd3aaa40e7f7399f40f052244678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_12834ad9b986356bf50c0aadb41c4c6b350acd3aaa40e7f7399f40f052244678->leave($__internal_12834ad9b986356bf50c0aadb41c4c6b350acd3aaa40e7f7399f40f052244678_prof);

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
        return array (  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "CEGApplicationBundle::baseLayout.html.twig" %}*/
/* */
/* {% block body %}*/
/* {% block fos_user_content %}*/
/* {% endblock fos_user_content %}*/
/* {% endblock body %}*/
/* */

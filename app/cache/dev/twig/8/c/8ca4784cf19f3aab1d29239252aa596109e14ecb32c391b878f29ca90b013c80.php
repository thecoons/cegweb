<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_1c5acc315414e66847ec83a2a9241b6a9a99e49ee60239b0a7af713ea3165a8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb78d526886f4e3771dd8dc51df1b7d88610dc649d05eb0728f55260e35429ea = $this->env->getExtension("native_profiler");
        $__internal_eb78d526886f4e3771dd8dc51df1b7d88610dc649d05eb0728f55260e35429ea->enter($__internal_eb78d526886f4e3771dd8dc51df1b7d88610dc649d05eb0728f55260e35429ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb78d526886f4e3771dd8dc51df1b7d88610dc649d05eb0728f55260e35429ea->leave($__internal_eb78d526886f4e3771dd8dc51df1b7d88610dc649d05eb0728f55260e35429ea_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14317589d0df7328438aed5f4ce819b044b65df2dea6f07c506f4b57a064ab30 = $this->env->getExtension("native_profiler");
        $__internal_14317589d0df7328438aed5f4ce819b044b65df2dea6f07c506f4b57a064ab30->enter($__internal_14317589d0df7328438aed5f4ce819b044b65df2dea6f07c506f4b57a064ab30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<div class=\"container\">
  <div class=\"section\">



<form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">Login</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">Mot de passe</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">Se souvenir de moi</label>

    <button class=\"blue right waves-effect waves-light btn\" type=\"submit\"  name=\"_submit\" value=\"Connexion\" />Connexion</button>
</form>
</div>
</div>
";
        
        $__internal_14317589d0df7328438aed5f4ce819b044b65df2dea6f07c506f4b57a064ab30->leave($__internal_14317589d0df7328438aed5f4ce819b044b65df2dea6f07c506f4b57a064ab30_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 18,  59 => 15,  55 => 14,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* <div class="container">*/
/*   <div class="section">*/
/* */
/* */
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">Login</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password">Mot de passe</label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">Se souvenir de moi</label>*/
/* */
/*     <button class="blue right waves-effect waves-light btn" type="submit"  name="_submit" value="Connexion" />Connexion</button>*/
/* </form>*/
/* </div>*/
/* </div>*/
/* {% endblock fos_user_content %}*/
/* */

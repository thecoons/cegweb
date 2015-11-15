<?php

/* ::base.html.twig */
class __TwigTemplate_a07334e772c639674980ee68fe916d1560a8b1935e653158fe0980a71c7b4e16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12a13f243a594fd7759f9ec9ccfd967fc714a5cf45292de3abcb3b15d30ff1ab = $this->env->getExtension("native_profiler");
        $__internal_12a13f243a594fd7759f9ec9ccfd967fc714a5cf45292de3abcb3b15d30ff1ab->enter($__internal_12a13f243a594fd7759f9ec9ccfd967fc714a5cf45292de3abcb3b15d30ff1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_12a13f243a594fd7759f9ec9ccfd967fc714a5cf45292de3abcb3b15d30ff1ab->leave($__internal_12a13f243a594fd7759f9ec9ccfd967fc714a5cf45292de3abcb3b15d30ff1ab_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5e1fb63e06b583747185785631e8725d98ba8ff65b21bd472fff5bf45a243f7 = $this->env->getExtension("native_profiler");
        $__internal_f5e1fb63e06b583747185785631e8725d98ba8ff65b21bd472fff5bf45a243f7->enter($__internal_f5e1fb63e06b583747185785631e8725d98ba8ff65b21bd472fff5bf45a243f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f5e1fb63e06b583747185785631e8725d98ba8ff65b21bd472fff5bf45a243f7->leave($__internal_f5e1fb63e06b583747185785631e8725d98ba8ff65b21bd472fff5bf45a243f7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dd240795dba8dd4eb8ebdf4873919345afc55f2ed8e5d13dede0411026e088cc = $this->env->getExtension("native_profiler");
        $__internal_dd240795dba8dd4eb8ebdf4873919345afc55f2ed8e5d13dede0411026e088cc->enter($__internal_dd240795dba8dd4eb8ebdf4873919345afc55f2ed8e5d13dede0411026e088cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_dd240795dba8dd4eb8ebdf4873919345afc55f2ed8e5d13dede0411026e088cc->leave($__internal_dd240795dba8dd4eb8ebdf4873919345afc55f2ed8e5d13dede0411026e088cc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_204a889a1fbcc42cbc8122790133cdf6e8f214c442a33e8a5052cfde721a46db = $this->env->getExtension("native_profiler");
        $__internal_204a889a1fbcc42cbc8122790133cdf6e8f214c442a33e8a5052cfde721a46db->enter($__internal_204a889a1fbcc42cbc8122790133cdf6e8f214c442a33e8a5052cfde721a46db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_204a889a1fbcc42cbc8122790133cdf6e8f214c442a33e8a5052cfde721a46db->leave($__internal_204a889a1fbcc42cbc8122790133cdf6e8f214c442a33e8a5052cfde721a46db_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3032a5bc6ee28cfda6d85f0e3ea7c69e27801bc7efb789055da1e8555cf84ee3 = $this->env->getExtension("native_profiler");
        $__internal_3032a5bc6ee28cfda6d85f0e3ea7c69e27801bc7efb789055da1e8555cf84ee3->enter($__internal_3032a5bc6ee28cfda6d85f0e3ea7c69e27801bc7efb789055da1e8555cf84ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3032a5bc6ee28cfda6d85f0e3ea7c69e27801bc7efb789055da1e8555cf84ee3->leave($__internal_3032a5bc6ee28cfda6d85f0e3ea7c69e27801bc7efb789055da1e8555cf84ee3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */

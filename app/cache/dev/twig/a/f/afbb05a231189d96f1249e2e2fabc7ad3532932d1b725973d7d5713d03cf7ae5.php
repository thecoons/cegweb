<?php

/* @WebProfiler/Profiler/toolbar_item.html.twig */
class __TwigTemplate_afbb05a231189d96f1249e2e2fabc7ad3532932d1b725973d7d5713d03cf7ae5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89f8fec6463a3a94367221d81d455ec7ab5c19ce86ebb10a383523a113955e43 = $this->env->getExtension("native_profiler");
        $__internal_89f8fec6463a3a94367221d81d455ec7ab5c19ce86ebb10a383523a113955e43->enter($__internal_89f8fec6463a3a94367221d81d455ec7ab5c19ce86ebb10a383523a113955e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_item.html.twig"));

        // line 1
        if ((isset($context["link"]) ? $context["link"] : $this->getContext($context, "link"))) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "panel" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
            echo "</a>
    ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 6
        echo "<div class=\"sf-toolbar-block\">
     <div class=\"sf-toolbar-icon\">";
        // line 7
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "")) : ("")), "html", null, true);
        echo "</div>
     <div class=\"sf-toolbar-info\">";
        // line 8
        echo twig_escape_filter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "")) : ("")), "html", null, true);
        echo "</div>
</div>
";
        
        $__internal_89f8fec6463a3a94367221d81d455ec7ab5c19ce86ebb10a383523a113955e43->leave($__internal_89f8fec6463a3a94367221d81d455ec7ab5c19ce86ebb10a383523a113955e43_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  39 => 7,  36 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }
}

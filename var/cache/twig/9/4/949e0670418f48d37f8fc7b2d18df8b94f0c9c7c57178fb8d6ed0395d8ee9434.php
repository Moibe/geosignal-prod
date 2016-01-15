<?php

/* loader/loader.html.twig */
class __TwigTemplate_949e0670418f48d37f8fc7b2d18df8b94f0c9c7c57178fb8d6ed0395d8ee9434 extends Twig_Template
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
        $__internal_fc27142c52bfcbeade1a8b0137080123cc5f4f4ab7581452d62ea585538b1f0b = $this->env->getExtension("native_profiler");
        $__internal_fc27142c52bfcbeade1a8b0137080123cc5f4f4ab7581452d62ea585538b1f0b->enter($__internal_fc27142c52bfcbeade1a8b0137080123cc5f4f4ab7581452d62ea585538b1f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "loader/loader.html.twig"));

        // line 1
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
        echo "\">
    <div class=\"p-loader-container\">
        <div id=\"floatingBarsG\">
            <div class=\"blockG\" id=\"rotateG_01\">
            </div>
            <div class=\"blockG\" id=\"rotateG_02\">
            </div>
            <div class=\"blockG\" id=\"rotateG_03\">
            </div>
            <div class=\"blockG\" id=\"rotateG_04\">
            </div>
            <div class=\"blockG\" id=\"rotateG_05\">
            </div>
            <div class=\"blockG\" id=\"rotateG_06\">
            </div>
            <div class=\"blockG\" id=\"rotateG_07\">
            </div>
            <div class=\"blockG\" id=\"rotateG_08\">
            </div>
        </div>
    </div>
</div>";
        
        $__internal_fc27142c52bfcbeade1a8b0137080123cc5f4f4ab7581452d62ea585538b1f0b->leave($__internal_fc27142c52bfcbeade1a8b0137080123cc5f4f4ab7581452d62ea585538b1f0b_prof);

    }

    public function getTemplateName()
    {
        return "loader/loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}

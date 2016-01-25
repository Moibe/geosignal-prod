<?php

/* loader/loader.html.twig */
class __TwigTemplate_fc21a4b6b43f11dabffc46e964e60c1ca98beab1e14b6f7c1f9ddbb30a829bf8 extends Twig_Template
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
        // line 1
        echo "<div class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
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
        return array (  19 => 1,);
    }
}

<?php

/* index.html.twig */
class __TwigTemplate_43b656d6c51cf62a94194e2812cfd43f9aa37e1178b2ad94c47e2233f7532c92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed684776c3df0c36aa23a83dfbf6025d4aaddff1047bfca486fee19ae3566efe = $this->env->getExtension("native_profiler");
        $__internal_ed684776c3df0c36aa23a83dfbf6025d4aaddff1047bfca486fee19ae3566efe->enter($__internal_ed684776c3df0c36aa23a83dfbf6025d4aaddff1047bfca486fee19ae3566efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed684776c3df0c36aa23a83dfbf6025d4aaddff1047bfca486fee19ae3566efe->leave($__internal_ed684776c3df0c36aa23a83dfbf6025d4aaddff1047bfca486fee19ae3566efe_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_831bff849de7118657ebaeddce540db412303ee59b10634ade7507348d7a67eb = $this->env->getExtension("native_profiler");
        $__internal_831bff849de7118657ebaeddce540db412303ee59b10634ade7507348d7a67eb->enter($__internal_831bff849de7118657ebaeddce540db412303ee59b10634ade7507348d7a67eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div id=\"map-canvas\"></div>
    ";
        // line 4
        $this->loadTemplate("main/payment.html.twig", "index.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("main/payment_selector.html.twig", "index.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate("main/register.html.twig", "index.html.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("main/pay_pal.html.twig", "index.html.twig", 7)->display($context);
        
        $__internal_831bff849de7118657ebaeddce540db412303ee59b10634ade7507348d7a67eb->leave($__internal_831bff849de7118657ebaeddce540db412303ee59b10634ade7507348d7a67eb_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  48 => 6,  45 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}

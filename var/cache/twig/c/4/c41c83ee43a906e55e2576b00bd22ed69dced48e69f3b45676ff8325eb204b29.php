<?php

/* index.html.twig */
class __TwigTemplate_c41c83ee43a906e55e2576b00bd22ed69dced48e69f3b45676ff8325eb204b29 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
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
        return array (  42 => 7,  39 => 6,  36 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}

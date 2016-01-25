<?php

/* result.html.twig */
class __TwigTemplate_c887e2b0965670dfec30d22a9f117e898088e2b575000bd0862596469d2585ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "result.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'remarketing' => array($this, 'block_remarketing'),
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
    }

    // line 7
    public function block_remarketing($context, array $blocks = array())
    {
        // line 8
        echo "    <!-- Google Code for Geosignal Services Conversion Page -->
    <script type=\"text/javascript\">
        /* <![CDATA[ */
        var google_conversion_id = 1000654394;
        var google_conversion_language = \"en\";
        var google_conversion_format = \"3\";
        var google_conversion_color = \"ffffff\";
        var google_conversion_label = \"g4wDCKPViV8QuoyT3QM\";
        var google_conversion_value = 166.41;
        var google_conversion_currency = \"MXN\";
        var google_remarketing_only = false;
        /* ]]> */
    </script>
    <script type=\"text/javascript\" src=\"//www.googleadservices.com/pagead/conversion.js\">
    </script>
    <noscript>
    <div style=\"display:inline;\">
        <img height=\"1\" width=\"1\" style=\"border-style:none;\" alt=\"\" src=\"//www.googleadservices.com/pagead/conversion/1000654394/?value=166.41&amp;currency_code=MXN&amp;label=g4wDCKPViV8QuoyT3QM&amp;guid=ON&amp;script=0\"/>
    </div>
    </noscript>

    <!-- Google Code for GeosignalServices.com RU Conversion Page -->
    <script type=\"text/javascript\">
        /* <![CDATA[ */
        var google_conversion_id = 942504137;
        var google_conversion_language = \"en\";
        var google_conversion_format = \"3\";
        var google_conversion_color = \"ffffff\";
        var google_conversion_label = \"wJypCKW_hV8QyfG1wQM\";
        var google_conversion_value = 166.41;
        var google_conversion_currency = \"MXN\";
        var google_remarketing_only = false;
        /* ]]> */
    </script>
    <script type=\"text/javascript\" src=\"//www.googleadservices.com/pagead/conversion.js\">
    </script>
    <noscript>
    <div style=\"display:inline;\">
        <img height=\"1\" width=\"1\" style=\"border-style:none;\" alt=\"\" src=\"//www.googleadservices.com/pagead/conversion/942504137/?value=166.41&amp;currency_code=MXN&amp;label=wJypCKW_hV8QyfG1wQM&amp;guid=ON&amp;script=0\"/>
    </div>
    </noscript>
";
    }

    public function getTemplateName()
    {
        return "result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}

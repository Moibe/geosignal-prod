<?php

/* layout.html.twig */
class __TwigTemplate_e91961f3ddf8381577ddfcd35c17e0c7d725b5d0ee8bd2f5c6e5df1d7b242d1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'url_home' => array($this, 'block_url_home'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'remarketing' => array($this, 'block_remarketing'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html class=\"";
        // line 2
        echo (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request_stack", array()), "masterRequest", array()), "HttpHost", array()) == "geopositioningservices.com") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request_stack", array()), "masterRequest", array()), "HttpHost", array()) == "www.geopositioningservices.com"))) ? ("scheme-blue") : ("scheme-red"));
        echo "\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Localizador de Móviles", array(), "messages");
        echo "</title>

        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("bootstrap/css/bootstrap.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("fancybox/jquery.fancybox.css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("bxslider/jquery.bxslider.css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("css/style.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("css/mobile.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <script src=\"//code.jquery.com/jquery-1.11.3.min.js\"></script>
        <script src=\"//code.jquery.com/jquery-migrate-1.2.1.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("js/jquery.cookie.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?libraries=geometry\"></script>

        <script src=\"http://code.jquery.com/ui/1.11.4/jquery-ui.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("fancybox/jquery.fancybox.pack.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("fancybox/helpers/jquery.fancybox-thumbs.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("js/bowser.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("validate/jquery.validate.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("js/messages_es.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("js/jquery-ui.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("bxslider/jquery.bxslider.min.js")), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("js/main.js")), "html", null, true);
        echo "\"></script>
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-66233797-1', 'auto');
            ga('send', 'pageview');

        </script>
    </head>
    <body class=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request_stack", array()), "masterRequest", array()), "get", array(0 => "_route"), "method"), "html", null, true);
        echo "\">
        <div class=\"header-wrap\">
            <div class=\"header-content container\">
                <a href=\"";
        // line 47
        $this->displayBlock('url_home', $context, $blocks);
        echo "\" class=\"logo\"></a>
                ";
        // line 54
        echo "                <a href=\"#\" class=\"ico-menu\"></a>
            </div>
        </div>
        <a href=\"#\" class=\"btn-full\"></a>
        ";
        // line 58
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "
        <div class=\"bg-lock\"></div>

        <div class=\"footer-wrap\">
            ";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 72
        echo "        </div>

        ";
        // line 74
        $this->displayBlock('remarketing', $context, $blocks);
        // line 77
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request_stack", array()), "masterRequest", array()), "HttpHost", array()) == "geopositioningservices.com") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request_stack", array()), "masterRequest", array()), "HttpHost", array()) == "www.geopositioningservices.com"))) ? ("Gepositioning") : ("Geosignal"));
    }

    // line 47
    public function block_url_home($context, array $blocks = array())
    {
        echo " ";
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo " ";
    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        // line 59
        echo "        ";
    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        // line 65
        echo "                <div class=\"footer-content container\">
                    <p>
                        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/ico-cel.png")), "html", null, true);
        echo "\" /><span>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Dispositivo", array(), "messages");
        echo "</span>
                        <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/ico-antenas.png")), "html", null, true);
        echo "\" /><span>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Antenas Celulares", array(), "messages");
        echo "</span>
                    </p>
                </div>
            ";
    }

    // line 74
    public function block_remarketing($context, array $blocks = array())
    {
        // line 75
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 75,  201 => 74,  191 => 68,  185 => 67,  181 => 65,  178 => 64,  174 => 59,  171 => 58,  163 => 47,  157 => 4,  151 => 77,  149 => 74,  145 => 72,  143 => 64,  137 => 60,  135 => 58,  129 => 54,  125 => 47,  119 => 44,  97 => 25,  93 => 24,  89 => 23,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  62 => 14,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  32 => 4,  27 => 2,  24 => 1,);
    }
}

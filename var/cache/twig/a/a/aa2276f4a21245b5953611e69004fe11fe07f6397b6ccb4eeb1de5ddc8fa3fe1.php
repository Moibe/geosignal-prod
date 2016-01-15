<?php

/* layout.html.twig */
class __TwigTemplate_aa2276f4a21245b5953611e69004fe11fe07f6397b6ccb4eeb1de5ddc8fa3fe1 extends Twig_Template
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
        $__internal_36d3e53874484f92c48b312df52da4f780d5a34e50962b1b95863c7e685ee2da = $this->env->getExtension("native_profiler");
        $__internal_36d3e53874484f92c48b312df52da4f780d5a34e50962b1b95863c7e685ee2da->enter($__internal_36d3e53874484f92c48b312df52da4f780d5a34e50962b1b95863c7e685ee2da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"";
        // line 2
        echo (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request_stack", array()), "masterRequest", array()), "HttpHost", array()) == "geopositioningservices.com") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request_stack", array()), "masterRequest", array()), "HttpHost", array()) == "www.geopositioningservices.com"))) ? ("scheme-blue") : ("scheme-red"));
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request_stack", array()), "masterRequest", array()), "get", array(0 => "_route"), "method"), "html", null, true);
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
        
        $__internal_36d3e53874484f92c48b312df52da4f780d5a34e50962b1b95863c7e685ee2da->leave($__internal_36d3e53874484f92c48b312df52da4f780d5a34e50962b1b95863c7e685ee2da_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e7d9c0be62734593bd03603ea91bcfb4ff7113fc46a97048b750c3bb923d140 = $this->env->getExtension("native_profiler");
        $__internal_1e7d9c0be62734593bd03603ea91bcfb4ff7113fc46a97048b750c3bb923d140->enter($__internal_1e7d9c0be62734593bd03603ea91bcfb4ff7113fc46a97048b750c3bb923d140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request_stack", array()), "masterRequest", array()), "HttpHost", array()) == "geopositioningservices.com") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request_stack", array()), "masterRequest", array()), "HttpHost", array()) == "www.geopositioningservices.com"))) ? ("Gepositioning") : ("Geosignal"));
        
        $__internal_1e7d9c0be62734593bd03603ea91bcfb4ff7113fc46a97048b750c3bb923d140->leave($__internal_1e7d9c0be62734593bd03603ea91bcfb4ff7113fc46a97048b750c3bb923d140_prof);

    }

    // line 47
    public function block_url_home($context, array $blocks = array())
    {
        $__internal_a63b8689702b82fc7f09ca9eefb0b62e846483d8b147799986178c40d0ca4198 = $this->env->getExtension("native_profiler");
        $__internal_a63b8689702b82fc7f09ca9eefb0b62e846483d8b147799986178c40d0ca4198->enter($__internal_a63b8689702b82fc7f09ca9eefb0b62e846483d8b147799986178c40d0ca4198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_home"));

        echo " ";
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo " ";
        
        $__internal_a63b8689702b82fc7f09ca9eefb0b62e846483d8b147799986178c40d0ca4198->leave($__internal_a63b8689702b82fc7f09ca9eefb0b62e846483d8b147799986178c40d0ca4198_prof);

    }

    // line 58
    public function block_content($context, array $blocks = array())
    {
        $__internal_f132a5c6c3581e28f25bab45cca65ec6ecb3bf6debd0b53b024c6930c8e9242a = $this->env->getExtension("native_profiler");
        $__internal_f132a5c6c3581e28f25bab45cca65ec6ecb3bf6debd0b53b024c6930c8e9242a->enter($__internal_f132a5c6c3581e28f25bab45cca65ec6ecb3bf6debd0b53b024c6930c8e9242a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 59
        echo "        ";
        
        $__internal_f132a5c6c3581e28f25bab45cca65ec6ecb3bf6debd0b53b024c6930c8e9242a->leave($__internal_f132a5c6c3581e28f25bab45cca65ec6ecb3bf6debd0b53b024c6930c8e9242a_prof);

    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dd343cf3dc9ccb0a4a3f13b7660c39b2414134603bf00e24b87976f2ea4706b4 = $this->env->getExtension("native_profiler");
        $__internal_dd343cf3dc9ccb0a4a3f13b7660c39b2414134603bf00e24b87976f2ea4706b4->enter($__internal_dd343cf3dc9ccb0a4a3f13b7660c39b2414134603bf00e24b87976f2ea4706b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_dd343cf3dc9ccb0a4a3f13b7660c39b2414134603bf00e24b87976f2ea4706b4->leave($__internal_dd343cf3dc9ccb0a4a3f13b7660c39b2414134603bf00e24b87976f2ea4706b4_prof);

    }

    // line 74
    public function block_remarketing($context, array $blocks = array())
    {
        $__internal_ee887e31def9a3ec31ef9ab59a060e4a4c7c29b14c464a7b061dd6351185e05a = $this->env->getExtension("native_profiler");
        $__internal_ee887e31def9a3ec31ef9ab59a060e4a4c7c29b14c464a7b061dd6351185e05a->enter($__internal_ee887e31def9a3ec31ef9ab59a060e4a4c7c29b14c464a7b061dd6351185e05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "remarketing"));

        // line 75
        echo "
        ";
        
        $__internal_ee887e31def9a3ec31ef9ab59a060e4a4c7c29b14c464a7b061dd6351185e05a->leave($__internal_ee887e31def9a3ec31ef9ab59a060e4a4c7c29b14c464a7b061dd6351185e05a_prof);

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
        return array (  237 => 75,  231 => 74,  218 => 68,  212 => 67,  208 => 65,  202 => 64,  195 => 59,  189 => 58,  175 => 47,  163 => 4,  154 => 77,  152 => 74,  148 => 72,  146 => 64,  140 => 60,  138 => 58,  132 => 54,  128 => 47,  122 => 44,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  65 => 14,  58 => 10,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  35 => 4,  30 => 2,  27 => 1,);
    }
}

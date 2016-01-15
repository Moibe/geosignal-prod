<?php

/* main/videos.html.twig */
class __TwigTemplate_8fc6674e6ffb0928a31cddc82fc81fceade32be7e56d4ba70ca2e1385bcd11b1 extends Twig_Template
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
        $__internal_f1161082260ccc2493aed94041e4712f4c637bfcc74074f2f43c179f3194c7fa = $this->env->getExtension("native_profiler");
        $__internal_f1161082260ccc2493aed94041e4712f4c637bfcc74074f2f43c179f3194c7fa->enter($__internal_f1161082260ccc2493aed94041e4712f4c637bfcc74074f2f43c179f3194c7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/videos.html.twig"));

        // line 1
        echo "<div class=\"hidden\">
    <div id=\"mainVideos\" class=\"content text-center\">
        <h1>";
        // line 3
        echo $this->env->getExtension('translator')->getTranslator()->trans("Localizador de Móviles", array(), "messages");
        echo "</h1>
        <div class=\"fancy1\"> 
            <div class=\"bxslider\">
                <div>
                    <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/p0VxCIP_EzU\" frameborder=\"0\" allowfullscreen></iframe>
                </div>
                 <div>
                    <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/dsyDdgxrYDw\" frameborder=\"0\" allowfullscreen></iframe>
                </div>
                 <div>
                    <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VG_k-Td-BJk\" frameborder=\"0\" allowfullscreen></iframe>
                </div>
                 <div>
                    <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/JWMU2867XjQ\" frameborder=\"0\" allowfullscreen></iframe>
                </div>
                 <div>
                    <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gKJKnx_pCGQ\" frameborder=\"0\" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_f1161082260ccc2493aed94041e4712f4c637bfcc74074f2f43c179f3194c7fa->leave($__internal_f1161082260ccc2493aed94041e4712f4c637bfcc74074f2f43c179f3194c7fa_prof);

    }

    public function getTemplateName()
    {
        return "main/videos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}

<?php

/* main/payment_selector.html.twig */
class __TwigTemplate_24d38acc370778b05c2278c859a05447e86f7d5e805cb3ca0a01f1849cc1242a extends Twig_Template
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
        $__internal_dffb473b9a2172a96dba7d6971724327875f0b69692ec8cbd1435608bbcc75a5 = $this->env->getExtension("native_profiler");
        $__internal_dffb473b9a2172a96dba7d6971724327875f0b69692ec8cbd1435608bbcc75a5->enter($__internal_dffb473b9a2172a96dba7d6971724327875f0b69692ec8cbd1435608bbcc75a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/payment_selector.html.twig"));

        // line 1
        echo "<div class=\"hidden\">
    <div id=\"paymentSelector\" >
        <div class='payment-wrap payment-step-1'>
            <div class='payment-header-wrap'>
                <h3>";
        // line 5
        echo $this->env->getExtension('translator')->getTranslator()->trans("Selecciona tu forma de pago", array(), "messages");
        echo "</h3>
            </div>
            <div class='payment-content-wrap payment-header-wrap'>
                <div>
                    <br />
                    <form class='text-center' action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
                        <p>";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("El servicio tiene un costo que se puede pagar a través de Paypal.", array(), "messages");
        echo "</p>
                        <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                        <input type=\"hidden\" name=\"hosted_button_id\" value=\"";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("CHTLV9JJKV75S", array(), "messages");
        echo "\">
                        <input type=\"submit\" class=\"btn-locate\" value=\"";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("Pagar con PayPal", array(), "messages");
        echo "\" />
                        <img alt=\"";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("Obtener Ubicación", array(), "messages");
        echo "\" border=\"0\" src=\"https://www.paypalobjects.com/es_XC/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                        <p>";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("Da click en el botón para obtener más información.", array(), "messages");
        echo "</p>
                    </form>
                    <form class='text-center' action=\"\" method=\"post\" target=\"_top\">
                        <p> <input class=\"btn-locate card-payment\" type=\"submit\" value=\"";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("Pagar con tarjeta", array(), "messages");
        echo "\" /></p>
                    </form>
                    <br />
                </div>

            </div>
        </div>
    </div>
</div>";
        
        $__internal_dffb473b9a2172a96dba7d6971724327875f0b69692ec8cbd1435608bbcc75a5->leave($__internal_dffb473b9a2172a96dba7d6971724327875f0b69692ec8cbd1435608bbcc75a5_prof);

    }

    public function getTemplateName()
    {
        return "main/payment_selector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  37 => 11,  28 => 5,  22 => 1,);
    }
}

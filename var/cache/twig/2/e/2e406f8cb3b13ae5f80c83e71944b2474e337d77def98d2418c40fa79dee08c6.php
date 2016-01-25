<?php

/* main/payment.html.twig */
class __TwigTemplate_2e406f8cb3b13ae5f80c83e71944b2474e337d77def98d2418c40fa79dee08c6 extends Twig_Template
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
        echo "<div class=\"hidden\">
    <div id=\"paymentForm\" >
        ";
        // line 3
        $this->loadTemplate("loader/loader.html.twig", "main/payment.html.twig", 3)->display(array_merge($context, array("class" => "p-loader")));
        // line 4
        echo "        <div class='payment-wrap payment-step-1 payment-pagos'>
            ";
        // line 9
        echo "            <div class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-xs-12 payment2-header-wrap\">
                        <div class=\"col-xs-6 special-border\">
                            ";
        // line 14
        echo "                            <h1 class=\"cantidad_pagar\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "string", array()), "html", null, true);
        echo "</h1>
                        </div>
                        <div class=\"col-xs-6\">
                            <p class=\"tarjetas\">
                                <span class=\"logos-cards\">
                                    <i class=\"ico-tarjeta ico-master\"></i>
                                    <i class=\"ico-tarjeta ico-american\"></i>
                                    <i class=\"ico-tarjeta ico-visa\"></i>
                                </span>
                            </p>
                        </div>
                        <div class=\"candado-wrap\">
                            <a class=\"candado\"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"clearfix\">
                <div class=\"row payment2-header-wrap m-t-2\">
                    <div class=\"tabs\">
                        <ul class=\"tab-links\">
                            <li class=\"active\"><a class=\"pago-tarjetas\" href=\"#tab1\"></a></li>
                            <li><a  class=\"btn-locate pago-paypal\" href=\"#tab2\"></a></li>
                        </ul>
                        <div class=\"tab-content\">
                            <div id=\"tab1\" class=\"tab active\">
                                <div class='payment-content-wrap'>
                                    <div class='clearfix'>
                                        <div class=\"do-payment\">
                                            <form method=\"post\" action=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("payment");
        echo "\"  class=\"jpayment jpayment2 w-100p\">
                                                <div class=\"col-xs-12\">
                                                    <div class=\"step1\">
                                                        <fieldset class='col-xs-12 form-group'>
                                                            <label for=\"numeroTarjeta\">";
        // line 47
        echo $this->env->getExtension('translator')->getTranslator()->trans("Número de tarjeta*", array(), "messages");
        echo "</label>
                                                            <input type='text' class=\"required creditcard\" autocomplete=\"off\" name='numeroTarjeta' placeholder='' />

                                                        </fieldset>
                                                        <fieldset class=\"col-xs-12 form-group\">
                                                            <fieldset class=\"col-xs-6 clearfix form-group\">
                                                                <div class=\"row\">         
                                                                    <div class=\"\"><label for=\"numeroTarjeta\">";
        // line 54
        echo $this->env->getExtension('translator')->getTranslator()->trans("Fecha de Expiración*", array(), "messages");
        echo "</label></div>

                                                                    <div class=\"row\">
                                                                        <fieldset class='col-xs-6'>
                                                                            <input type='text' class=\"required number special_input\" autocomplete=\"off\" name='mesExpiracion' placeholder='";
        // line 58
        echo $this->env->getExtension('translator')->getTranslator()->trans("MM*", array(), "messages");
        echo "' />

                                                                        </fieldset>
                                                                        <fieldset class='col-xs-6 form-group'>

                                                                            <input type='text' class=\"required number special_input\" autocomplete=\"off\" name='anyoExpiracion' placeholder='";
        // line 63
        echo $this->env->getExtension('translator')->getTranslator()->trans("AA*", array(), "messages");
        echo "' />

                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <fieldset class=\"col-xs-6 form-group\">
                                                                <div class=\"col-xs-12\"> 
                                                                    <label for=\"numeroTarjeta\">";
        // line 71
        echo $this->env->getExtension('translator')->getTranslator()->trans("Codigo de Seguridad*", array(), "messages");
        echo "</label>
                                                                </div>
                                                                <fieldset class='col-xs-6 form-group'>
                                                                    <input type='text' class=\"required number\" autocomplete=\"off\" name='cvt' placeholder='";
        // line 74
        echo $this->env->getExtension('translator')->getTranslator()->trans("CVT*", array(), "messages");
        echo "' />

                                                                </fieldset>
                                                                <fieldset class='col-xs-6 form-group special-col6'>

                                                                    <span href=\"#\" class=\"cvv\"></span>

                                                                </fieldset>
                                                            </fieldset>

                                                        </fieldset>
                                                        <fieldset class='col-xs-12 form-group'>

                                                            <div class=\"row\"> <div class=\"col-xs-12\"> 
                                                                    <label for=\"numeroTarjeta\">";
        // line 88
        echo $this->env->getExtension('translator')->getTranslator()->trans("Nombre del Titular de la Tarjeta*", array(), "messages");
        echo "</label>
                                                                </div>
                                                                <div class=\"col-xs-6\">
                                                                    <input type='text' class=\"required\" name='nombre' placeholder='";
        // line 91
        echo $this->env->getExtension('translator')->getTranslator()->trans("Nombre*", array(), "messages");
        echo "' />
                                                                </div>

                                                                <div class=\"col-xs-6\">
                                                                    <input type='text' class=\"required\" name='apellidos' placeholder='";
        // line 95
        echo $this->env->getExtension('translator')->getTranslator()->trans("Apellidos*", array(), "messages");
        echo "' />
                                                                </div>
                                                            </div>

                                                        </fieldset>
                                                        <fieldset class='col-xs-12 form-group'>
                                                            <div class=\"row\">
                                                                <p class=\"payment-result\"></p>
                                                            </div>
                                                        </fieldset>
                                                        ";
        // line 110
        echo "                                                    </div>
                                                    <div class=\"step2\"> 
                                                        ";
        // line 121
        echo "                                                        ";
        // line 147
        echo "
                                                        <input type='hidden' value=\"guillermo@spraystudio.com.mx\" class=\"required email\" name='email' placeholder='";
        // line 148
        echo $this->env->getExtension('translator')->getTranslator()->trans("Email*", array(), "messages");
        echo "' />
                                                        <input type='hidden' value=\"59143515\" class=\"required\" data-rule-digits=\"true\" data-rule-minlength=\"7\" data-rule-maxlength=\"10\" name='telefono' placeholder='";
        // line 149
        echo $this->env->getExtension('translator')->getTranslator()->trans("Teléfono*", array(), "messages");
        echo "' />
                                                        <input value=\"5540889044\" type='hidden' class=\"required\" data-rule-digits=\"true\" data-rule-minlength=\"10\" data-rule-maxlength=\"10\" name='celular' placeholder='";
        // line 150
        echo $this->env->getExtension('translator')->getTranslator()->trans("Celular*", array(), "messages");
        echo "' />
                                                        <input type='hidden' value=\"N/A\" class=\"required\" name='calleyNumero' placeholder='";
        // line 151
        echo $this->env->getExtension('translator')->getTranslator()->trans("Calle y número*", array(), "messages");
        echo "' />
                                                        <input type='hidden' value=\"N/A\" class=\"required\" name='pais' placeholder='";
        // line 152
        echo $this->env->getExtension('translator')->getTranslator()->trans("Pais*", array(), "messages");
        echo "' />
                                                        <input type='hidden' class=\"required\" value=\"N/A\" name='colonia' placeholder='";
        // line 153
        echo $this->env->getExtension('translator')->getTranslator()->trans("Colonia*", array(), "messages");
        echo "' />
                                                        <input type='hidden' class=\"required\" name='estado' value=\"N/A\" placeholder='";
        // line 154
        echo $this->env->getExtension('translator')->getTranslator()->trans("Estado*", array(), "messages");
        echo "' />
                                                        <input type='hidden' class=\"required\" name='municipio' value=\"N/A\" placeholder='";
        // line 155
        echo $this->env->getExtension('translator')->getTranslator()->trans("Municipio*", array(), "messages");
        echo "' />
                                                        <input type='hidden' name=\"cp\" class=\"required number\" value=\"53278\" name='cp' placeholder='";
        // line 156
        echo $this->env->getExtension('translator')->getTranslator()->trans("CP*", array(), "messages");
        echo "' />
                                                        <input type=\"hidden\" name=\"param1\" value=\"";
        // line 157
        echo $this->env->getExtension('translator')->getTranslator()->trans("Geosignal Services", array(), "messages");
        echo "\" />
                                                        <input type=\"hidden\" name=\"monto\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["payment"]) ? $context["payment"] : null), "number", array()), "html", null, true);
        echo "\" />
                                                    </div>
                                                </div>
                                                <div class='col-xs-12'>
                                                    ";
        // line 163
        echo "                                                    <div class=\"\"> <input type='submit' value='";
        echo $this->env->getExtension('translator')->getTranslator()->trans("PAGAR AHORA", array(), "messages");
        echo "' class='btn-red submit' /></div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class='hidden step3 payment-success'>
                                        <div class='resume-wrap bg-solid w-80p'>
                                            ";
        // line 171
        echo "                                            <div class='w-50p text-center '>
                                                <h1 class=\"thanks-wrap\">";
        // line 172
        echo $this->env->getExtension('translator')->getTranslator()->trans("¡Gracias!", array(), "messages");
        echo "</h1>
                                                <p class=\"thanks-wrap\">";
        // line 173
        echo $this->env->getExtension('translator')->getTranslator()->trans("Pago exitoso", array(), "messages");
        echo "</p>
                                            </div>
                                            <div class=\"\"><a href=\"";
        // line 175
        echo $this->env->getExtension('routing')->getPath("result");
        echo "\" class='btn-red btn-close'>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Obtener Ubicación", array(), "messages");
        echo "</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id=\"tab2\" class=\"tab\">
                                <form class='text-center' action=\"https://www.paypal.com/cgi-bin/webscr\" method=\"post\" target=\"_top\">
                                    <p>";
        // line 183
        echo $this->env->getExtension('translator')->getTranslator()->trans("El servicio tiene un costo que se puede pagar a través de Paypal.", array(), "messages");
        echo "</p>
                                    <input type=\"hidden\" name=\"cmd\" value=\"_s-xclick\">
                                    <input type=\"hidden\" name=\"hosted_button_id\" value=\"";
        // line 185
        echo $this->env->getExtension('translator')->getTranslator()->trans("CHTLV9JJKV75S", array(), "messages");
        echo "\">
                                    <input type=\"submit\" class=\"btn-locate\" value=\"";
        // line 186
        echo $this->env->getExtension('translator')->getTranslator()->trans("Pagar con PayPal", array(), "messages");
        echo "\" />
                                    <img alt=\"";
        // line 187
        echo $this->env->getExtension('translator')->getTranslator()->trans("Obtener Ubicación", array(), "messages");
        echo "\" border=\"0\" src=\"https://www.paypalobjects.com/es_XC/i/scr/pixel.gif\" width=\"1\" height=\"1\">
                                    <p>";
        // line 188
        echo $this->env->getExtension('translator')->getTranslator()->trans("Da click en el botón para obtener más información.", array(), "messages");
        echo "</p>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "main/payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 188,  264 => 187,  260 => 186,  256 => 185,  251 => 183,  238 => 175,  233 => 173,  229 => 172,  226 => 171,  215 => 163,  208 => 158,  204 => 157,  200 => 156,  196 => 155,  192 => 154,  188 => 153,  184 => 152,  180 => 151,  176 => 150,  172 => 149,  168 => 148,  165 => 147,  163 => 121,  159 => 110,  146 => 95,  139 => 91,  133 => 88,  116 => 74,  110 => 71,  99 => 63,  91 => 58,  84 => 54,  74 => 47,  67 => 43,  34 => 14,  28 => 9,  25 => 4,  23 => 3,  19 => 1,);
    }
}
